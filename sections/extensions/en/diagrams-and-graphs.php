<h3>Diagrams and graphs</h3>
<h6>    HTML Website Template uses <b>hightchart.js</b>, <b>flot.js</b> and <b>c3charts.js</b> plugins to implement diagrams and graphs. Please look through the official documentation, before you use these extensions: </h6>

<ul class="marked-list">
  <li><a href="http://www.highcharts.com/docs">Hightchart.js</a></li>
  <li><a href="https://github.com/flot/flot/blob/master/API.md">Flot.js</a></li>
  <li><a href="http://c3js.org/gettingstarted.html">C3charts</a></li>
</ul>

<h4>General principles of use</h4>

<p>For convenient editing of diagrams and graphs parameters, use the source <b>.jade</b> files. In <b>.jade</b> files, in front of each specific diagram,
  there is a declaration of an object with the settings
  of this diagram or graph, which always has a comment <b>//- Define object for "*"</b>.  All the settings of diagrams and graphs are set with the help of this object.</p>
<p>
  You can use any diagrams and graphs settings, represented on the <b>Components > Toolkit Components > Charts and Graphs page</b>.
</p>

<h4>Setting up and managing hightcharts.js plugin</h4>
<p>To create a graph based on hightcharts plugin, add to the marking a block with
  <b>hightchart</b> class, the main attribute of which should be
  <b>data-graph-object</b>, the value of which is a predefined object with all the graph settings. </p>

<p>The full sample code will look the following way::</p>
<pre><code>
    //- Define object for "Pie Chart"
    var highPieObject = {
      credits: false,
      chart: {
       reflow: true,
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false,
       renderTo: 'pie-container'
    },
    title: {
     text: null
    },
    tooltip: {
     pointFormat: '{series.name}: &lt;b&gt;{point.percentage:.1f}% &lt;/b&gt;'
    },
    plotOptions: {
     pie: {
      center: ['19%', '50%'],
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
       enabled: false
      },
      showInLegend: true
     }
    },
    colors: ['#f5bf2f', '#42b574', '#8668ad', '#64aae1' ],
    legend: {
      x: 190,
      floating: true,
      verticalAlign: "middle",
      layout: "vertical",
      itemStyle: {
       "color": "#9b9b9b",
       "fontSize": "12px",
       "fontFamily": "lato",
      },
     itemMarginTop: 10
    },
    series: [{
     type: 'pie',
     name: 'Browser share',
     data: [
      ['Chrome', 35.0],
      ['IE', 36.8], {
       name: 'Firefox',
       y: 15.8,
       sliced: true,
       selected: true,
       },
       ['Safari', 18.5],
     ]
    }]
    }

    //Pie Chart
    .higchart(data-graph-object= JsonStringify(highPieObject), style='width: 100%; height: 255px; margin: 0 auto;')

  </code></pre>

<h4>Setting up and managing flot.js</h4>
<p>To create a graph based on flot, add to the marking a block with the class <b>"flot-chart"</b>, the main
  attribute of which is <b>"data-graph-object"</b>, the value of which is a predefined object with graph settings
  and "data-grid-object", the value of which is a predefined object with the settings of system of axes. </p>

<p>The full sample code will look the following way:</p>

<pre><code>
    //-Define Grid object for Flot Charts Plugin
    var gridObject = {
     grid: {
      show: true,
      aboveData: true,
      color: "#bbbbbb",
      labelMargin: 15,
      axisMargin: 0,
      borderWidth: 0,
      borderColor: null,
      minBorderMargin: 5,
      clickable: true,
      hoverable: true,
      autoHighlight: true,
      mouseActiveRadius: 20,
     },
     tooltip: true,
     //activate tooltip
     tooltipOpts: {
      content: "%x : %y.0",
       shifts: {
        x: -30,
        y: -50
       },
      defaultTheme: false
     }
    }

    //- Define object for "Spine Chart"
    var d1 = [];

    for (var i = 0; i < 14; i += 0.5) {
     d1.push([i, Math.sin(i)]);
    }

    var splineChartObject = [{
     data: d1,
     lines: {
      show: true,
      fill: true
     },
     color: '#46b777'
    }]

    .flot-chart(data-graph-object= JsonStringify(splineChartObject),
                data-grid-object= JsonStringify(gridObject),
                style='width: 100%; height: 370px; margin: 0 auto')

  </code></pre>

<h4>Setting up and working with с3chart.js plugin</h4>

<p>To create a graph based on с3chart plugin, add to the marking a block
  with <b>"d3-chart"</b> class, the main attribute of which will be <b>"data-graph-object"</b>, the value of which is a predefined object
  with all the graph settings. Each graph should have a unique <b>id</b>, which should correspond to the value of <b>"bindto"</b> setting of the object with settings.</p>


<p>The full sample code will look the following way:</p>

<pre><code>
    //- Define object for "Area Chart"

    var areaChartObject = {
     bindto: '#area-chart',
      color: {
       pattern: d3ChartColors,
      },
      padding: {
       left: 30,
       right: 15,
       top: 0,
       bottom: 0,
      },
      data: {
       columns: [
       ['data1', 300, 350, 300, 0, 0, 0],
       ['data2', 130, 100, 140, 200, 150, 50]]
      }
    }
    .d3-chart#area-chart(data-graph-object= JsonStringify(areaChartObject),
                         style='width: 100%; height: 370px; margin: 0 auto')
  </code></pre>