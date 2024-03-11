<?php 
session_start();
require_once('./controller/control.php');
$controller = new Controller();
$task = isset($_GET['task'])? $_GET['task'] : 'pageHome';

$name = isset($_POST['name'])? $_POST['name']:null;
$email = isset($_POST['email'])? $_POST['email']:null;
$password = isset($_POST['pass'])? $_POST['pass']:null;
$repassword = isset($_POST['repassword'])? $_POST['repassword']:null;
$admin = 'admin@gmmail.com';

if(isset($_POST['login'])){
	$controller->doLogin();
}

// $_SESSION['email'] = $_POST['email'];
// if((isset($_SESSION['email'])? $_SESSION['email'] = $admin :null){
	
// }

if(isset($_POST['sign-up'])){
    $controller->setRegister();
} 

if(isset($_POST['logout'])){
	unset($_SESSION['email']);
	$controller->getPageLogin();
}


switch ($task) {
	case 'pageHome':
		$controller->getPageHome();
		break;
	case 'pagePhongLamViec':
		$controller->getPhongLamViec();
		break;
	case 'pagePhongKhach':
		$controller->getPhongKhach();
		break;
	case 'pagePhongNgu':
		$controller->getPhongNgu();
		break;
	case 'pageLogin':
		$controller->getPageLogin();
		break;
	case 'pageSign-in':
		$controller->getPageRegister();
		break;
	case 'pageAdmin':
		$controller->getPageAdmin();
		break;
	case 'pageUser':
		$controller->getPageUser();
		break;
	default:
		$controller->getPageHome();
		break;
	}
 ?>