<?php
require_once('./controller/admin.php');
$acontroller = new AdminController();
$task = isset($_GET['task']) ? $_GET['task'] : 'pageAdmin';

// isset($_SESSION['task'])?$task = $_SESSION['task']:null;

if(isset($_POST['add'])) $acontroller->addSP();
if(isset($_POST['update'])) $acontroller->updateSP();

switch ($task) {
	case 'pageHome':
		$acontroller->getPageAdmin();
		break;
	case 'pageAdmin':
		$acontroller->getPageAdmin();
		break;
	case 'pageSanPham':
		$acontroller->getPageSanPham();
		break;
	case 'pageNhanVien':
		$acontroller->getPageNhanVien();
		break;
	case 'pageKTS':
		$acontroller->getPageKTS();
		break;
	case 'pageTK':
		$acontroller->getPageTK();
		break;
	default:
		$acontroller->getPageAdmin();
		break;
}
// if(isset($_SESSION['task']))unset($_SESSION['task']);
?>