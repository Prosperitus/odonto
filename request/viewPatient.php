<?php 

	require_once "../controller/verifyLogin.php";
	require_once "../controller/patient.php";
	verifyLogRedirect();
	
	$id = $_GET['id'];
	$pacienteControle = new PatientController();	
	$pat = $pacienteControle->searchId($id);
	
?>

<label class="bold" id="nmePatient">Nome: </label><label class="font_big"><?=$pat->name.' '.$pat->surname;?></label><br>
<label class="bold">Email: </label><label class="font_big"><?=$pat->email;?></label><br>
<label class="bold">CPF: </label><label class="font_big"><?=$pat->social_security;?></label><br>
<label class="bold">Plano de Saúde: </label><label class="font_big"><?=$pat->health_insurance;?></label><br>
<?php if($pat->responsible2 != null && $pat->responsible2 != ""){ ?>
<label class="bold">Responsável 1: </label><label class="font_big"><?=$pat->responsible1.', '.$pat->telephone_r1?></label><br>
<label class="bold">Responsável 2: </label><label class="font_big"><?=$pat->responsible2.', '.$pat->telephone_r2?></label><br>
<?php }else{ ?>
<label class="bold">Responsável 1: </label><label class="font_big"><?=$pat->responsible1.', '.$pat->telephone_r1?></label><br>
<?php } ?>
<?php if($pat->gender == 1){ ?>
	<label class="bold">Gênero: </label><label class="font_big">Masculino</label><br>
<?php }if($pat->gender == 2){ ?>
	<label class="bold">Gênero: </label><label class="font_big">Feminino</label><br>
<?php } ?>
<label class="bold">Endereço: </label><label class="font_big"><?=$pat->address?></label><br>
<label class="bold">Bairro: </label><label class="font_big"><?=$pat->neighborhood?></label><br>
<label class="bold">Cidade/UF: </label><label class="font_big"><?=$pat->city.'/'.$pat->state?></label><br>
<label class="bold">Cep: </label><label class="font_big"><?=$pat->zip_code;?></label><br>

<?php if($pat->physician_assistant == '1'){ ?>
<label class="bold">Nome do médico responsável: </label><label class="font_big"><?=$pat->name_phy_assistant?></label><br>
<label class="bold">Telefone do médico responsável: </label><label class="font_big"><?=$pat->telephone_phy_assistant?></label><br>
<label class="bold">Especialidade do médico responsável: </label><label class="font_big"><?=$pat->speciality_phy_assistant?></label><br>
<?php } 

if($pat->clinic == "1"){ ?>
<label class="bold">Paciente da Clinica: </label><label class="font_big">Sim</label><br>
<?php }if($pat->clinic == "0"){ ?>
<label class="bold">Paciente da Clinica: </label><label class="font_big">Não</label><br>
</div>
<?php } ?>
