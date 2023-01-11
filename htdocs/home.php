<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/home.css">
  <title>WebPage</title>
</head>
<body>
    <?php  
      if($_COOKIE['user'] ==''):
    ?>
      <?php require "blocks/header.php"?>
      <div class="container d-flex justify-content-center align-items-center">
        <?php require "validation-form/registerbody.php"?>
        <?php require "validation-form/loginbody.php"?>
      </div>
    <?php require "blocks/footer.php"?>
    <?php else: ?>
      <?php require "blocks/headlogedin.php"?>      
      <div class="container d-flex justify-content-center">
        <h4>Welcome dear <?=$_COOKIE['user']?> </h4>
      </div> 
        <div class="container">
          <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Pricing</h1>
            <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example.
            It’s built with default Bootstrap components and utilities with little customization.</p>
          </div>
            <div id="main" class="zbt  container">
              <?php 
                for ($i=0; $i < 6 ; $i++):
              ?>
              <div class="evrcrd card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Just Text</h4>
                </div>
                <div class="card-body">
                  <img class="img" src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail" alt="">
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Technology is often viewed as the</li>
                    <li>as the enemy of nature</li>
                    <li>but you can find technological advancements</li>
                    <li>helping rather than harming nature.</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-outline-primary">More</button>
                </div>
              </div>
              <?php endfor; ?>
            </div>    
        </div>
      <?php require "blocks/footer.php"?>
    <?php endif; ?>
</body>
</html>
