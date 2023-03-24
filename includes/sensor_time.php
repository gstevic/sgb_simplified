<?php
require('inc_conn.php');

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

?>