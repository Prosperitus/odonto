<?php
	require_once "cabecalho.php";
	require_once "../database/attendance.php";
?>
<div class="welcome">Quantidade de atendimentos por status</div>
<div class="grafico center">
	<canvas id="myChart" width="400" height="400"></canvas>
</div>
<script src="../js/chart.js"></script>

<?php
	require_once "rodape.php";
?>