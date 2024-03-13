<?php 
	require_once "model/model.php";
	require_once "view/view.php";
	class Controller{
		var $model, $view;
		function __construct()
		{
			$this->model = new Model();
			$this->view = new View();
		}
		public function getPageHome(){
			$this->view->getPageHome();
		}
		public function getPageLogin(){
			$this->view->getPageLogin();
		}
		public function getPageRegister(){
			$this->view->getPageRegister();
		}

        public function getPageAdmin(){
			require_once "./admin.php";
		}
		public function getPageForgot(){
			$this->view->getPageForgot();
		}

        public function getPageUser(){
           // $listUser = $this->model->getDataUser();
            $this->view->getPageUser();
        }

        public function doLogin(){
            $tam = $this->model->doLogin();
			isset($tam['name'])? $_SESSION['name'] = $tam['name']: $tam['name'] = null;
			isset($tam['email'])? $_SESSION['email'] = $tam['email']: $tam['email'] = null;
			isset($tam['pass'])? $_SESSION['pass'] = $tam['pass']: $tam['pass'] = null;
			//if(isset($tam['repassword'])) $_SESSION['repassword'] = $tam['repassword'];
			isset($tam['level'])? $_SESSION['level'] = $tam['level']: $tam['level'] = null;
            if($tam['level'] == 1){
				$_SESSION['task'] = "pageAdmin";
				echo '<script>alert("Chào '.$_SESSION['name'].'")</script>';
            }else if($tam['level'] == 2){
				$_SESSION['task'] = "pageUser";
				echo '<script>alert("Chào '.$_SESSION['name'].'")</script>';
			}
			else{
				$_SESSION['task'] = 'pageLogin';
				echo '<script>alert("Sai tên đăng nhập hoặc mật khẩu!")</script>';
            }
			require_once "index.php";
        }

		// public function checkUser(){

		// 	if($_SESSION['level'] == 1){
		// 		require_once('./admin.php');
		// 	}else if($_SESSION['level'] == 2){	
				
		// }
		public function setRegister(){

			if($_POST['password'] != $_POST['repassword']){
				echo '<script type=text/javascript>alert("Nhập lại mật khẩu không đúng. nhập lại");</script>';
				header("location:index.php?task=pageSign-in");
			}else{
				$name = empty($_POST['firstname']) ? 'true' : null;
				$pass = empty($_POST['password']) ? 'true' : null;
				$email = empty($_POST['email']) ? 'true' : null;

				if($name||$pass||$email){
					$this->view->getPageRegister();
				} else {
					if($this->model->addUser($_POST)){
						header('location:index.php');
					} else {
						$error2 = true;
						$this->view->getPageRegister();
					}
				}
			}
		}
	}
 ?>