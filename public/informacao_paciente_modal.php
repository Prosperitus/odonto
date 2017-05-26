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
       <h4>Card</h4>
         <p>
  <!--CLASS/FORM-->
   <div class="row margemCentro">
    <form class="col s11 m12" action="../backend/addAttendance.php" method="post" required>
    </form>
    <!--PACIENTE-->
 

    <div class="input-field col s5">
      <input value="Alvin" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">First Name</label>
    </div>
 


    <div class="input-field col s5">
      <input value="Fields" id="second_name" type="text" class="validate">
      <label class="active" for="second_name">Second Name</label>
    </div>
 

        
    <!--HOSPITAL-->
   
    <div class="input-field col s5">
      <input value="Santa Helena" id="hospital" type="text" class="validate">
      <label class="active" for="hospital">Hospital</label>
    </div>

    <!--UTI-->
    <div class="input-field col s5">
      <input value="2" id="uti" type="text" class="validate">
      <label class="active" for="uti">UTI</label>
    </div>
    <!--LEITO-->
    <div class="input-field col s5">
      <input value="3" id="leito" type="text" class="validate">
      <label class="active" for="leito">Leito</label>
    </div>

    <!--DATA/ADMISSAO/UTI-->
    <div class="input-field col s5">
           <input value="02/10/1988" name="admdate" id="admdate" type="text" class="datepicker" required>
          <label class="active" for="admdate">Data de Admissão na UTI</label>
        </div>

    <!--MEDICO/RESPONSAVEL-->
     <div class="input-field col s5">
      <input value="Rodrigo da Silva" id="medicoresponsavel" type="text" class="validate">
      <label class="active" for="medicoresponsavel">Medico Responsavel</label>
    </div>
    

    <!--DATA/FINAL-->
    <div class="input-field col s5">
           <input value="02/10/2016" name="admdate" id="enddate" type="text" class="datepicker" required>
          <label class="active" for="enddate">Data Final do Atendimento</label>
        </div>



    <!--CAUSA/DE/ADMISSAO-->
    <div class="input-field col s5">
     <label class="active" for="enddate">Causa de admissão</label>
          <select multiple name="admcause" id="admcause" required>
            <option value="Perca de molar" disabled selected>Causa de admissão</option>
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

        
          <div>
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
