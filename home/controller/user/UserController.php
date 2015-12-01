<?php
/**
 *	UserController
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-12-01 21:44
 ************************************************************************
 *	update time			editor				updated information
 */
	class UserController extends Controller{
        private $userModel;

        public function __construct(){
            $this->userModel = ModelFactory::build('user');
        }
		public function myTopics(){
            $pageNum = !empty($_REQUEST["page"]) ? $_REQUEST["page"] : 1;
			$userArr = $_SESSION['user'];
            $pagination = new Pagination();
            $myTopicsArr = $this->userModel->myTopics($pageNum,$userArr['userId'],$pagination);
            $_REQUEST['pagination'] = $pagination;
            $_REQUEST['myTopicsArr'] = $myTopicsArr;
			$this->view = View::build("user/MyTopicsView");
		}
        public function modify(){
            $topicNo = _get("topicNo");
            $topicArr = $this->userModel->modify($topicNo);
            if(count($topicArr)>0){
                $_REQUEST['topicArr'] = $topicArr[0];
                $this->view = View::build("user/ModifyTopicView");
            }else{
                $this->view = View::build("failure");
            }
        }

        public function modifyTopic(){
            $topicNo = _get("topicNo");
            $topicContent = _get("content");
            $topicTitle = _get("topicTitle");
            $section = _get("section");
            $result = $this->userModel->modifyTopic($topicNo, $topicTitle, $topicContent, $section);
            if($result){
                $this->queryTopic();
            }else{
                $this->view = View::build("failure");
            }
        }

        public function queryTopic(){
            $topicNo = _get("topicNo");
            $topicArr = $this->userModel->queryTopic($topicNo);
            if(count($topicArr) > 0){
                $_REQUEST['mainTopic'] = $topicArr[0];
                $_REQUEST['replyArr'] = $topicArr[1];
                $this->view = View::build("user/UserTopicView");
            }else{
                $this->view = View::build('failure');
            }
        }

        public function delete(){
            $topicNo = _get("topicNo");
            $result = $this->userModel->delete($topicNo);
            if($result){
                parent::redirect("myTopics");
            }else{
                $this->view = View::build('failure');
            }
        }
	}
?>