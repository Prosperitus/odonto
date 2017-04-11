<?php 
	require_once "cabecalho.php";
	require_once "../database/dbpatient.php";


	$dbpatient = new DbPatient();
	$patients = $dbpatient->searchPatientAll();
	$pat = null;
?>



<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({select: true});
	$(function() {
     $( "#dialogEmployee" ).dialog({
		autoOpen: false,modal: true,
		buttons: {
			Fechar: function() {
				$( "#dialogEmployee" ).dialog('close');
			}
		}
	});
})



});	

function visualizar(id) { 
	$.ajax({ 
	type: 'get',
	dataType: 'html',
	url: "../backend/searchPacient.php?id=" + id 
	, beforeSend: function () { 
	}, 
	success: function (data) { 
	$("#dialogEmployee").html(data); 
     $( "#dialogEmployee" ).dialog('open');
	} 
		}) 
	};


</script>
<div id="dialogEmployee" title="Dados do Paciente">
	
</div>

  <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Endereço</th>
                <th>Cidade</th>
				<th>Estado</th>
				<th>Plano de Saúde </th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Endereço</th>
                <th>Cidade</th>
				<th>Estado</th>
				<th>Plano de Saúde</th>
            </tr>
        </tfoot>
        <tbody>
			<?php foreach($patients as $patient){ ?>
				<tr class="listPatient" onclick="visualizar(<?= $patient->id?>)">
					<td><?=$patient->name.' '.$patient->surname?></td>
					<td><?=$patient->social_security?></td>
					<td><?=$patient->birthdate?></td>
					<td><?=$patient->address?></td>
					<td><?=$patient->city?></td>
					<td><?=$patient->state?></td>
					<td><?=$patient->health_insurance?></td>
				</tr>
			<?php }?>
			<tr class="listPatient" onclick="<?php $pat = searchPacientId(1);?>">
					<td>dfgfdgdfgdf</td>
					<td>dfgfdgdfgdf</td>
					<td>dfgfdgdfgdf</td>
					<td>dfgfdgdfgdf</td>
					<td>dfgfdgdfgdf</td>
					<td>dfgfdgdfgdf</td>
					<td>dfgfdgdfgdf</td>
				</tr>
        </tbody>
    </table>
 <?php require_once "rodape.php";