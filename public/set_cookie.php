<?php
 
 function setCookie(){
 	$cookie_name = "name";
 	$cookie_value = "value";

 	?>
 	<html>
 	<body>
 	<?php
 	$true = true;
 	$false = false;	
 	setcookie("name","value", time()+(86400 * 30), "/");
 	 
 	 if(!isset($_COOKIE[$cookie_name])){
 	 	return $false;
 	 	}else{
 	 		return $true;
 	 		}
 		
 		?>
 		</body>
 		</html>
 		}
