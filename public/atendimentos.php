<?php
	require_once "cabecalho.php";

	require_once "../database/dbhospital.php";
	require_once "../database/dbattendance.php";
	require_once "../backend/prepareAttendance.php";
	
	$hospital = "";
	if(isset($_SESSION['hospital'])){
		$hospital = $_SESSION['hospital'];
		$hospitalName = $hospital->name;
		$db = new DbHospital();
		$utis = $db->search_uti($hospital->id);
	}else{
		echo "<script>location.href='busca-hospital.php';</script>";
		die();
	}
		$db = new DbAttendance();
		$attendances = $db->searchAttendanceAll($hospital->id);
		if($attendances != null || $attendances != false){
			foreach($attendances as $attendance){
				echo prepareAttendance($attendance);
			}
		}

?>

     <div class="col s6 m4" style="width: 600px;height:100px;margin-bottom:10px;left: 14%;position:relative;margin-left:1px;top:15px">
        <div>
          <div>
            <img src="../images/hospital 2.jpg" style="height: 100px;width: 100px;">
           
      <div style="left: 110px;top: -113px;position:relative;height:auto">
      <p style="font-size: 15px;font-weight:bold;margin-bottom:0px"><?=$hospital->name?></p>
      <p style="margin-top:0px;"><label style="font-size: 10px;color:black;font-weight:bold;margin-right:2px;">Nome do chefe da Uti:  </label><label style="font-size: 10px;color:black"><?=$hospital->nome_chefe_uti?></label></p>
      <p><label style="font-size: 10px;color:black;font-weight:bold;margin-right:2px">Telefone da Uti:  </label><label style="font-size: 10px;color:black"><?=$hospital->telephone_uti?></label></p>
      <p><label style="font-size: 10px;color:black;font-weight:bold;margin-right:2px">Telefone do chefe da Uti:  </label><label style="font-size: 10px;color:black"><?=$hospital->telephone_chefe_uti?></label></p>
      
      </div>
          </div>
    
        </div>
      </div>

<script>
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
			url: "../backend/consultAttendance.php?text="+text,
			success: function (data) {
				$('#boardAttendance').html(data);
			}
        });
	  });
      $("#adicionar").click(function(){
        $.ajax({
			type: 'POST',
			dataType: 'html',
			data: $('#formAddAttendance').serialize(),
			url: "../backend/addAttendance.php",
			success: function (data) {
				$('#modal1').modal('close');
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
			url: "../backend/viewLeitoUti.php?id=" + value,
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
        url: "../backend/viewAtendenceUser.php?name=" + value,
        beforeSend: function () {
        },
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

      function procurar() {
      value = $('#patient').val();
      if(value != ""){
      $.ajax({
        type: 'get',
        dataType: 'html',
        url: "../backend/viewAtendencePatient.php?name=" + value,
        beforeSend: function () {
        },
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

	$(onPageLoad);


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
    $('#modal1').modal('open');
    $('#modal1').modal('close');
</script>
  <style>
	.btn-small {
    height: 24px;
    line-height: 24px;
    padding: 0 0.5rem;
	}
  #formestilo2 {
    float: left;
  }
  }
  #formestilo {
    float: right;
  }
  #pesquisa {
    padding:8px 15px;
    background:rgba(50, 50, 50, 0.2);
    border:0px solid #dbdbdb;
    width: 200px;
    height: 23px;
    margin-top: 50px;
  }
  #botao {
    position:relative;
    padding:6px 15px;
    left:-4px;
    border:2px solid #03a9f4;
    background-color:#03a9f4;
    color:#fafafa;
    margin-top: 50px;
  }
  
  #botaoPesquisar {
    position:relative;
    padding:6px 15px;
    left:-4px;
    border:2px solid #03a9f4;
    background-color:#03a9f4;
    color:#fafafa;
    margin-top: 50px;
  }
  
  #botaoAddAttendance {
    position:relative;
    padding:6px 15px;
    left:-4px;
    border:2px solid #03a9f4;
    background-color:#03a9f4;
    color:#fafafa;
    margin-top: 50px;
  }
  
	#adicionar {
    position:relative;
    padding:6px 15px;
    left:-4px;
    border:2px solid #03a9f4;
    background-color:#03a9f4;
    color:#fafafa;
    margin-top: 50px;
  }
	#adicionar:hover  {
    background-color:#fafafa;
    color:#207cca;
  }
	#botao:hover  {
    background-color:#fafafa;
    color:#207cca;
  }
  
  #botaoPesquisar:hover  {
    background-color:#fafafa;
    color:#207cca;
  }
  
  #botaoAddAttendance:hover  {
    background-color:#fafafa;
    color:#207cca;
  }

  body {
    min-width: 520px;
  }

  .column {
    width: 170px;
    float: left;
    padding-bottom: 100px;
  }
  .portlet {
    margin: 0 1em 1em 0;
    padding: 0.3em;
  }
	.column-title{
	margin: 0 1em 1em 0;
	padding: 0.3em;
	}
  .portlet-header {
    padding: 0.2em 0.3em;
    margin-bottom: 0.5em;
    position: relative;
  }
  .portlet-content {
    padding: 0.4em;
  }
  .portlet-placeholder {
    border: 1px dotted black;
    margin: 0 1em 1em 0;
    height: 50px;
  }
  </style>

  <!--MODAL-->
<div id="modal1" style="width:60%;" class="modal">
          <div class="modal-content">
       <h4 class="center">Cadastro Atendimento</h4>
   
  <!--CLASS/FORM-->
   <div class="row">
    <form class="col s11 m12" id="formAddAttendance" required>

    <!--PACIENTE-->
    <div class="input-field col s6">
    <input name="patient" id="patient" oninput="procurar()" aria-controls="example" type="text" required>
	<input name="Idpatient" id="Idpatient" type="hidden" required>
    <label for = "patient">Paciente</label>
    <div id="mostrapaciente" class="spacewhite"></div>
    </div>

    <!--HOSPITAL-->
    <div class="input-field col s6">
    <input name="hospital" id="hospital" style="border-bottom: 1px solid #9e9e9e;color:inherit;" aria-controls="example" type="text" value="<?=$hospitalName?>" required disabled>
    <label for="hospital" style="color: #9e9e9e;">Hospital</label>
    </div>

    <!--UTI-->
    <div class="input-field col s6">
  <select name="uti" id="uti">
  <option value="n" disabled selected>UTI</option>
    <?php foreach($utis as $uti){?>
    <option value="<?=$uti->id?>"><?=$uti->name_itu?></option>
  <?php } ?>
  </select>
    <label for = "uti">UTI</label>
    </div>

    <!--LEITO-->
    <div class="input-field col s6">
    <select name="leito" id="leito">
  <option value="n" disabled selected>Leito</option>
  </select>
    <label for="leito">Leito</label>
    </div>

    <!--DATA/ADMISSAO/UTI-->
    <div class="input-field col s6">
           <input name="admdate" id="admdate" type="text" class="datepicker" required>
          <label for="admdate">Data de Admissão na UTI</label>
        </div>

    <!--CAUSA/DE/ADMISSAO-->
    <div class="input-field col s6">
          <select multiple name="admcause" id="admcause" required>
            <option value="n" disabled selected>Causa de admissão</option>
            <option value="1">Oncológico</option>
            <option value="2">Cardiopatia</option>
            <option value="3">Cirurgia</option>
            <option value="4">Paliativo</option>
            <option value="5">Urgente</option>
            <option value="6">Quimioterapia</option>
            <option value="7">Pulmonar</option>
            <option value="8">IRC</option>
            <option value="9">Neuropata</option>
          </select>
        </div>

          <!--MEDICO/RESPONSAVEL-->
    <div class="input-field col s6">
    <input name="user" id="user" oninput="procurarUser()" aria-controls="example" type="text" required>
    <input name="Iduser" id="Iduser" type="hidden" required>
    <label for = "user">Médico Responsável</label>
    <div id="mostramedico" class="spacewhite"></div>
    </div>
	
	     <!--OBSERVAÇÕES/PACIENTE-->
	<div class="input-field col s6">
	<textarea placeholder="Comentarios e detalhes sobre o paciente" style="height: 70px" id="obsPaciente" name="obsPaciente" required></textarea>
    </div>
		<div >
			<button id="adicionar" style="margin:5%; margin-top:2%">Cadastrar</button>
		</div>
				
        </div>
    </div>
    </div>
    </form>
    <!--FIM-DO-MODAL-->


<div class="main margemCentro">
  <!--SEARCH BAR-->
  <div class="row col s12">
			<ul>
				<div class="col s4" style="float:left">
					<a href="#modal1"><button id="botaoAddAttendance">Adicionar Cadastro</button></a>
				</div>
				<div class="col s6" style="float:right">
					<input id="pesquisa" type="text">
					<button id="botaoPesquisar">Pesquisar</button>
				</div>
			</ul>
  </div>


  <!-- BOARD-->
<div class="col s12" id="boardAttendance">
  <div class="column col s2 m2" id="avaliacao">
    <div class="portlet column-title lighten-2 col s10 center" >Avaliação</div>
	</div>

	<div id="conteudo" class="column col s2 m2" id="reavaliacao">
    <div class="portlet column-title lighten-2 col s10 center">Reavaliação</div>
	</div>

	<div class="column col s2 m2" id="aprovacao">
    <div class="portlet column-title lighten-2 col s10 center">Aprovação</div>
	</div>

	<div class="column col s2 m2" id="orcamento">
    <div class="portlet column-title lighten-2 col s10 center">Orçamento</div>
	</div>

	<div class="column col s2 m2" id="acompanhamento">
    <div class="portlet column-title lighten-2 col s10 center">Acompanhamento</div>
	</div>

	<div class="column col s2 m2" id="concluido">
    <div class="portlet column-title lighten-2 col s10 center">Concluído</div>
  </div>
</div>

</div>

<?php require_once "rodape.php";
