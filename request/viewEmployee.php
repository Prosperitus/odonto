<?php 

	require_once "../controller/verifyLogin.php";
	require_once "../controller/employee.php";
	verifyLogRedirect();
	
	
	

	$id = $_GET['id'];
	$funcionarioControle = new EmployeeController();	
	$emp = $funcionarioControle->searchId($id);	
?>

<label class="bold" id="nmeEmployee">Nome: </label><label class="font_big"><?=$emp->name.' '.$emp->surname;?></label><br>
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
<label class="bold">Agência: </label><label class="font_big"><?=$emp->agency;?></label><br>
<label class="bold">Número da Conta: </label><label class="font_big"><?=$emp->number_of_account;?></label><br>
