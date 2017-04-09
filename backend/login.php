<?php
	require_once "../database/dbemployee.php";

  function loginBack(){
	$user = $_POST['username'];
	$password = $_POST['password'];
	$db = new DbEmployee();
	$result = $db->loginDatabase($user,hash("sha256",$password));
	if($result != null){
		session_start();
		$_SESSION['Employee'] = $result;
		header("location: ../public/board.php");
		die();
	}else{
		session_start();
		$_SESSION['msg'] = "Login ou senha incorretos";
		header("location: ../index.php");
		die();
	}
  }
  
loginBack();