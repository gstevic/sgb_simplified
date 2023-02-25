<?php
require('includes/inc_conn.php');
//********************************************* GET SENSOR DATA START *************************** */
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
   //$t1_data = [$current_temp_t1, $current_hum_t1, $current_time_t1];
   //echo implode(", ", $t1_data);
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
//********************************************* GET SENSOR DATA END *************************** */

//********************************************* GET MIN/MAX MEASURMENTS FOR THE CURRENT DATE START *************************** */
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
//********************************************* GET MIN/MAX MEASURMENTS FOR THE CURRENT DATE END *************************** */


$t_data = [$current_temp_t1, $current_hum_t1, $current_time_t1, 
$current_temp_t2, $current_hum_t2, $current_time_t2, 
$current_temp_t3, $current_hum_t3, $current_time_t3, 
$current_min_temp, $current_min_temp_time, $current_min_temp_sensor, 
$current_max_temp, $current_max_temp_time, $current_max_temp_sensor , 
$current_min_hum, $current_min_hum_time, $current_min_hum_sensor, 
$current_max_hum, $current_max_hum_time, $current_max_hum_sensor];
echo implode(", ", $t_data);
require('includes/inc_disc.php');
?>

