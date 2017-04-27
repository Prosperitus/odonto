<?php 

	require_once "../backend/verifyLog.php";
	verifyLogRedirect();
	
	
	require_once "../database/dbpatient.php";
	
	$id = $_GET['id'];
	$pat = searchPacientId($id);
	function searchPacientId($id){
		$db = new DbPatient();
		$pat = $db->searchId($id);
		return $pat;
	}	
?>
<label class="bold">Nome: </label><label class="font_big"><?=$pat->name.' '.$pat->surname;?></label><br>
<label class="bold">Email: </label><label class="font_big"><?=$pat->email;?></label><br>
<label class="bold">CPF: </label><label class="font_big"><?=$pat->social_security;?></label><br>
<label class="bold">Plano de Saúde: </label><label class="font_big"><?=$pat->health_insurance;?></label><br>
<?php if($pat->responsible2 != null && $pat->responsible2 != ""){ ?>
<label class="bold">Responsáveis: </label><label class="font_big"><?=$pat->responsible1.', '.$pat->responsible2?></label><br>
<?php }else{ ?>
<label class="bold">Responsáveis: </label><label class="font_big"><?=$pat->responsible1?></label><br>
<?php } ?>
<?php if($pat->telephone_r2 != null && $pat->telephone_r2 != ""){ ?>
<label class="bold">Telefones: </label><label class="font_big"><?=$pat->telephone_r1.', '.$pat->telephone_r2?></label><br>
<?php }else{ ?>
<label class="bold">Telefones: </label><label class="font_big"><?=$pat->telephone_r1?></label><br>
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

<?php if($pat->clinic == "1"){ ?>
<input type="checkbox" id="clinica" name="clinica" checked />
<label class="bold" for="clinica">Paciente da Clinica</label>
<?php }if($pat->clinic == "0"){ ?>
<input type="checkbox" id="clinica" name="clinica"/>
<label class="bold" for="clinica">Paciente da Clinica</label>
</div>
<?php } ?>
