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


  function timeCalculation() {
    const timeData = [
      { id: 't1', time: t1_time },
      { id: 't2', time: t2_time },
      { id: 't3', time: t3_time },
      { id: 'm2', time: m2_time }
    ];
  
    const now = new Date().getTime();
    let flag_ajax_call = 0;
  
    timeData.forEach(data => {
      const { id, time } = data;
  
      if (!isNaN(time)) {
        const distance = now - time;
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
        const $temp = $(`#${id}_temp`);
        const $hum = $(`#${id}_hum`);
        const $time = $(`#${id}_time`);
  
        if (days > 0) {
          $time.html(`${days}d ${hours}h ${minutes}min ${seconds}sek`);
          $temp.addClass('temp_color_wait');
          $hum.addClass('hum_color_wait');
        } else if (hours > 0) {
          $time.html(`${hours}h ${minutes}min ${seconds}sek`);
          $temp.addClass('temp_color_wait');
          $hum.addClass('hum_color_wait');
        } else {
          if (minutes <= 4) {
            $time.html(`Podaci od prije ${minutes} min ${seconds} sek`);
            $temp.removeClass('temp_color_wait');
            $hum.removeClass('hum_color_wait');
          } else if (minutes > 4 && minutes <= 5) {
            const remainingMinutes = minutes - 5;
            $time.html(`<style>#${id}_time{color:orange;}</style>Čekam podatke: ${remainingMinutes} min ${seconds} sek`);
            $temp.addClass('temp_color_wait');
            $hum.addClass('hum_color_wait');
            if (seconds === 10 || seconds === 40 || seconds === 59) {
              getData();
            }
          } else {
            $time.html(`<style>#${id}_time{color:red; font-weight:600;}</style>Nije na mreži: ${minutes}m ${seconds}s`);
          }
        }
      }
    });
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