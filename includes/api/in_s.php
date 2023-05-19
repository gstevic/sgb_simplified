<?php
//******************************************** */
//*********** UPDATE SCRIPT FOR MOTOR ******** */
//******************************************** */

require('../inc_conn.php');

if(isset($_GET['s']) && isset($_GET['t']) && isset($_GET['h']) && isset($_GET['a'])){
    $sensor = $_GET['s'];
    $temp = $_GET['t'];
    $hum = $_GET['h'];
    $api = $_GET['a'];
}
else{
    $sensor = '';
    $temp = '';
    $hum = '';
    $api = '';
}


//$state = $_GET['s'];
//**************** SELECT COMMAND AND STATE FOR THE CALCULATION OF THE MOTOR CURRENT STATE AFTER EXECUTION ************ */
//$sql_m = "SELECT command, state FROM motors WHERE motor = '$motor' and api = '$api'";
$sql_m = "INSERT INTO readings (id, sensor, temperature, humidity, created_at, updated_at) VALUES (NULL,'$sensor', '$temp', '$hum', NOW(),NOW())";
//$sql_m = "INSERT INTO `readings` (`id`, `sensor`, `temperature`, `humidity`, `created_at`, `updated_at`) VALUES (NULL, '$sensor', '12.53', '89.23', current_timestamp(), current_timestamp());";


if (mysqli_query($conn, $sql_m)) {
    $result = $conn->query($sql_m);
    echo '0';
}
else {
        // Query failed to execute
        echo "Error: " . mysqli_error($conn);
    }


?>

