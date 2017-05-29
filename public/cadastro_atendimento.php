<?php
	require_once "cabecalho.php";
	if(isset($_SESSION['hospital'])){
		$hospital = $_SESSION['hospital'];
		$hospital = $hospital->name;
	}else{
		echo "<script>location.href='busca-hospital.php';</script>";
		die();
	}

?>
<head>
<script type="text/javascript">
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('.pacientes').click(function(){
        alert('fsdf');
        var text = $(this).text();
        alert(text);
        $('#patient').val();
    });
  });
    $('#modal1').modal('open');
    $('#modal1').modal('close');
    
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
    <input name="patient" id="patient" oninput="procurar()" aria-controls="example" type="search" required>
	<input name="Idpatient" id="Idpatient" type="hidden" required>
    <label for = "patient">Paciente</label>
    <div id="mostrapaciente" style="position: absolute;background-color: rgba(255,255,255,1);z-index:4;top:46px;width:322px;border-left: 1px solid #aaaaaa;border-right: 1px solid #aaaaaa;border-bottom: 1px solid #aaaaaa;display: none;border-radius: 0px 0px 5px 5px;"></div>
    </div>

    <!--HOSPITAL-->
    <div class="input-field col s5">
    <input name="hospital" id="hospital" style="color: black;border-bottom:1px solid #9e9e9e" aria-controls="example" type="text" value="<?=$hospital?>" required disabled>
    <label for="hospital" style="color: #9e9e9e;">Hospital</label>
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
