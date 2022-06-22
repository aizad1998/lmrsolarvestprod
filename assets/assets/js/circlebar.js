$(function () {

    // Uncomment to style it like Apple Watch
    /*
    if (!Highcharts.theme) {
        Highcharts.setOptions({
            chart: {
                backgroundColor: 'black'
            },
            colors: ['#F62366', '#9DFF02', '#0CCDD6'],
            title: {
                style: {
                    color: 'silver'
                }
            },
            tooltip: {
                style: {
                    color: 'silver'
                }
            }
        });
    }
    // */

    Highcharts.chart('circlebar', {

        chart: {
            type: 'solidgauge',
            marginTop: 10,
            backgroundColor: 'none',
            align: 'center'
            
        },


        navigation: {
            buttonOptions: {
                enabled: false
            }
        },

        credits: {
            enabled: false
        },

        title: {
            text: '',
            style: {
                fontSize: '24px',
                
            }
        },

        tooltip: {
            borderWidth: 0,
            backgroundColor: 'none',
            shadow: false,
            style: {
                fontSize: '12px',
                color: 'white'
            },
            pointFormat: '{series.name}<br><span style="font-size:1.5em; color: {point.color}; font-weight: bold">{point.y} GWh</span>',
            positioner: function (labelWidth, labelHeight) {
                return {
                    x: 0,
                    y: 0  
                };
            }
        },

        pane: {
            startAngle: 0,
            endAngle: 360,
            background: [{ // Track for Move
                outerRadius: '112%',
                innerRadius: '88%',
                backgroundColor: 'rgba(242,44,107,0.05)',
                borderWidth: 0
            }, { // Track for Exercise
                outerRadius: '87%',
                innerRadius: '63%',
                backgroundColor: 'rgba(144,237,125,0.05)',
                borderWidth: 0
            }, { // Track for Stand
                outerRadius: '62%',
                innerRadius: '38%',
                backgroundColor: 'rgba(124,181,236,0.05)',
                borderWidth: 0
            }]
        },

        yAxis: {
            min: 0,
            max: 100,
            lineWidth: 0,
            tickPositions: []
        },

        plotOptions: {
            solidgauge: {
                borderWidth: '14px',
                dataLabels: {
                    enabled: false
                },
                linecap: 'round',
                stickyTracking: false
            }
        },

        series: [{
            name: 'Forecast',
            borderColor: '#f22c6b',
            data: [{
                color: '#f22c6b',
                radius: '100%',
                innerRadius: '100%',
                y: 83.51
            }]
        }, {
            name: 'This Month',
            borderColor: '#90ed7d',
            data: [{
                color: '#90ed7d',
                radius: '75%',
                innerRadius: '75%',
                y: 63.21
            }]
        }, {
            name: 'Solar<br>Generation',
            borderColor: '#7cb5ec',
            data: [{
                color: '#7cb5ec',
                radius: '50%',
                innerRadius: '50%',
                y: 52.36
            }]
        }]
    },

    /**
     * In the chart load callback, add icons on top of the circular shapes
     */
    function callback() {

    });


});
