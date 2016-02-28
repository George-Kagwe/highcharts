<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Line Chart</title>
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">


		$(document).ready(function() {
			var options = {
	            chart: {
	                renderTo: 'container',
	                type: 'spline',
	                marginRight: 130,
	                marginBottom: 25
	            },
	            title: {
	                text: 'Project Requests',
	                x: -20 //center
	            },
	            subtitle: {
	                text: '',
	                x: -20
	            },
	            xAxis: {
	                categories: []
	            },
	            yAxis: {
	                title: {
	                    text: 'Requests'
	                },
	                plotLines: [{
	                    value: 0,
	                    width: 1,
	                    color: '#808080'
	                }]
	            },
	            tooltip: {
	                formatter: function() {
	                        return '<b>'+ this.series.name +'</b><br/>'+
	                        this.x +': '+ this.y;
	                }
	            },
	            legend: {
	                layout: 'vertical',
	                align: 'right',
	                verticalAlign: 'top',
	                x: -10,
	                y: 100,
	                borderWidth: 0
	            },
	            
	            series: []
	        }
	        
	        $.getJSON("data", function(json) {
				options.xAxis.categories = json[0]['data'];
	        	options.series[0] = json[1];
	        	options.series[1] = json[2];
	        	options.series[2] = json[3];
		        chart = new Highcharts.Chart(options);
	        });
	    });
		</script>
	    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
	</head>

	<body>
	<style type="text/css">
	html, body {
    height:100%;
}
#box {
    height:80%;
    background:#331266;
}
#container {
    position:relative;
height:100%;
}</style>
		<!--<div id="container" style="width:100%; height: 100%; margin: 0 auto"></div>-->

		<div id="box">
		<div id="container">
			
		</div>
			

		</div>
	</body>
</html>