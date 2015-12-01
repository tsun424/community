<?php
/**
 *	TopicController
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-11-28 22:55
 ************************************************************************
 *	update time			editor				updated information
 *  30-11-2015          Xiaoming Yang       add addTopic function
 *  01-12-2015          Xiaoming Yang       add queryTopic function, addReply functioin
 */

class TopicController extends Controller {

    private $topicModel;

    public function __construct(){
        $this->topicModel = ModelFactory::build('topic');
    }

    public function listTopics(){
        $pageNum = !empty($_REQUEST["page"]) ? $_REQUEST["page"] : 1;
        $pagination = new Pagination();
        $topicAttr = $this->topicModel->listTopics($pageNum,$pagination);
        $_REQUEST['topicAttr'] = $topicAttr;
        $_REQUEST['pagination'] = $pagination;
        $this->view = View::build('topic/TopicsView');
    }

    public function post(){
        $this->view = View::build('topic/AddTopicView');
    }

    /**
     *	add a new topic
     *
     */
    public function addTopic(){
        $content = _get("content");
        $topicTitle = _get("topic_title");
        $section = _get("section");
        $useAttr = $_SESSION["user"];
        $result = $this->topicModel->addTopic($topicTitle, $content, $section, $useAttr);
        if($result == 1){
            parent::redirect("listTopics");
        }else{
            $this->view = View::build("failure");
        }
    }
    /**
     *	query one topic
     *
     */
    public function queryTopic(){
        $topicNo = _get("topicNo");
        $topicArr = $this->topicModel->queryTopic($topicNo);
        if(count($topicArr) > 0){
            $_REQUEST['mainTopic'] = $topicArr[0];
            $_REQUEST['replyArr'] = $topicArr[1];
            $this->view = View::build("topic/OneTopicView");
        }else{
            $this->view = View::build('failure');
        }
    }

    public function addReply(){
        $content = _get("content");
        $topicNo = _get("topicNo");
        $useArr = $_SESSION["user"][0];
        $result = $this->topicModel->addReply($content, $topicNo, $useArr);

        if($result == 1){
            parent::redirect("queryTopic?topicNo=".$topicNo);
        }else{
            $this->view = View::build("failure");
        }
    }
}