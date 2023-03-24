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

async function getMyVar() {
  let getData = new Promise((resolve, reject) => {
    $.ajax({
      type: "POST",
      url: "ajax_1.php",
      data: { key: "value" },
      success: function(data) {
        const myArray = data.split(", ");
        t1_temp = parseFloat(myArray[0]).toFixed(1);
        t2_temp = parseFloat(myArray[3]).toFixed(1);
        const myArray2 = [t1_temp, t2_temp];

        resolve(myArray2);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        reject(errorThrown);
      }
    });
  });

let myVar = await getData;
  console.log("myVar value outside AJAX: " + myVar);
  return myVar;
}

function calculateCall(){
getMyVar().then((myVar) => {

    temp1 = myVar[0];
    temp2 = myVar[1];

  console.log("myVar value outside Promise 1: " + temp1);
  console.log("myVar value outside Promise 2: " + temp2);
}).catch((error) => {
  console.error(error);
});
}

//setInterval(calculateCall, 1000);


//console.log("myVar value outside function 1: " + temp1);



</script>
</body>
</html>

