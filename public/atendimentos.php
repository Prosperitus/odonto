<?php 
	require_once "cabecalho.php";
?>

  <style>

  #formestilo2 {
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
    margin-top: 50px;
  }
  #botao {
    position:relative;
    padding:6px 15px;
    left:-8px;
    border:2px solid #03a9f4;
    background-color:#03a9f4;
    color:#fafafa;
    margin-top: 50px;
                  
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

  var moodal = document.getElementById("modal1");

  function myFunction() {
    var btn = document.createElement("moodal");
    document.body.appendChild(btn);
    return false
  }

  $(document).ready(function(){
    $('.modal').modal();
  });
    $('#modal1').modal('open');
    $('#modal1').modal('close');

  </script>


<div class="main margemCentro">
	
  <!--SEARCH BAR--> 
  <div class="row">
    <div class="col s8">
      <ul class="right">
        <form id="formestilo">
          <div id="input-field">
              <input id="pesquisa" type="text" placeholder="Is it me you’re looking for?">
              <button id="botao" type="submit">Search</button>
          </div>
        </form>
      </ul>
      <ul class="left">
        <form id="formestilo2">
          <div id="input-field">
            <a id="botao" class="btn waves-effect waves-light light-blue" href="#modal1">Adicionar Cadastro</a>
            <div id="modal1" class="modal modal-fixed-footer">
              <div class="modal-content">
                <h4>Cadastro Atendimento</h4>
                <div class="row margemCentro">
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
                </div>
                <div id="formestilo2">
                  <button class="btn waves-effect waves-light light-blue">Ok</button>
                </div>
              </div>
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


<?php require_once "rodape.php";