<?php 
	require_once "../database/dbattendance.php";
	require_once "prepareAttendance.php";
	
	session_start();
	if(isset($_GET['text'])){
		$text = $_GET['text']; 
	}
	if(isset($_SESSION['hospital'])){
		$hospital = $_SESSION['hospital'];
	}
	$db = new DbAttendance();
	$attendances = $db->searchAttendance($hospital->id,$text);
	if($attendances != null || $attendances != false){
		foreach($attendances as $attendance){
			echo prepareAttendance($attendance);
		}
	}
		
?>


<script>

	$(onPageLoad);


  function onPageLoad(){
    $( ".portlet" )
      .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
      .find( ".portlet-header" )
      .addClass( "ui-widget-header ui-corner-all" )
		$(".portlet-content")
			.prepend( "<div><span class='btn btn-small btn-flat waves-effect waves-light' style='float:right'><i class='material-icons'>mode_edit</i></span></div>");
  	};

</script>

<style>
.btn-small {
    height: 24px;
    line-height: 24px;
    padding: 0 0.5rem;
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
	.column-title{
	margin: 0 1em 1em 0;
	padding: 0.3em;
	}
  .portlet-header {
    padding: 0.2em 0.3em;
    margin-bottom: 0.5em;
    position: relative;
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


<div class="column col s2 m2" id="avaliacao">
    <div class="portlet column-title lighten-2 col s10 center">Avaliação</div>
	</div>

	<div id="conteudo" class="column col s2 m2" id="reavaliacao">
    <div class="portlet column-title lighten-2 col s10 center">Reavaliação</div>
	</div>

	<div class="column col s2 m2" id="aprovacao">
    <div class="portlet column-title lighten-2 col s10 center">Aprovação</div>
	</div>

	<div class="column col s2 m2" id="orcamento">
    <div class="portlet column-title lighten-2 col s10 center">Orçamento</div>
	</div>

	<div class="column col s2 m2" id="acompanhamento">
    <div class="portlet column-title lighten-2 col s10 center">Acompanhamento</div>
	</div>

	<div class="column col s2 m2" id="concluido">
    <div class="portlet column-title lighten-2 col s10 center">Concluído</div>
 </div>
