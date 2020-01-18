"use strict";
if ( $( "#users-chart" ).length ) {
  var sales_chart = document.getElementById("users-chart").getContext('2d');

  var sales_chart_bg_color = sales_chart.createLinearGradient(0, 0, 0, 80);
  balance_chart_bg_color.addColorStop(0, 'rgba(63,82,227,.2)');
  balance_chart_bg_color.addColorStop(1, 'rgba(63,82,227,0)');

  var myChart = new Chart(sales_chart, {
    type: 'line',
    data: {
      labels: ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', '26-07-2018', 'Listopad', 'Grudzień'],
      datasets: [{
        label: 'Użytkowników',
        data: [2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        borderWidth: 2,
        backgroundColor: balance_chart_bg_color,
        borderWidth: 3,
        borderColor: 'rgba(63,82,227,1)',
        pointBorderWidth: 0,
        pointBorderColor: 'transparent',
        pointRadius: 3,
        pointBackgroundColor: 'transparent',
        pointHoverBackgroundColor: 'rgba(63,82,227,1)',
      }]
    },
    options: {
      layout: {
        padding: {
          bottom: -1,
          left: -1
        }
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          gridLines: {
            display: false,
            drawBorder: false,
          },
          ticks: {
            beginAtZero: true,
            display: false
          }
        }],
        xAxes: [{
          gridLines: {
            drawBorder: false,
            display: false,
          },
          ticks: {
            display: false
          }
        }]
      },
    }
  });
}
if ( $( ".purchase-code" ).length ) {
  var cleavePC = new Cleave('.purchase-code', {
    delimiter: '-',
    blocks: [4, 4, 4, 4],
    uppercase: true
  });
}

$(".colorpickerinput").colorpicker({
  format: 'hex',
  component: '.input-group-append',
});