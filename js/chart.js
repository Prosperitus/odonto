// SCRIPTS DE GRAFICOS

$(document).ready(function(){
	var myChart;
	$('#graficoSelect').change(function(){
		var canvas = document.getElementById("myChart");
		var ctx = canvas.getContext('2d');
		value = $('#graficoSelect').val();
		$.ajax({
			type: 'GET',
			dataType: 'html',
			url: "../request/searchGrafic.php?grafic="+value,
			success: function (data) {
				if(value == '1'){
					$('#welcomeGrafic').html("Quantidade de atendimentos por status");
					var dataJson = $.parseJSON(data);
					var arrayColor = ['red',
									'orange',
									'yellow',
									'green',
									'blue',
									'#00F5FF',
									'#FF4040',
									'#54FF9F',
									'#9B30FF',
									'#FFDEAD',
									'#008B8B',
									'#FF6A6A',
									'#B0E2FF'];
					var dados = dataJson['count'];
					var nomes = dataJson['name'];
					$('graficContent').html('');
					$('graficContent').html('<canvas id="myChart" width="400" height="400"></canvas>');
					ctx.clearRect(0, 0, canvas.width, canvas.height);
					if(myChart != null){
						myChart.destroy();
					}
					myChart = new Chart(ctx, {
						type: 'pie',
						data: {
							
							labels: nomes,
							datasets: [{
								 labels: arrayColor,
								data: dados,
								backgroundColor: arrayColor,
								borderColor: [
									'white',
									'white',
									'white',
									'white',
									'white',
									'white',
									'white',
									'white',
									'white',
									'white',
									'white',
									'white',
									'white'
								],
								borderWidth: 2
							}]
						},
						options: {
							responsive: true
						}
					});
				}

				if(value == '2'){
					$('#welcomeGrafic').html("Quantidade de atendimentos por status");
					var dataJson = $.parseJSON(data);
					var arrayColor = ['red',
									'orange',
									'yellow',
									'green',
									'blue',
									'#00F5FF',
									'#FF4040',
									'#54FF9F'
									];
					var dados = dataJson['count'];
					var nomes = dataJson['name'];
					ctx.clearRect(0, 0, canvas.width, canvas.height);
					if(myChart != null){
						myChart.destroy();
					}
					myChart = new Chart(ctx, {
						type: 'pie',
						data: {
							
							labels: nomes,
							datasets: [{
								 labels: arrayColor,
								data: dados,
								backgroundColor: arrayColor,
								borderColor: [
									'white',
									'white',
									'white',
									'white',
									'white',
									'white',
									'white',
									'white'	
								],
								borderWidth: 2
							}]
						},
						options: {
							responsive: true
						}
					});

				}
			}
	    });
	});
});



