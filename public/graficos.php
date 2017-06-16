<?php
	require_once "cabecalho.php";
	require_once "../database/attendance.php";
?>
<div class="welcome">Quantidade de atendimentos por status</div>
<div style="width:400px;height:400px;left:50%;margin-left:-200px;position:relative;margin-bottom: 100px" class="center">
	<canvas id="myChart" width="400" height="400"></canvas>
</div>
<script src="../js/chart.js"></script>

<?php
	require_once "rodape.php";
?>