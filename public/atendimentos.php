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
    left:-4px;
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

  function onPageLoad(){
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
  };

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
            <input id="pesquisa" type="text">
						<button id="botao" type="submit">Pesquisar</button>
          </div>
        </form>
      </ul>
      <ul>
        <form id="formestilo2">
          <div id="input-field">
            <a id="botao" class="left" href="#modal1">Adicionar Cadastro</a>
            <div id="modal1" class="modal ">
              <div class="modal-content">
								<div class="center">
									<h4>Cadastro de Atendimento</h4>
								</div>
                <div class="row col s11">

									<!--PACIENTE-->
                  <div class="input-field col s6">
                    <input name="patient" id="patient" aria-controls="example" type="search" required>
                    <label for="patient">Paciente</label>
                  </div>

                  <!--HOSPITAL-->
									<div class="input-field col s6">
                    <input name="hosp" id="hosp" aria-controls="example" type="search" required>
                    <label for = "hosp">Hospital</label>
                  </div>

                  <!--UTI-->
                  <div class="input-field col s6">
                    <input name="uti" id="uti" aria-controls="example" type="search" required>
                    <label for = "uti">UTI</label>
                  </div>

                  <!--MEDICO/RESPONSAVEL-->
                  <div class="input-field col s6">
                    <input name="medresponsavel" id="medresponsavel" aria-controls="example" type="search" required>
                    <label for ="medresponsavel">Médico Responsável</label>
                  </div>

                  <!--DATA/ADMISSAO/UTI-->
                  <div class="input-field col s6">
                    <input name="admdate" id="admdate" type="text" class="datepicker" required>
                    <label for="admdate">Data de admissão na UTI</label>
                  </div>

                  <!--DATA/FINAL-->
                  <div class="input-field col s6">
                     <input name="finaldate" id="finaldate" type="text" class="datepicker" required>
                    <label for="finaldate">Data final do atendimento</label>
                  </div>

                  <!--CAUSA/DE/ADMISSAO-->
                  <div class="input-field col s6">
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
										<button id="botao" class="formestilo" style="margin-top:0px">Ok</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </ul>
    </div>
  </div>


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
