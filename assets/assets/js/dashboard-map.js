// Prepare demo data
// Data is joined to map using value of 'hc-key' property by default.
// See API docs for 'joinBy' for more info on linking data and map.
var data = [
    ['my-sa', 0],
    ['my-sk', 1],
    ['my-la', 2],
    ['my-pg', 3],
    ['my-kh', 4],
    ['my-sl', 5],
    ['my-ph', 6],
    ['my-kl', 7],
    ['my-pj', 8],
    ['my-pl', 9],
    ['my-jh', 10],
    ['my-pk', 11],
    ['my-kn', 12],
    ['my-me', 13],
    ['my-ns', 14],
    ['my-te', 15],
    ['undefined', 16]
  ];
  
  // Create the chart
  Highcharts.mapChart('containermaps', {
    chart: {
      map: 'countries/my/my-all',
      backgroundColor: 'none',
      plotBackgroundColor: 'none',
      marginBottom: 30
    },

    legend:{ enabled:false },

    
    
    navigation: {
              buttonOptions: {
                  enabled: false
              }
    },
  
    title: {
      text: ''
    },
    
    credits: {
              enabled: false
    },
  
    mapNavigation: {
      enabled: true,
      buttonOptions: {
        verticalAlign: 'bottom'
      }
    },
  
    colorAxis: {
        maxColor: 'white'
    },

    series: [{
        data: data,
        name: 'Energy Consumption: ',
        states: {
          hover: {
            color: '#5c7dbe'
          }
        },
        dataLabels: {
          enabled: true,
          format: '{point.name}',
          
        },

        tooltip: {
            valuesuffix: 'km'
        }
      }, {
        name: 'Separators',
        type: 'mapline',
        data: Highcharts.geojson(Highcharts.maps['countries/my/my-all'], 'mapline'),
        color: 'red',
        showInLegend: false,
        enableMouseTracking: false,

      }, 
      {
        type: 'mappoint',
        data: [{ // here add your points to map
            name: 'Muar',
          lat: 2.06,
          lon: 102.58
        }],
        events: {
            click: function(event) { // click event on map points
              console.log(event.point);
          }
        }
      }
    ]
  });
  