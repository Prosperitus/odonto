<?php
	require_once "../database/dbemployee.php";
	require_once "../backend/rememberUser.php";

  function loginBack(){
	$user = $_POST['username'];
	$password = $_POST['password'];
	if(isset($_POST['remember'])){
		createCookie('user',$user);
		createCookie('pass',$password);
	}else{
		expireCookie('user');
		expireCookie('pass');
	}
	$db = new DbEmployee();
	$result = $db->loginDatabase($user,hash("sha256",$password));
	if($result != null){
		session_start();
		$_SESSION['Employee'] = $result;
		header("location: ../public/busca-hospital.php");
		die();
	}else{
		session_start();
		$_SESSION['msg'] = "Login ou senha incorretos";
		header("location: ../index.php");
		die();
	}
  }
  
loginBack();