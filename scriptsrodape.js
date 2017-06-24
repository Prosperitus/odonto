

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
		function visualizarFuncionario(id) { 
			$.ajax({ 
				type: 'get',
				dataType: 'html',
				url: "../request/viewEmployee.php?id=" + id,
				beforeSend: function () { 
				}, 
				success: function (data) { 
					$("#dialogEmployee").html(data); 
					$( "#dialogEmployee" ).dialog('open');
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
		     $( "#dialogPatient" ).dialog({
				width: 500,
				autoOpen: false,modal: true,
				buttons: {
					Excluir: function(){
						$( "#dialogPatient" ).dialog('close');
						},
					Editar: function(){
						$( "#dialogPatient" ).dialog('close');
					},
					Fechar: function() {
						$( "#dialogPatient" ).dialog('close');
					}
				}
			});
		});	
		function visualizarPaciente(id) { 
			$.ajax({ 
				type: 'get',
				dataType: 'html',
				url: "../request/viewPatient.php?id=" + id,
				success: function (data) { 
					$("#dialogPatient").html(data); 
					$( "#dialogPatient" ).dialog('open');
				} 
			}); 
		}
		
/////////////////////////////////