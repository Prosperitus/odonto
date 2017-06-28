

//SCRIPT INICIALIZACAO DE DATEPICKER
$('.datepicker').pickadate({
    	monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
  		monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
  		weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
  		weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
  		today: 'Hoje',
  		clear: 'Limpar',
  		close: 'Pronto',
  		labelMonthNext: 'Próximo mês',
  		labelMonthPrev: 'Mês anterior',
  		labelMonthSelect: 'Selecione um mês',
  		labelYearSelect: 'Selecione um ano',
        selectYears:100,
  		max:$.now(),
		formatSubmit: 'yyyy-mm-dd',
  		format: 'dd !de mmmm !de yyyy'
    });
    $(document).ready(function() {
      $('select').material_select();
    });
	
/////////////////////////////////

//SCRIPT BUSCA DE FUNCIONARIO

$(document).ready(function() {
		    $('#funcionarioDatatable').DataTable({
			"pageLength": 30,	
			"oLanguage":{
		    "sEmptyTable": "Nenhum registro encontrado",
		    "sInfo": "Mostrando de _START_ até _END_. Total de _TOTAL_ Funcionários",
		    "sInfoEmpty": "Mostrando 0 até 0. Total de 0 Funcionários",
		    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
		    "sInfoPostFix": "",
		    "sInfoThousands": ".",
		    "sLengthMenu": "",
		    "sLoadingRecords": "Carregando...",
		    "sProcessing": "Processando...",
		    "sZeroRecords": "Nenhum funcionário encontrado",
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
		});	
		function visualizarFuncionario(id) { 
			$.ajax({ 
				type: 'get',
				dataType: 'html',
				url: "../request/viewEmployee.php?id=" + id,
				beforeSend: function () { 
				}, 
				success: function (data) { 
					$("#modalEditEmployee").html(data); 
					$( "#modalEditEmployee" ).modal('open');
				} 
			}); 
		}
		
/////////////////////////////////

//SCRIPT BUSCA DE PACIENTE

$(document).ready(function() {
		    $('#pacienteDatatable').DataTable({
			"pageLength": 30,	
			"oLanguage":{
		    "sEmptyTable": "Nenhum registro encontrado",
		    "sInfo": "Mostrando de _START_ até _END_, Total de _TOTAL_ Pacientes",
		    "sInfoEmpty": "Mostrando 0 até 0, Total de 0 Pacientes",
		    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
		    "sInfoPostFix": "",
		    "sInfoThousands": ".",
		    "sLengthMenu": "",
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
			
			}}
			
			);
		});	
		function visualizarPaciente(id) { 
			$.ajax({ 
				type: 'get',
				dataType: 'html',
				url: "../request/viewPatient.php?id=" + id,
				success: function (data) { 
					$("#modalEditPatient").html(data); 
					$( "#modalEditPatient" ).modal('open');
				} 
			}); 
		}
		
/////////////////////////////////