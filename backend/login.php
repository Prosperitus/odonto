<?php
	require_once "../database/dbemployee.php";

  function loginBack(){
	$user = $_POST['username'];
	$password = $_POST['password'];
	$db = new DbEmployee();
	$result = $db->loginDatabase($user,hash("sha256",$password));
	if($result != null){
		session_start();
		$_SESSION['nameEmployee'] = $result->name;
		$_SESSION['emailEmployee'] = $result->email;
		$_SESSION['croEmployee'] = $result->cro;
		$_SESSION['permissionEmployee'] = $result->permition;
		header("location: ../board.php");
		die();
	}else{
		header("location: ../index.php");
		die();
	}
  }
  
loginBack();