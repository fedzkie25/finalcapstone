<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
    <title>Home S.O.S Website</title>
    <link rel="icon" type="image/x-icon" href="resources/head.jpg">
</head>
<body>
  <!-----Navigation Bar-->
   <?php include('navbar.php');?>
   
  <!-----Main-->

  <!--<div id="maindiv" class="container">-->
    <div id="Autoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="resources/head1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-lg-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="resources/main1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="resources/main2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="resources/main3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#Autoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#Autoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>      
  <!--</div>-->
  <br>
  <div class="container d-flex">
      <h3>Featured Products</h3>
  </div>    
  <br>
  <div class="container-fluid row d-flex justify-content-around"> 
      <div class="card col-md-4" style="width: 18rem;">
        <img src="products/Honey.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Dr. Honey</h5>
          <p class="card-text">Boost your immune system</p>
        </div>
      </div>
      <div class="card col-md-4" style="width: 18rem;">
        <img src="products/Spray.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Spray</h5>
          <p class="card-text">Room & Linen Spray-Hotel Inspired Scents(Alcohol based)</p>
        </div>
      </div>
      <div class="card col-md-4" style="width: 18rem;">
        <img src="products/Aromatherapy.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Aromatherapy</h5>
          <p class="card-text">Aromatherapy Essential Home Diffuser for Offices,Bedroom / Bathroom air freshener</p>
        </div>
      </div>
      <div class="card col-md-4" style="width: 18rem;">
        <img src="products/perf1.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Perfumes</h5>
          <p class="card-text">SOS Perfumes for Men & Women with box</p>
        </div>
      </div>
  </div>
  <br><br>
  <div class="container d-flex">
    <h3>Be our Partners</h3>
  </div>
  <br>
  <div class="container-fluid d-flex position-relative justify-content-center">
      <img src="Events/e4.png" class="img-fluid" alt="...">
  </div>
  <br><br>

 <!----Footer-->
  <?php include('footer.php');?>

 <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId: '218508074417982',
      cookie: true,
      xfbml: true,
      version: 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0&appId=YOUR_APP_ID&autoLogAppEvents=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
 
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>