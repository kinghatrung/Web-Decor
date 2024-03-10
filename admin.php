<?php
require_once('./controller/admin.php');
$acontroller = new AdminController();
$task = isset($_GET['task']) ? $_GET['task'] : 'pageAdmin';

if(isset($_POST['add'])){
		$acontroller->addSP();
	}

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

?>