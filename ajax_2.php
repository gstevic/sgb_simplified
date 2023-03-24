<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<div id="value1">1</div>
<div id="value2">1</div>
    <script>
    $.ajax({
  type: "POST",
  url: "ajax_1.php",
  data: { values: ["2.1", "4.3", "1.9"] },
  success: function(data) {
    console.log("The data was successfully sent and received by the PHP script.");
    console.log("Response: " + data);
    document.getElementById("value1").innerHTML = data;
    const myArray = data.split(", ");
    document.getElementById("value2").innerHTML = myArray[0];
  }
});
    </script>
    
</body>
</html>

