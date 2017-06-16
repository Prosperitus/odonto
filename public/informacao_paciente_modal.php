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
<div style="width:900px; height:700px;" id="modal1" class="modal modal-fixed-footer">
          <div style="width:900px; height:700px;" class="modal-content">
      
      <div style="background-color: #03a9f4;">
      <div style="display:inline-block;">
      <h4 style=" font-size:30px; text-align: center; margin:20px;color:white;">Alvin's Card</h4>
      </div>
      <div style="display:inline-block; margin:20px;float: right;">
      <a style="width:50% height:50%" class="btn-floating btn-medium waves-effect waves-light light-blue darken-2"><i style="width:10% height:10%"" class="material-icons">mode_edit</i></a>
      </div>
      </div>

          <!--Foto-->

        <div class="col s12" style=" height:130px; background-color: #f5f5f5;">
        <div class="col s12">
        <img  style="width:100px; margin:15px;display:inline-block;" src="../images/paciente.jpg" alt="" class="circle responsive-img col s6"> <!-- notice the "circle" class -->
         </div> 
        </div>
     
  <!--CLASS/FORM-->
   <div style="background-color: #f5f5f5;" class="row">
    <form class="col s12 m12" action="../backend/addAttendance.php" method="post" required>
    </form>


    <!--PACIENTE-->


    <div class="input-field col s6">
      <input style="color: #5e5e5e;border-bottom:1px solid #26a69a;" value="Alvin" id="first_name2" type="text" class="validate" disabled>
      <label style="color: #26a69a;" class="active" for="first_name2">First Name</label>
    </div>
 


    <div class="input-field col s6">
      <input style="color: #5e5e5e;border-bottom:1px solid #26a69a" value="Fields" id="second_name" type="text" class="validate" disabled>
      <label style="color: #26a69a;" class="active" for="second_name">Second Name</label>
    </div>
 

        
    <!--HOSPITAL-->
   
    <div class="input-field col s6">
      <input style="color: #5e5e5e;border-bottom:1px solid #26a69a" value="Santa Helena" id="hospital" type="text" class="validate" disabled>
      <label style="color: #26a69a;" class="active" for="hospital">Hospital</label>
    </div>

    <!--UTI-->
    <div class="input-field col s6">
      <input style="color: #5e5e5e;border-bottom:1px solid #26a69a" value="2" id="uti" type="text" class="validate" disabled>
      <label style="color: #26a69a;" class="active" for="uti">UTI</label>
    </div>
    <!--LEITO-->
    <div class="input-field col s6">
      <input style="color: #5e5e5e;border-bottom:1px solid #26a69a" value="3" id="leito" type="text" class="validate" disabled>
      <label style="color: #26a69a;" class="active" for="leito">Leito</label>
    </div>

    <!--DATA/ADMISSAO/UTI-->
    <div class="input-field col s6">
           <input style="color: #5e5e5e;border-bottom:1px solid #26a69a" value="02/10/1988" name="admdate" id="admdate" type="text" class="datepicker" required disabled>
          <label style="color: #26a69a;" class="active" for="admdate">Data de Admissão na UTI</label>
        </div>

    <!--MEDICO/RESPONSAVEL-->
     <div class="input-field col s6">
      <input style="color: #5e5e5e;border-bottom:1px solid #26a69a" value="Rodrigo da Silva" id="medicoresponsavel" type="text" class="validate" disabled>
      <label style="color: #26a69a;" class="active" for="medicoresponsavel">Medico Responsavel</label>
    </div>
    

    <!--DATA/FINAL-->
    <div class="input-field col s6">
           <input style="color: #5e5e5e;border-bottom:1px solid #26a69a" value="02/10/2016" name="admdate" id="enddate" type="text" class="datepicker" required disabled>
          <label style="color: #26a69a;" class="active" for="enddate">Data Final do Atendimento</label>
        </div>



    <!--CAUSA/DE/ADMISSAO-->
    <div class="input-field col s6">
     <label style="color: #26a69a;" class="active" for="enddate">Causa de admissão</label>
          <select multiple name="admcause" id="admcause" required disabled>
            <option style="color: #5e5e5e;" value="Perca de molar" selected>Causa de admissão</option>
            <option style="color: #5e5e5e;" value="1">Oncológico</option>
            <option style="color: #5e5e5e;" value="2">Cardiopatia</option>
            <option style="color: #5e5e5e;"  value="3">Cirurgia</option>
            <option style="color: #5e5e5e;" value="4">Paliativo</option>
            <option style="color: #5e5e5e;" value="5">Urgente</option>
            <option style="color: #5e5e5e;"  value="6">Quimioterapia</option>
            <option style="color: #5e5e5e;" value="7">Pulmonar</option>
            <option style="color: #5e5e5e;" value="8">IRC</option>
            <option style="color: #5e5e5e;" value="9">Neuropata</option>
          </select>
        </div>
        </p>
        </div>
             <button   class="btn waves-effect waves-light light-blue">Salvar</button>
       
       
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
