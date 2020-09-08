var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {

        datasets: [{
            
            data:[10, 50, 60],
            backgroundColor: [
                'rgba(255, 99, 123, 0.5)',
                'rgba(89, 199, 123, 0.5)',
                'rgba(3, 99, 223, 0.5)',
            ],
        }],

        labels: [
            'yes',
            'MaN',
            'VaN'
        ]
    },

    // Configuration options go here
    options: {
        // legend: {
        //     display: false,
        // }
    }
});