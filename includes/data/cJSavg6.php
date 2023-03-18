<?php
    header('Content-Type: application/json');

    //$conn = mysqli_connect("localhost","root","","sgba");
    require('../inc_conn.php');

    $sqlQuery_tA = "SELECT AVG(temperature) temp, AVG(humidity) hum  FROM readings 
    WHERE DATE(created_at) = CURDATE() 
    AND HOUR(created_at) = HOUR(NOW())";

    $sqlQuery_t1 = "SELECT AVG(temperature) temp, AVG(humidity) hum  FROM readings 
    WHERE DATE(created_at) = CURDATE() 
    AND HOUR(created_at) = HOUR(NOW())-1";

    $sqlQuery_t2 = "SELECT AVG(temperature) temp, AVG(humidity) hum  FROM readings 
    WHERE DATE(created_at) = CURDATE() 
    AND HOUR(created_at) = HOUR(NOW())-2";

    $sqlQuery_t3 = "SELECT AVG(temperature) temp, AVG(humidity) hum  FROM readings 
    WHERE DATE(created_at) = CURDATE() 
    AND HOUR(created_at) = HOUR(NOW())-3";

    $sqlQuery_t4 = "SELECT AVG(temperature) temp, AVG(humidity) hum  FROM readings 
    WHERE DATE(created_at) = CURDATE() 
    AND HOUR(created_at) = HOUR(NOW())-4";

    $sqlQuery_t5 = "SELECT AVG(temperature) temp, AVG(humidity) hum  FROM readings 
    WHERE DATE(created_at) = CURDATE() 
    AND HOUR(created_at) = HOUR(NOW())-5";

    $sqlQuery_t6 = "SELECT AVG(temperature) temp, AVG(humidity) hum  FROM readings 
    WHERE DATE(created_at) = CURDATE() 
    AND HOUR(created_at) = HOUR(NOW())-6";
    

  /*  $sqlQuery_t1 = "SELECT AVG(temperature) avgTempNow FROM readings 
    WHERE HOUR(created_at) = HOUR(NOW())";
  */

    $result_tA = mysqli_query($conn,$sqlQuery_tA);
    $result_t1 = mysqli_query($conn,$sqlQuery_t1);
    $result_t2 = mysqli_query($conn,$sqlQuery_t2);
    $result_t3 = mysqli_query($conn,$sqlQuery_t3);
    $result_t4 = mysqli_query($conn,$sqlQuery_t4);
    $result_t5 = mysqli_query($conn,$sqlQuery_t5);
    $result_t6 = mysqli_query($conn,$sqlQuery_t6);

    $data_th= [];

    foreach ($result_t6 as $row) {
        $data_th[] = $row;
    }

    foreach ($result_t5 as $row) {
        $data_th[] = $row;
    }

    foreach ($result_t4 as $row) {
        $data_th[] = $row;
    }

    foreach ($result_t3 as $row) {
        $data_th[] = $row;
    }

    foreach ($result_t2 as $row) {
        $data_th[] = $row;
    }

    foreach ($result_t1 as $row) {
        $data_th[] = $row;
    }

    foreach ($result_tA as $row) {
        $data_th[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($data_th);
?>