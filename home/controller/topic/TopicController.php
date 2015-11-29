<?php
/**
 *	TopicController
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-11-28 22:55
 ************************************************************************
 *	update time			editor				updated information
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
        $this->view = View::build('topic/topicView');
    }

    public function post(){
        $this->view = View::build('topic/addTopic');
    }
}