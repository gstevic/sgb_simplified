<?php
//*********************************************************** */
//*********** GREENHOUSE EXECUTION SYSTEM - MOTOR *********** */
//*********************************************************** */

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
//**************** SELECT COMMAND FOR THE EXECUTION ON MOTOR ************ */
$sql_m = "SELECT command FROM motors WHERE motor = '$motor' and api = '$api'";


//$sql_m = "UPDATE motors SET command=1000 WHERE motor = '$motor'";

if (mysqli_query($conn, $sql_m)) {
    $result = $conn->query($sql_m);
    if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
      echo $command = $row["command"];
     }
   } else {
     echo "-";
   }
}

if($command != '1000'){
    //echo 'running';
    $sql_m = "UPDATE motors SET running = 1, command_taken_at = now(), executed_at = now() WHERE motor = '$motor' and api = '$api'";

    if (mysqli_query($conn, $sql_m)) {
        // Query executed successfully
        $result = $conn->query($sql_m);
        //echo "executed";
    } else {
        // Query failed to execute
        echo "Error: " . mysqli_error($conn);
    }
}else{
    $sql_ping = "UPDATE motors SET executed_at = now(),running = 0 WHERE motor = '$motor' and api = '$api'";

    if (mysqli_query($conn, $sql_ping)) {
        // Query executed successfully
        $result = $conn->query($sql_ping);
       // echo "executed";
    } else {
        // Query failed to execute
        echo "Error: " . mysqli_error($conn);
    }

}

require('../inc_disc.php');

?>
