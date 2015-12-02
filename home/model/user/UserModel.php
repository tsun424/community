<?php
/**
 *	UserModel
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-12-01 21:47
 ************************************************************************
 *	update time			editor				updated information
 */

class UserModel {

    public function myTopics($pageNum, $userId, $pagination){

        $sql = "select count(1) as total from t_s_topic where userId = ?";

        $pagination->setValues(DB::select($sql,[$userId])[0]['total']);

        $sql = "select a.topicNo,a.sectionName as section, a.topicTitle as title,a.userNickname as author,a.postTime as posttime,"
            ." b.userNickname as lastreply,b.replyTime as lasttime, ifnull(b.times,0) as replytimes"
            ." from t_s_topic a left join "
            ." (select topicNo,userNickname, max(replyTime) as replyTime,count(id) times from t_s_reply group by topicNo) b "
            ." on b.topicNo=a.topicNo"
            ." where a.userId = ?"
            ." order by a.postTime desc, b.replyTime desc"
            ." limit ".(($pageNum-1)*$pagination->rowNum).",".$pagination->rowNum;

        $paramArr = [$userId];
        return DB::select($sql,$paramArr);
    }

    public function modify($topicNo){
        $sql = "select * from t_s_topic where topicNo = ?";
        $paramArr = [$topicNo];
        return DB::select($sql,$paramArr);
    }

    public function modifyTopic($topicNo, $topicTitle, $topicContent, $section){
        $sql = "select sectionName from t_pub_section where sectionNo = ?";
        $paramArr = [$section];
        $sectionName = DB::select($sql,$paramArr)[0]['sectionName'];

        $sql = "update t_s_topic set topicTitle = ?, topicContent = ?, sectionName = ? "
                ." where topicNo = ?";
        $paramArr = [$topicTitle,$topicContent,$sectionName,$topicNo];
        return DB::change($sql, $paramArr);
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

    public function delete($topicNo){
        $sql = "delete from t_s_topic where topicNo = ?";
        return DB::change($sql,[$topicNo]);
    }
}