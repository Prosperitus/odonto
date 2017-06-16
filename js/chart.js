// SCRIPTS DE GRAFICOS

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['red',
				'orange',
				'yellow',
				'green',
				'blue'],
        datasets: [{
             labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ],
            data: [12, 19, 3, 5,5],
            backgroundColor: [
                'red',
				'orange',
				'yellow',
				'green',
				'blue'
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