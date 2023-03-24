<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body onload="sendRequest()">
<script>
$call_time = 5500;

    function sendRequest() {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "ajax2.php?name=John", true);
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          document.getElementById("result").innerHTML = xhr.responseText;
        }
      };
      xhr.send();
    }

    setInterval(sendRequest, $call_time);
  </script>

<div id="result"></div>
</body>
</html>