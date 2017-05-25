<?php
	require_once "cabecalho.php";
  require_once "addAttendance.php";


?>
	<!--CLASS/FORM-->
	<div class="row margemCentro">
      <form class="col s11 m12" action="../backend/addAttendance.php" method="post" required>

    <!--TITULO-->
    <h3>Cadastro Atendimento</h3>

    <!--PACIENTE-->
    <div class="input-field col s5">
    <label for = "patient">Paciente</label>
    <input class="" placeholder="" aria-controls="example" type="search" required>
    </div>

    <!--HOSPITAL-->


    <!--UTI-->

    <!--DATA/ADMISSAO/UTI-->
    <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input id="admdate" type="text" class="datepicker" name="admdate" required>
          <label for="admdate">Data de Admissão na UTI</label>
        </div>

    <!--MEDICO/RESPONSAVEL-->
     <div class="input-field col s5">
    <label for ="#">Médico Responsável</label>
    <input class="" placeholder="" aria-controls="example" type="search" required>
    </div>
    

    <!--DATA/FINAL-->
    <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input id="#" type="text" class="datepicker" name="#" required>
          <label for="#">Data final do Atendimento</label>
        </div>

    <!--CAUSA/DE/ADMISSAO-->
    <div class="input-field col s5">
          <i class="material-icons prefix">supervisor_account</i>
          <select multiple name="admcause" id="admcause" required>
            <option value="" disabled selected>Causa de admissão</option>
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
<?php require_once "rodape.php"; ?>