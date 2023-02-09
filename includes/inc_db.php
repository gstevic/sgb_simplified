<?php
$conn = mysqli_connect("localhost","root","","sgba");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



echo "Maksimalna temperatura: ";
//$motor =  $_GET["api"];


$sql = "SELECT max(temperature) as temperature from readings";



if (mysqli_query($conn, $sql)) {
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["temperature"];
  }
} else {
  echo "0 results";
}
}

mysqli_close($conn);

?>