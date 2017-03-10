<?php
function verificar_email($p){
	$email = $p;
	$error = false;
	$tamanho = strlen($email);
	$arroba = strrpos($email, "@");
	$pontocom = strrpos($email, ".com");
	$arrobavazio = empty($arroba);
	$pontocomvazio = empty($pontocom);
	if($arroba > $pontocom || $arrobavazio == 1 || $pontocomvazio == 1) {
		$error = true;
	}
	for ($i=0; $i < strlen($email) ; $i++) { 
		if (ord($email[$i]) == 32){//32 - spaco
			$error = true;
		}
		if($i < $arroba){
			if (ord($email[$i]) == 64){//64 - Arroba
			$error = true;
			}
		}
	}
	for ($i=0; $i < $arroba; $i++) { 
		$val = ord($email[$i]);
		if($val >=48 && $val <= 57){//numeros
		} 
		elseif ($val >=65 && $val <= 90){//letras maiusculas
		}
		elseif ($val >=96 && $val <= 122){//letras minusculas
		}
		elseif ($val == 95||$val == 46){// underline , ponto
		}
		else {
			$error = true;
		}
	}
	for ($i=$arroba + 1;$i < $pontocom; $i++) { 
			$val = ord($email[$i]);
			if ($val >=96 && $val <= 122){//letras minusculas
			}
			else {
				$error == true;
			}		
	}
	$pontos = 0;
	for ($i=$arroba + 1;$i < strlen($email); $i++) { 
			$val = ord($email[$i]);
			if ($val >=96 && $val <= 122){//letras minusculas
			}
			elseif ($val ==46) {//pontofinal
				$pontos++;
				if ($pontos > 2) {
					$error = true;
				}
			}
			else {
				$error = true;
			}		
	}						

return $error;
}

function verificar_num_nome($p){
	$nome = $p;
	$error = false;
	
	$tamanho = strlen($nome);
	for ($i=0; $i < $tamanho; $i++) { 
		if(is_numeric($nome[$i])) {
			$error = true;
		}
	}
	return $error;
}

function vericar_nome($p){
	$error = false;
	$nome = $p;
	$tamanho = strlen($nome);
	for ($i=0; $i < $tamanho; $i++) { 
		$val = ord($nome[$i]);
		if($val >=65 && $val <= 90){//letras maiusculas
		} 
		elseif ($val >=96 && $val <= 122){//letras minusculas
		}
		elseif ($val >=128 && $val <= 187){//acentuados
		}
		elseif ($val ==195||$val == 32){//acento , spaco
		}
		else {
			$error = true;
		}
	}
	return $error;
}
function digtos_data($p){
	$error = false;
	$data = $p;
	$tamanho = strlen($data);
	if($tamanho != 8) {
		$error = true;
	}
	return $error;
}
function letras_data($p){
	$error = false;
	$data = $p;
	$tamanho = strlen($data);
	for ($i=0; $i < $tamanho; $i++) { 
		if(!is_numeric($data[$i])) {
			$error = true;
		}
	}
	return $error;
}
function maiuscula_senha($p){
	$maiusculanasenha = 0;
	$error = false;
	$senha = $p;
	$tamanho = strlen($senha);
	for ($i=0; $i < $tamanho; $i++) { 
		if(ctype_upper($senha[$i])){
			$maiusculanasenha++;
		}
	}
	if($maiusculanasenha < 1){
		$error = true;
	}
	return $error;
}
function digitos_senha($p){
	$error = false;
	$senha = $p;
	$tamanho = strlen($senha);
	if($tamanho < 8){
		$error = true;
	}
	return $error;
}
function numero_senha($p){
	$senha = $p;
	$numerosnasenha = 0;
	$error = false;
	$tamanho = strlen($senha);
	for ($i=0; $i < $tamanho; $i++){  
		$val = ord($senha[$i]);
		if($val >=48 && $val <= 57){//numeros
			$numerosnasenha++;
		} 
	}
	if($numerosnasenha < 1){
		$error = true;
	}
	return $error;
}
function caract_senha($p){
	$caracnasenha = 0;
	$error = false;
	$senha = $p;
	$tamanho = strlen($senha);
	for ($i=0; $i < $tamanho; $i++) { 
		$val = ord($senha[$i]);
		if($val >=48 && $val <= 57){//numeros
		} 
		elseif ($val >=65 && $val <= 90){//letras minusculas
		}
		elseif ($val >=96 && $val <= 122){//letras maiusculas
		}
		elseif ($val >=128 && $val <= 187){//acentuados
		}
		elseif ($val ==195||$val == 32){//acento , spaco
		}
		else {
			$caracnasenha++;
		}
	}
	if($caracnasenha < 1){
		$error = true;
	}
	return $error;
	

}
///////////////////////////////////////////////////////////////////////////////////////
function testInvalidCro() {	

$cro_user = "999999";	
 $error = false;
if(is_numeric($cro_user))
{
	return $cro_user + 0;
}	
	else
	{
		echo "return $error ";		
	}
	
	
}
 
if(testInvalidCro())
	echo "CRO INVALID, TEST FAILED";
else 
	echo "CRO INVALID, TEST PASSED";

////////////////////////////////////////////////////////////////////////////////////////
function testInvalidPhone() {

	$phone_user = "99999--";
		$error = false;
	if(is_numeric($phone_user))
	{
	        return $phone_user + 0;
	}
	        else
	        {
	                echo "return $error ";
	        }


}

if(testInvalidPhone())
	echo "PHONE INVALID, TEST FAILED";
else
	echo "PHONE INVALID, TEST PASSED";

///////////////////////////////////////////////////////////////////////////////////////

function testInvalidCpf() {	

$cpf_user = "02065528150";	
$error = false;
if(is_numeric($cpf_user))
{
	return $cpf_user + 0;
}	
	else
	{
		echo "return $error ";		
	}
	
	
}
 
if(testInvalidCpf())
	echo "CPF INVALID, TEST FAILED";
else 
	echo "CPF INVALID, TEST PASSED";

//////////////////////////////////////////////////////////////////////////////////////////////////////
function testInvalidCc() {

	$cc_user = "123456789";
		$error = false;
	if(is_numeric($cc_user))
	{
	        return $cc_user + 0;
	}
	        else
	        {
	                echo "return $error ";
	        }


}

if(testInvalidCc())
	echo "CONTA INVALID, TEST FAILED";
else
	echo "CONTA INVALID, TEST PASSED";

///////////////////////////////////////////////////////////////////////////////////////////////////////////
function testInvalidAg() {

	$ag_user = "12345";
		$error = false;
	if(is_numeric($ag_user))
	{
	        return $ag_user + 0;
	}
	        else
	        {
	                echo "return $error ";
	        }


}

if(testInvalidAg())
	echo "AGENCIA INVALID, TEST FAILED";
else
	echo "AGENCIA INVALID, TEST PASSED";

?>	
