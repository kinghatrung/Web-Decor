<?php

class Model
{
	protected $conn;
	public function __construct(){
		$this->conn = new mysqli('localhost','root','','webdecor');
		if($this->conn->connect_error){
			die($this->conn->connect_error);
		}
		$this->conn->set_charset("utf8");
	}

	public function doLogin(){
		$query = "SELECT * FROM user WHERE email = '".$_POST['email']."' AND pass = '".$_POST['pass']."'";
		$result = mysqli_query($this->conn,$query);
		if (mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			return $row;
		}
		return false; 
	}

	// public function getDataUser(){
	// 	$query = 'SELECT * FROM user WHERE level = "2"';
	// 	return mysqli_query($this->conn,$query);
	// }

	public function getDataUser(){
		$sql = 'SELECT * FROM user WHERE email = "'.$_POST['email'].'"';
		return mysqli_query($this->conn,$sql);
	}

	public function addUser($ttdk){
		$level = 2;
		$sql = 'INSERT INTO user VALUES("","'.$ttdk['firstname'].'","'.$ttdk['email'].'","'.$ttdk['password'].'","'.$level.'")';
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result) return true;
		return false;
	}
	public function addSP($ttdk, $anh){
		$sql = 'INSERT INTO sanpham VALUES("'.$ttdk['maSP'].'","'.$ttdk['giaSP'].'","'.$anh.'")';
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result) return true;
		return false;
	}
	public function updateSP($ttdk, $anh){
		$sql = 'UPDATE sanpham SET giaSP="'.$ttdk['giaSP'].'",image="'.$anh.'" WHERE maSP="'.$ttdk['maSP'].'"';
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result) return true;
		return false;
	}
	public function getSP(){
		$sql = "SELECT * FROM sanpham";
		return mysqli_query($this->conn,$sql);
	}
}

?>