<?php
	require_once "model/model.php";
	require_once "view/admin.php";

    class AdminController{
		var $model, $adminView;
		function __construct()
		{
			$this->model = new Model();
			$this->adminView = new AdminView();
		}
		
        public function getPageAdmin(){
			$this->adminView->getPageAdmin();
		}

        public function getPageNhanVien(){
			$this->adminView->getPageNhanVien();
		}

        public function getPageSanPham(){
			$this->adminView->getPageSanPham();
		}

        public function getPageKTS(){
			$this->adminView->getPageKTS();
		}

        public function getPageTK(){
			$this->adminView->getPageTK();
		}
		public function addSP()
		{

			$ma = empty($_POST['maSP']) ? 'true' : null;
			$gia = empty($_POST['giaSP']) ? 'true' : null;
			if ($ma || $gia ) {
				header('location:admin.php?task=pageHome');
			} else {
				if ($this->model->addSP($_POST)) {
					echo "<script>alert('Thêm thành công');</script>";
					header('location:admin.php?task=pageSanPham');
				} else {
					header('location:admin.php?task=pageAdmin');
				}
			}
	
		}

		public function showSP(){
		
		}
    }
?>

