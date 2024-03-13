<?php 
session_start();
require_once('./controller/control.php');
$controller = new Controller();
$task = isset($_GET['task'])? $_GET['task'] : 'pageHome';

if(isset($_POST['login'])){
	$controller->doLogin();
}
isset($_SESSION['task'])?$task = $_SESSION['task']:null;
// $_SESSION['email'] = $_POST['email'];
// if((isset($_SESSION['email'])? $_SESSION['email'] = $admin :null){
	
// }

if(isset($_POST['sign-up'])){
    $controller->setRegister();
} 


switch ($task) {
	case 'pageHome':
		$controller->getPageHome();
		break;
	case 'pageLogin':
		$controller->getPageLogin();
		break;
	case 'pageSign-in':
		$controller->getPageRegister();
		break;
	case 'pageForgot':
		$controller->getPageForgot();
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
	if(isset($_SESSION['task']))unset($_SESSION['task']);
	
	if(isset($_POST['logout'])){
	$controller->getPageLogin();
	if(isset($_SESSION['level']))unset($_SESSION['level']);
	}
 ?>