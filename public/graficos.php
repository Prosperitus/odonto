<?php
	require_once "cabecalho.php";
	require_once "../database/attendance.php";
?>

<div class="input-field col s6" style="width: 300px;left:40%;margin_left:-150px;margin-top:50px;">
    <select name="graficoSelect" id="graficoSelect">
    	<option value="n" disabled selected>Selecione um tipo de gráfico</option>
		<option value="1">Quantidade de atendimentos por status</option>
		<option value="2">Condição Sistêmica por status</option>
	</select>
    <label for="graficoSelect">Grafico</label>
</div>
<div id="grafico">
	<div class="welcome" id="welcomeGrafic"></div>
	<div class="grafico center">
		<canvas id="myChart" width="400" height="400"></canvas>
	</div>
	<script src="../js/chart.js"></script>
</div>

<?php
	require_once "rodape.php";
?>
