<?php
  require_once("includes/head.php");
?>
    <title>SGB</title>
  </head>

  <body>

  <?php
  require_once("includes/header_menu.php");
  ?>



    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 style='font-weight:600; color:#228B22; '">#1 PLASTENIK</h2>
      <p class="lead">Aktuelni podaci</p>
    </div>




    <div class="container">
      
    
    
    <div class="card-deck mb-3 text-center">
        <div class="card mb-3 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Trenutni prosjek</i></h4>
          </div>
          <div class="card-body">
          <ul class="list-unstyled mt-3 mb-1">
            <li style="color:#CFA39A;">TEMPERATURA</li>
          </ul>
            <h1 class="card-title pricing-card-title" style="color:#E86144;">         
            <i class="fa-solid fa-temperature-three-quarters"></i>
            5.3°C</h1>
          <ul class="list-unstyled mt-3 mb-1" style="color:#89CFF0;">
            <li>VLAŽNOST</li>
          </ul>  
            <h1 class="card-title pricing-card-title" style="color:#0096FF;">
                <i class="fa-solid fa-droplet"></i>
            98%</h1>
            <ul class="list-unstyled mt-3 mb-1">
            <li style="color:#ccc">Podaci od prije 1 min i 27 sek </li>
          </ul>  
            <a class="btn btn-lg btn-block btn-outline-primary" href="sub-page.php" role="button">Detaljnije</a>
          </div>
        </div>
        <div class="card mb-3 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Vanjski uslovi</h4>
          </div>
          <div class="card-body">
          <ul class="list-unstyled mt-3 mb-1">
            <li>TEMPERATURA</li>
          </ul>
            <h1 class="card-title pricing-card-title">         
            <i class="fa-solid fa-temperature-three-quarters"></i>
            4.1°C</h1>
          <ul class="list-unstyled mt-3 mb-1">
            <li>VLAŽNOST</li>
          </ul>  
            <h1 class="card-title pricing-card-title">
                <i class="fa-solid fa-droplet"></i>
            87%</h1>
            <ul class="list-unstyled mt-3 mb-1">
            
            <li style="color:#ccc"><i class="fa-solid fa-sun"></i> izlazak u 06:21h  <i class="fa-regular fa-sun"></i> zalazak u 17:27h</li>
            <li style="color:#ccc">Podaci od prije 12 min i 42 sek </li>
          </ul>  
          </div>
        </div>
        


      </div> <!-- Container 1 end -->


      <div class="container">
      
    
    
      <div class="card-deck mb-3 text-center">
          <div class="card mb-3 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Senzor T1</h4>
            </div>
            <div class="card-body">
            <ul class="list-unstyled mt-3 mb-1">
              <li>TEMPERATURA</li>
            </ul>
              <h1 class="card-title pricing-card-title">         
              <i class="fa-solid fa-temperature-arrow-up"></i>
              5.3°C</h1>
            <ul class="list-unstyled mt-3 mb-1">
              <li>VLAŽNOST</li>
            </ul>  
              <h1 class="card-title pricing-card-title">
                  <i class="fa-solid fa-droplet"></i>
              98%</h1>
              <ul class="list-unstyled mt-3 mb-1">
              <li>Podaci od prije 1 minut i 27 sekundi </li>
            </ul>  
              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Detaljnije</button>
            </div>
          </div>


          <div class="card mb-3 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Senzor T2</h4>
            </div>
            <div class="card-body">
            <ul class="list-unstyled mt-3 mb-1">
              <li>TEMPERATURA (+1.6°C)</li>
            </ul>
              <h1 class="card-title pricing-card-title">         
              <i class="fa-solid fa-temperature-arrow-up"></i>
              5.3°C</h1>
            <ul class="list-unstyled mt-3 mb-1">
              <li>VLAŽNOST (-4%)</li>
            </ul>  
              <h1 class="card-title pricing-card-title">
                  <i class="fa-solid fa-droplet"></i>
              98%</h1>
              <ul class="list-unstyled mt-3 mb-1">
              <li>Podaci od prije 1 minut i 27 sekundi </li>
            </ul>  
              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Detaljnije</button>
            </div>
          </div>
          
          <div class="card mb-3 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Senzor T3</h4>
            </div>
            <div class="card-body">
            <ul class="list-unstyled mt-3 mb-1">
              <li>TEMPERATURA</li>
            </ul>
              <h1 class="card-title pricing-card-title">         
              <i class="fa-solid fa-temperature-arrow-up"></i>
              5.3°C</h1>
            <ul class="list-unstyled mt-3 mb-1">
              <li>VLAŽNOST</li>
            </ul>  
              <h1 class="card-title pricing-card-title">
                  <i class="fa-solid fa-droplet"></i>
              98%</h1>
              <ul class="list-unstyled mt-3 mb-1">
              <li>Podaci od prije 1 minut i 27 sekundi </li>
            </ul>  
              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Detaljnije</button>
            </div>
          </div>
  
        </div> <!-- Container 1 end -->

        <?php
            require_once("includes/footer.php");
        ?>

    </div>


    <?php
            require_once("includes/lib.php");
    ?>



  </body>
</html>
