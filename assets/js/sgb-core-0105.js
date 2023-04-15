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
        //t1 old
         t1_old_temp = parseFloat(myArray[21]).toFixed(1);
         t1_old_hum = parseFloat(myArray[22]).toFixed(1);
        //temp diffrence start
        t1_temp_difference = t1_temp - t1_old_temp;
        if(parseFloat(t1_temp)>parseFloat(t1_old_temp)){
            document.getElementById("t1_temp_diff").innerHTML = "+"+parseFloat(t1_temp_difference).toFixed(1);
            document.getElementById("t1_temp").innerHTML = '<i class="fa-solid fa-temperature-arrow-up"></i> '+t1_temp+'°C';
        }
        else if(parseFloat(t1_temp)==parseFloat(t1_old_temp)){
            document.getElementById("t1_temp_diff").innerHTML = parseFloat(t1_temp_difference).toFixed(1);
            document.getElementById("t1_temp").innerHTML = '<i class="fa-solid fa-temperature-three-quarters"></i> '+t1_temp+'°C';
        }
        else{
            document.getElementById("t1_temp_diff").innerHTML = parseFloat(t1_temp_difference).toFixed(1);
            document.getElementById("t1_temp").innerHTML = '<i class="fa-solid fa-temperature-arrow-down"></i> '+t1_temp+'°C';
        }
        //hum diffrence start
            t1_hum_difference = t1_hum - t1_old_hum;
            if(parseFloat(t1_hum)>parseFloat(t1_old_hum)){
                document.getElementById("t1_hum_diff").innerHTML = "+"+parseFloat(t1_hum_difference).toFixed(1);
            }
            else{
                document.getElementById("t1_hum_diff").innerHTML = parseFloat(t1_hum_difference).toFixed(1);
            }
         //temp diffrence end
         document.getElementById("t1_hum").innerHTML = '<i class="fa-solid fa-droplet"></i> '+t1_hum+'%';




        //t2 current data set
        t2_temp = parseFloat(myArray[3]).toFixed(1);
        t2_hum = parseFloat(myArray[4]).toFixed(1);
        t2_time = formatDate(myArray[5]);
        
        //t2 old
        t2_old_temp = parseFloat(myArray[23]).toFixed(1);
        t2_old_hum = parseFloat(myArray[24]).toFixed(1);
       //temp diffrence start
       t2_temp_difference = t2_temp - t2_old_temp;
       if(parseFloat(t2_temp)>parseFloat(t2_old_temp)){
           //console.log('here');
           document.getElementById("t2_temp_diff").innerHTML = '+'+parseFloat(t2_temp_difference).toFixed(1);
           document.getElementById("t2_temp").innerHTML = '<i class="fa-solid fa-temperature-arrow-up"></i> '+t2_temp+'°C';
       }
       else if(parseFloat(t2_temp)==parseFloat(t2_old_temp)){
       // console.log('here');
           document.getElementById("t2_temp_diff").innerHTML = parseFloat(t2_temp_difference).toFixed(1);
           document.getElementById("t2_temp").innerHTML = '<i class="fa-solid fa-temperature-three-quarters"></i> '+t2_temp+'°C';
       }
       else{
       // console.log('here');
           document.getElementById("t2_temp_diff").innerHTML = parseFloat(t2_temp_difference).toFixed(1);
           document.getElementById("t2_temp").innerHTML = '<i class="fa-solid fa-temperature-arrow-down"></i> '+t2_temp+'°C';
       }
       //hum diffrence start
           t2_hum_difference = t2_hum - t2_old_hum;
           if(parseFloat(t2_hum)>parseFloat(t2_old_hum)){
               document.getElementById("t2_hum_diff").innerHTML = "+"+parseFloat(t2_hum_difference).toFixed(1);
           }
           else{
               document.getElementById("t2_hum_diff").innerHTML = parseFloat(t2_hum_difference).toFixed(1);
           }
        //temp diffrence end
        document.getElementById("t2_hum").innerHTML = '<i class="fa-solid fa-droplet"></i> '+t2_hum+'%';




        //t3 current data set
        t3_temp = parseFloat(myArray[6]).toFixed(1);
        t3_hum = parseFloat(myArray[7]).toFixed(1);
        t3_time = formatDate(myArray[8]);   
        //t3 old
        t3_old_temp = parseFloat(myArray[25]).toFixed(1);
        t3_old_hum = parseFloat(myArray[26]).toFixed(1);
       //temp diffrence start
       t3_temp_difference = t3_temp - t3_old_temp;
       if(parseFloat(t3_temp)>parseFloat(t3_old_temp)){
           document.getElementById("t3_temp_diff").innerHTML = "+"+parseFloat(t3_temp_difference).toFixed(1);
           document.getElementById("t3_temp").innerHTML = '<i class="fa-solid fa-temperature-arrow-up"></i> '+t3_temp+'°C';
       }
       else if(parseFloat(t3_temp)==parseFloat(t3_old_temp)){
           document.getElementById("t3_temp_diff").innerHTML = parseFloat(t3_temp_difference).toFixed(1);
           document.getElementById("t3_temp").innerHTML = '<i class="fa-solid fa-temperature-three-quarters"></i> '+t3_temp+'°C';
       }
       else{
           document.getElementById("t3_temp_diff").innerHTML = parseFloat(t3_temp_difference).toFixed(1);
           document.getElementById("t3_temp").innerHTML = '<i class="fa-solid fa-temperature-arrow-down"></i> '+t3_temp+'°C';
       }
       //hum diffrence start
           t3_hum_difference = t3_hum - t3_old_hum;
           if(parseFloat(t3_hum)>parseFloat(t3_old_hum)){
               document.getElementById("t3_hum_diff").innerHTML = "+"+parseFloat(t3_hum_difference).toFixed(1);
           }
           else{
               document.getElementById("t3_hum_diff").innerHTML = parseFloat(t3_hum_difference).toFixed(1);
           }
        //temp diffrence end
        
        document.getElementById("t3_hum").innerHTML = '<i class="fa-solid fa-droplet"></i> '+t3_hum+'%';


        //Min Temp values data set
        if(isNaN(myArray[9])){
          min_temp = '-';
          min_temp_sensor = '-';
          min_temp_time = '-';
        }
        else{
          min_temp = parseFloat(myArray[9]).toFixed(1);
          min_temp_sensor = myArray[11];
          min_temp_time = formatDateToTime(myArray[10]);
        }
        document.getElementById("current_min_temp").innerHTML =  min_temp;
        document.getElementById("current_min_temp_sensor").innerHTML = min_temp_sensor;
        document.getElementById("current_min_temp_time").innerHTML = min_temp_time;
        //Max Temp values data set
         if(isNaN(myArray[9])){
          max_temp = '-';
          max_temp_sensor = '-';
          max_temp_time = '-';
        }
        else{
          max_temp = parseFloat(myArray[12]).toFixed(1);
          max_temp_sensor = myArray[14];
          max_temp_time = formatDateToTime(myArray[13]);
        }
        document.getElementById("current_max_temp").innerHTML =  max_temp;
        document.getElementById("current_max_temp_sensor").innerHTML = max_temp_sensor;
        document.getElementById("current_max_temp_time").innerHTML = max_temp_time;
        //Min Hum values data set
        if(isNaN(myArray[9])){
          min_hum = '-';
          min_hum_sensor = '-';
          min_hum_time = '-';
        }
        else{
          min_hum = parseFloat(myArray[15]).toFixed(1);
          min_hum_sensor = myArray[17];
          min_hum_time = formatDateToTime(myArray[16]);
        }
        document.getElementById("current_min_hum").innerHTML =  min_hum;
        document.getElementById("current_min_hum_sensor").innerHTML = min_hum_sensor;
        document.getElementById("current_min_hum_time").innerHTML = min_hum_time;
        //Max Hum values data set
        if(isNaN(myArray[9])){
          max_hum = '-';
          max_hum_sensor = '-';
          max_hum_time = '-';
        }
        else{
          max_hum = parseFloat(myArray[18]).toFixed(1);
          max_hum_sensor = myArray[20];
          max_hum_time = formatDateToTime(myArray[19]);
        }
        document.getElementById("current_max_hum").innerHTML =  max_hum;
        document.getElementById("current_max_hum_sensor").innerHTML = max_hum_sensor;
        document.getElementById("current_max_hum_time").innerHTML = max_hum_time;
 

        //current avg temp - calculation
        current_avg_temp = ((parseFloat(myArray[0])+parseFloat(myArray[3])+parseFloat(myArray[6]))/3).toFixed(2);
        current_avg_hum = ((parseFloat(myArray[1])+parseFloat(myArray[4])+parseFloat(myArray[7]))/3).toFixed(2);

        old_avg_temp = ((parseFloat(t1_old_temp)+parseFloat(t2_old_temp)+parseFloat(t3_old_temp))/3).toFixed(2);
        old_avg_hum = ((parseFloat(t1_old_hum)+parseFloat(t2_old_hum)+parseFloat(t3_old_hum))/3).toFixed(2);

        avg_temp_diffrence = current_avg_temp - old_avg_temp;
        avg_hum_diffrence = current_avg_hum - old_avg_hum;


        //current avg temp/hum set
        if(parseFloat(current_avg_temp)>parseFloat(old_avg_temp)){
            document.getElementById("avg_temp_diffrence").innerHTML = "+"+parseFloat(avg_temp_diffrence).toFixed(2);
            document.getElementById("current_avg_temp").innerHTML = '<i class="fa-solid fa-temperature-arrow-up"></i> '+current_avg_temp+'°C';
        }
        else if(parseFloat(current_avg_temp)==parseFloat(old_avg_temp)){
            document.getElementById("avg_temp_diffrence").innerHTML = parseFloat(avg_temp_diffrence).toFixed(1);
            document.getElementById("current_avg_temp").innerHTML = '<i class="fa-solid fa-temperature-three-quarters"></i> '+current_avg_temp+'°C';
        }
        else{
            document.getElementById("avg_temp_diffrence").innerHTML = parseFloat(avg_temp_diffrence).toFixed(1);
            document.getElementById("current_avg_temp").innerHTML = '<i class="fa-solid fa-temperature-arrow-down"></i> '+current_avg_temp+'°C';
        }

        //current avg hum/hum set
        if(parseFloat(current_avg_hum)>parseFloat(old_avg_hum)){
            document.getElementById("avg_hum_diffrence").innerHTML = "+"+parseFloat(avg_hum_diffrence).toFixed(2);
            document.getElementById("current_avg_hum").innerHTML = '<i class="fa-solid fa-droplet"></i> '+current_avg_hum+'%';
            //document.getElementById("current_avg_hum").innerHTML = '<i class="fa-solid fa-humerature-arrow-up"></i> '+current_avg_hum+'°C';
        }
        else if(parseFloat(current_avg_hum)==parseFloat(old_avg_hum)){
            document.getElementById("avg_hum_diffrence").innerHTML = parseFloat(avg_hum_diffrence).toFixed(2);
            document.getElementById("current_avg_hum").innerHTML = '<i class="fa-solid fa-droplet"></i> '+current_avg_hum+'%';
            //document.getElementById("current_avg_hum").innerHTML = '<i class="fa-solid fa-humerature-three-quarters"></i> '+current_avg_hum+'°C';
        }
        else{
            document.getElementById("avg_hum_diffrence").innerHTML = parseFloat(avg_hum_diffrence).toFixed(2);
            document.getElementById("current_avg_hum").innerHTML = '<i class="fa-solid fa-droplet"></i> '+current_avg_hum+'%';
           // document.getElementById("current_avg_hum").innerHTML = '<i class="fa-solid fa-humerature-arrow-down"></i> '+current_avg_hum+'°C';
        }


      //  document.getElementById("current_avg_temp").innerHTML = current_avg_temp;
       // document.getElementById("current_avg_hum").innerHTML = current_avg_hum;

        /******************************************************/ 
        /*****                   MOTORS              **********/
        /**********************  START    *********************/ 

        //m2 current data set
        m2_status = parseInt(myArray[27]);
        m2_time = formatDate(myArray[28]);
        m2_command =parseInt(myArray[29]);
        //t3 old
        //t3_old_temp = parseFloat(myArray[25]).toFixed(1);
        //t3_old_hum = parseFloat(myArray[26]).toFixed(1);
       //temp diffrence start
       //t3_temp_difference = t3_temp - t3_old_temp;
        $("#status").text(m2_status);
        //console.log('current_status:');
        var current_status_m2 = $('#status').text();
         console.log('current_status:'+current_status_m2);

         $('#m2_button').prop('disabled', true);
   
         var range = $('.input-range')
         document.getElementById("new-command").innerHTML = '';

         range.on('input', function() {
            //var current_state_m2 = value.html(this.value);
            var new_command_M2 = this.value;
            new_command_M2 = parseInt(new_command_M2);
            current_status_m2 = parseInt(current_status_m2);
            console.log('new command:'+new_command_M2);
            if(current_status_m2 != new_command_M2){
                if(new_command_M2 > current_status_m2){
                document.getElementById("new-command").innerHTML = 'Nova komanda: OTVORI na '+new_command_M2+'cm';
                }
                else if(new_command_M2 < current_status_m2 && new_command_M2 > 0){
                    document.getElementById("new-command").innerHTML = 'Nova komanda: ZATVORI na '+new_command_M2+'cm';
                }
                else if(new_command_M2 == 0){
                document.getElementById("new-command").innerHTML = 'Nova komanda: ZATVORI!';
                }
            }
            if(current_status_m2 == new_command_M2){
                document.getElementById("new-command").innerHTML = 'Trenuto stanje motora: '+new_command_M2+'cm';
                $('#m1_button').prop('disabled', true);
            }
            else{
                $('#m1_button').prop('disabled', false);
            }
          });

          if(m2_command != 1000){
            //console.log('danger');
            $('#m1_button').prop('disabled', false);
            $('#m2').prop('disabled', true);
            $('#m1_button').removeClass('btn-block btn-outline-primary').addClass('btn-block btn-danger');
            $('#m1_button').attr('onclick', "m1Rollback()");
            document.getElementById("m1_button").innerHTML = 'Otkaži komandu (20 sek)';
          }else{
            $('#m1_button').removeClass('btn-block btn-danger').addClass('btn-block btn-outline-primary');
            $('#m1_button').attr('onclick', "m1Click()");
            $('#m2').prop('disabled', false);
            document.getElementById("m1_button").innerHTML = 'Izvrši komandu';
          }


        //document.getElementById("m2_time").innerHTML = m2_time;
        $('#m1').val(m2_status);
        //value.html(m2_status);





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

        //    
        recreateChartJS6h();
        timeCalculation();

        console.log("AJAX called");

        
  }});
  } //getData end


   function timeCalculation(){

     //THIS FUNCTION NEEDS TO BE SIMPLIFIED -  (DRY)
   // Get today's date and time
   var now = new Date().getTime();
    
           if(t1_time != NaN){
            // Find the distance between now and the count down date
            var distance_t1 = now - t1_time;
            var distance_t2 = now - t2_time;
            var distance_t3 = now - t3_time;

            var distance_m2 = now - m2_time;

            var flag_ajax_call = 0;

     
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


          // Time calculations for days, hours, minutess and seconds - M2
          var days_m2 = Math.floor(distance_m2 / (1000 * 60 * 60 * 24));
          var hours_m2 = Math.floor((distance_m2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes_m2 = Math.floor((distance_m2 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds_m2 = Math.floor((distance_m2 % (1000 * 60)) / 1000);

  

        //COUNTER FOR t1 BEGIN
        if(days_t1>0){
            // Output the result in an element with id="demo"
            document.getElementById("t1_time").innerHTML = days_t1 + "d " + hours_t1 + "h "+ minutes_t1 + "min " + seconds_t1 + "sek ";
            $("#t1_temp").addClass("temp_color_wait");
            $("#t1_hum").addClass("hum_color_wait");
        }
        else if(hours_t1>0){
            document.getElementById("t1_time").innerHTML = hours_t1 + "h "+ minutes_t1 + "min " + seconds_t1 + "sek ";
            $("#t1_temp").addClass("temp_color_wait");
            $("#t1_hum").addClass("hum_color_wait");
        }
        else{
        // Output the result in an element with id="demo"
        if(minutes_t1<=4){
            document.getElementById("t1_time").innerHTML = " Podaci od prije "+minutes_t1+" min " +seconds_t1+" sek";
            $("#t1_temp").removeClass("temp_color_wait");
            $("#t1_hum").removeClass("hum_color_wait");
        }
        else if(minutes_t1>4 && minutes_t1 <= 5){
            minutes_t1 = minutes_t1 - 5;   
            document.getElementById("t1_time").innerHTML = " <style>#t1_time{color:orange;}</style> Čekam podatke: " +minutes_t1+ " min " +seconds_t1+ " sek";
            $("#t1_temp").addClass("temp_color_wait");
            $("#t1_hum").addClass("hum_color_wait");
          if(seconds_t1 == 10){
          //refresh the data
            getData();
            //recreateChartJS6h();
          }
          if(seconds_t1 == 40){
          //refresh the data
            getData();
            //recreateChartJS6h();
          }
          if(seconds_t1 == 59){
          //refresh the data
            getData();
            //recreateChartJS6h();
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
            $("#t2_temp").addClass("temp_color_wait");
            $("#t2_hum").addClass("hum_color_wait");
        }
        else if(hours_t2>0){
            document.getElementById("t2_time").innerHTML = hours_t2 + "h "+ minutes_t2 + "min " + seconds_t2 + "sek ";
            $("#t2_temp").addClass("temp_color_wait");
            $("#t2_hum").addClass("hum_color_wait");
        }
        else{
        // Output the result in an element with id="demo"
        if(minutes_t2<=4){
            document.getElementById("t2_time").innerHTML = " Podaci od prije "+minutes_t2+" min " +seconds_t2+" sek";
            $("#t2_temp").removeClass("temp_color_wait");
            $("#t2_hum").removeClass("hum_color_wait");
        }
        else if(minutes_t2>4 && minutes_t2 <= 5){
            minutes_t2 = minutes_t2 - 5;   
            document.getElementById("t2_time").innerHTML = " <style>#t2_time{color:orange;}</style> Čekam podatke: " +minutes_t2+ " min " +seconds_t2+ " sek";
            $("#t2_temp").addClass("temp_color_wait");
            $("#t2_hum").addClass("hum_color_wait");
          if(seconds_t2 == 10){
          //refresh the data
             getData();
             //recreateChartJS6h();
          }
          if(seconds_t2 == 40){
          //refresh the data
            getData();
            //recreateChartJS6h();
          }
          if(seconds_t2 == 59){
          //refresh the data
            getData();
            //recreateChartJS6h();
          }
        }
      else {
          document.getElementById("t2_time").innerHTML = "<style>#t2_time{color:red; font-weight:600;}</style>  Nije na mreži:  " +minutes_t2 + "m " + seconds_t2 + "s";
      }
    }
       //COUNTER FOR t2 END


        //COUNTER FOR t3 BEGIN
        if(days_t3>0){
            // Output the result in an element with id="demo"
            
            document.getElementById("t3_time").innerHTML = days_t3 + "d " + hours_t3 + "h "+ minutes_t3 + "min " + seconds_t3 + "sek ";
            $("#t3_temp").addClass("temp_color_wait");
            $("#t3_hum").addClass("hum_color_wait");
        }
        else if(hours_t3>0){
            document.getElementById("t3_time").innerHTML = hours_t3 + "h "+ minutes_t3 + "min " + seconds_t3 + "sek ";
            $("#t3_temp").addClass("temp_color_wait");
            $("#t3_hum").addClass("hum_color_wait");
        }
        else{
        // Output the result in an element with id="demo"
        if(minutes_t3<=4){
            document.getElementById("t3_time").innerHTML = " Podaci od prije "+minutes_t3+" min " +seconds_t3+" sek";
            $("#t3_temp").removeClass("temp_color_wait");
            $("#t3_hum").removeClass("hum_color_wait");
        }
        else if(minutes_t3>4 && minutes_t3 <= 5){
            minutes_t3 = minutes_t3 - 5;   
            document.getElementById("t3_time").innerHTML = " <style>#t3_time{color:orange;}</style> Čekam podatke: " +minutes_t3+ " min " +seconds_t3+ " sek";
            $("#t3_temp").addClass("temp_color_wait");
            $("#t3_hum").addClass("hum_color_wait");
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


      //COUNTER FOR m2 BEGIN
      if(days_m2>0){
        // Output the result in an element with id="demo"
        document.getElementById("m2_time").innerHTML = days_m2 + "d " + hours_m2 + "h "+ minutes_m2 + "min " + seconds_m2 + "sek ";
        $("#m2_temp").addClass("temp_color_wait");
        $("#m2_hum").addClass("hum_color_wait");
    }
    else if(hours_m2>0){
        document.getElementById("m2_time").innerHTML = hours_m2 + "h "+ minutes_m2 + "min " + seconds_m2 + "sek ";
        $("#m2_temp").addClass("temp_color_wait");
        $("#m2_hum").addClass("hum_color_wait");
    }
    else{
    // Output the result in an element with id="demo"
    if(minutes_m2<1){
        document.getElementById("m2_time").innerHTML = " Motor se javio prije "+minutes_m2+" min " +seconds_m2+" sek";
        $("#m2_temp").removeClass("temp_color_wait");
        $("#m2_hum").removeClass("hum_color_wait");
        if(m2_command != 1000){
          //console.log('danger');
          reverse_counter = 60 - seconds_m2;
          document.getElementById("m1_button").innerHTML = 'Otkaži komandu ('+reverse_counter+' sek)';
        }
    }
    else if(minutes_m2>=1 && minutes_m2 <= 2){
        minutes_m2 = minutes_m2 - 1; 
        if(m2_command != 1000){  
          document.getElementById("m2_time").innerHTML = " <style>#m2_time{color:orange;}</style> Komanda se izvršava: " +minutes_m2+ " min " +seconds_m2+ " sek";
        }
        else{
          document.getElementById("m2_time").innerHTML = " <style>#m2_time{color:orange;}</style> Provjera komande na motoru: " +minutes_m2+ " min " +seconds_m2+ " sek";
        }
        $("#m2_temp").addClass("temp_color_wait");
        $("#m2_hum").addClass("hum_color_wait");
      if(seconds_m2 == 10){
      //refresh the data
         getData();
         //recreateChartJS6h();
      }
      if(seconds_m2 == 40){
      //refresh the data
        getData();
        //recreateChartJS6h();
      }
      if(seconds_m2 == 59){
      //refresh the data
        getData();
        //recreateChartJS6h();
      }
    }
  else {
      document.getElementById("m2_time").innerHTML = "<style>#m2_time{color:red; font-weight:600;}</style>  Nije na mreži:  " +minutes_m2 + "m " + seconds_m2 + "s";
  }
}
   //COUNTER FOR m2 END



    } // end of if NaN


       //Check if the page is active or not
       $(window).on("blur focus", function(e) {
        var prevType = $(this).data("prevType");
    
        if (prevType != e.type) {   //  reduce double fire issues
            switch (e.type) {
                case "blur":
                    // do work
                    //console.log("not active");
                    break;
                case "focus":
                    // do work
                    //console.log("active - called ajax");
                    getData();
                    //recreateChartJS6h();
                    break;
            }
        }
    
        $(this).data("prevType", e.type);
    })



  }

  //Recreates canvas for the ChartJS - to get the latest data
  function recreateChartJS6h(){
    //console.log("recreateChartJS6h() called");
    var canvas = document.getElementById("chartJSMixedDB");
    canvas.remove();
    // Create a new canvas element and set its attributes
    var newCanvas = document.createElement("canvas");
    newCanvas.setAttribute("id", "chartJSMixedDB");
    // Add the new canvas element to the DOM
    var container = document.getElementById("graph");
    container.appendChild(newCanvas);
    showGraphMixedChart();
  }


  //Mixed Chart - php data begin
 $(document).ready(function () {
    getData();
    //showGraphMixedChart(); not neccessary to call here it is called from getData() function
});

const showGraphMixedChart = () => {
    {
      
//Calculates the last 6 hours from the current hour, for the ChartJS labels # start
  const options = { hour: 'numeric', hour12: false };
  const hourLabels = Array.from({ length: 7 }, (_, i) =>
  new Date(Date.now() - (i * 60 * 60 * 1000)).toLocaleString('sr-SP', options) + 'h'
  ).reverse();
  //console.log(hourLabels);
//Calculates the last 6 hours from the current hour, for the ChartJS labels # end
        $.post("includes/data/cJSavg6.php",function (data_avg)
        {

         // console.log(data_avg);
          var temp = [];
          var hum = [];

          for (var i in data_avg) {
            temp.push(data_avg[i].temp);
            hum.push(data_avg[i].hum);
          }
          

        //  console.log(temp);


chartdataLines2 = { datasets: [{
   label: 'Temperatura',
   data: temp,
   backgroundColor: '#ffa084',
   borderColor: '#E86144',
   hoverBackgroundColor: '#E86144',
   hoverBorderColor: '#666666',
   // this dataset is drawn below
   order: 2
}, {
   label: 'Vlažnost',
   data: hum,
   type: 'line',
   borderColor: '#6fc1fa',
   backgroundColor: '#6fc1fa',
   hoverBackgroundColor: '#0096FF',
   hoverBorderColor: '#666666',
   //lineTension: 0.2,
   // this dataset is drawn on top
   order: 1
}],
labels: hourLabels
};

var graphTarget2 = $("#chartJSMixedDB");

var barGraph2 = new Chart(graphTarget2, {
              type: 'bar',
              data: chartdataLines2
          });
 //options: bezierCurve: true
// console.log('here');

});

}
}
//Mixed Chart - php data end

function m1Click(){
    console.log("M2 clicked");
    current_status_m2 = $('#status').text();
    //console.log(current_status_m2);
    new_command_M2 = $('#m2').val();
    motor = 'm1';
    
    final_command = new_command_M2 - current_status_m2;
             if(current_status_m2 != new_command_M2){ 
                if(new_command_M2 > current_status_m2){
                    
                    console.log("Otvori za "+final_command);
                }
                else if(new_command_M2 < current_status_m2){
                    console.log("Zatvori za "+final_command);
                }
            }
            //'set_motor.php??date="'+date+'"'
            console.log('Final command for ajax'+final_command);
            $.ajax({
              type: "POST",
              url: 'set_motor.php?m='+motor+'&c='+final_command+'&s='+new_command_M2,
              success: function(data) {
                //console.log(data);
                getData();
              }
            });
          }
  
  function m1Rollback(){
    motor = 'm1';
    console.log('Rollback activated motor'+motor);
    $.ajax({
      type: "POST",
      url: 'rollback_motor.php?m='+motor,
      success: function(data) {
        //console.log(data);
        getData();
      }
    });
  }

setInterval(() => {
  timeCalculation();
}, 1000);