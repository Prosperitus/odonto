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


<div class="col s6 m4" id="hospitalSelecionado">
    <div>
        <div>
            <img src="<?=$hospital->image?>" id="imagemHospitalMenor">
			<div style="" id="divHospitalConteudo3">
				<p class="pHospitalConteudo2"><?=$hospital->name?></p>
				<p><label class="lblHospitalConteudo">Nome do chefe da Uti:  </label><label class="lblHospitalConteudo2"><?=$hospital->nome_chefe_uti?></label></p>
				<p><label class="lblHospitalConteudo">Telefone da Uti:  </label><label class="lblHospitalConteudo2"><?=$hospital->telephone_uti?></label></p>
				<p><label class="lblHospitalConteudo">Telefone do chefe da Uti:  </label><label class="lblHospitalConteudo2"><?=$hospital->telephone_chefe_uti?></label></p>
			</div>
        </div>
    
    </div>
</div>

	<div id="modalCadPatient" style="width:60%;" class="modal">
        <div class="modal-content">
        </div>
    </div>


  <!--MODAL-->
	<div id="modalCadAttendance" style="width:60%;" class="modal">
        <div class="modal-content">
       	<div style="height:80px;background-color: #03a9f4; margin-bottom:50px;">
       	<h3 style=" font-size:40px; text-align: center;color:white; padding:20px;" class="center">Cadastro de Atendimento</h3>
    </div>

   
  <!--CLASS/FORM-->
   <div class="row">
    <form class="col s11 m12" id="formAddAttendance" required>

    <!--PACIENTE-->
    <div class="input-field col s6">
    <input name="patient" id="patient" oninput="procurarPaciente()" aria-controls="example" type="text" required>
	<input name="Idpatient" id="Idpatient" type="hidden" required>
    <label for = "patient">Paciente</label>
    <div id="mostrapaciente" class="spacewhite"></div>
	<a class="waves-effect waves-light btn-small" id="btnAddPatient" >Adicionar Paciente</a>
   

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
		<select multiple name="admcause[]" id="admcause" required>
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
		</div>
        </div>
        <button id="adicionar" style=" float:left; margin:2%; margin-top:2%">Cadastrar</button>
        <a href="atendimentos.php" id="adicionar" style=" float:right; position:relative; top:-27px; ">Cancelar</a>
    </div>
    </div>

    </form>
    <!--FIM-DO-MODAL-->


<div class="main margemCentro">

  <!--SEARCH BAR-->
	<div class="row col s12">
		<ul>
			<div class="col s4" style="float:left">
				<a href="#modalCadAttendance"><button id="botaoAddAttendance">Cadastrar Atendimento</button></a>
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
