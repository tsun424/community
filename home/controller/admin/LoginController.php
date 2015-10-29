<?php

	class LoginController extends Controller{

        private $loginModel;

        public function __construct(){
            $this->loginModel = ModelFactory::build('login');
        }

		function login(){
            $topicModel = ModelFactory::build('topic'); ;
            $userName = $_REQUEST['username'];
            $userPwd = $_REQUEST['userpwd'];
            $result = $this->loginModel->login($userName,$userPwd);
            if($result == 'success'){
                $topicAttr = $topicModel->listTopics();
                $_REQUEST['topicAttr'] = $topicAttr;
                $this->view = View::build('topic/topicView');
            }else{
                $this->view = View::build('failure');
            }

		}
		function index(){
            $this->view = View::build('admin/LoginView');
		}
	}