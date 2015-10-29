<?php
/**
 *	TopicModel
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-10-28 22:36
 ************************************************************************
 *	update time			editor				updated information
 */

class TopicModel {

    public function listTopics(){
        $sql = "select a.topicNo,a.topicTitle as title,a.userNickname as author,a.postTime as posttime,"
                ." b.userNickname as lastreply,b.replyTime as lasttime,c.times as replytimes"
                ." from t_s_topic a left join t_s_reply b on a.topicNo=b.topicNo"
                ." left join (select topicNo, max(replyTime) as replyTime,count(id) times from t_s_reply group by topicNo) c "
                ." on b.topicNo=c.topicNo and b.replyTime=c.replyTime"
                ." order by b.replyTime desc";

        return DB::select($sql,[]);
    }
}