<?php 
	require_once "../controller/attendance.php";
	require_once "../controller/verifyLogin.php";
	verifyLogRedirect();
	
	if(isset($_GET['text'])){
		$text = $_GET['text']; 
	}
	$atendimentoControle = new AttendanceController();
	$atendimentoControle->search($text);
		
?>

<script type="text/javascript" src="../js/scripts.js"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>

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
