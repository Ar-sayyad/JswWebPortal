
function ploatSpeedoMeter(){
ploatSpeedoMeter1();
ploatSpeedoMeter2();
ploatSpeedoMeter3();
}
function  ploatSpeedoMeter2() {

		var array='{ "values":[{"Asset Availability %":"78.5"}]}';
		var data = JSON.parse(array);
		var speedoMeterResult= data.values;
		var L = speedoMeterResult.length;
		var title='Wind Speed 5.76 m/s';
		
		
		       // var title=data.title;
			   // var params$ = data.params;
			   // var speedoMeterResult = data.values;
               // var properties=data.attributes;
               // var L = speedoMeterResult.length;
				
		var keys=[];
		for (var i = 0; i < 1; i++) {
                    var obj = speedoMeterResult[i];
                    for (var j in obj) {
                        keys.push(j);
                    }
                }				
				var dd1 =[];
                jQuery.map(speedoMeterResult, function(obj) {
				
					dd1.push(parseFloat(obj[keys[0]]));
                    return obj; // or return obj.name, whatever.
                });
				

       var chart = new Highcharts.Chart({

	   
        chart: {
            type: 'gauge',
			renderTo: 'plotSpeedometer1',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text:''+title,
			style: {
            fontSize: '15px'
        }
        },

        pane: {
            startAngle: -145,
            endAngle: 145,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '99%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '87%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '85%',
                innerRadius: '83%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 1,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
               // rotation: 'auto'
            },
            title: {
                
            }, 
            plotBands: [{
                from: 0,
                to: 50,
                color: '#DF5353' // green
            }, {
                from: 50,
                to: 80,
                color: '#DDDF0D' // yellow
            }, {
                from: 80,
                to: 100,
                color: '#55BF3B' // red
            }]
        },

        series: [{
            name: keys[0],
            data: dd1,
            tooltip: {
                valueSuffix: '%'
            }
        }]

    });
    // Add some life
    
}


function  ploatSpeedoMeter1() {

		var array='{ "values":[{"Asset Availability %":"89.5"}]}';
		var data = JSON.parse(array);
		var speedoMeterResult= data.values;
		var L = speedoMeterResult.length;
		var title='Irradiation 884.87W/m2';
		
		
		       // var title=data.title;
			   // var params$ = data.params;
			   // var speedoMeterResult = data.values;
               // var properties=data.attributes;
               // var L = speedoMeterResult.length;
				
		var keys=[];
		for (var i = 0; i < 1; i++) {
                    var obj = speedoMeterResult[i];
                    for (var j in obj) {
                        keys.push(j);
                    }
                }				
				var dd1 =[];
                jQuery.map(speedoMeterResult, function(obj) {
				
					dd1.push(parseFloat(obj[keys[0]]));
                    return obj; // or return obj.name, whatever.
                });
				

       var chart = new Highcharts.Chart({

	   
        chart: {
            type: 'gauge',
			renderTo: 'plotSpeedometer',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text:''+title,
			style: {
            fontSize: '15px'
        }
        },

        pane: {
            startAngle: -145,
            endAngle: 145,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '99%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '87%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '85%',
                innerRadius: '83%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 1,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
               // rotation: 'auto'
            },
            title: {
                
            }, 
            plotBands: [{
                from: 0,
                to: 50,
                color: '#DF5353' // green
            }, {
                from: 50,
                to: 80,
                color: '#DDDF0D' // yellow
            }, {
                from: 80,
                to: 100,
                color: '#55BF3B' // red
            }]
        },

        series: [{
            name: keys[0],
            data: dd1,
            tooltip: {
                valueSuffix: '%'
            }
        }]

    });
    // Add some life
    
}

function  ploatSpeedoMeter2() {

		var array='{ "values":[{"Asset Availability %":"89.5"}]}';
		var data = JSON.parse(array);
		var speedoMeterResult= data.values;
		var L = speedoMeterResult.length;
		var title='Irradiation 884.87W/m2';
		
		
		       // var title=data.title;
			   // var params$ = data.params;
			   // var speedoMeterResult = data.values;
               // var properties=data.attributes;
               // var L = speedoMeterResult.length;
				
		var keys=[];
		for (var i = 0; i < 1; i++) {
                    var obj = speedoMeterResult[i];
                    for (var j in obj) {
                        keys.push(j);
                    }
                }				
				var dd1 =[];
                jQuery.map(speedoMeterResult, function(obj) {
				
					dd1.push(parseFloat(obj[keys[0]]));
                    return obj; // or return obj.name, whatever.
                });
				

       var chart = new Highcharts.Chart({

	   
        chart: {
            type: 'gauge',
			renderTo: 'plotSpeedometer3',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text:''+title,
			style: {
            fontSize: '15px'
        }
        },

        pane: {
            startAngle: -145,
            endAngle: 145,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '99%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '87%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '85%',
                innerRadius: '83%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 1,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
               // rotation: 'auto'
            },
            title: {
                
            }, 
            plotBands: [{
                from: 0,
                to: 50,
                color: '#DF5353' // green
            }, {
                from: 50,
                to: 80,
                color: '#DDDF0D' // yellow
            }, {
                from: 80,
                to: 100,
                color: '#55BF3B' // red
            }]
        },

        series: [{
            name: keys[0],
            data: dd1,
            tooltip: {
                valueSuffix: '%'
            }
        }]

    });
    // Add some life
    
}



	var contentstring = [];
	var regionlocation = [];
	var markers = [];
	var iterator = 0;
	var areaiterator = 0;
	var map;
	var infowindow = [];
	geocoder = new google.maps.Geocoder();
	
	$(document).ready(function () {
		setTimeout(function() { initialize(); }, 400);
	});
	
	function initialize() {           
		infowindow = [];
		markers = [];
		GetValues();
		iterator = 0;
		areaiterator = 0;
		region = new google.maps.LatLng(regionlocation[areaiterator].split(',')[0], regionlocation[areaiterator].split(',')[1]);
		map = new google.maps.Map(document.getElementById("Map"), { 
			zoom: 4,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: region,
			 mapTypeId: google.maps.MapTypeId.SATELLITE
		});
		
		drop();
	}
	

	function GetValues() {
	
	
	

		contentstring[0] ='Girijashankarwadi, Maharashtra';
	
		regionlocation[0] = '17.4670558, 74.2370076';
		
		contentstring[1] ='Anaikadavu, Tamil Nadu';
		regionlocation[1] = "10.67464338, 77.21520999";	
		
	
	}
		   
	function drop() {
		for (var i = 0; i < contentstring.length; i++) {
			setTimeout(function() {
			
			if(areaiterator==0)
			{
			var j='Workingturbine.png';
				addMarker(j);
			}else
			{
			var j='Stop.png';
				addMarker(j);
			}
			}, 300);
		}
	}
 
	function addMarker(j) {
		var address = contentstring[areaiterator];
		
		var icons = j;
		var templat = regionlocation[areaiterator].split(',')[0];
		var templong = regionlocation[areaiterator].split(',')[1];
		var temp_latLng = new google.maps.LatLng(templat, templong);
		markers.push(new google.maps.Marker(
		{
			position: temp_latLng,
			map: map,
			icon: icons,
			draggable: false,
			name:address

		}));            
		iterator++;
		info(iterator);
		areaiterator++;
	}
 
	function info(i) {
		infowindow[i] = new google.maps.InfoWindow({
			content: contentstring[i - 1]
		});
		infowindow[i].content = contentstring[i - 1];
		google.maps.event.addListener(markers[i - 1], 'mouseover', function() {
			for (var j = 1; j < contentstring.length + 1; j++) {
				infowindow[j].close();
			}
			infowindow[i].open(map, markers[i - 1]);
		});
		
		
		google.maps.event.addListener(markers[i - 1], 'click', function() {
			for (var j = 1; j < contentstring.length + 1; j++) {
				infowindow[j].close();
			}
         
		 if((markers[i - 1]).name=="Girijashankarwadi, Maharashtra")
		 {
		 // alert('something'+(markers[i - 1]).name);
		  window.location.href = "Maharashtra.html";
		 }else if((markers[i - 1]).name=="Anaikadavu, Tamil Nadu"){
		 // alert('something'+(markers[i - 1]).name);
		  window.location.href = "TamilNadu.html";
		 }else{
		   alert('Wrong Data');
		 }
		 
		 
		});
		
	}
