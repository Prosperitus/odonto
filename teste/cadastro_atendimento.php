<?php
	require_once "cabecalho.php";

?>
	<!--CLASS/FORM-->
	<div class="row margemCentro">
      <form class="col s11 m12" action="../backend/addAttendance.php" method="post">

    <!--TITULO-->
    <h3>Cadastro Atendimento</h3>

    <!--PACIENTE-->
    <label for="nome_paciente">Paciente</label>



    <!--HOSPITAL-->


    <!--UTI-->

    <!--DATA/ADMISSAO/UTI-->
    <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input id="data" type="text" class="datepicker" name="admission_date_itu" required>
          <label for="admission_date_itu">Data de Admissão na UTI</label>
        </div>

    <!--MEDICO/RESPONSAVEL-->



    <!--DATA/FINAL-->
    <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input id="data_final" type="text" class="datepicker" name="data_final" required>
          <label for="data_final">Data final do Atendimento</label>
        </div>

    <!--CAUSA/DE/ADMISSAO-->
    <div class="input-field col s5">
          <i class="material-icons prefix">supervisor_account</i>
          <select multiple name="admission_cause" id="causa" required>
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

