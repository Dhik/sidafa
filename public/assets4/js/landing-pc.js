$(document).ready(function() {
	var ctx1 = document.getElementById("donut1").getContext("2d");
	var data1 = [
		{
				value: 19.42,
				color:"#2cabe3",
				highlight: "#2cabe3",
				label: "Neutral"
		},
		{
				value: 36.74,
				color: "#53e69d",
				highlight: "#53e69d",
				label: "Positive"
		},
		{
				value: 43.84,
				color: "#ff7676",
				highlight: "#ff7676",
				label: "Negative"
		}
	];

	var ctx2 = document.getElementById("donut2").getContext("2d");
	var data2 = [
		{
				value: 46.63,
				color:"#2cabe3",
				highlight: "#2cabe3",
				label: "Neutral"
		},
		{
				value: 29.81,
				color: "#53e69d",
				highlight: "#53e69d",
				label: "Positive"
		},
		{
				value: 23.56,
				color: "#ff7676",
				highlight: "#ff7676",
				label: "Negative"
		}
	];

	var ctx3 = document.getElementById("donut3").getContext("2d");
	var data3 = [
		{
				value: 18.57,
				color:"#2cabe3",
				highlight: "#2cabe3",
				label: "Neutral"
		},
		{
				value: 35.75,
				color: "#53e69d",
				highlight: "#53e69d",
				label: "Positive"
		},
		{
				value: 45.67,
				color: "#ff7676",
				highlight: "#ff7676",
				label: "Negative"
		}
	];

	var ctx4 = document.getElementById("donut4").getContext("2d");
	var data4 = [
		{
				value: 19.74,
				color:"#2cabe3",
				highlight: "#2cabe3",
				label: "Neutral"
		},
		{
				value: 36.83,
				color: "#53e69d",
				highlight: "#53e69d",
				label: "Positive"
		},
		{
				value: 43.43,
				color: "#ff7676",
				highlight: "#ff7676",
				label: "Negative"
		}
	];

	generateDonutChart(ctx1, data1);
	generateDonutChart(ctx2, data2);
	generateDonutChart(ctx3, data3);
	generateDonutChart(ctx4, data4);

	function generateDonutChart(chart, data) {
		var myDoughnutChart = new Chart(chart).Doughnut(data,{
			segmentShowStroke : true,
			segmentStrokeColor : "#fff",
			segmentStrokeWidth : 0,
			animationSteps : 100,
			tooltipCornerRadius: 2,
			animationEasing : "easeOutBounce",
			animateRotate : true,
			animateScale : false,
			tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %> %",
			responsive: true
		});
	}

});
