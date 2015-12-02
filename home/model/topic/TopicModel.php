<?php
/**
 *	TopicModel
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-10-28 22:36
 ************************************************************************
 *	update time			editor				updated information
 *  30-11-2015          Xiaoming Yang       add addTopic function
 */

class TopicModel {

    public function listTopics($pageNum,$pagination){

        $sql = "select count(1) as total from t_s_topic";
        $pagination->setValues(DB::select($sql,[])[0]['total']);

        $sql = "select a.topicNo,a.sectionName as section, a.topicTitle as title,a.userNickname as author,a.postTime as posttime,"
                ." b.userNickname as lastreply,b.replyTime as lasttime, ifnull(b.times,0) as replytimes"
                ." from t_s_topic a left join "
                ." (select topicNo,userNickname, max(replyTime) as replyTime,count(id) times from t_s_reply group by topicNo) b "
                ." on b.topicNo=a.topicNo"
                ." order by a.postTime desc, b.replyTime desc"
                ." limit ".(($pageNum-1)*$pagination->rowNum).",".$pagination->rowNum;

        return DB::select($sql,[]);
    }

    /**
     *	add a new topic
     *  @param   string $content    the content information of the topic
     *  @param   string $userAttr   the associative array of user
     */
    public function addTopic($topicTitle, $content, $section, $userArr){
        $sql = "CALL P_ADD_TOPIC(?,?,?,?,@p_result)";
        $paramAttr = [];
        $paramAttr[] = $userArr["userId"];
        $paramAttr[] = $topicTitle;
        $paramAttr[] = $content;
        $paramAttr[] = $section;
        $resultAttr = DB::callProcedure($sql,$paramAttr);
        if($resultAttr['@p_result']==1){
            return 1;
        }
        return 0;
    }

    public function queryTopic($topicNo){
        $sql = "select a.topicNo, a.postTime, a.topicTitle, a.topicContent"
                ." from t_s_topic a"
                ." where topicNo = ?";
        $topicArr = DB::select($sql,[$topicNo]);
        $sql = "select replyNumber,topicNo,userId,userNickname,replyContent,replyTime"
            ." from t_s_reply"
            ." where topicNo = ?";
        $replyArr = DB::select($sql,[$topicNo]);
        return [$topicArr,$replyArr];

    }

    public function addReply($content, $topicNo, $useArr){
        $sql = "CALL P_ADD_REPLY(?,?,?,?,@p_result)";
        $paramArr = [$useArr['userId'],$useArr['userNickname'],$topicNo,$content];

        return DB::callProcedure($sql,$paramArr)['@p_result'];
    }

}