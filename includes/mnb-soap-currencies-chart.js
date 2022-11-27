const barChart = document.getElementById('barChart');
const barChartValues = [
    parseInt(exchangeRatesJS.Day.Rate[8]),
    parseInt(exchangeRatesJS.Day.Rate[32]),
    parseInt(exchangeRatesJS.Day.Rate[9]),
    parseInt(exchangeRatesJS.Day.Rate[4])
];

new Chart(barChart, {
    type: 'bar',
    data: {
        labels: ['EUR', 'USD', 'GBP', 'CHF'],
        datasets: [{
            label: 'Forint',
            data: barChartValues,
            backgroundColor: '#ac3b61',
            borderWidth: 0,
            maxBarThickness: 50
        }]
    },
    options: {
        scales: {
            y: {
                title: {
                    color: '#123c69',
                    display: true,
                    text: 'Forint (HUF)',
                    font: {
                        size: 16,
                        weight: 'bolder',
                    },
                    padding: {
                        top: 0, right: 0, bottom: 20, left: 0
                    }
                },
                beginAtZero: true
            },
            x: {
                title: {
                    color: '#123c69',
                    display: true,
                    text: 'Más valuták',
                    font: {
                        size: 16,
                        weight: 'bolder'
                    },
                    padding: {
                        top: 20, right: 0, bottom: 0, left: 0
                    }
                },
            }
        }
    }
});