$(function () {
    "use strict";

    var myChart = Highcharts.chart('chart', {
        chart: {
            type: 'areaspline'
        },
        title: {
            text: ''
        },
        xAxis: {
            // categories: ['1', '2', '3','4', '5', '6']
        },
        yAxis: {
            title: {
                text: ''
            }
        },
        series: [{
            name: 'Earning',
            data: [0,4,3,4,17,10,30,44,33]
        }]
    });


    // Build the chart
    Highcharts.chart('IndexChartOne', {
      chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false,
          type: 'pie'
      },
      title: {
          text: 'Browser market'
      },
      tooltip: {
          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
      },
      plotOptions: {
          pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              dataLabels: {
                  enabled: false
              },
              showInLegend: true
          }
      },
      series: [{
          name: 'Brands',
          colorByPoint: true,
          data: [{
              name: 'Chrome',
              y: 22.41,
              sliced: true,
              selected: true
          }, {
              name: 'IE',
              y: 11.84
          }, {
              name: 'FX',
              y: 10.85
          }, {
              name: 'Edge',
              y: 4.67
          }]
      }]
    });

    // Build the chart
    Highcharts.chart('IndexChartTwo', {
      chart: {
        type: 'column'
        },
        title: {
            text: 'Monthly Average Revenue'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Tokyo',
            data: [49.9, 71.5, 106.4, 129.2]

        }, {
            name: 'London',
            data: [48.9, 38.8, 39.3, 41.4]

        }, {
            name: 'Berlin',
            data: [42.4, 33.2, 34.5, 39.7]

        }]
    });



});
