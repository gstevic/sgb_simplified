<?php
//******************************************** */
//*********** UPDATE SCRIPT FOR MOTOR ******** */
//******************************************** */

require('../inc_conn.php');

if(isset($_GET['m']) && isset($_GET['a'])){
    $motor = $_GET['m'];
    $api = $_GET['a'];
}
else{
    $motor = '';
    $api = '';
}


//$state = $_GET['s'];
//**************** SELECT COMMAND AND STATE FOR THE CALCULATION OF THE MOTOR CURRENT STATE AFTER EXECUTION ************ */
$sql_m = "SELECT command, state FROM motors WHERE motor = '$motor' and api = '$api'";



if (mysqli_query($conn, $sql_m)) {
    $result = $conn->query($sql_m);
    if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
       $command = $row["command"];
       $state = $row["state"];
     }
   } else {
     echo "-";
   }
}

echo $current_state =  $state + $command;


if($command != 1000){
    //echo 'running';
    $sql_u = "UPDATE motors SET command = 1000, state = $current_state, running = 0, executed_at = now() WHERE motor = '$motor' and api = '$api'";

    if (mysqli_query($conn, $sql_u)) {
        // Query executed successfully
        $result = $conn->query($sql_u);
        //echo "executed";
    } else {
        // Query failed to execute
        echo "Error: " . mysqli_error($conn);
    }
}


?>

