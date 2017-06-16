// SCRIPTS DE GRAFICOS

alert("sfddf");
function searchchart(var resultJson){
		alert("sucesso");
		var arrayColor = ['red',
						'orange',
						'yellow',
						'green',
						'blue',
						'turquoise1',
						'Brown1',
						'SeaGreen1',
						'Purple1',
						'Goldenrod2',
						'DarkCyan',
						'IndianRed1',
						'LightSkyBlue1',
						'SaddleBrown'];
		var dataJson = JSON.parse(resultJson);
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				
				labels: [
				for(int i = 0;dataJson.length>i;i++){
					eval(dataJson[i].name);
				},
				datasets: [{
					 labels: [
						"Red",
						"Orange",
						"Yellow",
						"Green",
						"Blue"
					],
					data: [
						for(int i = 0;dataJson.length>i;i++){
							eval(dataJson[i].count);
						}
					],
					backgroundColor: [
						for(int i = 0;dataJson.length>i;i++){
							eval(arrayColor[i]);
						}
					],
					borderColor: [
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
});
}

