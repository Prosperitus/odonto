// SCRIPTS DE GRAFICOS

$(document).ready(function(){
	$('#graficoSelect').change(function(){
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
					var ctx = document.getElementById("myChart").getContext('2d');
					var myChart = new Chart(ctx, {
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
			}
	    });
	});
});



