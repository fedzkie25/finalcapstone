<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>About Us</title>
    <link rel="icon" type="image/x-icon" href="resources/head.jpg">
</head>
<body>
  <!---Navigation bar-->
  <?php include('navbar.php');?>
    
  <br><br>
  <div style="margin-bottom: 15px;">
    <p>Sense of Scents is a personalize perfumes that made with organic ingredients.</p>
    <p>This products was establish year 2021.</p>
    <h4>Below is our Members:</h4>
  </div>

  <div class="container-fluid row d-flex justify-content-evenly">  
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="Members/M1.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Sherill C.</h5>
            <p class="card-text">Angel & Sky Online Shop.</p>
            <p class="card-text"><small class="text-body-secondary">Gen. Trias, Cavite</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 500px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="Members/m2.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Rosemarie D.</h5>
            <p class="card-text">RMarieClothing88</p>
            <p class="card-text"><small class="text-body-secondary">Montalban, Rizal</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 500px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="Members/m5.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Josh Jobog</h5>
            <p class="card-text">San Jose Batangas / Binondo Manila.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 500px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="Members/m6.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Saruwatari Yumi</h5>
            <p class="card-text">Panitan Capiz / Kalibo Aklan.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 500px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="Members/m7.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Edralyn Usbal</h5>
            <p class="card-text">Pres. Roxas Capiz</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>
<br>
   <?php include('footer.php');?>  
</body>
</html>