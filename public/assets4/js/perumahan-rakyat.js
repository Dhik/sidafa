$(document).ready(function() {
  // Timeseries chart
	am4core.useTheme(am4themes_animated);
	am4core.useTheme(am4themes_kelly);

	// Create chart instance
	var chart = am4core.create("time-series-sentiment", am4charts.XYChart);

	// Add data
	chart.data = [{
	  "date": "8 Jun 20",
	  "positive": 841,
	  "negative": 3427,
	  "neutral": 1237
	}, {
	  "date": "9 Jun  20",
	  "positive": 1244,
	  "negative": 14067,
	  "neutral": 1588
	}, {
	  "date": "10 Jun  20",
	  "positive": 3256,
	  "negative": 5156,
	  "neutral": 7652
	}, {
	  "date": "11 Jun  20",
	  "positive": 3643,
	  "negative": 1408,
	  "neutral": 1156
	}, {
	  "date": "12 Jun  20",
	  "positive": 1143,
	  "negative": 3432,
	  "neutral": 1508
	}, {
	  "date": "13 Jun  20",
	  "positive": 19732,
	  "negative": 3261,
	  "neutral": 808
	}, {
	  "date": "14 Jun  20",
	  "positive": 2836,
	  "negative": 2458,
	  "neutral": 969
	}, {
	  "date": "15 Jun  20",
	  "positive": 1000,
	  "negative": 1790,
	  "neutral": 1320
	}];

	// Create axes
	var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
	categoryAxis.dataFields.category = "date";
	categoryAxis.renderer.grid.template.location = 0;
	categoryAxis.renderer.minGridDistance = 50;

	var  valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
	valueAxis.title.text = "";

	// Create series
	var series = chart.series.push(new am4charts.LineSeries());
	series.dataFields.valueY = "positive";
	series.dataFields.categoryX = "date";
	series.name = "positive";
	series.tooltipText = "{name}: [bold]{valueY}[/]";
	series.bullets.push(new am4charts.CircleBullet());
	series.fill = am4core.color("#53e69d");
	series.stroke = am4core.color("#53e69d");
	series.strokeWidth = 2;

	var series2 = chart.series.push(new am4charts.LineSeries());
	series2.dataFields.valueY = "negative";
	series2.dataFields.categoryX = "date";
	series2.name = "negative";
	series2.tooltipText = "{name}: [bold]{valueY}[/]";
	series2.bullets.push(new am4charts.CircleBullet());
	series2.fill = am4core.color("#ff7676");
	series2.stroke = am4core.color("#ff7676");
	series2.strokeWidth = 2;
	series2.hidden = false;

	var series3 = chart.series.push(new am4charts.LineSeries());
	series3.dataFields.valueY = "neutral";
	series3.dataFields.categoryX = "date";
	series3.name = "neutral";
	series3.tooltipText = "{name}: [bold]{valueY}[/]";
	series3.bullets.push(new am4charts.CircleBullet());
	series3.fill = am4core.color("#2cabe3");
	series3.stroke = am4core.color("#2cabe3");
	series3.strokeWidth = 2;
	series3.hidden = false;

	// Add cursor
	chart.cursor = new am4charts.XYCursor();

	// Add legend
	chart.legend = new am4charts.Legend();

	// Pie chart
	// Create chart instance
	var piechart = am4core.create("pie-chart-sentiment", am4charts.PieChart);

	// Add data
	piechart.data = [ {
	  "sentiment": "Positive",
		"color": "#53e69d",
	  "total": 36.74
	}, {
	  "sentiment": "Negative",
		"color": "#ff7676",
	  "total": 43.84
	}, {
	  "sentiment": "Neutral",
		"color": "#2cabe3",
	  "total": 19.42
	}];

	// Add and configure Series
	var pieSeries = piechart.series.push(new am4charts.PieSeries());
	pieSeries.dataFields.value = "total";
	pieSeries.dataFields.category = "sentiment";
	pieSeries.slices.template.stroke = am4core.color("#fff");
	pieSeries.slices.template.strokeOpacity = 1;

	// This creates initial animation
	pieSeries.hiddenState.properties.opacity = 1;
	pieSeries.hiddenState.properties.endAngle = -90;
	pieSeries.hiddenState.properties.startAngle = -90;

	pieSeries.ticks.template.disabled = true;
	pieSeries.alignLabels = false;
	pieSeries.labels.template.text = "{value.percent.formatNumber('#.0')}%";
	pieSeries.labels.template.radius = am4core.percent(-40);
	pieSeries.labels.template.fill = am4core.color("white");
	pieSeries.slices.template.propertyFields.fill = "color";

	piechart.hiddenState.properties.radius = am4core.percent(0);

	// Add a legend
	piechart.legend = new am4charts.Legend();

	/* WordCloud */
	var wordcloud = am4core.create("wordcloud", am4plugins_wordCloud.WordCloud);
	var serieswc = wordcloud.series.push(new am4plugins_wordCloud.WordCloudSeries());

	serieswc.data = [{
	  "tag": "Tapera",
	  "weight": 90
	}, {
	  "tag": "TaperaPerasRakyat",
	  "weight": 86
	}, {
	  "tag": "Bermanfaat",
	  "weight": 72
	}, {
	  "tag": "Iuran Tapera",
	  "weight": 68
	}, {
	  "tag": "Keuangan",
	  "weight": 63
	}, {
	  "tag": "Ekonomi",
	  "weight": 54
	}, {
	  "tag": "Program Tapera",
	  "weight": 27
	}, {
	  "tag": "Iuran Tapera 3%",
	  "weight": 23
	}, {
	  "tag": "InfoProperti",
	  "weight": 18
	}];

	serieswc.dataFields.word = "tag";
	serieswc.dataFields.value = "weight";
	serieswc.rotationThreshold = 0;
	serieswc.labels.template.tooltipText = "{word}: {value}";

	// serieswc.colors = new am4core.ColorSet();
	// serieswc.colors.passOptions = {}; // makes it loop
	serieswc.heatRules.push({
	 "target": serieswc.labels.template,
	 "property": "fill",
	 "min": am4core.color("#ffaaaa"),
	 "max": am4core.color("#ff5555"),
	 "dataField": "value"
	});
});
