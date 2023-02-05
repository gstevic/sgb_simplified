<?php
    header('Content-Type: application/json');

    $conn = mysqli_connect("localhost","root","","sgba");

    $sqlQuery_t1 = "SELECT id,sensor,temp,hum FROM sensor_wth1  ORDER BY sensor asc";


    $result_t1 = mysqli_query($conn,$sqlQuery_t1);

    $data_t1= [];

    foreach ($result_t1 as $row) {
        $data_t1[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($data_t1);
?>