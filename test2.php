<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <title>SGB</title>

</head>
<body>
    



<script>

    let temp1;
    let temp2;
getData();

function getData(){
    $.ajax({
      type: "POST",
      url: "ajax_1.php",
      data: { key: "value" },
      success: function(data) {
        const myArray = data.split(", ");
        t1_temp = parseFloat(myArray[0]).toFixed(1);
        t2_temp = parseFloat(myArray[3]).toFixed(1);

        console.log("myVar value inside AJAX: " + t1_temp);
        calculateCall();

        
      },
      error: function(jqXHR, textStatus, errorThrown) {
        reject(errorThrown);
      }
    });
}

let counter = 0;
function calculateCall(){
  console.log("Var1 value in myOtherFunction: " + t1_temp);
  console.log("Var2 value in myOtherFunction: " + t2_temp);
  if (counter == 40){
      getData();
  }
  console.log("Counter: "+counter);
  counter++;
}

setInterval(calculateCall, 1000);






</script>
</body>
</html>

