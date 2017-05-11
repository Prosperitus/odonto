<?php 
	require_once "cabecalho.php";
	require_once "../database/dbemployee.php";


	$dbemployee = new DbEmployee();
	$employees = $dbemployee->searchEmployeeAll();
	$emp = null;
?>



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

	<div class="main margin_small">
	<br>
	<p class="bold" style="color: #03a9fa">Click na linha do paciente para ver suas informações:</p>
	</div>
<div id="dialogEmployee" title="Dados do Funcionário">
	
</div>

<input type="checkbox" value="clinica" checked />
<div class="margin_small">
  <table id="example" class="hover row-border" cellspacing="0" width="100%">
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
 <?php require_once "rodape.php";
