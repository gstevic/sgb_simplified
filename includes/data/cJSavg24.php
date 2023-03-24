<?php
    header('Content-Type: application/json');

    //$conn = mysqli_connect("localhost","root","","sgba");
    require('../inc_conn.php');

        $current_date = $_GET['date'];
        //echo $current_date;
        // Get the current date in Y-m-d format
       // $current_date = date("Y-m-d");



// Create an empty array with 24 sub-arrays, each with temp and hum keys and null values
$temp_array = array_fill(0, 24, array('temp' => null, 'hum' => null));

// Loop through each hour from midnight to 11pm
for ($i = 0; $i < 24; $i++) {
    // Calculate the timestamp for the current hour
    $timestamp = strtotime($current_date . " " . $i . ":00:00");

    // Create a MySQL query for the current hour
    $query = "SELECT AVG(temperature) as avg_temp, AVG(humidity) as avg_hum FROM readings WHERE DATE(created_at) = $current_date AND HOUR(created_at) = $i";

    // Execute the query
    $result = $conn->query($query);

    // Check if the query returned a result
    if ($result->num_rows > 0) {
        // Fetch the result as an associative array
        $row = $result->fetch_assoc();

        // Add the temperature and humidity to the sub-array at the correct position
        $temp_array[$i]['temp'] = $row['avg_temp'];
        $temp_array[$i]['hum'] = $row['avg_hum'];
    }
}

            

    mysqli_close($conn);

    echo json_encode($temp_array);
?>