<?php
	require_once "cabecalho.php";

	require_once "../database/hospital.php";
	require_once "../database/attendance.php";
	require_once "../controller/attendance.php";
	require_once "../controller/uti.php";
	require_once "../controller/session.php";
	
	$hospital = "";
	
	// BUSCANDO HOSPITAL SELECIONADO E SEPARANDO SEU NOME
	$session = new Session();
	$hospital = $session->sessionHospital();
	$hospitalName = $hospital->name;
	
	// USANDO HOSPITAL SELECIONADO PARA BUSCAR UTIS
	$utiController = new UtiController();
	$utis = $utiController->returnUtis($hospital);

	// BUSCANDO TODOS ATENDIMENTOS CADASTRADOS
	$attendanceController = new AttendanceController();
	$attendances = $attendanceController->searchAll($hospital);

?>

<script>
	$(onPageLoad);
</script>

<div class="col s6 m4" style="width: 600px;height:200px;margin-bottom:10px;left: 14%;position:relative;margin-left:1px;top:25px">
        <div>
          <div>
            <img src="../images/hospital 2.jpg" style="height: 150px;width: 150px;">
           
      <div style="left: 163px;top: -170px;position:relative;height:auto">
      <p style="font-size: 22px;font-weight:bold;margin-bottom:0px; color:#046B64;"><?=$hospital->name?></p>
      <p style><label style="font-size: 15px;color:black;font-weight:bold;margin-right:2px;">Nome do chefe da Uti:  </label><label style="font-size: 15px;color:black"><?=$hospital->nome_chefe_uti?></label></p>
      <p><label style="font-size: 15px;color:black;font-weight:bold;margin-right:2px">Telefone da Uti:  </label><label style="font-size: 15px;color:black"><?=$hospital->telephone_uti?></label></p>
      <p><label style="font-size: 15px;color:black;font-weight:bold;margin-right:2px">Telefone do chefe da Uti:  </label><label style="font-size: 15px;color:black"><?=$hospital->telephone_chefe_uti?></label></p>
      
      </div>
          </div>
    
        </div>
      </div>

  <!--MODAL-->
<div id="modalCadAttendance" style="width:60%;" class="modal">
          <div class="modal-content">
       <h4 class="center">Cadastro Atendimento</h4>
   
  <!--CLASS/FORM-->
   <div class="row">
    <form class="col s11 m12" id="formAddAttendance" required>

    <!--PACIENTE-->
    <div class="input-field col s6">
    <input name="patient" id="patient" oninput="procurarPaciente()" aria-controls="example" type="text" required>
	<input name="Idpatient" id="Idpatient" type="hidden" required>
    <label for = "patient">Paciente</label>
    <div id="mostrapaciente" class="spacewhite"></div>
	<a class="waves-effect waves-light btn-small" href="cadastro_paciente.php">Adicionar Paciente</a>
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
			<option value="n" disabled selected>Condição Sistêmica</option>
			<option value="1">Oncológico</option>
			<option value="2">Cardiopatia</option>
			<option value="3">Paliativo</option>
			<option value="4">Urgente</option>
			<option value="5">Quimioterapia</option>
			<option value="6">Pulmonar</option>
			<option value="7">IRC</option>
			<option value="8">Neuropata</option>
		</select>
    </div>

          <!--MEDICO/RESPONSAVEL-->
    <div class="input-field col s6">
    <input name="user" id="user" oninput="procurarUser()" aria-controls="example" type="text" required>
    <input name="Iduser" id="Iduser" type="hidden" required>
    <label for = "user">Médico Responsável</label>
    <div id="mostramedico" class="spacewhite"></div>
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
				<a href="#modalCadAttendance"><button id="botaoAddAttendance">Adicionar Cadastro</button></a>
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
