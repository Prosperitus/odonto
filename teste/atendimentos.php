<?php 
	require_once "cabecalho.php";
?>

  <style>

  #formestilo{
      float: right;
  }



  }

  #formestilo2{
      float: left;
  }



  }

  #formestilo {
                width:500px;
                margin:50px auto;
                 float: right;
               
}
#pesquisa {
                padding:8px 15px;
                background:rgba(50, 50, 50, 0.2);
                border:0px solid #dbdbdb;
                width: 200px;
                height: 23px;
               

                

}
#botao {
                position:relative;
                padding:6px 15px;
                left:-8px;
                border:2px solid #03a9f4;
                background-color:#03a9f4;
                color:#fafafa;
                
}
#botao:hover  {
                background-color:#fafafa;
                color:#207cca;
}

  .tilt {
    transform: rotate(3deg);
    -moz-transform: rotate(3deg);
    -webkit-transform: rotate(3deg);
  }

  body {
    min-width: 520px;
  }

  .column {
    width: 170px;
    float: left;
    padding-bottom: 100px;
  }
  .portlet {
    margin: 0 1em 1em 0;
    padding: 0.3em;
  }
  .portlet-header {
    padding: 0.2em 0.3em;
    margin-bottom: 0.5em;
    position: relative;
  }
  .portlet-toggle {
    position: absolute;
    top: 50%;
    right: 0;
    margin-top: -8px;
  }
  .portlet-content {
    padding: 0.4em;
  }
  .portlet-placeholder {
    border: 1px dotted black;
    margin: 0 1em 1em 0;
    height: 50px;
  }
  </style>


  
  <script>
  $(onPageLoad);

  function onPageLoad()
  {
    /*$( ".column" ).sortable({
      connectWith: ".column",
      handle: ".portlet-header",
      cancel: ".portlet-toggle",
      start: function (event, ui) {
        ui.item.addClass('tilt');
      },
      stop: function (event, ui) {
        ui.item.removeClass('tilt');
      }
    });*/

    $( ".portlet" )
      .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
      .find( ".portlet-header" )
        .addClass( "ui-widget-header ui-corner-all" )
        .prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");

    $( ".portlet-toggle" ).click(function() {
      var icon = $( this );
      icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
      icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
    });
  }
  </script>


<div class="main margemCentro">
	



    <!--SEARCH BAR-->
    
  <div class="row">
          <div class="col s8">
            <ul class="right">
              <form id="formestilo">
              <div>
                <div id="input-field">
                    <input id="pesquisa" type="text" placeholder="Is it me you’re looking for?">
                    <button id="botao" type="submit">Search</button>
                </div>
                </div>
              </form>
            </ul>
            <ul class="left">
              <form id="formestilo2">
              <div>
                <head>
                <!--CADASTRO ATENDIMENTO-->
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
                </div>
                </div>
              </form>
            </ul>

          </div>
        </div>

        






    <!--END SEARCH BAR-->    


    <!-- BOARD-->



  <div class="column col s2 m2">
    <div class="card-panel lighten-2 col s10" >Avaliação</div>
	  <div class="portlet">
	    <div class="portlet-header">Paciente Impaciente</div>
	    <div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>
	  </div>
	  <div class="portlet">
	    <div class="portlet-header">Outro Paciente</div>
	    <div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>
	  </div>
	  <div class="portlet">
	    <div class="portlet-header">Mais um Paciente</div>
	    <div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>
	  </div>
	</div>

	<div class="column col s2 m2">
    <div class="card-panel lighten-2 col s10">Reavaliação</div>
	</div>

	<div class="column col s2 m2">
    <div class="card-panel lighten-2 col s10">Aprovação</div>
	  <div class="portlet">
	    <div class="portlet-header">Bonus Paciente</div>
	    <div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>
	  </div>
	  <div class="portlet">
	    <div class="portlet-header">Paciente Extra</div>
	    <div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>
	  </div>
	</div>

	<div class="column col s2 m2">
    <div class="card-panel lighten-2 col s10">Orçamento</div>
	  <div class="portlet">
	    <div class="portlet-header">Carinha Que Mora Logo Ali</div>
	    <div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>
	  </div>
	  <div class="portlet">
	    <div class="portlet-header">Cebolinha</div>
	    <div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>
	  </div>
	</div>

	<div class="column col s2 m2">
    <div class="card-panel lighten-2 col s10">Acompanhamento</div>
	  <div class="portlet">
	    <div class="portlet-header">Pai do Cebolinha</div>
	    <div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>
	  </div>
	  <div class="portlet">
	    <div class="portlet-header">Justin Bieber</div>
	    <div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>
	  </div>
	</div>

	<div class="column col s2 m2">
    <div class="card-panel lighten-2 col s10">Concluido</div>  
    <div class="portlet">
      <div class="portlet-header">Capitão Caverna</div>
	    <div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>
	  </div>
	  
    <div class="portlet">
	    <div class="portlet-header">He-Man</div>
      <div class="portlet-content">Comentarios e detalhes sobre o paciente.</div>
    </div>	
  </div>
</div>

<!--SCRIPTS-->
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


<?php require_once "rodape.php";


