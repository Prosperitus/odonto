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

<header>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<script type="text/javascript" src="../dataTables/media/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../dataTables/media/css/jquery.dataTables.min.css">

    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
		height: 100
      }
      .main {
        flex: 1 0 auto;
        position:relative;
		height:auto;
      }
      header , footer {
        padding-left: 0px;
      }
      main {
        padding-left: 100px
      }
      @media only screen and (max-width : 992px) {
        header, main, footer {
          padding-left: 0;
        }
      }
    	@media only screen and (min-width : 768px) {
        .margemCentro{
    		margin-left: 14%;
			  padding-bottom: 60px;
    		}
      }
    	@media only screen and (max-width : 768px) {
        .margemCentro{
    			margin-left: 0;
    			margin-right: 0;
          padding-bottom: 60px;
    		}
      }
		.ui-button{
			background-color: #0399ff;
			color:white;
			border-color:#0399ff;
			font-weight:bold
		}
		.ui-button:hover{
			background-color: white;
			color:#0399ff;
			border-color:#0399ff;
			font-weight:bold
		}

		.ui-dialog-titlebar-close
		{
		 position: absolute;
		 right: .3em;
		 top: 50%;
		 width: 19px;
		 margin: -10px 0 0 0;
		 padding: 1px;
		 height: 18px;

		 /*Esconder o X*/
		 display: none;
		}
		.ui-dialog-titlebar{
			background-color: #0399ff;
			color:white;
			border-color:#0399ff;
			font-weight:bold
		}

    </style>

</header>

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
