<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing & Payment</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    
    <div class="container">
        <form id="form" action="https://formsubmit.co/fedzkie25@gmail.com" method="POST">
            <div class="row">
                <div class="col">
                    <h3 class="title">Billing Address</h3>
                    <div class="inputBox">
                        <span>Full name:</span>
                        <input type="text" name="fullName" class="form-control" placeholder="Juan Dela Cruz" required>
                    </div>
                    <div class="inputBox">
                        <span>Email:</span>
                        <input type="email" name="email" class="form-control" placeholder="email@email.com" required>
                    </div>
                    <div class="inputBox">
                        <span>Address:</span>
                        <input type="text" name="address" class="form-control" placeholder="# Street" required>
                    </div>
                    <div class="inputBox">
                        <span>City:</span>
                        <input type="text" name="city" class="form-control" placeholder="New York" required>
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>Zip Code:</span>
                            <input type="number" name="zipcode" class="form-control" placeholder="000 123" required>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="title">Payment</h3>

                    <div class="inputBox">
                        <span>Cards Accepted:</span>
                        <img src="resources/card/card.JPG" alt="">
                    </div>
                    <div class="inputBox">
                        <span>Name on Card:</span>
                        <input type="text" name="nameoncard" placeholder="Mr. Juan Dela Cruz" id="fullName" required>
                    </div>
                    <div class="inputBox">
                        <span>Credit Card Number:</span>
                        <input type="text" name="cardnumber" class="form-control" min="0" maxlength="16" placeholder="1111-0000-2222-3333" id="cardNumber" required>
                    </div>
                    <div class="inputBox">
                        <span>Expiry Month:</span>
                        <input type="text" name="month" class="form-control" placeholder="January" id="expiryMonth" required>
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>Expiry Year :</span>
                            <input type="text" name="expiry" class="form-control" maxlength="4" placeholder="2023" id="expiryYear" required>
                        </div>
                        <div class="inputBox">
                            <span>CVV:</span>
                            <input type="text" name="cvv" class="form-control" maxlength="4" placeholder="0123" id="cardCVV" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="Total-item">
                        <span>Total Payment:</span>
                        <p id="Pricee" class="pricee">₱ 0</p>
                    </div>
                </div>
                <div class="col">
                    <input type="button" value="Proceed to Payment" class="submit-btn" id="submit-Btn" disabled>
                </div>
            </div>
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_autoresponse" value="This is to confirm your payment">
        </form>
    </div>

    <script src="payment.js"></script>
</body>
</html>