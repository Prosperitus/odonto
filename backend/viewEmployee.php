<?php 

	require_once "../backend/verifyLog.php";
	verifyLogRedirect();
	
	
	require_once "../database/dbemployee.php";
	
	$id = $_GET['id'];
	$emp = searchEmployeeId($id);
	function searchEmployeeId($id){
		$db = new DbEmployee();
		$emp = $db->searchEmployeeById($id);
		return $emp;
	}	
?>
<label class="bold">Nome: </label><label class="font_big"><?=$emp->name.' '.$emp->surname;?></label><br>
<label class="bold">Email: </label><label class="font_big"><?=$emp->email;?></label><br>
<label class="bold">CPF: </label><label class="font_big"><?=$emp->social_security;?></label><br>
<label class="bold">CRO: </label><label class="font_big"><?=$emp->cro;?></label><br>
<label class="bold">Número de Matrícula: </label><label class="font_big"><?=$emp->registration;?></label><br>
<?php if($emp->phone2 != null && $emp->phone2 != ""){ ?>
<label class="bold">Telefones: </label><label class="font_big"><?=$emp->phone.', '.$emp->phone2?></label><br>
<?php }else{ ?>
<label class="bold">Telefones: </label><label class="font_big"><?=$emp->phone?></label><br>
<?php } ?>
<label class="bold">Endereço: </label><label class="font_big"><?=$emp->address?></label><br>
<label class="bold">Data de Admissão: </label><label class="font_big"><?=$emp->admission_date?></label><br>
<label class="bold">Banco: </label><label class="font_big"><?=$emp->bank?></label><br>
<label class="bold">Número da Conta: </label><label class="font_big"><?=$emp->number_of_account;?></label><br>
<label class="bold">Agência: </label><label class="font_big"><?=$emp->agency;?></label><br>
<label class="bold">Permissão: </label><label class="font_big"><?=$emp->permition;?></label><br>

