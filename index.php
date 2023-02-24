<?php
  require_once("includes/head.php");
?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <title>SGB</title>
  </head>

  <body onload="">

  <!-- Top menu - header_menu start -->
  <?php
  require_once("includes/header_menu.php");
  ?>
  <!-- Top menu - header_menu end -->

  
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 style='font-weight:600; color:#228B22; '"><i class="fa-solid fa-seedling"></i> #1 PLASTENIK</h2>
      <p class="lead">Aktuelni podaci</p>
    </div>




    <div class="container"> <!-- Container 1 start -->
      
    <div class="card-deck mb-3 text-center">
        <div class="card mb-3 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><i class="fa-solid fa-gauge"></i> Trenutni prosjek</i></h4>
          </div>
          <div class="card-body">
          <ul class="list-unstyled mt-3 mb-1 temp_title">
            <li>TEMPERATURA</li>
          </ul>
            <h1 class="card-title pricing-card-title temp_color">         
            <i class="fa-solid fa-temperature-three-quarters"></i>
            <span id="current_avg_temp"></span> °C</h1>
          <ul class="list-unstyled mt-3 mb-1 hum_title">
            <li>VLAŽNOST</li>
          </ul>  
            <h1 class="card-title pricing-card-title hum_color">
                <i class="fa-solid fa-droplet"></i>
                <span id="current_avg_hum"></span>%</h1>
            <ul class="list-unstyled mt-3 mb-1">
            <li class="sub_text">Podaci od prije 1 min i 27 sek </li>
          </ul>  
            <a class="btn btn-lg btn-block btn-outline-primary" href="sub-page.php" role="button">Detaljnije</a>
          </div>
        </div>
        <div class="card mb-3 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><i class="fa-solid fa-down-left-and-up-right-to-center"></i> Dnevni min/maks</h4>
          </div>
          <div class="card-body">
          <ul class="list-unstyled mt-3 mb-1 temp_title">
            <li>Min. Temperatura u <span id="current_min_temp_time"></span> na <span id="current_min_temp_sensor"></span></li>
          </ul>
          <h4 class="card-title pricing-card-title temp_color">         
            <i class="fa-solid fa-temperature-three-quarters"></i>
            <span id="current_min_temp"></span>°C</h4>
          <ul class="list-unstyled mt-3 mb-1 hum_title">
            <li>Min. vlažnost u <span id="current_min_hum_time"></span> na <span id="current_min_hum_sensor"></span></li>
          </ul>  
          <h4 class="card-title pricing-card-title hum_color">
                <i class="fa-solid fa-droplet"></i>
                <span id="current_min_hum"></span>%</h4>
                <ul class="list-unstyled mt-3 mb-1 temp_title">
            <li>Maks. Temperatura u <span id="current_max_temp_time"></span> na <span id="current_max_temp_sensor"></span></li>
          </ul>
          <h4 class="card-title pricing-card-title temp_color">         
            <i class="fa-solid fa-temperature-three-quarters"></i>
            <span id="current_max_temp"></span>°C</h4>
          <ul class="list-unstyled mt-3 mb-1 hum_title">
            <li>Maks. vlažnost u <span id="current_max_hum_time"></span> na <span id="current_max_hum_sensor"></span></li>
          </ul>  
          <h4 class="card-title pricing-card-title hum_color">
                <i class="fa-solid fa-droplet"></i>
                <span id="current_max_hum"></span>%</h4>
          </div>
        </div>
        


      </div> <!-- Container 1 end -->


      <div class="container"> <!-- Container 2 start -->
      
    
    
      <div class="card-deck mb-3 text-center">
          <div class="card mb-3 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal"><i class="fa-solid fa-microchip"></i> Senzor T1</h4>
            </div>
            <div class="card-body">
            <ul class="list-unstyled mt-3 mb-1 temp_title">
              <li>TEMPERATURA</li>
            </ul>
            <h1 class="card-title pricing-card-title temp_color"><i class="fa-solid fa-temperature-arrow-up"></i> <span id="t1_temp"></span>°C</h1>
            <ul class="list-unstyled mt-3 mb-1 hum_title">
              <li>VLAŽNOST</li>
            </ul>  
            <h1 class="card-title pricing-card-title hum_color"><i class="fa-solid fa-droplet"></i> <span id="t1_hum"></span>%</h1>
              <ul class="list-unstyled mt-3 mb-1">
              <li class="sub_text">Podaci od prije <span id="t1_time"></span> </li>
            </ul>  
            <a class="btn btn-lg btn-block btn-outline-primary" href="wTH1.php" role="button">Detaljnije</a>
            </div>
          </div>


          <div class="card mb-3 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal"><i class="fa-solid fa-microchip"></i> Senzor T2</h4>
            </div>
            <div class="card-body">
            <ul class="list-unstyled mt-3 mb-1 temp_title">
              <li>TEMPERATURA (+1.6°C)</li>
            </ul>
              <h1 class="card-title pricing-card-title temp_color">         
              <i class="fa-solid fa-temperature-arrow-up"></i> <span id="t2_temp"></span>°C</h1>
            <ul class="list-unstyled mt-3 mb-1 hum_title">
              <li>VLAŽNOST (-4%)</li>
            </ul>  
              <h1 class="card-title pricing-card-title hum_color"><i class="fa-solid fa-droplet"></i> <span id="t2_hum"></span>%</h1>
              <ul class="list-unstyled mt-3 mb-1">
              <li class="sub_text" >Podaci od prije <span id="t2_time"></span> </li>
            </ul>  
            <a class="btn btn-lg btn-block btn-outline-primary" href="wTH1.php" role="button">Detaljnije</a>
            </div>
          </div>
          
          <div class="card mb-3 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal"><i class="fa-solid fa-microchip"></i> Senzor T3</h4>
            </div>
            <div class="card-body">
            <ul class="list-unstyled mt-3 mb-1 temp_title">
              <li>TEMPERATURA</li>
            </ul>
              <h1 class="card-title pricing-card-title temp_color"><i class="fa-solid fa-temperature-arrow-up"></i> <span id="t3_temp"></span>°C</h1>
            <ul class="list-unstyled mt-3 mb-1 hum_title">
              <li>VLAŽNOST</li>
            </ul>  
              <h1 class="card-title pricing-card-title hum_color"><i class="fa-solid fa-droplet"></i> <span id="t3_hum"></span>%</h1>
              <ul class="list-unstyled mt-3 mb-1">
              <li class="sub_text">Podaci od prije <span id="t3_time"></span> </li>
            </ul>  
            <a class="btn btn-lg btn-block btn-outline-primary" href="wTH1.php" role="button">Detaljnije</a>
            </div>
          </div>
  
        </div> <!-- Container 2 end -->

        <?php
            require_once("includes/footer.php");
        ?>

    </div>


    <!-- Libraries start -->
    <?php
          //  require_once("includes/lib.php");
    ?>
     <!-- Libraries end -->


     <script>
    $.ajax({
      type: "POST",
      url: "get_data.php",
      data: { values: ["2.1", "4.3", "1.9"] },
      success: function(data) {
        //console.log("The data was successfully sent and received by the PHP script.");
        console.log("Response: " + data);
        //document.getElementById("value1").innerHTML = data;
        const myArray = data.split(", ");
        //t1 current data set
        $t1_temp = parseFloat(myArray[0]).toFixed(1);
        $t1_hum = parseFloat(myArray[1]).toFixed(1);
        document.getElementById("t1_temp").innerHTML = $t1_temp;
        document.getElementById("t1_hum").innerHTML = $t1_hum;
        document.getElementById("t1_time").innerHTML = myArray[2];
        //t2 current data set
        $t2_temp = parseFloat(myArray[3]).toFixed(1);
        $t2_hum = parseFloat(myArray[4]).toFixed(1);
        document.getElementById("t2_temp").innerHTML = $t2_temp;
        document.getElementById("t2_hum").innerHTML = $t2_hum;
        document.getElementById("t2_time").innerHTML = myArray[5];
        //t3 current data set
        $t3_temp = parseFloat(myArray[6]).toFixed(1);
        $t3_hum = parseFloat(myArray[7]).toFixed(1);
        document.getElementById("t3_temp").innerHTML =  $t3_temp;
        document.getElementById("t3_hum").innerHTML = $t3_hum;
        document.getElementById("t3_time").innerHTML = myArray[8];
        //Min Temp values data set
        if(isNaN(myArray[9])){
          $min_temp = '-';
          $min_temp_sensor = '-';
          $min_temp_time = '-';
        }
        else{
          $min_temp = parseFloat(myArray[9]).toFixed(1);
          $min_temp_sensor = myArray[10];
          $min_temp_time = myArray[11];
        }
        document.getElementById("current_min_temp").innerHTML =  $min_temp;
        document.getElementById("current_min_temp_sensor").innerHTML = $min_temp_sensor;
        document.getElementById("current_min_temp_time").innerHTML = $min_temp_time;
         //Max Temp values data set
         if(isNaN(myArray[9])){
          $max_temp = '-';
          $max_temp_sensor = '-';
          $max_temp_time = '-';
        }
        else{
          $max_temp = parseFloat(myArray[12]).toFixed(1);
          $max_temp_sensor = myArray[13];
          $max_temp_time = myArray[14];
        }
        document.getElementById("current_max_temp").innerHTML =  $max_temp;
        document.getElementById("current_max_temp_sensor").innerHTML = $max_temp_sensor;
        document.getElementById("current_max_temp_time").innerHTML = $max_temp_time;
        //Min Hum values data set
        if(isNaN(myArray[9])){
          $min_hum = '-';
          $min_hum_sensor = '-';
          $min_hum_time = '-';
        }
        else{
          $min_hum = parseFloat(myArray[15]).toFixed(1);
          $min_hum_sensor = myArray[16];
          $min_hum_time = myArray[17];
        }
        document.getElementById("current_min_hum").innerHTML =  $min_hum;
        document.getElementById("current_min_hum_sensor").innerHTML = $min_hum_sensor;
        document.getElementById("current_min_hum_time").innerHTML = $min_hum_time;
        //Max Hum values data set
        if(isNaN(myArray[9])){
          $max_hum = '-';
          $max_hum_sensor = '-';
          $max_hum_time = '-';
        }
        else{
          $max_hum = parseFloat(myArray[18]).toFixed(1);
          $max_hum_sensor = myArray[19];
          $max_hum_time = myArray[20];
        }
        document.getElementById("current_max_hum").innerHTML =  $max_hum;
        document.getElementById("current_max_hum_sensor").innerHTML = $max_hum_sensor;
        document.getElementById("current_max_hum_time").innerHTML = $max_hum_time;

        //current avg temp - calculation
        $current_avg_temp = ((parseFloat(myArray[0])+parseFloat(myArray[3])+parseFloat(myArray[6]))/3).toFixed(2);
        $current_avg_hum = ((parseFloat(myArray[1])+parseFloat(myArray[4])+parseFloat(myArray[7]))/3).toFixed(2);
        //current avg temp/hum set
        document.getElementById("current_avg_temp").innerHTML = $current_avg_temp;
        document.getElementById("current_avg_hum").innerHTML = $current_avg_hum;

        
        
        //document.getElementById("t3_time").innerHTML = myArray[8];


        
  }
    });
    </script>


  </body>
</html>
