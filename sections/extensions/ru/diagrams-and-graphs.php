<h3>Диаграммы и графики</h3>
<h6>    Intense использует плагины <b>hightchart.js</b>, <b>flot.js</b> и <b>c3charts.js</b> для реализации диаграмм и графиков. Перед тем как использовать данные расширения, настоятельно рекомендуем ознакомится с официальной документацией: </h6>

<ul class="marked-list">
  <li><a href="http://www.highcharts.com/docs">Hightchart.js</a></li>
  <li><a href="https://github.com/flot/flot/blob/master/API.md">Flot.js</a></li>
  <li><a href="http://c3js.org/gettingstarted.html">C3charts</a></li>
</ul>

<h4>Общие принципы использования</h4>

<p>Для удобства редактирования параметров диаграмм и графиков мы рекомендуем воспользоваться исходными
  файлами <b>.jade</b>. В <b>.jade</b> файлах перед каждой конкретной диаграммой объявляется объект с
  настройками данной диаграммы или графика, который всегда имеет комментарий <b>"//- Define object for "*""</b>.
  Все настройки графиков и диаграмм задаются через этот объект.</p>
<p>
  Вы можете использовать любые диаграммы и графики, представленные на странице <b>Components > Toolkit Components > Charts and Graphs</b>.
</p>

<h4>Настройка и работа с плагином <b>hightcharts.js</b></h4>
<p>Для создание графика на основе плагина <b>hightcharts</b> необходимо в разметку добавить блок
  с классом <b>"hightchart"</b>, главным атрибутом которого будет <b>"data-graph-object"</b>,
  значением которого является заранее определенный объект со всеми настройками для графика. </p>

<p>Полный пример кода будет выглядеть следующим образом:</p>
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

<h4>Настройка и работа с плагином <b>flot.js</b></h4>
<p>Для создание графика на основе плагина <b>flot</b> необходимо в разметку добавить блок с классом <b>"flot-chart"</b>,
  главным атрибутом которого будет <b>"data-graph-object"</b>, значением которого является заранее определенный объект с настройками для графика,
  а так же <b>"data-grid-object"</b>, значением которого является заранее определенный объект с настройками для системы координат. </p>

<p>Полный пример кода будет выглядеть следующим образом:</p>

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

<h4>Настройка и работа с плагином <b>с3chart.js</b></h4>

<p>Для создание графика на основе плагина <b>с3chart</b> необходимо в разметку добавить блок с классом <b>d3-chart</b>,
  главным атрибутом которого будет <b>"data-graph-object"</b>, значением которого является заранее определенный объект со всеми настройками для графика.
  У каждого графика должен быть уникальный <b>id</b>, который должен соответствовать параметру <b>"bindto"</b> объекта с настройками.</p>


<p>Полный пример кода будет выглядеть следующим образом:</p>

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