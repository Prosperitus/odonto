<?php
	require_once "../database/employee.php";
	require_once "../database/hospital.php";

class Session{
	
	
	
	public function addHospital($id){
		$db = new HospitalDb();
		$hospital = $db->searchId($id);
		if($hospital != false){
			$_SESSION['hospital'] = $hospital;
		}
	}
	
	
	public function login(){
		$user = $_POST['username'];
		$password = $_POST['password'];
		if(isset($_POST['remember'])){
			$this->createCookie('user',$user);
			$this->createCookie('pass',$password);
		}else{
			$this->expireCookie('user');
			$this->expireCookie('pass');
		}
		$db = new EmployeeDb();
		$result = $db->login($user,hash("sha256",$password));
		if($result != null){
			session_start();
			$_SESSION['Employee'] = $result;
			header("location: ../public/busca_hospital.php");
			die();
		}else{
			session_start();
			$_SESSION['msg'] = "Login ou senha incorretos";
			header("location: ../index.php");
			die();
		}
    }
	
	public function createCookie($name,$value){
		setcookie($name,$value,time() + (86400 * 30),'/');
	}

	public function expireCookie($name){
		setcookie($name,"",time() - (86400 * 60),'/');
	}
	
	public function sessionEmployee(){
		$user = "";
		if(isset($_SESSION['Employee'])){
			$user = $_SESSION['Employee'];
			return $user;
		}else{
			return $user;
		}
	}
	
	public function logout(){
		session_start();
		session_destroy();
		header("location: ../index.php");
		die();
	}
	
	public function sessionHospital(){
		$user = "";
		if(isset($_SESSION['hospital'])){
			$user = $_SESSION['hospital'];
			return $user;
		}else{
			echo "<script>location.href='busca_hospital.php';</script>";
			die();
		}
	}
}