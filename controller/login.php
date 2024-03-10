<?php 
	// class Login{
	// 	var $model, $view;
	// 	function __construct()
	// 	{
	// 		$this->model = new Model();
	// 		$this->view = new View();
	// 	}
	// 	public function getPageHome(){
	// 		$this->view->getPageHome();
	// 	}
	// 	public function getPageLogin(){
	// 		$this->view->getPageLogin();
	// 	}
	// 	public function getPageRegister(){
	// 		$this->view->getPageRegister();
	// 	}

    //     public function getPageUser(){
    //        // $listUser = $this->model->getDataUser();
    //         $this->view->getPageUser();
    //     }
    //     public function doLogin(){
    //         $tam = $this->model->doLogin();
	// 		//if(isset($tam['name'])) $_SESSION['name'] = $tam['name'];
	// 		if(isset($tam['email'])) $_SESSION['email'] = $tam['email'];
	// 		if(isset($tam['pass'])) $_SESSION['pass'] = $tam['pass'];
	// 		//if(isset($tam['repassword'])) $_SESSION['repassword'] = $tam['repassword'];
	// 		if(isset($tam['level'])) $_SESSION['level'] = $tam['level'];
    //         if($_SESSION['level'] == 1){
	// 			header("location:index.php?task=pageAdmin");
    //         }else if($_SESSION['level'] == 2){
	// 			header("location:index.php?task=pageUser");
	// 		}
	// 		else{
    //         	echo '<script>alert("Sai thông tin! Vui lòng thử lại.")</script>';
    //             header("location:index.php?task=pagelogin");
    //         }
    //     }


	// 	public function setRegister(){

	// 		$name = empty($_POST['name']) ? 'true' : null;
	// 		$pass = empty($_POST['pass']) ? 'true' : null;
	// 		$email = empty($_POST['email']) ? 'true' : null;

	// 		if($name||$pass||$email){
	// 			$this->view->getPageRegister();
	// 		} else {
	// 			if($this->model->addUser($_POST)){
	// 				header('location:index.php');
	// 			} else {
	// 				$error2 = true;
	// 				$this->view->getPageRegister();
	// 			}
	// 		}
			
	// 	}
		
	// }


	
 ?>