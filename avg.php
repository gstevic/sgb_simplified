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
      <h2>Prosječna mjerenja po satima</h2> <!-- Page title-->
      <!-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</!--> 
    
      <div id="graph">
        <canvas id="chartJSMixedDB"></canvas>
      </div>
      

  <div class="input-group mb-3 form-group">
      <input type="text" class="form-control datepicker" placeholder="Izaberiti datum" aria-label="Izaberiti datum" aria-describedby="basic-addon2" id="date" name="date">
      <div class="input-group-append">
        <button class="btn btn-outline-primary" type="button" onclick="button()">Prikaži mjerenja</button>
      </div>
  </div>


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
     <!-- Libraries end -->

 
     <script>  

const now = new Date();

/*
const tt24 = new Date(now.getTime() - (24 * 60 * 60 * 1000));
const tt23 = new Date(now.getTime() - (23 * 60 * 60 * 1000));
const tt22 = new Date(now.getTime() - (22 * 60 * 60 * 1000));
const tt21 = new Date(now.getTime() - (21 * 60 * 60 * 1000));
const tt20 = new Date(now.getTime() - (20 * 60 * 60 * 1000));
const tt19 = new Date(now.getTime() - (19 * 60 * 60 * 1000));
const tt18 = new Date(now.getTime() - (18 * 60 * 60 * 1000));
const tt17 = new Date(now.getTime() - (17 * 60 * 60 * 1000));
const tt16 = new Date(now.getTime() - (16 * 60 * 60 * 1000));
const tt15 = new Date(now.getTime() - (15 * 60 * 60 * 1000));
const tt14 = new Date(now.getTime() - (14 * 60 * 60 * 1000));
const tt13 = new Date(now.getTime() - (13 * 60 * 60 * 1000));
const tt12 = new Date(now.getTime() - (12 * 60 * 60 * 1000));
const tt11 = new Date(now.getTime() - (11 * 60 * 60 * 1000));
const tt10 = new Date(now.getTime() - (10 * 60 * 60 * 1000));
const tt9 = new Date(now.getTime() - (9 * 60 * 60 * 1000));
const tt8 = new Date(now.getTime() - (8 * 60 * 60 * 1000));
const tt7 = new Date(now.getTime() - (7 * 60 * 60 * 1000));
const tt6 = new Date(now.getTime() - (6 * 60 * 60 * 1000));
const tt5 = new Date(now.getTime() - (5 * 60 * 60 * 1000));
const tt4 = new Date(now.getTime() - (4 * 60 * 60 * 1000));
const tt3 = new Date(now.getTime() - (3 * 60 * 60 * 1000));
const tt2 = new Date(now.getTime() - (2 * 60 * 60 * 1000));
const tt1 = new Date(now.getTime() - (1 * 60 * 60 * 1000));
const tt0 = new Date(now.getTime());
*/

const options = { 
// year: 'numeric', 
// month: 'short', 
// day: 'numeric', 
hour: 'numeric', 
// minute: 'numeric', 
// second: 'numeric', 
hour12: false 
};

/*
const t_tt24 = tt24.toLocaleString('sr-SP', options);
const t_tt23 = tt23.toLocaleString('sr-SP', options);
const t_tt22 = tt22.toLocaleString('sr-SP', options);
const t_tt21 = tt21.toLocaleString('sr-SP', options);
const t_tt20 = tt20.toLocaleString('sr-SP', options);
const t_tt19 = tt19.toLocaleString('sr-SP', options);
const t_tt18 = tt18.toLocaleString('sr-SP', options);
const t_tt17 = tt17.toLocaleString('sr-SP', options);
const t_tt16 = tt16.toLocaleString('sr-SP', options);
const t_tt15 = tt15.toLocaleString('sr-SP', options);
const t_tt14 = tt14.toLocaleString('sr-SP', options);
const t_tt13 = tt13.toLocaleString('sr-SP', options);
const t_tt12 = tt12.toLocaleString('sr-SP', options);
const t_tt11 = tt11.toLocaleString('sr-SP', options);
const t_tt10 = tt10.toLocaleString('sr-SP', options);
const t_tt9 = tt9.toLocaleString('sr-SP', options);
const t_tt8 = tt8.toLocaleString('sr-SP', options);
const t_tt7 = tt7.toLocaleString('sr-SP', options);
const t_tt6 = tt6.toLocaleString('sr-SP', options);
const t_tt5 = tt5.toLocaleString('sr-SP', options);
const t_tt4 = tt4.toLocaleString('sr-SP', options);
const t_tt3 = tt3.toLocaleString('sr-SP', options);
const t_tt2 = tt2.toLocaleString('sr-SP', options);
const t_tt1 = tt1.toLocaleString('sr-SP', options);
const t_tt0 = tt0.toLocaleString('sr-SP', options);
*/


//Creates an array with hour values for the ChartJS labels 
const hourLabels = [];

for (let i = 0; i < 24; i++) {
  if(i<10){
    hourLabels.push('0'+i+'h');
  }
  else{
    hourLabels.push(i+'h');
  }
}



//Mixed Chart - php data begin
$(document).ready(function () {
const today = new Date();
const year = today.getFullYear();
const month = (today.getMonth() + 1).toString().padStart(2, '0');
const day = today.getDate().toString().padStart(2, '0');

const currentDate = `${year}-${month}-${day}`;

console.log(currentDate);


      showGraphMixedChart(currentDate);
  });

  const showGraphMixedChart = (date) => {
      {
          var url = 'includes/data/cJSavg24.php?date="'+date+'"';
          console.log(url);

          $.post(url, function (data_avg)
          {

            console.log(data_avg);
            var temp = [];
            var hum = [];

            for (var i in data_avg) {
              temp.push(data_avg[i].temp);
              hum.push(data_avg[i].hum);
            }
            

          //  console.log(temp);


 chartdataLines2 = { datasets: [{
     label: 'Temperatura',
     data: temp,
     backgroundColor: '#ffa084',
     borderColor: '#E86144',
     hoverBackgroundColor: '#E86144',
     hoverBorderColor: '#666666',
     // this dataset is drawn below
     order: 2
 }, {
     label: 'Vlažnost',
     data: hum,
     type: 'line',
     borderColor: '#6fc1fa',
     backgroundColor: '#6fc1fa',
     hoverBackgroundColor: '#0096FF',
     hoverBorderColor: '#666666',
     //lineTension: 0.2,
     // this dataset is drawn on top
     order: 1
 }],
 labels: hourLabels
};

  var graphTarget2 = $("#chartJSMixedDB");

  var barGraph2 = new Chart(graphTarget2, {
                type: 'bar',
                data: chartdataLines2
            });
   //options: bezierCurve: true

 
  // console.log('here');


  });


}
}

function button() {
  // Remove the canvas element with the ID "chartJSMixedDB"
const selectedDate = document.querySelector('#date').value;
        console.log(selectedDate);
const dateParts = selectedDate.split('.'); // split the date string into parts
const formattedDate = new Date(`${dateParts[2]}-${dateParts[1]}-${dateParts[0]}`).toISOString().substring(0, 10);


  var canvas = document.getElementById("chartJSMixedDB");
  canvas.remove();
  // Create a new canvas element and set its attributes
  var newCanvas = document.createElement("canvas");
  newCanvas.setAttribute("id", "chartJSMixedDB");
  // Add the new canvas element to the DOM
  var container = document.getElementById("graph");
  container.appendChild(newCanvas);
  showGraphMixedChart(formattedDate);
  // Use the new canvas element to draw your chart or graph
  // ...
  // Get the value of datepicker on button click
  

}



    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: 'dd.mm.yyyy',
            language: 'sr',
            autoclose: true,
            todayHighlight: true
        });
    });

//Mixed Chart - php data end
</script>
   
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">


  </body> <!-- Body end -->
</html>
