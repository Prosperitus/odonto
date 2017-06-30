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

<div id="editAttendanceModal" class="modal">
        <div class="modal-content">
          <h4>'.$attendance->namePatient.' '.$attendance->surnamePatient.'</h4>
          <div>
              <form action="radios">
			    <p>
			      <input name="group1" type="radio" onchange="checkAvaliation()" id="test1" checked/>
			      <label for="test1">Avaliação</label>
			    </p>
			    <div id="checkAvaliation">
			    	<p>
				      
				      <label>exemplo1</label><br>
				      <textarea></textarea>
			    	</p>
			    	<p>
				      <label>exemplo2</label><br>
				      <textarea></textarea>
			    	</p>
			    	<p>
				      <label>exemplo3</label><br>
				      <textarea></textarea>
			    	</p>
			    </div>

			    <p>
			      <input name="group1" type="radio" onchange="checkReavaliation()" id="test2" />
			      <label for="test2">Reavaliação</label>
			    </p>
			    <div id="checkReavaliation">
			    	</div>
			    <p>
			      <input name="group1" type="radio" id="test3"  />
			      <label for="test3">Concluído</label>
			    </p>
			    </p>
			  </form>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Concluído</a>
        </div>
      </div>

<script>
	$(onPageLoad);
</script>
<?php
if($hospital->image == '' || $hospital->image == null){
	?>

	
	<div class="col s6 m4" id="hospitalSelecionado">
		<div>
			<div>
				<img src="../images/hospital 2.jpg" id="imagemHospitalMenor">
				<div style="" id="divHospitalConteudo3">
					<p class="pHospitalConteudo2"><?=$hospital->name?></p>
					<p><label class="lblHospitalConteudo">Nome do chefe da Uti:  </label><label class="lblHospitalConteudo2"><?=$hospital->nome_chefe_uti?></label></p>
					<p><label class="lblHospitalConteudo">Telefone da Uti:  </label><label class="lblHospitalConteudo2"><?=$hospital->telephone_uti?></label></p>
					<p><label class="lblHospitalConteudo">Telefone do chefe da Uti:  </label><label class="lblHospitalConteudo2"><?=$hospital->telephone_chefe_uti?></label></p>
				</div>
			</div>
		</div>
	</div>

		<?php }else{  ?>
			
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

			
		<?php } ?>



	<div id="modalCadPatient" style="width:60%;" class="modal">
        <div class="modal-content">
        </div>
    </div>


  <!--MODAL-->
	<div id="modalCadAttendance" style="width: 60%; z-index: 1003; display: none; opacity: 1; transform: scaleX(1); top: 10%;" class="modal">
        <div class="modal-content">
       	<div class="divModalTitles">
       	<h3 class="center modalTitles">Cadastro de Atendimento</h3>
    </div>

   
  <!--CLASS/FORM-->
   <div class="row">
    <form class="col s11 m12" id="formAddAttendance" autocomplete="off" required>

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
         <input type="submit" value="Cadastrar" id="adicionar" style=" float:left;top:-75px;left:22px">
        <a href="atendimentos.php" id="cancelar" style=" float:right; position:relative; top:-27px;border: 2px solid #03a9f4;background-color: #03a9f4;padding: 6px 15px;color: #fafafa;right:22px">Cancelar</a>
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
			<div class="col s6" style="left:335px;position: relative">
				<input id="pesquisa" type="text">
				<a id="botaoPesquisar" class="btn-floating blue positionStatic"> <i class="material-icons">search</i></a>
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
