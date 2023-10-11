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
    <title>Products</title>
    <link rel="icon" type="image/x-icon" href="head.jpg">
</head>
<body>
  <!---Navigation Bar-->
  <?php include('navbar.php');?>
  
  <br>
  <p style="font-size: x-large;">Our Products</p><br>
  <div class="container-fluid row d-flex  align-items-center" style="margin-left: 2px; justify-content:space-around;">
    <div class="card col-md-4" style="width: 18rem; border-color: goldenrod; "><br>
      <img src="products/perf1.JPG" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">SOS Perfumes for Men & Women with box <br>₱249</p>
      </div>
    </div>
    <div class="card col-md-4" style="width: 18rem; border-color: goldenrod;"><br>
      <img src="products/perf2.JPG" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">OIL BASED car hanging perfumes/diffuser with box <br>₱119</p>
      </div>
    </div>
    <div class="card col-md-4" style="width: 18rem; border-color: goldenrod;"><br>
      <img src="products/Spray.JPG" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Room & Linen Spray-Hotel Inspired Scents(Alcohol based) ₱169</p>
      </div>
    </div>
    <div class="card col-md-4" style="width: 18rem; border-color: goldenrod;"><br>
      <img src="products/Aromatherapy.JPG" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Aromatherapy Essential Home Diffuser for Offices, Bathroom air freshener <br>₱149</p>
      </div>
    </div>
    <div class="card col-md-4" style="width: 18rem; border-color: goldenrod;"><br>
      <img src="products/Honey.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Dr. Honey, best as partner for your DripCoffee <br>₱250</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <br>
    <p style="font-size: 20px;">For Inquiries, please click Contact Us. For Order's click the shopee logo below</p>
    <br>
    <a href="https://shopee.ph/SOS-Perfumes-for-Men-Women-with-box-i.397813810.19164382309?sp_atk=09706f32-173f-411b-a051-0769b6c1f24a&xptdk=09706f32-173f-411b-a051-0769b6c1f24a" target="_blank"><img src="resources/shopee.png" class="shopee rounded mx-auto d-block"></a>
  </div>
  <br>
  <footer>
    <div class="footer-container row container-">  
      <nav class="footer-nav col h-20 pt-1" style="background-color: #DEDEDE; text-align: center ;">
        <h6>&nbsp;&nbsp; Quick Links</h6>
        <ul>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="#"><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">FAQ</button></a></li>
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-fullscreen-sm-down">
                    <div class="modal-content" style="text-align: center; padding:10px;">
                
                    <h4><b>What is the sense of scents made of?</b></h4>
  
                    <p>Sense of Scents Perfume is Made with organic ingredients, feel the goodnes of nature with our products.</p>
                      <br>
                    <h4><b>A Guide to Perfume Types!</b></h4>
  
                    <p>The Premium Parfum - 20% pure, lasts for 8 hours</p>
  
                    <p>Everyday Eau de Parfum - 20% pure, lasts for 6 hours</p>
  
                    <p>Nightwear Eau de Toilette - 15% pure, lasts for 3 hours</p>
  
                    <p>Citrus Eau de Cologne - 4% pure lasts for 2 hours</p>
  
                    <p>Casual Eau de Fraiche - 3% pure, lasts for 2 hours</p>
                
                
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </ul>
      </nav>
      <div class="contact-info col-4 h-20 pt-1" style="background-color: #DEDEDE; padding: 3px;">
        <h6>Address:</h6>
        <p>Phase 9 Block 11 Lot, 23 Eastwood Residences Montalban, Rizal</p>
        <p>Phone: +639053889475</p>
        <p>Email: SenseOfScents21@gmail.com</p>
        <p>&copy; 2023 SOS SenseOfScents. All rights reserved.</p>
      </div>
      <div class="contact-info col-4 h-20 container-fluid" style="background-color: #DEDEDE; padding: 3px; overflow: hidden;">
        <h6>Map</h6>
        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d123502.06599962174!2d121.01814788938195!3d14.687716826165914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3397b7eadd63a1df%3A0xa6f6a02c480fc32c!2sCubao%2C%20Quezon%20City%2C%20Metro%20Manila!3m2!1d14.6177663!2d121.05715409999999!4m5!1s0x3397a4b157a3e9dd%3A0x9957a6e7539bf3de!2sQ543%2B7RQ%20Phase%209%20Eastwood%20Residences%20Rodriguez%20Rizal%2C%20Unnamed%20Eskinita%20(Proposed%20Catalino%20Bautista%20St.)%2C%20Rodriguez%2C%20Rizal!3m2!1d14.7557002!2d121.154606!5e0!3m2!1sen!2sph!4v1684683718701!5m2!1sen!2sph" width="500" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
   </footer>  
</body>
</html>