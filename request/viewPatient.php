<?php 

	require_once "../controller/verifyLogin.php";
	require_once "../controller/patient.php";
	verifyLogRedirect();
	
	$id = $_GET['id'];
	$pacienteControle = new PatientController();	
	$pat = $pacienteControle->searchId($id);
	
?>
<form class="form" method="POST" action="../request/atualizar_paciente.php">
<label class="bold" id="nmePatient">Nome: </label> <input type="text" name="name" value="<?=$pat->name.' '.$pat->surname;?>"></input><br>
<label class="bold">Email: </label><input type="text" name="email" value="<?=$pat->email;?>"> </input><br>
<label class="bold">CPF: </label><input type="text" name="cpf" value="<?=$pat->social_security;?>"></input><br>
<label class="bold">Plano de Saúde: </label><input type="text" name="health_insurance" value="<?=$pat->health_insurance;?>"></input><br>
<?php if($pat->responsible2 != null && $pat->responsible2 != ""){ ?>
<label class="bold">Responsável 1: </label><input type="text" name ="responsible1" value="<?=$pat->responsible1.', '.$pat->telephone_r1?>"></input><br>
<label class="bold">Responsável 2: </label><input type="text" name ="responsible2" value="<?=$pat->responsible2.', '.$pat->telephone_r2?>"></input><br>
<?php }else{ ?>
<label class="bold">Responsável 1: </label><input type="text" name ="responsible1" value="<?=$pat->responsible1.', '.$pat->telephone_r1?>"></input><br>
<?php } ?>
<?php if($pat->gender == 1){ ?>
	<label class="bold">Gênero: </label><input type="text" name ="gender" value="Masculino"></input><br>
<?php }if($pat->gender == 2){ ?>
	<label class="bold">Gênero: </label><input type="text" name ="gender" value="Feminino"></input><br>
<?php } ?>
<label class="bold">Endereço: </label><input type="text" name ="address" value="<?=$pat->address?>"></input><br>
<label class="bold">Bairro: </label><input type="text" name="neighborhood" value="<?=$pat->neighborhood?>"></input><br>
<label class="bold">Cidade/UF: </label><input type="text" name ="state" value="<?=$pat->city.'/'.$pat->state?>"></input><br>
<label class="bold">Cep: </label><input type="text" name ="zip_code" value="<?=$pat->zip_code;?>"></input><br>
<?php if($pat->physician_assistant == '1'){ ?>
<label class="bold">Nome do médico responsável: </label><input type="text" name ="name_phy_assistant" value="<?=$pat->name_phy_assistant?>"></input><br>
<label class="bold">Telefone do médico responsável: </label><input type="text" name ="telephone_phy_assistant" value="<?=$pat->telephone_phy_assistant?>"></input><br>
<label class="bold">Especialidade do médico responsável: </label><input type="text" name ="speciality_phy_assistant" value="<?=$pat->speciality_phy_assistant?>"></input><br>
<?php } else {?>
	<input type="text" name ="name_phy_assistant" value="0" size="0" hidden></input>
	<input type="text" name ="telephone_phy_assistant" value="0" size="0" hidden></input>
	<input type="text" name ="speciality_phy_assistant" value="0" size="0" hidden></input>
<?php }

if($pat->clinic == "1"){ ?>
<label class="bold">Paciente da Clinica: </label><input type="text" name ="patient" value="Sim"></input><br>
<?php }if($pat->clinic == "0"){ ?>
<label class="bold">Paciente da Clinica: </label><input type="text" name ="patient" value="Nao"></input><br>
<?php } ?>
	<div class="row">
            <div class="input-field col s12" style="margin-top:1%">
                  <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Atualizar paciente</button>
            </div>    
        </div>
	</div>
</form>

