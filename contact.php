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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="head.jpg">
</head>
<body>
  <!---Navigation bar-->
  <?php include('navbar.php');?>
  <br>

  <div class="container-fluid d-flex" style="text-align: center; display:inline-block; align-items: center; justify-content: center;;">
    <h5>Follow Us:</h5>&nbsp;&nbsp;&nbsp;
    <div class="wrapper">
      <div class="button">
        <div class="icon">
            <i class="fab fa-facebook-f"></i>
        </div>
        <span><a href="https://www.facebook.com/SenseOfScents21" target="_blank">Facebook</a></span>
      </div>
    </div>
      <div class="wrapper">
        <div class="button">
          <div class="icon">
              <i class="fab fa-instagram"></i>
          </div>
          <span><a href="https://www.instagram.com/senseofscents2021/" target="_blank">Instagram</a></span>
        </div>
      </div>
  </div>
  <br>
  <form class="container mt-5" action="https://formsubmit.co/fedzkie25@gmail.com" method="POST">
    <div class="form-group row">
      <h5>Leave a Message:</h5><br>
      <label for="name" class="col-sm-2 col-form-label">Name:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
    </div><br>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email:</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
    </div><br>
    <div class="form-group row">
      <label for="cellphone" class="col-sm-2 col-form-label">Cellphone:</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" id="number" name="number" required>
      </div>
    </div><br>
    <div class="form-group row">
      <label for="message" class="col-sm-2 col-form-label">Message:</label>
      <div class="col-sm-5">
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
      </div>
    </div><br>
    <div class="form-group row">
      <div class="col-sm-10 offset-sm-2">
        <button type="submit" class="btn btn-primary">Submit</button>
          <input type="hidden" name="_next" value="https://fedzkie25.github.io/MP1/">
      </div>
    </div>
  </form>

<div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="true"></div>

  <br><br>
  
  <?php include('footer.php');?>

</body>
</html>
