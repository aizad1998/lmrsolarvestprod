$(function() {
    "use strict";

	

     // chart act power
	 
		  var ctx = document.getElementById('chartpowfac').getContext('2d');
		
			var myChart = new Chart(ctx, {
				type: 'line',
				
				data: {
					labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00", "24:00"],
					datasets: [{
						label: 'Power Factor',
						data: [50, 49, 48, 41, 50, 50, 49,51 ,48],
						backgroundColor: "rgba(124,181,236, 0.15)",
						borderColor: "rgba(124,181,236, 0.8)",
						pointRadius :"0",
						borderWidth: 2
					}]
				},
			options: {
				maintainAspectRatio: false,
				legend: {
				  display: false,
				  labels: {
					fontColor: '#ddd',  
					boxWidth:40
				  }
				},
				tooltips: {
				  displayColors:false
				},	
			  scales: {
				  xAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }

			 }
			});  
		
	// chart active power
	 
	var ctx = document.getElementById('chartactpow').getContext('2d');
		
	var myChart = new Chart(ctx, {
		type: 'line',
		
		data: {
			labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00", "24:00"],
			datasets: [{
				label: 'Average Power A',
				data: [0, 0, 95, 125, 140, 135, 151,0 ,0],
				backgroundColor: "rgba(235, 64, 52, 0.15)",
				borderColor: "rgba(235, 64, 52, 0.8)",
				pointRadius :"0",
				borderWidth: 2
			}, {
				label: 'Average Power B',
				data: [0, 0, 90, 120, 135, 130, 145 ,0 ,0],
				backgroundColor: "rgba(235, 229, 52, 0.15)",
				borderColor: "rgba(235, 229, 52, 0.8)",
				pointRadius :"0",
				borderWidth: 2
			}, {
				label: 'Average Power C',
				data: [0, 0, 85, 110, 120, 123, 137 ,0 ,0],
				backgroundColor: "rgba(71, 209, 237, 0.15)",
				borderColor: "rgba(71, 209, 237, 0.8)",
				pointRadius :"0",
				borderWidth: 2
			}]
		},
	options: {
		maintainAspectRatio: false,
		legend: {
		  display: false,
		  labels: {
			fontColor: '#ddd',  
			boxWidth:40
		  }
		},
		tooltips: {
		  displayColors:false
		},	
	  scales: {
		  xAxes: [{
			ticks: {
				beginAtZero:true,
				fontColor: '#ddd'
			},
			gridLines: {
			  display: true ,
			  color: "rgba(221, 221, 221, 0.08)"
			},
		  }],
		   yAxes: [{
			ticks: {
				beginAtZero:true,
				fontColor: '#ddd'
			},
			gridLines: {
			  display: true ,
			  color: "rgba(221, 221, 221, 0.08)"
			},
		  }]
		 }

	 }
	}); 

	// chart max present demand
	 
	var ctx = document.getElementById('chartmaxpresdem').getContext('2d');
		
	var myChart = new Chart(ctx, {
		type: 'line',
		
		data: {
			labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00", "24:00"],
			datasets: [{
				label: 'Maximum Present Demand',
				data: [101,102,105, 99, 102, 99, 103,98 ,100],
				backgroundColor: "rgba(242,44,107, 0.15)",
				borderColor: "rgba(242,44,107, 0.8)",
				pointRadius :"0",
				borderWidth: 2
			}]
		},
	options: {
		maintainAspectRatio: false,
		legend: {
		  display: false,
		  labels: {
			fontColor: '#ddd',  
			boxWidth:40
		  }
		},
		tooltips: {
		  displayColors:false
		},	
	  scales: {
		  xAxes: [{
			ticks: {
				beginAtZero:true,
				fontColor: '#ddd'
			},
			gridLines: {
			  display: true ,
			  color: "rgba(221, 221, 221, 0.08)"
			},
		  }],
		   yAxes: [{
			ticks: {
				beginAtZero:true,
				fontColor: '#ddd'
			},
			gridLines: {
			  display: true ,
			  color: "rgba(221, 221, 221, 0.08)"
			},
		  }]
		 }

	 }
	}); 
		
    // chart 2

		var ctx = document.getElementById("chart2").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'doughnut',
				data: {
					labels: ["Day 2", "Forecast"],
					datasets: [{
						backgroundColor: [
							"rgba(53, 164, 219, 0.8)",
							"rgba(255,255,255 , 0.3)",

						],
						data: [5, 95],
						borderWidth: [0, 0, 0, 0]
					}]
				},
			options: {
				maintainAspectRatio: false,
				cutoutPercentage: 60,
			   legend: {
				 position :"bottom",	
				 display: false,
				    labels: {
					  fontColor: '#ddd',  
					  boxWidth:15
				   }
				}
				,
				tooltips: {
				  displayColors:false
				}
			   }
			});
		
		
	// easy pie chart 
	
	 $('.easy-dash-chart').easyPieChart({
		easing: 'easeOutBounce',
		barColor : '#ffffff',
		lineWidth: 10,
		trackColor : 'rgba(255, 255, 255, 0.12)',
		scaleColor: false,
		onStep: function(from, to, percent) {
			$(this.el).find('.w_percent').text(Math.round(percent));
		}
	 });	


// maps test



// worl map ori

// jQuery('#dashboard-map2').vectorMap(
// {
//     map: 'world_mill_en',
//     backgroundColor: 'transparent',
//     borderColor: '#818181',
//     borderOpacity: 0.25,
//     borderWidth: 1,
//     zoomOnScroll: false,
//     color: '#009efb',
//     regionStyle : {
//         initial : {
//           fill : '#fff'
//         }
//       },
//     markerStyle: {
//       initial: {
//         r: 9,
//         'fill': '#fff',
//         'fill-opacity':1,
//         'stroke': '#000',
//         'stroke-width' : 5,
//         'stroke-opacity': 0.4
//                 },
//                 },
//     enableZoom: true,
//     hoverColor: '#009efb',
//     markers : [{
//         latLng : [21.00, 78.00],
//         name : 'Lorem Ipsum Dollar'
      
//       }],
//     hoverOpacity: null,
//     normalizeFunction: 'linear',
//     scaleColors: ['#b6d6ff', '#005ace'],
//     selectedColor: '#c9dfaf',
//     selectedRegions: [],
//     showTooltip: true,
// });
		
		
//    $("#trendchart1").sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8], {
//       type: 'bar',
//       height: '20',
//       barWidth: '2',
//       resize: true,
//       barSpacing: '3',
//       barColor: '#fff'
//     });
		

// 	$("#trendchart2").sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8], {
//       type: 'bar',
//       height: '20',
//       barWidth: '2',
//       resize: true,
//       barSpacing: '3',
//       barColor: '#fff'
//     });


//     $("#trendchart3").sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8], {
//       type: 'bar',
//       height: '20',
//       barWidth: '2',
//       resize: true,
//       barSpacing: '3',
//       barColor: '#fff'
//     });


//     $("#trendchart4").sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8], {
//       type: 'bar',
//       height: '20',
//       barWidth: '2',
//       resize: true,
//       barSpacing: '3',
//       barColor: '#fff'
//     });	


//      $("#trendchart5").sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8,9,10,8], {
//       type: 'bar',
//       height: '20',
//       barWidth: '2',
//       resize: true,
//       barSpacing: '3',
//       barColor: '#fff'
//     });	

	  
	  // chart 3

     var ctx = document.getElementById('chart3').getContext('2d');
              
       var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
          datasets: [{
            label: 'Page Views',
            data: [0, 8, 12, 5, 12, 8, 16, 25, 15, 10, 20, 10, 30],
            backgroundColor: 'rgba(255, 255, 255, 0.25)',
            borderColor: '#fff',
            pointBackgroundColor:'#fff',
            pointHoverBackgroundColor:'#fff',
            pointBorderColor :'#fff',
            pointHoverBorderColor :'#fff',
            pointBorderWidth :1,
            pointRadius :0,
            pointHoverRadius :4,
            borderWidth: 3
          }]
        }
        ,
        options: {
			maintainAspectRatio: false,
              legend: {
                position: false,
                display: true,
            },
        tooltips: {
           enabled: false
      },
     scales: {
          xAxes: [{
            display: false,
            gridLines: false
          }],
          yAxes: [{
            display: false,
            gridLines: false
          }]
        }
        }
    
      });

       // chart 4
	  
	  var ctx = document.getElementById("chart4").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
					datasets: [{
						label: 'Total Clicks',
						data: [0, 10, 14, 18, 12, 8, 16, 25, 15, 10, 20, 10, 30],
						backgroundColor: "#fff"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
					  display: false,
					  labels: {
						fontColor: '#ddd',  
						boxWidth:40
					  }
					},
					tooltips: {
					  enabled:false
					},	
					
					scales: {
					  xAxes: [{
						  barPercentage: .3,
						display: false,
						gridLines: false
					  }],
					  yAxes: [{
						display: false,
						gridLines: false
					  }]
					}

			 }
			 
			});
	  
     // chart 5

	   var ctx = document.getElementById("chart5").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
					datasets: [{
						label: 'Total Earning',
						data: [39, 19, 25, 16, 31, 39, 23, 20, 23, 18, 15, 20],
						backgroundColor: "#fff"
					},{
						label: 'Total Sales',
						data: [27, 12, 26, 15, 21, 27, 13, 19, 32, 22, 18, 30],
						backgroundColor: "rgba(255, 255, 255, 0.12)"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
					  display: false,
					  position: 'bottom',
					  labels: {
						fontColor: '#ddd',  
						boxWidth:13
					  }
					},
					tooltips: {
					  enabled:true,
					  displayColors:false,
					},	
					
					scales: {
					  xAxes: [{
					  	 stacked: true,
						  barPercentage: .4,
						display: false,
						gridLines: false
					  }],
					  yAxes: [{
					  	stacked: true,
						display: false,
						gridLines: false
					  }]
					}

			 }
			 
			});
	
	
		
		
   });	 
   