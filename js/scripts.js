//SCRIPT DE CONSULTAR ATENDIMENTO

$(onPageLoad);


  function onPageLoad(){
    $( ".portlet" )
      .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
      .find( ".portlet-header" )
      .addClass( "ui-widget-header ui-corner-all" )
		$(".portlet-content")
			.prepend( "<div><span class='btn btn-small btn-flat waves-effect waves-light' style='float:right'><i class='material-icons'>mode_edit</i></span></div>");
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
    	$("#addUTI").click(function(){
    		$(".utis").append('<div class="input-field col s5">'
            +'<i class="material-icons prefix">business</i>'
            + '<input name="nome_uti[]" id="nome_uti" title="Digite o nome da UTI" type="text" class="validate" required>'
            + '<label for="nome_uti">Nome da UTI</label>'
            + '</div>'
            + '<div class="input-field col s5">'
            + '<i class="material-icons prefix">business</i>'
            +  ' <input name="quantidade_leito_uti[]" id="quantidade_leito_uti" title="Digite quantidade de leito da UTI" type="text" class="validate" required>'
            +  '<label for="quantidade_leito_uti">Quantidade de leito da UTI</label>'
            +'</div>'
    		+'</div>');
    	});
    });
	
/////////////////////////////////

//SCRIPT CADASTRO HOSPITAL UTI

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
			beforeSend: function () {
				$('#boardAttendance').addClass('loader');
			},
			success: function (data) {
				$('#boardAttendance').removeClass('loader');
				$('#boardAttendance').html(data);
			}
        });
	  });
      $("#adicionar").click(function(){
        $.ajax({
			type: 'POST',
			dataType: 'html',
			data: $('#formAddAttendance').serialize(),
			url: "../request/addAttendance.php",
			beforeSend: function () {
				$('#modalCadAttendance').addClass('loader');
			},
			success: function (data) {
				$('#modalCadAttendance').removeClass('loader');
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

  function onPageLoad(){
    $( ".portlet" )
      .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
      .find( ".portlet-header" )
      .addClass( "ui-widget-header ui-corner-all" )
		$(".portlet-content")
			.prepend( "<div><span class='btn btn-small btn-flat waves-effect waves-light' style='float:right'><i class='material-icons'>mode_edit</i></span></div>");
  	};

  $(document).ready(function(){
    $('.modal').modal();
  });
    $('#modalCadAttendance').modal('open');
    $('#modalCadAttendance').modal('close');
	
/////////////////////////////////
