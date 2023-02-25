function getData(){
    $.ajax({
      type: "POST",
      url: "get_data.php",
      success: function(data) {
        //console.log("The data was successfully recieved");
        //console.log("Response: " + data);
        //document.getElementById("value1").innerHTML = data;
        const myArray = data.split(", ");
        //t1 current data set
        t1_temp = parseFloat(myArray[0]).toFixed(1);
        t1_hum = parseFloat(myArray[1]).toFixed(1);
        t1_time = formatDate(myArray[2]);
        document.getElementById("t1_temp").innerHTML = t1_temp;
        document.getElementById("t1_hum").innerHTML = t1_hum;
        document.getElementById("t1_time").innerHTML =  t1_time;
        //t2 current data set
        t2_temp = parseFloat(myArray[3]).toFixed(1);
        $t2_hum = parseFloat(myArray[4]).toFixed(1);
        t2_time = formatDate(myArray[5]);
        document.getElementById("t2_temp").innerHTML = t2_temp;
        document.getElementById("t2_hum").innerHTML = $t2_hum;
        document.getElementById("t2_time").innerHTML = myArray[5];
        //t3 current data set
        $t3_temp = parseFloat(myArray[6]).toFixed(1);
        $t3_hum = parseFloat(myArray[7]).toFixed(1);
        t3_time = formatDate(myArray[8]);
        document.getElementById("t3_temp").innerHTML =  $t3_temp;
        document.getElementById("t3_hum").innerHTML = $t3_hum;
        document.getElementById("t3_time").innerHTML = myArray[8];

        //Min Temp values data set
        if(isNaN(myArray[9])){
          $min_temp = '-';
          $min_temp_sensor = '-';
          $min_temp_time = '-';
        }
        else{
          $min_temp = parseFloat(myArray[9]).toFixed(1);
          $min_temp_sensor = myArray[11];
          $min_temp_time = formatDateToTime(myArray[10]);
        }
        document.getElementById("current_min_temp").innerHTML =  $min_temp;
        document.getElementById("current_min_temp_sensor").innerHTML = $min_temp_sensor;
        document.getElementById("current_min_temp_time").innerHTML = $min_temp_time;
        //Max Temp values data set
         if(isNaN(myArray[9])){
          $max_temp = '-';
          $max_temp_sensor = '-';
          $max_temp_time = '-';
        }
        else{
          $max_temp = parseFloat(myArray[12]).toFixed(1);
          $max_temp_sensor = myArray[14];
          $max_temp_time = formatDateToTime(myArray[13]);
        }
        document.getElementById("current_max_temp").innerHTML =  $max_temp;
        document.getElementById("current_max_temp_sensor").innerHTML = $max_temp_sensor;
        document.getElementById("current_max_temp_time").innerHTML = $max_temp_time;
        //Min Hum values data set
        if(isNaN(myArray[9])){
          $min_hum = '-';
          $min_hum_sensor = '-';
          $min_hum_time = '-';
        }
        else{
          $min_hum = parseFloat(myArray[15]).toFixed(1);
          $min_hum_sensor = myArray[17];
          $min_hum_time = formatDateToTime(myArray[16]);
        }
        document.getElementById("current_min_hum").innerHTML =  $min_hum;
        document.getElementById("current_min_hum_sensor").innerHTML = $min_hum_sensor;
        document.getElementById("current_min_hum_time").innerHTML = $min_hum_time;
        //Max Hum values data set
        if(isNaN(myArray[9])){
          $max_hum = '-';
          $max_hum_sensor = '-';
          $max_hum_time = '-';
        }
        else{
          $max_hum = parseFloat(myArray[18]).toFixed(1);
          $max_hum_sensor = myArray[20];
          $max_hum_time = formatDateToTime(myArray[19]);
        }
        document.getElementById("current_max_hum").innerHTML =  $max_hum;
        document.getElementById("current_max_hum_sensor").innerHTML = $max_hum_sensor;
        document.getElementById("current_max_hum_time").innerHTML = $max_hum_time;

        //current avg temp - calculation
        $current_avg_temp = ((parseFloat(myArray[0])+parseFloat(myArray[3])+parseFloat(myArray[6]))/3).toFixed(2);
        $current_avg_hum = ((parseFloat(myArray[1])+parseFloat(myArray[4])+parseFloat(myArray[7]))/3).toFixed(2);
        //current avg temp/hum set
        document.getElementById("current_avg_temp").innerHTML = $current_avg_temp;
        document.getElementById("current_avg_hum").innerHTML = $current_avg_hum;

        //format date function
        function formatDate(dateTimeInput){
        const [dateValues, timeValues] = dateTimeInput.split(' ');
        const [year, month, day] = dateValues.split('-');
        const [hours, minutess, seconds] = timeValues.split(':');
        //console.log('T1 date:'+day+'.'+month+'.'+year+' '+hours+':'+minutess+':'+seconds);
        formatedDate = new Date(+year, +month - 1, +day, +hours, +minutess, +seconds);
        return formatedDate;
        }

        //format date to time function
        function formatDateToTime(timeInput){
        const [dateValues, timeValues] = timeInput.split(' ');
        const [year, month, day] = dateValues.split('-');
        const [hours, minutess, seconds] = timeValues.split(':');
        //console.log('T1 date:'+day+'.'+month+'.'+year+' '+hours+':'+minutess+':'+seconds);
        formatedTime = hours+':'+minutess+':'+seconds;
        return formatedTime;
        }


        timeCalculation();

        console.log("AJAX called");

        
  }});
  } //getData end


   function timeCalculation(){

     //THIS FUNCTION NEEDS TO BE SIMPLIFIED -  (DRY)
   // Get today's date and time
   var now = new Date().getTime();
    
            // Find the distance between now and the count down date
            var distance_t1 = now - t1_time;
            var distance_t2 = now - t2_time;
            var distance_t3 = now - t3_time;

     
          // Time calculations for days, hours, minutess and seconds - T1
          var days_t1 = Math.floor(distance_t1 / (1000 * 60 * 60 * 24));
          var hours_t1 = Math.floor((distance_t1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes_t1 = Math.floor((distance_t1 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds_t1 = Math.floor((distance_t1 % (1000 * 60)) / 1000);

          // Time calculations for days, hours, minutess and seconds - T2
          var days_t2 = Math.floor(distance_t2 / (1000 * 60 * 60 * 24));
          var hours_t2 = Math.floor((distance_t2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes_t2 = Math.floor((distance_t2 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds_t2 = Math.floor((distance_t2 % (1000 * 60)) / 1000);

          // Time calculations for days, hours, minutess and seconds - T3
          var days_t3 = Math.floor(distance_t3 / (1000 * 60 * 60 * 24));
          var hours_t3 = Math.floor((distance_t3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes_t3 = Math.floor((distance_t3 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds_t3 = Math.floor((distance_t3 % (1000 * 60)) / 1000);

  

        //COUNTER FOR t1 BEGIN
        if(days_t1>0){
            // Output the result in an element with id="demo"
            document.getElementById("t1_time").innerHTML = days_t1 + "d " + hours_t1 + "h "+ minutes_t1 + "min " + seconds_t1 + "sek ";
        }
        else if(hours_t1>0){
            document.getElementById("t1_time").innerHTML = hours_t1 + "h "+ minutes_t1 + "min " + seconds_t1 + "sek ";
        }
        else{
        // Output the result in an element with id="demo"
        if(minutes_t1<=4){
            document.getElementById("t1_time").innerHTML = " Podaci od prije "+minutes_t1+" min " +seconds_t1+" sek";
        }
        else if(minutes_t1>4 && minutes_t1 <= 5){
            minutes_t1 = minutes_t1 - 5;   
            document.getElementById("t1_time").innerHTML = " <style>#t1_time{color:orange;}</style> Čekam podatke: " +minutes_t1+ " min " +seconds_t1+ " sek";
          if(seconds_t1 == 10){
          //refresh the data
          getData();
          }
          if(seconds_t1 == 40){
          //refresh the data
          getData();
          }
          if(seconds_t1 == 59){
          //refresh the data
          getData();
          }
        }
      else {
          document.getElementById("t1_time").innerHTML = "<style>#t1_time{color:red; font-weight:600;}</style> Nije na mreži:  " +minutes_t1 + "m " + seconds_t1 + "s";
      }
    }
       //COUNTER FOR t1 END

        //COUNTER FOR t2 BEGIN
        if(days_t2>0){
            // Output the result in an element with id="demo"
            document.getElementById("t2_time").innerHTML = days_t2 + "d " + hours_t2 + "h "+ minutes_t2 + "min " + seconds_t2 + "sek ";
        }
        else if(hours_t2>0){
            document.getElementById("t2_time").innerHTML = hours_t2 + "h "+ minutes_t2 + "min " + seconds_t2 + "sek ";
        }
        else{
        // Output the result in an element with id="demo"
        if(minutes_t2<=4){
            document.getElementById("t2_time").innerHTML = " Podaci od prije "+minutes_t2+" min " +seconds_t2+" sek";
        }
        else if(minutes_t2>4 && minutes_t2 <= 5){
            minutes_t2 = minutes_t2 - 5;   
            document.getElementById("t2_time").innerHTML = " <style>#t2_time{color:orange;}</style> Čekam podatke: " +minutes_t2+ " min " +seconds_t2+ " sek";
          if(seconds_t2 == 10){
          //refresh the data
          getData();
          }
          if(seconds_t2 == 40){
          //refresh the data
          getData();
          }
          if(seconds_t2 == 59){
          //refresh the data
          getData();
          }
        }
      else {
          document.getElementById("t2_time").innerHTML = "<style>#t2_time{color:red; font-weight:600;}</style> Nije na mreži:  " +minutes_t2 + "m " + seconds_t2 + "s";
      }
    }
       //COUNTER FOR t2 END


        //COUNTER FOR t3 BEGIN
        if(days_t3>0){
            // Output the result in an element with id="demo"
            document.getElementById("t3_time").innerHTML = days_t3 + "d " + hours_t3 + "h "+ minutes_t3 + "min " + seconds_t3 + "sek ";
        }
        else if(hours_t3>0){
            document.getElementById("t3_time").innerHTML = hours_t3 + "h "+ minutes_t3 + "min " + seconds_t3 + "sek ";
        }
        else{
        // Output the result in an element with id="demo"
        if(minutes_t3<=4){
            document.getElementById("t3_time").innerHTML = " Podaci od prije "+minutes_t3+" min " +seconds_t3+" sek";
        }
        else if(minutes_t3>4 && minutes_t3 <= 5){
            minutes_t3 = minutes_t3 - 5;   
            document.getElementById("t3_time").innerHTML = " <style>#t3_time{color:orange;}</style> Čekam podatke: " +minutes_t3+ " min " +seconds_t3+ " sek";
          if(seconds_t3 == 10){
          //refresh the data
          getData();
          }
          if(seconds_t3 == 40){
          //refresh the data
          getData();
          }
          if(seconds_t3 == 59){
          //refresh the data
          getData();
          }
        }
      else {
          document.getElementById("t3_time").innerHTML = "<style>#t3_time{color:red; font-weight:600;}</style> Nije na mreži:  " +minutes_t3 + "m " + seconds_t3 + "s";
      }
      }
       //COUNTER FOR t3 END




  }

setInterval(() => {
  timeCalculation();
}, 1000);