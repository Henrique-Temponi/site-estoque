// <!-- <script id="chart_test" data-name="{{ $dados }}" src="{{ asset('js/myChart.js') }}"></script> -->
// var test = document.getElementById("chart_test").getAttribute("data-name");

// console.log(test);

console.log(jarray);

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

    }
});