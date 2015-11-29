<?php
/**
 *	LoginController
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-10-28 22:55
 ************************************************************************
 *	update time			editor				updated information
 *  28-11-2015          Xiaoming Yang       update the login method, redirect request to TopicController
 */

class LoginController extends Controller{

        private $loginModel;

        public function __construct(){
            $this->loginModel = ModelFactory::build('login');
        }

		function login(){
            $userName = $_REQUEST['username'];
            $userPwd = $_REQUEST['userpwd'];
            $result = $this->loginModel->login($userName,$userPwd);
            if($result == 'success'){
                parent::redirect("topic/listTopics");
            }else{
                $this->view = View::build('failure');
            }

		}
		function index(){
            $this->view = View::build('admin/LoginView');
		}
	}