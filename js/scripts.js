//SCRIPT DE CONSULTAR ATENDIMENTO

$(onPageLoad);


  function onPageLoad(){
    $( ".portlet" )
      .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
      .find( ".portlet-header" )
      .addClass( "ui-widget-header ui-corner-all" )
  	};
	
/////////////////////////////////

//SCRIPT INICIALIZACAO DE FRAMEWORKS

(function($){
          $(function(){
              $('select').material_select();
              $('.button-collapse').sideNav();
              $('.parallax').parallax();
          });
      })(jQuery);
	  
/////////////////////////////////

//SCRIPT CADASTRO HOSPITAL

$(document).ready(function(){
	  var index = 0;
  	$("#addUTI").click(function(){
  		$(".utis").append('<div class="uti"><div class="input-field col s5">'
        +'<i class="material-icons prefix">business</i>'
        + '<input name="nome_uti[]" id="nome_uti" title="Digite o nome da UTI" type="text" class="validate" required>'
        + '<label for="nome_uti">Nome da UTI</label>'
        + '</div>'
        + '<div class="input-field col s5">'
        + '<i class="material-icons prefix">business</i>'
        + ' <input name="quantidade_leito_uti[]" id="quantidade_leito_uti" title="Digite quantidade de leito da UTI" type="text" class="validate" required>'
        + '<label for="quantidade_leito_uti">Quantidade de leito da UTI</label>'
        +'</div>'
  	    +'</div></div>');
  	});
	$("#delUTI").click(function(){
  		$(".utis .uti:last").remove();
  	});
  });
	
/////////////////////////////////

//SCRIPT CADASTRO PACIENTE

function bloqueio(el) {
      var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
	
/////////////////////////////////

//SCRIPT ATENDIMENTO

$(document).ready(function(){

	$('#btnAddPatientModal').click(function(){
		$('#modalCadPatient').modal('close');
        $('#modalCadAttendance').modal('open');
		$.ajax({
            type: 'POST',
            data: $('#formAddPatient').serialize(),
            url: '../request/addPatientModal.php',
            dataType: 'html',
            success: function(data) {
            }
        });
	});

	$("#btnAddPatient").click(function(){
	$.ajax({
            type: 'GET',
            url: 'cadastro_paciente_modal.php',
            dataType: 'html',
            success: function(data) {
                $('#modalCadAttendance').modal('close');
                $('#modalCadPatient').html(data);
                $('#modalCadPatient').modal('open');
            }
        });
	});



	$("#btnAddBackAttendance").click(function(){
	$.ajax({
            type: 'GET',
            url: 'atendimentos.php',
            dataType: 'html',
            success: function(data) {

                
                $('#modalCadPatient').modal('close');
                $('#modalCadAttendance').modal('open');
            }
        });
	});



	
	  $('#botaoAddAttendance').click(function(){
		  $('#Idpatient').val('');
		  $('#patient').val('');
		  $('#obsPaciente').val('');
		  $('#admdate').val('');
		  $('#Iduser').val('');
		  $('#user').val('');
		  $('#mostrapaciente').html('');
		  $('#mostramedico').html('');
          $('#mostrapaciente').css('display','none');
		  $('#mostramedico').css('display','none');
	  });
	
	  $("#botaoPesquisar").click(function(){
		  var text = $('#pesquisa').val();
		  $.ajax({
			type: 'get',
			dataType: 'html',
			url: "../request/viewAttendance.php?text="+text,
			success: function (data) {
				$('#boardAttendance').removeClass('loader');
				$('#boardAttendance').html(data);
			}
        });
	  });
      $("#formAddAttendance").submit(function(){
        $.ajax({
			type: 'POST',
			dataType: 'html',
			data: $('#formAddAttendance').serialize(),
			url: "../request/addAttendance.php",
			success: function (data) {
				$('#modalCadAttendance').modal('close');
				$("#avaliacao").append(data);
			}
        });
		});

    $('.modal').modal();
    $('.pacientes').click(function(){
        var text = $(this).text();
        $('#patient').val();
    });
	$('#uti').change(function(){
		value = $('#uti').val();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: "../request/searchBed.php?id=" + value,
			success: function (data) {
			  $('#leito').html(data);
			  $('select').material_select();
			}
        });
	});
});

	function procurarUser() {
      value = $('#user').val();
      if(value != ""){
      $.ajax({
        type: 'get',
        dataType: 'html',
        url: "../request/searchEmployee.php?name=" + value,
        success: function (data) {
          $('#mostramedico').css('display','block');
          $('#mostramedico').html(data);
        }
      });
      }else{
        $('#mostramedico').css('display','none');
        $('#mostramedico').html("");
      }
    }

      function procurarPaciente() {
      value = $('#patient').val();
      if(value != ""){
      $.ajax({
        type: 'get',
        dataType: 'html',
        url: "../request/searchPatient.php?name=" + value,
        success: function (data) {
          $('#mostrapaciente').css('display','block');
          $('#mostrapaciente').html(data);
        }
      });
      }else{
        $('#mostrapaciente').css('display','none');
        $('#mostrapaciente').html("");
      }
    }
    function clickpaciente(text,id){
        $('#patient').val(text);
		$('#Idpatient').val(id);
        $('#mostrapaciente').css('display','none');
    };

	function clickmedico(text,id){
        $('#user').val(text);
		$('#Iduser').val(id);
        $('#mostramedico').css('display','none');
    };

  $(document).ready(function(){
    $('.modal').modal();
  });
    $('#modalCadAttendance').modal('open');
    $('#modalCadAttendance').modal('close');
	
/////////////////////////////////

//SCRIPT EDITAR E EXCLUIR HOSPITAL

	function buscarHospital(id){
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: "../request/searchHospital.php?id=" + id,
			success: function (data) {
			  var dataJson = $.parseJSON(data);
			  $('#modalEditHospital #nome_hospital').val('');
			  $('#modalEditHospital #id_hospital').val('');
			  $('#modalEditHospital #telefone_uti').val('');
			  $('#modalEditHospital #telefone_chefe_uti').val('');
			  $('#modalEditHospital #nome_chefe_uti').val('');
			  $('#modalEditHospital #file_path').val('');
			  $('#modalEditHospital #image_path').val('');
			  $('#modalEditHospital #image_path_hidden').val('');
			  $('#modalEditHospital #nome_hospital').focusin();
			  $('#modalEditHospital #telefone_uti').focusin();
			  $('#modalEditHospital #telefone_chefe_uti').focusin();
			  $('#modalEditHospital #nome_chefe_uti').focusin();
			  $('#modalEditHospital #nome_hospital').val(dataJson['name']);
			  $('#modalEditHospital #id_hospital').val(dataJson['id']);
			  $('#modalEditHospital #telefone_uti').val(dataJson['telephone_uti']);
			  $('#modalEditHospital #telefone_chefe_uti').val(dataJson['telephone_chefe_uti']);
			  $('#modalEditHospital #nome_chefe_uti').val(dataJson['nome_chefe_uti']);
			  $('#modalEditHospital #image_path').val(dataJson['image']);
			  $('#modalEditHospital #image_path_hidden').val(dataJson['image']);
			}
		});
	}
	
		function buscarHospitalName(id){
			$.ajax({
				type: 'get',
				dataType: 'html',
				url: "../request/searchHospitalName.php?id=" + id,
				success: function (data) {
				  var dataJson = $.parseJSON(data);
				  $('#lblDeleteHospital').html('Deseja Realmente excluir o hospital '+dataJson['name']+'?');
				  $('#idHospitalExcluir').val(dataJson['id']);
				}
			});
		}
	$(document).ready(function(){
		$('#formEditHospital').on('submit',function(e){
			e.preventDefault();
			$.ajax({
				type: 'POST',
				dataType: 'html',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				url: "../request/editHospital.php",
				success: function (data) {
					$('#boardHospitais').html(data);
					$('#modalEditHospital').modal('close');
				}
			});
		});
		$('#yesDeleteHospital').click(function(){
			var id = $('#idHospitalExcluir').val();
			$.ajax({
				type: 'GET',
				dataType: 'html',
				url: "../request/deleteHospital.php?id="+id,
				success: function (data) {
					$('#boardHospitais').html(data);
				}
			});
		});
	});

	
/////////////////////////////////

//SCRIPT CABECALHO

	function expireSessoes(){
		$.ajax({
			type: 'GET',
			dataType: 'html',
			url: "../request/logout.php",
			success: function (data) {
				$('#modalReLogin').modal('open');
			}
		});
		
	}

