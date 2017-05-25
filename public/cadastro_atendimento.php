<?php
	require_once "cabecalho.php";
?>
<head>
<script type="text/javascript">
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
    $('#modal1').modal('open');
    $('#modal1').modal('close');
   
</script>
</head>
<body>
<a class="btn waves-effect waves-light light-blue" href="#modal1">Modal</a>
<div id="modal1" class="modal modal-fixed-footer">
          <div class="modal-content">
       <h4>Cadastro Atendimento</h4>
         <p>
  <!--CLASS/FORM-->
   <div class="row margemCentro">
    <form class="col s11 m12" action="../backend/addAttendance.php" method="post" required>
    </form>
    <!--PACIENTE-->
    <div class="input-field col s5">
    <input name="patient" aria-controls="example" type="search" required>
    <label for = "patient">Paciente</label>
    </div>

    <!--HOSPITAL-->
    <div class="input-field col s5">
    <input name="hospital" aria-controls="example" type="search" required>
    <label for = "hospital">Hospital</label>
    </div>

    <!--UTI-->
    <div class="input-field col s5">
    <input name="uti" aria-controls="example" type="search" required>
    <label for = "uti">UTI</label>
    </div>

    <!--LEITO-->

    <!--DATA/ADMISSAO/UTI-->
    <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
           <input name="admdate" id="admdate" type="text" class="datepicker" required>
          <label for="admdate">Data de Admissão na UTI</label>
        </div>

    <!--MEDICO/RESPONSAVEL-->
     <div class="input-field col s5">
    <input name="#" aria-controls="example" type="search" required>
    <label for ="#">Médico Responsável</label>
    </div>
    

    <!--DATA/FINAL-->
    <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
           <input name="#" id="#" type="text" class="datepicker" required>
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
        </p>
        </div>
          <div class="modal-footer">
            <a href="#!" class="btn waves-effect waves-light light-blue">Ok</a>
          </div>
        </div>
        </body>


    <!--SCRIPSTS-->
  <script>
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
      format: 'dd !de mmmm !de yyyy',
      formatSubmit: 'yyyy-mm-dd'
    });
    $(document).ready(function() {
      $('select').material_select();
    });
      $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
