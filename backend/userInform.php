<?php 
	function userInform(){
		$user = "";
		if(isset($_SESSION['Employee'])){
			$user = $_SESSION['Employee'];
			return $user;
		}else{
			return $user;
		}
	}