
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SGB</title>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container">
  <div class="row">
  <div class="col-sm-8">

  <h2>Trenutno stanje na senzorima</h2>


<h3 id="demot1"></h3>
<h3 id="demot2"></h3>
<h3 id="demot3"></h3>

  
  </div>
  </div>






<script>




// Update the count down every 1 second
var x = setInterval(function() {

var xmlhttp = new XMLHttpRequest();
var url = "https://test.smartgreenbox.click/api/danijel/getAllReadings/";
xmlhttp.open("GET", url, true);
xmlhttp.send();

  xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var jsonfile = JSON.parse(this.responseText);

    var lenght2 = jsonfile.length;

const objToArrVal = arrOfObj => {
    return arrOfObj.map(obj => Object.values(obj));
  }
  
  var myArray = [];
  myArray = objToArrVal(jsonfile);


  
  //console.log(myArray[0][3]);
  const sensor1=myArray[0][0]; 
  const sensor2=myArray[1][0]; 
  const sensor3=myArray[2][0];  
  const sensor4=myArray[3][0]; 


  const temp1=myArray[0][1]; 
  const temp2=myArray[1][1]; 
  const temp3=myArray[2][1];  
  const temp4=myArray[3][1]; 

  const hum1=myArray[0][2]; 
  const hum2=myArray[1][2]; 
  const hum3=myArray[2][2];  
  const hum4=myArray[3][2]; 

  const lInput=myArray[0][3]; //time 0
  const lInput1=myArray[1][3]; //time 1
  const lInput2=myArray[2][3]; //time 2
  const lInput4=myArray[3][3]; //time 3

 // console.log(lInput);
 console.log(sensor1);
 console.log(sensor2);
 console.log(sensor3);
 console.log(sensor4);



    const [dateValues, timeValues] = lInput.split(' ');
    const [day, month, year] = dateValues.split('.');
    const [hours, minutes, seconds] = timeValues.split(':');

     
    const [dateValues1, timeValues1] = lInput1.split(' ');
    const [day1, month1, year1] = dateValues1.split('.');
    const [hours1, minutes1, seconds1] = timeValues1.split(':');



    const [dateValues2, timeValues2] = lInput2.split(' ');
    const [day2, month2, year2] = dateValues2.split('.');
    const [hours2, minutes2, seconds2] = timeValues2.split(':');


//console.log(date);

  console.log(day); 
  console.log(month); 
  console.log(year); 

  console.log(' '); 

  console.log(hours); 
  console.log(minutes); 
  console.log(seconds); 


  const date = new Date(+year, +month - 1, +day, +hours, +minutes, +seconds);
  const date1 = new Date(+year1, +month1 - 1, +day1, +hours1, +minutes1, +seconds1);
  const date2 = new Date(+year2, +month2 - 1, +day2, +hours2, +minutes2, +seconds2);

  timeCalculation(sensor1,date, temp1, hum1);
  timeCalculation(sensor2,date1, temp2, hum2);
  timeCalculation(sensor3,date2, temp3, hum3);

  console.log(' ');
  console.log(date);  


   function timeCalculation(sensor,date,temp,hum){
   // Get today's date and time
   var now = new Date().getTime();
    
   // Find the distance between now and the count down date
   var distance = now - date;
     
  // Time calculations for days, hours, minutes and seconds
  var daysT1 = Math.floor(distance / (1000 * 60 * 60 * 24));
  var sati = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minute = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var sekunde = Math.floor((distance % (1000 * 60)) / 1000);
  console.log(minute);
  

  
  if(daysT1>0){
      // Output the result in an element with id="demo"
  document.getElementById("demo"+sensor).innerHTML = daysT1 + "d " + sati + "h "
  + minute + "m " + sekunde + "s ";
  }
  else if(sati>0){
    document.getElementById("demo"+sensor).innerHTML = sati + "h "
  + minute + "m " + sekunde + "s ";
  }
  else{
  // Output the result in an element with id="demo"
  if(minute<=4){
  document.getElementById("demo"+sensor).innerHTML = sensor+" <style>#demo"+sensor+"{color:green;}</style>NA MREŽI: " +minute + "m " + sekunde + "s = "+temp+"°C "+hum+"%";
  }
  else if(minute>4 && minute <= 5){
   minute = minute - 5;   
  document.getElementById("demo"+sensor).innerHTML = sensor+"<style>#demo"+sensor+"{color:orange;}</style> Cekam podatke: " +minute + "m " + sekunde + "s = "+temp+"°C "+hum+"%";
  }
  else {
    document.getElementById("demo"+sensor).innerHTML = sensor+ "<style>#demo"+sensor+"{color:red;}</style> OFFLINE:  " +minute + "m " + sekunde + "s = "+temp+"°C "+hum+"%";
  }




  }
}
};  

};

 },1000);
   
    




 
 

// Set the date we're counting down to
//var countDownDate = new Date("Oct 9, 2022 14:59:25").getTime();



 




</script>





</body>
</html>