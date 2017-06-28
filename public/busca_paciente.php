<?php 
	require_once "cabecalho.php";
	require_once "../database/patient.php";


	$dbpatient = new PatientDb();
	$patients = $dbpatient->searchAll();
	$pat = null;
?>

	<div id="modalEditPatient" style="width:60%;" class="modal">
        <div class="modal-content">
        </div>
    </div>

	<div class="main margin_small">
		</br>
		<p class="bold tituloAzul">Click na linha do paciente para ver suas informações:</p>
		<a href="cadastro_paciente.php">
		<div class="col s6 m4 posicaoCardCadastro">
			  <div class="card">
				<div id="CardCadastro" class="card-image">
				  <img src="../images/paciente.jpg">
				  <div id="divCardCadastro" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons iconeCardCadastro">add</i></div>
				</div>
			   </div>
			</div>
		</a>
	<input type="checkbox" value="clinica" checked />
		<table id="pacienteDatatable" class="hover row-border" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th>Nome</th>
	                <th>CPF</th>
					<th>Plano de Saúde</th>
	                <th>Nome do Responsavel</th>
	            </tr>
	        </thead>
	        <tfoot>
	            <tr>
	                <th>Nome</th>
	                <th>CPF</th>
					<th>Plano de Saúde</th>
	                <th>Nome do Responsavel</th>
	            </tr>
	        </tfoot>
	        <tbody>
				<?php foreach($patients as $patient){ ?>
					<tr class="listPatient" onclick="visualizarPaciente(<?=$patient->id?>)">
						<td><?=$patient->name.' '.$patient->surname?></td>
						<td><?=$patient->social_security?></td>
						<td><?=$patient->health_insurance?></td>
						<?php if($patient->responsible2 != null && $patient->responsible2 != ""){?>
						<td><?=$patient->responsible1.', '.$patient->responsible2?></td>
						<?php }else{ ?>
						<td><?=$patient->responsible1?></td>
						<?php } ?>
					</tr>
				<?php } ?>
	        </tbody>
	    </table>
	</div>
 <?php require_once "rodape.php";
