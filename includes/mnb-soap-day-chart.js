const lineChart = document.getElementById('lineChart');
const lineChartValues = [];
const lineChartLabels = [];

const getCurrencyValues = function () {
    for(let i = 0; i < currencyArrayJs.Day.length; i++){
        // console.log(currencyArrayJs.Day[i].Rate[0])

        let dayData = currencyArrayJs.Day[i]
        let date = [];
        for(let i in dayData)
            date.push([i, dayData [i]]);

        // console.log(date[0][1].date);

        lineChartValues.push(parseInt(currencyArrayJs.Day[i].Rate[0]));
        lineChartLabels.push(date[0][1].date)
    }

    console.log(lineChartValues)
    console.log(lineChartLabels)
}

getCurrencyValues();

new Chart(lineChart, {
    type: 'line',
    data: {
        labels: lineChartLabels,
        datasets: [{
            label: 'Forint',
            data: lineChartValues,
            borderColor: '#ac3b61',
            borderWidth: 2,
            backgroundColor: '#ac3b61',
        }],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: false,
            }
        },
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
            },
            x: {
                title: {
                    color: '#123c69',
                    display: true,
                    text: 'Napok',
                    font: {
                        size: 16,
                        weight: 'bolder'
                    },
                    padding: {
                        top: 20, right: 0, bottom: 0, left: 0
                    }
                }
            }
        }
    }
});