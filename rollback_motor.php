<?php
    require('includes/inc_conn.php');

    $motor = $_GET['m'];
    //$command = $_GET['c'];
    //$state = $_GET['s'];
    //********************************************* SET MOTOR STATUS *************************** */
    $sql_m = "UPDATE motors SET command=1000 WHERE motor = '$motor'";

    if (mysqli_query($conn, $sql_m)) {
        // Query executed successfully
        $result = $conn->query($sql_m);
        echo "executed";
    } else {
        // Query failed to execute
        echo "Error: " . mysqli_error($conn);
    }

    require('includes/inc_disc.php');
?>

