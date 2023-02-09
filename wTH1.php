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
      <h2>Temperatura i vlažnost</h2> <!-- Page title-->
      <p class="lead">Poslednjih 12 mjerenja sa svih senzora.</p>
    </div>

    <div class="col-md-12">
            <canvas id="chartJSMultiLinesDB"></canvas>
    </div>

    <div class="py-5 text-center">
      <h3>Sve mjerenja</h3> <!-- Page title-->
      <p class="lead">Data is coming from the includes/data/chartJSdataBars.php page. Displaying just one dataset.</p>
    </div>


    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>placeholder</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              <td>irrelevant</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>visual</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>



        


   

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



    </script>
     <!-- Libraries end -->

  </body> <!-- Body end -->
</html>
