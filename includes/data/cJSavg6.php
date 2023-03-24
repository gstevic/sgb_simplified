<?php
    header('Content-Type: application/json');

    require('../inc_conn.php');

    $results = array();
    for ($i = 7; $i >= 1; $i--) {
          $hour_diff = $i - 1;
         $sql_query = "SELECT ROUND(AVG(temperature),2) temp, ROUND(AVG(humidity),2) hum FROM readings 
          WHERE DATE(created_at) = CURDATE() 
          AND HOUR(created_at) = HOUR(NOW())-$hour_diff";
         $result = mysqli_query($conn, $sql_query);
         $data_th[] = mysqli_fetch_assoc($result);
    }

    mysqli_close($conn);

    echo json_encode($data_th);

?>