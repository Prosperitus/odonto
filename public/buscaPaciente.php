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
     $( "#dialogPatient" ).dialog({
		autoOpen: false,modal: true,
		buttons: {
			Fechar: function() {
				$( "#dialogPatient" ).dialog('close');
			}
		}
	});
})



});	

function visualizar(id) { 
	$.ajax({ 
	type: 'get',
	dataType: 'html',
	url: "../backend/viewPacient.php?id=" + id 
	, beforeSend: function () { 
	}, 
	success: function (data) { 
	$("#dialogPatient").html(data); 
     $( "#dialogPatient" ).dialog('open');
	} 
		}) 
	};


</script>
<div id="dialogPatient" title="Dados do Paciente">
	
</div>

<input type="checkbox" value="clinica" checked />
<div class="margin_small">
  <table id="example" class="display" cellspacing="0" width="100%">
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
				<tr class="listPatient" onclick="visualizar(<?=$patient->id?>)">
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