<?php
	require_once "cabecalho.php";
?>
<head>
<script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
  });
    $('#modal1').modal('open');
    $('#modal1').modal('close');

  $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        alert("Ready");
        console.log(modal, trigger);
      },
      complete: function() { alert('Closed'); } // Callback for Modal close
    }
  );
   
</script>
</head>
                <body>
                <a class="btn waves-effect waves-light light-blue" href="#modal1" style=" padding: 14px 40px; width: 300px; font-size: 15px; line-height:1;">Add Atendimento</a>
                <div id="modal1" class="modal" style="max-height: 90% margin-bottom: 0px;">
                <div class="modal-content" style="max-height: 90% margin-bottom: 0px;">
                <h4>Cadastro Atendimento</h4>
                <p>
                <!--CLASS/FORM-->
                <div class="row margemCentro">
                <form class="col s11 m12" action="../backend/addAttendance.php" method="post" required>
                </form>
    
               <!--PACIENTE-->
                <div class="input-field col s5">
                <textarea name="patient" aria-controls="example" type="search" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" class="materialize-textarea validate" required></textarea>
                <label for = "patient">Paciente</label> 
                <div style="margin-top: -5px;">
                <a href="cadastro_paciente.php" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons left">add</i></a>
                Adicionar Pacientes
                </div></div>

                <!--HOSPITAL-->
                <div class="input-field col s5">
                <textarea name="hospital" aria-controls="example" type="search"  class="materialize-textarea validate" required></textarea>
                <label for = "hospital">Hospital</label>
                </div>

                <!--UTI-->
                <div class="input-field col s5">
                <textarea name="uti" aria-controls="example" type="search"  class="materialize-textarea validate" required></textarea>
                <label for = "uti">UTI</label>
                </div>

                <!--LEITO-->
                <div class="input-field col s5">
                <textarea name="#" aria-controls="example" type="search" class="materialize-textarea validate" required></textarea>
                <label for = "#">Leito</label>
                </div>

                <!--DATA/ADMISSAO/UTI-->
                <div class="input-field col s5">
                 <i class="material-icons prefix">today</i>
                 <input name="admdate" id="admdate" type="text" class="datepicker" required>
                 <label for="admdate">Data de Admissão na UTI</label>
                 </div>

                <!--MEDICO/RESPONSAVEL-->
                <div class="input-field col s5">
                <textarea name="#" aria-controls="example" type="search" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" class="materialize-textarea validate" required></textarea>
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
                <div class="modal-footer">
                <a href="#!" class="modal-action modal-close btn waves-effect waves-light light-blue">Ok</a>
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
   <script src="../validation/validation.js"></script>
  <script type="text/javascript">
    (function($){
      $(function(){
        $('select').material_select();
        $('.button-collapse').sideNav();
        $('.parallax').parallax();
      }); 
    })(jQuery);
    
    function bloqueio(el) {
      var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
  </script>
