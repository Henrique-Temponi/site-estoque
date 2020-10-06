// <!-- <script id="chart_test" data-name="{{ $dados }}" src="{{ asset('js/myChart.js') }}"></script> -->
// var test = document.getElementById("chart_test").getAttribute("data-name");

// console.log(test);

console.log(jarray);
console.log(jusuarios);
console.log(jreservasNome);
console.log(jreservasquantidade);

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {

        datasets: [{
            
            data:[jarray['voo'], jarray['user'], jarray['destino'], jarray['compahia']],
            backgroundColor: [
                'rgba(255, 99, 123, 0.5)',
                'rgba(89, 199, 123, 0.5)',
                'rgba(3, 99, 223, 0.5)',
            ],
        }],

        labels: [
            'Voos',
            'Usuarios',
            'Destinos',
            'Compahia',
        ]
    },

    // Configuration options go here
    options: {
        // legend: {
        //     display: false,
        // }
    }
});

var data = document.getElementById("userline").getContext('2d');
var usertab = new Chart(data, {
    //type of chart
    type: 'line',

    //data for output
    data: {
        datasets: [{
            data: [
                jusuarios['Jan'],
                jusuarios['Feb'],
                jusuarios['Mar'],
                jusuarios['Abr'],
                jusuarios['May'],
                jusuarios['Jun'],
                jusuarios['Jul'],
                jusuarios['Aug'],
                jusuarios['Set'],
                jusuarios['Oct'],
                jusuarios['Nov'],
                jusuarios['Dec'],
            ],
            backgroundColor: 'rgba(13, 97, 236, 1)',
            // yAxisID: 10,
        }],

        labels: [
            'Janeiro',
            'Fevereiro',
            'Marco',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro',
        ]
    },

    options: {
        legend: {
            display: false,
        },
        scales: {
            yAxes: [{
                ticks: {
                    BeginAtzero: true,
                    suggestedMax: 10,
                }
            }]
        }
    }
});

var ctx = $('#vooschart');
var vooschart = new Chart(ctx, {


    
    //type of chart
    type: 'horizontalBar',

    data: {
        datasets: [{
            data: jreservasquantidade,
        }],

        labels: jreservasNome,
    },

    options: {
        legend: {
            display: false,
        },
        scales: {
            xAxes: [{
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 10,
                }
            }]
        }
    },
})