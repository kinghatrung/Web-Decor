<?php
require_once "model/model.php";
require_once "view/admin.php";

class AdminController
{
	var $model, $adminView;
	function __construct()
	{
		$this->model = new Model();
		$this->adminView = new AdminView();
	}

	public function getPageAdmin()
	{
		$this->adminView->getPageAdmin();
	}

	public function getPageNhanVien()
	{
		$this->adminView->getPageNhanVien();
	}

	public function getPageSanPham()
	{
		$this->adminView->getPageSanPham();
	}

	public function getPageKTS()
	{
		$this->adminView->getPageKTS();
	}

	public function getPageTK()
	{
		$this->adminView->getPageTK();
	}
	public function addSP()
	{
		$ma = empty($_POST['maSP']) ? 'true' : null;
		$gia = empty($_POST['giaSP']) ? 'true' : null;
		$anh = isset($_FILES['anhSP']['name']) ? $_FILES['anhSP']['name'] : null;
		//echo "<script>alert('".$anh."');</script>";
		if ($ma || $gia) {
			echo "<script>alert('Dữ liệu thêm không được bỏ trống');</script>";
		} else {
			if ($this->model->addSP($_POST, $anh)) {
				echo "<script>alert('Thêm thành công');</script>";
			} else {
				echo "<script>alert('Thêm không thành công');</script>";
			}
		}
		//$_SESSION['task'] = 'pageSanPham';
	}
	public function updateSP()
	{
		$ma = empty($_POST['maSP']) ? 'true' : null;
		$gia = empty($_POST['giaSP']) ? 'true' : null;
		$anh = isset($_FILES['anhSP']['name']) ? $_FILES['anhSP']['name'] : null;
		$result = $this->model->getSP();
		$kt = false;
		while ($row = mysqli_fetch_array($result)) {
            if($_POST['maSP'] == $row['maSP']){
				$kt = true;
			}
        }
		if ($ma || $gia) {
			echo "<script>alert('Dữ liệu sửa không được bỏ trống');</script>";
		} else {
			if($kt){
				if ($this->model->updateSP($_POST, $anh)) {
					echo "<script>alert('Sửa thành công');</script>";
				} else {
					echo "<script>alert('Sửa Thất bại');</script>";
				}
			}else{
				echo "<script>alert('Dữ liệu không có trong csdl');</script>";
			}
			
		}
		
	}
}
?>