<?php
  require_once("includes/head.php");
?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
 <title>SGB</title>
  </head>

  <body onload="getData()">

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
            <!-- <li class="sub_text">Podaci od prije 1 min i 27 sek </li> -->
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
              <li class="sub_text"><span id="t1_time" style="text-align:left;"></span> </li>
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
              <li class="sub_text" ><span id="t2_time"></span> </li>
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
              <li class="sub_text"><span id="t3_time"></span> </li>
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
    <script src="assets/js/sgb-core.js"></script>
     <!-- Libraries end -->

     


  </body>
</html>
