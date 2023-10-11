<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id))
    header('location:login.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="cartstyle.css">
    <script src="https://kit.fontawesome.com/eabe26cd9e.js" crossorigin="anonymous"></script>
</head>

<body>


    
    <div class="header">
        <p class="logo"><a href="index.php"><img src="resources/head.jpg" alt="SOS" width="70" height="70"></a></p>
        <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
    </div>
    <div class="container">
        <div id="root"></div>
        <div class="sidebar">
            <div class="head"><p>My Cart</p></div>
            <div id="cartItem">Your cart is empty</div>
            <div class="foot">
                <h3>Total</h3>
                <h2 id="total" class="totalPrice">₱ 0.00</h2>
                <div>
                    <button type="submit" name="submit" class="btn" id="checkOut-btn">Check Out</button>
                </div>
            </div>
        </div>
    </div>
    

    <script src="addtocart.js"></script>
</body>
</html>