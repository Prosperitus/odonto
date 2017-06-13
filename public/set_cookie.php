<?php
 
 function setCookie(){
 	$cookie_name = $_COOKIE['patient'];
 	?>
 	<html>
 	<body>
 	<?php
 	$true = true;
 	$false = false;	
		setcookie("Paciente",$cookie_name, time()+(86400 * 30), "/");
 	 
 	 if(!isset($cookie_name)){
 	 	return $false;
 	 	}else{
 	 		return $true;
 	 		}
 		
 		?>
 		</body>
 		</html>
 		}
