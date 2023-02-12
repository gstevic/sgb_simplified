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

<?php
/*
$current_temp_t1;
$current_temp_t2;
$current_temp_t3;

$current_hum_t1;
$current_hum_t2;
$current_hum_t3;

$current_time_t1;
$current_time_t2;
$current_time_t3;

$current_min_temp; 
*/


//GET Data for T1 sensor start
$sql_t1 = "SELECT sensor, temperature, humidity, created_at from readings where sensor = 't1' order by created_at desc limit 1";

if (mysqli_query($conn, $sql_t1)) {
 $result = $conn->query($sql_t1);
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $current_temp_t1 = $row["temperature"];
    $current_hum_t1 = $row["humidity"];
    $current_time_t1 = $row["created_at"];
  }
} else {
  echo "0 results";
}
}
//GET Data for T1 sensor end


//GET Data for T2 sensor start
$sql_t2 = "SELECT sensor, temperature, humidity, created_at from readings where sensor = 't2' order by created_at desc limit 1";

if (mysqli_query($conn, $sql_t2)) {
 $result = $conn->query($sql_t2);
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $current_temp_t2 = $row["temperature"];
    $current_hum_t2 = $row["humidity"];
    $current_time_t2 = $row["created_at"];
  }
} else {
  //echo "0 results";
}
}
//GET Data for T2 sensor end


//GET Data for T3 sensor start
$sql_t3 = "SELECT sensor, temperature, humidity, created_at from readings where sensor = 't3' order by created_at desc limit 1";

if (mysqli_query($conn, $sql_t3)) {
 $result = $conn->query($sql_t3);
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $current_temp_t3 = $row["temperature"];
    $current_hum_t3 = $row["humidity"];
    $current_time_t3 = $row["created_at"];
  }
} else {
  //echo "0 results";
}
}
//GET Data for T3 sensor end



//GET min temp start
$sql_min_temp = "SELECT sensor, temperature, humidity, created_at from readings where temperature = (SELECT MIN(temperature) FROM readings where DATE(created_at) = DATE(now())) and DATE(created_at)=DATE(now()) order by created_at limit 1";

if (mysqli_query($conn, $sql_min_temp)) {
 $result = $conn->query($sql_min_temp);
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $current_min_temp = $row["temperature"];
    $current_min_temp_time = $row["created_at"];
    $current_min_temp_sensor = $row["sensor"];
  }
} else {
  $current_min_temp = '-';
  $current_min_temp_time = '-';
  $current_min_temp_sensor = '-';
}
}
//GET min temp end


//GET min hum start
$sql_min_hum = "SELECT sensor, temperature, humidity, created_at from readings where humidity = (SELECT MIN(humidity) FROM readings where DATE(created_at) = DATE(now())) and DATE(created_at)=DATE(now()) order by created_at limit 1";

if (mysqli_query($conn, $sql_min_hum)) {
 $result = $conn->query($sql_min_hum);
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $current_min_hum = $row["humidity"];
    $current_min_hum_time = $row["created_at"];
    $current_min_hum_sensor = $row["sensor"];
  }
} else {
    $current_min_hum = '-';
    $current_min_hum_time = '-';
    $current_min_hum_sensor = '-';
}
}
//GET min hum end


//GET max temp start
$sql_max_temp = "SELECT sensor, temperature, humidity, created_at from readings where temperature = (SELECT MAX(temperature) FROM readings where DATE(created_at) = DATE(now())) and DATE(created_at)=DATE(now()) order by created_at limit 1";

if (mysqli_query($conn, $sql_max_temp)) {
 $result = $conn->query($sql_max_temp);
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $current_max_temp = $row["temperature"];
    $current_max_temp_time = $row["created_at"];
    $current_max_temp_sensor = $row["sensor"];
  }
} else {
  $current_max_temp = '-';
  $current_max_temp_time = '-';
  $current_max_temp_sensor = '-';
}
}
//GET max temp end


//GET max hum start
$sql_max_hum = "SELECT sensor, temperature, humidity, created_at from readings where humidity = (SELECT MAX(humidity) FROM readings where DATE(created_at) = DATE(now())) and DATE(created_at)=DATE(now()) order by created_at limit 1";

if (mysqli_query($conn, $sql_max_hum)) {
 $result = $conn->query($sql_max_hum);
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $current_max_hum = $row["humidity"];
    $current_max_hum_time = $row["created_at"];
    $current_max_hum_sensor = $row["sensor"];
  }
} else {
  $current_max_hum = '-';
    $current_max_hum_time = '-';
    $current_max_hum_sensor = '-';
}
}
//GET max hum end


// Calculate the avarage temperature and humidity start
$current_avg_temp = ($current_temp_t1+$current_temp_t2+$current_temp_t3)/3;
$current_avg_hum = ($current_hum_t1+$current_hum_t2+$current_hum_t3)/3;
// Calculate the avarage temperature and humidity end


?>



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
            <?php echo round($current_avg_temp,1); ?>°C</h1>
          <ul class="list-unstyled mt-3 mb-1 hum_title">
            <li>VLAŽNOST</li>
          </ul>  
            <h1 class="card-title pricing-card-title hum_color">
                <i class="fa-solid fa-droplet"></i>
                <?php echo round($current_avg_hum,1); ?>%</h1>
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
            <li>Min. Temperatura u <?php echo date('H:i:s',strtotime($current_min_temp_time)); ?> na <?php echo $current_min_temp_sensor; ?></li>
          </ul>
          <h4 class="card-title pricing-card-title temp_color">         
            <i class="fa-solid fa-temperature-three-quarters"></i>
            <?php echo round($current_min_temp,1); ?>°C</h4>
          <ul class="list-unstyled mt-3 mb-1 hum_title">
            <li>Min. vlažnost u <?php echo date('H:i:s',strtotime($current_min_hum_time)); ?> na <?php echo $current_min_hum_sensor; ?></li>
          </ul>  
          <h4 class="card-title pricing-card-title hum_color">
                <i class="fa-solid fa-droplet"></i>
                <?php echo round($current_min_hum,1); ?>%</h4>
                <ul class="list-unstyled mt-3 mb-1 temp_title">
            <li>Maks. Temperatura u <?php echo date('H:i:s',strtotime($current_max_temp_time)); ?> na <?php echo $current_max_temp_sensor; ?></li>
          </ul>
          <h4 class="card-title pricing-card-title temp_color">         
            <i class="fa-solid fa-temperature-three-quarters"></i>
            <?php echo round($current_max_temp,1); ?>°C</h4>
          <ul class="list-unstyled mt-3 mb-1 hum_title">
            <li>Maks. vlažnost u <?php echo date('H:i:s',strtotime($current_max_hum_time)); ?> na <?php echo $current_max_hum_sensor; ?></li>
          </ul>  
          <h4 class="card-title pricing-card-title hum_color">
                <i class="fa-solid fa-droplet"></i>
                <?php echo round($current_max_hum,1); ?>%</h4>
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
            <h1 class="card-title pricing-card-title temp_color"><i class="fa-solid fa-temperature-arrow-up"></i> <?php echo $current_temp_t1; ?>°C</h1>
            <ul class="list-unstyled mt-3 mb-1 hum_title">
              <li>VLAŽNOST</li>
            </ul>  
            <h1 class="card-title pricing-card-title hum_color"><i class="fa-solid fa-droplet"></i> <?php echo $current_hum_t1; ?>%</h1>
              <ul class="list-unstyled mt-3 mb-1">
              <li class="sub_text">Podaci od prije 1 minut i 27 sekundi </li>
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
              <i class="fa-solid fa-temperature-arrow-up"></i> <?php echo $current_temp_t2; ?>°C</h1>
            <ul class="list-unstyled mt-3 mb-1 hum_title">
              <li>VLAŽNOST (-4%)</li>
            </ul>  
              <h1 class="card-title pricing-card-title hum_color"><i class="fa-solid fa-droplet"></i> <?php echo $current_hum_t2; ?>%</h1>
              <ul class="list-unstyled mt-3 mb-1">
              <li class="sub_text" >Podaci od prije 1 minut i 27 sekundi </li>
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
              <h1 class="card-title pricing-card-title temp_color"><i class="fa-solid fa-temperature-arrow-up"></i> <?php echo $current_temp_t3; ?>°C</h1>
            <ul class="list-unstyled mt-3 mb-1 hum_title">
              <li>VLAŽNOST</li>
            </ul>  
              <h1 class="card-title pricing-card-title hum_color"><i class="fa-solid fa-droplet"></i> <?php echo $current_hum_t3; ?>%</h1>
              <ul class="list-unstyled mt-3 mb-1">
              <li class="sub_text">Podaci od prije 1 minut i 27 sekundi </li>
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
            require_once("includes/lib.php");
    ?>
     <!-- Libraries end -->



  </body>
</html>
