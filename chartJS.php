<?php
  require_once("includes/head.php");
?>
    <title>SGB</title>
  </head>

  <body>

  <!-- Top menu - header_menu start -->
  <?php
  require_once("includes/header_menu.php");
  ?>
  <!-- Top menu - header_menu end -->


    <div class="container">   <!-- Container 1 start -->
      

    <div class="py-5 text-center">
      <h2>Simple chartJS implementation</h2> <!-- Page title-->
      <p class="lead">Here are some examples of the chartJS implementation MySQL&PHP</p>
    </div>


    <div class="py-5 text-center">
      <h3>#1 Bars</h3> <!-- Page title-->
      <p class="lead">Data is coming from the includes/data/chartJSdataBars.php page. Displaying just one dataset.</p>
    </div>

    <div class="col-md-12">
                <canvas id="chartJSbars"></canvas>
    </div>


    <div class="py-5 text-center">
      <h3>#2 Multiple lines</h3> <!-- Page title-->
      <p class="lead">Data is coming from the includes/data/chartJSdata.php page. Displaying just one dataset.</p>
    </div>

    <div class="col-md-12">
            <canvas id="line-chart"></canvas>
    </div>

    

    <div class="py-5 text-center">
      <h3>#2 Multiple lines</h3> <!-- Page title-->
      <p class="lead">Data is coming from the includes/data/chartJSdata.php page. Displaying just one dataset.</p>
    </div>

    <div class="col-md-12">
            <canvas id="chartJSMultiLinesDB"></canvas>
    </div>


    <div class="py-5 text-center">
      <h3>#3 Mixed chart</h3> <!-- Page title-->
      <p class="lead">Data is coming from the hardcoded dataset</p>
    </div>

    <div class="col-md-12">
            <canvas id="mixed-chart"></canvas>
    </div> 

    
        
    <div class="py-5 text-center">
      <h3>#3 Mixed chart</h3> <!-- Page title-->
      <p class="lead">Data is coming from the ncludes/data/chartJSdata.php page.</p>
    </div>

    <div class="col-md-12">
            <canvas id="chartJSMixedDB"></canvas>
    </div> 


   

    <!-- Footer start -->
    <?php
            require_once("includes/footer.php");
    ?>
    <!-- Footer end -->



    </div> <!-- Container 1 end -->

    <!-- Libraries start -->
    <?php
            require_once("includes/lib.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>


    //#1 Bars example start 
        $(document).ready(function () {
            showGraph();
        });

        const showGraph = () => {
            {
                $.post("includes/data/chartJSdataBars.php",function (data)
                {
                    console.log(data);
                    var sensor = [];
                    var temp = [];

                    for (var i in data) {
                        sensor.push(data[i].sensor);
                        temp.push(data[i].temp);
                    }

                    var chartdata = {
                        labels: sensor,
                        datasets: [
                            {
                                label: 'Temperatura',
                                backgroundColor: 'green',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: temp
                            }
                        ]
                    };

                    var graphTarget = $("#chartJSbars");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
     //#1 Bars example end


     //#2 Multiple lines charts start
     new Chart(document.getElementById("line-chart"), {
            type: 'line',
            data: {
            labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
        datasets: [{ 
        data: [86,114,106,106,107,111,133,221,783,2478],
        label: "Africa",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [282,350,411,502,635,809,947,1402,3700,5267],
        label: "Asia",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
        data: [168,170,178,190,203,276,408,547,675,734],
        label: "Europe",
        borderColor: "#3cba9f",
        fill: false
      }, { 
        data: [40,20,10,16,24,38,74,167,508,784],
        label: "Latin America",
        borderColor: "#e8c3b9",
        fill: false
      }, { 
        data: [6,3,2,2,7,26,82,172,312,433],
        label: "North America",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});
//#2 Multiple lines charts end


//#3 Multiple lines charts start - db data 
$(document).ready(function () {
            showGraphMultipleLines();
        });

        const showGraphMultipleLines = () => {
            {
                $.post("includes/data/chartJSdataMultipleLines.php",function (data)
                {
                    console.log(data);
                    var time = [];
                    var temp = [];
                    var sensor = [];

                    var t1Temp = [];
                    var t1Hum = [];

                    var t2Temp = [];
                    var t2Hum = [];

                    var t3Temp = [];
                    var t3Hum = [];

                    for (var i in data) {
                        time.push(data[i].time);
                        temp.push(data[i].temp);
                    }

                   var t1 = data.filter(function(el){
                        return el.sensor == 't1';
                    });

                    for (var i in t1) {
                        t1Temp.push(t1[i].temp);
                        t1Hum.push(t1[i].hum);
                    }
                   
                   var t2 = data.filter(function(el){
                        return el.sensor == 't2';
                    });

                    for (var i in t2) {
                        t2Temp.push(t2[i].temp);
                        t2Hum.push(t2[i].hum);
                    }

                    var t3 = data.filter(function(el){
                        return el.sensor == 't3';
                    });

                    for (var i in t3) {
                        t3Temp.push(t3[i].temp);
                        t3Hum.push(t3[i].hum);
                    }

                    console.log(t1Temp);
                    console.log(t2);
                    console.log(t3);

                    var chartdataLines = {
                        labels: [1,2,3,4,5,6],
                        datasets: [{ 
                            data: t1Temp,
                            label: "Temp T1",
                            borderColor: "#00CC2E",
                            fill: false
                        }, { 
                            data: t2Temp,
                            label: "Temp T2",
                            borderColor: "#D7BB1D",
                            fill: false
                        }, { 
                            data: t3Temp,
                            label: "Temp T3",
                            borderColor: "#C423A7",
                            fill: false
                        }, { 
                            data: t1Hum,
                            label: "Hum T1",
                            borderColor: "#00CC2E",
                            fill: false
                        }, { 
                            data: t2Hum,
                            label: "Hum T2",
                            borderColor: "#D7BB1D",
                            fill: false
                        }, { 
                            data: t3Hum,
                            label: "Hum T2",
                            borderColor: "#C423A7",
                            fill: false
                        }]
                    };

                    var graphTarget = $("#chartJSMultiLinesDB");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdataLines
                    });
                });
            }
        }
     //#1 Bars example end

     //Mixed Chart begin
     new Chart(document.getElementById("mixed-chart"), {
      type: 'bar',
   data: {
       datasets: [{
           label: 'Bar Dataset',
           data: [10, 20, 30, 40],
           backgroundColor: '#E86144',
                                borderColor: '#E86144',
                                hoverBackgroundColor: '#ffa084',
                                hoverBorderColor: '#666666',
           // this dataset is drawn below
           order: 2
       }, {
           label: 'Line Dataset',
           data: [10, 25, 10, 10],
           type: 'line',
           borderColor: 'blue',
           backgroundColor: 'blue',
           // this dataset is drawn on top
           order: 1
       }],
       labels: ['January', 'February', 'March', 'April']
   },
  // options: options
});

     //Mixed Chart end





     //Mixed Chart - php data begin


    chartdataLines2 = { datasets: [{
           label: 'Bar Dataset',
           data: [10, 20, 30, 40],
           backgroundColor: '#E86144',
                                borderColor: '#E86144',
                                hoverBackgroundColor: '#ffa084',
                                hoverBorderColor: '#666666',
           // this dataset is drawn below
           order: 2
       }, {
           label: 'Line Dataset',
           data: [10, 25, 30, 10],
           type: 'line',
           borderColor: 'blue',
           backgroundColor: 'blue',
           // this dataset is drawn on top
           order: 1
       }],
       labels: ['January', 'February', 'March', 'April']
      };

     $(document).ready(function () {
            showGraphMixedChart();
        });

        const showGraphMixedChart = () => {
            {
                $.post("includes/data/chartJSdataMultipleLines.php",function (data1)
                {
      var graphTarget2 = $("#chartJSMixedDB");

      var barGraph2 = new Chart(graphTarget2, {
                        type: 'bar',
                        data: chartdataLines2
                    });
        // options: options
         
       // console.log('here');

        });
     
     
    }
  }

  
     //Mixed Chart - php data end



    </script>
     <!-- Libraries end -->

  </body> <!-- Body end -->
</html>
