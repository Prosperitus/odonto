<?php 
	require_once "cabecalho.php";
	
	if(isset($_SESSION['hospital'])){
?>

  <style>

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
    $( ".column" ).sortable({
      connectWith: ".column",
      handle: ".portlet-header",
      cancel: ".portlet-toggle",
      start: function (event, ui) {
        ui.item.addClass('tilt');
      },
      stop: function (event, ui) {
        ui.item.removeClass('tilt');
      }
    });

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


	<?php }else{ ?>
		<center>
			<p style="text-decoration: none;color:rgba(0,0,0,0.87);font-weight:bold">Você não selecionou um hospital!</p>
			<a href="busca-hospital.php" style="text-decoration: none;color:#0399ff;font-weight:bold">Escolher um hospital</a>
		</center>
	
	
	
	
	<?php
	}
	require_once "rodape.php";