<?php
function FuncionarioCpf($p){
		$string =  $p;
		$tamanho = strlen($string);
		$a = 14;

		if($tamanho != $a && !letra_na_str($p) && !carac_na_str($p)){
			return false;
		}else{
			return true;
		}
	}

	function FuncionarioCro($p){
		$string =  $p;
		$tamanho = strlen($string);
		
		if($tamanho != 6 && !letra_na_str($p) && !carac_na_str($p)){
			return false;
		}else{
			return true;
		}
	}

	function FuncionarioCel($p){
		$string =  $p;
		$tamanho = strlen($string);
		$a = 14;
		if($tamanho != $a && !letra_na_str($p) && !carac_na_str($p)){
			return false;
		}else{
			return true;
		}
	}

	function FuncionarioTel($p){
		$string =  $p;
		$tamanho = strlen($string);
		$a = 13;
		if($tamanho != $a && !letra_na_str($p) && !carac_na_str($p)){
			return false;
		}else{
			return true;
		}
?>