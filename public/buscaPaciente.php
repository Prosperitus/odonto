<?php 
	require_once "cabecalho.php";
	require_once "../database/dbpatient.php";


	$dbpatient = new DbPatient();
	$patients = $dbpatient->searchPatientAll();
	$pat = null;
?>
<head>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable({"oLanguage":{
		    "sEmptyTable": "Nenhum registro encontrado",
		    "sInfo": "Mostrando de _START_ até _END_, Total de _TOTAL_ Pacientes",
		    "sInfoEmpty": "Mostrando 0 até 0, Total de 0 Pacientes",
		    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
		    "sInfoPostFix": "",
		    "sInfoThousands": ".",
		    "sLengthMenu": "_MENU_ resultados por página",
		    "sLoadingRecords": "Carregando...",
		    "sProcessing": "Processando...",
		    "sZeroRecords": "Nenhum paciente encontrado",
		    "sSearch": "Pesquisar",
		    "oPaginate": {
		        "sNext": "Próximo",
		        "sPrevious": "Anterior",
		        "sFirst": "Primeiro",
		        "sLast": "Último"
		    },
		    "oAria": {
		        "sSortAscending": ": Ordenar colunas de forma ascendente",
		        "sSortDescending": ": Ordenar colunas de forma descendente"
		    }
			}});
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
				url: "../backend/viewPacient.php?id=" + id,
				beforeSend: function () { 
				}, 
				success: function (data) { 
					$("#dialogPatient").html(data); 
					$( "#dialogPatient" ).dialog('open');
				} 
			}); 
		}
	</script>
</head>
<body>	
	<div class="main margin_small">
		</br>
		<p class="bold" style="color: #0399ff">Click na linha do paciente para ver suas informações:</p>
	</div>
	<div id="dialogPatient" title="Dados do Paciente">	</div>	
	<input type="checkbox" value="clinica" checked />
	<div class="margin_small">
		<table id="example" class="hover row-border" cellspacing="0" width="100%">
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