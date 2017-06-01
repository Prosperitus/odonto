<?php 
	require_once "cabecalho.php";
	require_once "../database/dbemployee.php";
	$dbemployee = new DbEmployee();
	$employees = $dbemployee->searchEmployeeAll();
	$emp = null;
?>
<head>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable({"oLanguage":{
		    "sEmptyTable": "Nenhum registro encontrado",
		    "sInfo": "Mostrando de _START_ até _END_. Total de _TOTAL_ Funcionarios",
		    "sInfoEmpty": "Mostrando 0 até 0. Total de 0 funcionarios",
		    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
		    "sInfoPostFix": "",
		    "sInfoThousands": ".",
		    "sLengthMenu": "_MENU_ resultados por página",
		    "sLoadingRecords": "Carregando...",
		    "sProcessing": "Processando...",
		    "sZeroRecords": "Nenhum funcionario encontrado",
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
		     $( "#dialogEmployee" ).dialog({
		     	width: 500,
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
				url: "../backend/viewEmployee.php?id=" + id,
				beforeSend: function () { 
				}, 
				success: function (data) { 
					$("#dialogEmployee").html(data); 
					$( "#dialogEmployee" ).dialog('open');
				} 
			}); 
		}
	</script>
</head>
<body>
	<div class="margin_small">
		</br>
		<p class="bold" style="color: #0399ff">Click na linha do funcionário para ver suas informações:</p>
		<div class="row main">
			<div class="col s6 m4" style="width: 60px;height:60px;float:right;bottom:80px;position:relative">
			  <div class="card" style="width: 60px;height:60px">
				<div class="card-image" style="width: 60px;height:60px">
				  <img src="../images/medico.jpg">
				  <a href="cadastro_funcionario.php" class="btn-floating halfway-fab waves-effect waves-light red" style="width:22px;height:22px;position:relative;left:34px;bottom:36px"><i class="material-icons" style="width:7px;height:7px;bottom:9px;right:1px;position:relative">add</i></a>
				</div>
			   </div>
			</div>
	<div id="dialogEmployee" title="Dados do Funcionário">	</div>
	<input type="checkbox" value="clinica" checked />
		<table id="example" class="hover row-border" cellspacing="0" width="100%;">
	        <thead>
	            <tr>
	                <th>Nome</th>
	                <th>CPF</th>
					<th>E-mail</th>
	                <th>CRO</th>
					<th>Número de Matrícula</th>
	            </tr>
	        </thead>
	        <tfoot>
	            <tr>
	                <th>Nome</th>
	                <th>CPF</th>
					<th>E-mail</th>
	                <th>CRO</th>
					<th>Número de Matrícula</th>
	            </tr>
	        </tfoot>
	        <tbody>
				<?php foreach($employees as $employee){ ?>
					<tr class="listPatient" onclick="visualizar(<?=$employee->id?>)">
						<td><?=$employee->name.' '.$employee->surname?></td>
						<td><?=$employee->social_security?></td>
						<td><?=$employee->email?></td>
						<td><?=$employee->cro?></td>
						<td><?=$employee->registration?></td>
					</tr>
				<?php } ?>
	        </tbody>
	    </table>
	</div>
</body>
<?php require_once "rodape.php";
