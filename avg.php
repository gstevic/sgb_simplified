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


const options = { 
  hour: 'numeric',  
  hour12: false 
};



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
