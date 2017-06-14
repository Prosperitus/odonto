<?php
 
 function getCookiePatient(){
 	if(isset($_COOKIE['patient'])){
 	$patient = $_COOKIE['patient'];
 	 	return $patient->name;
 	}
 }
