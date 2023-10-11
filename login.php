<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM `user_info` WHERE uname = '$uname' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('location: shoppingcart.php');
    }else {
        $message[] = 'incorrect email or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    
<?php

if(isset($message)){
    foreach($message as $message){
        echo '<div class="messagebox" onclick="this.remove();">'.$message.'</div>';
    }
}
?>
     <div class="registration-form">
        <h1>Login</h1>
        <form action="" method="post">
            <p>User Name:</p>
            <input type="text" name="uname" class="form-control" required>
            <p>Password:</p>
            <input type="password" name="password" class="form-control" required>
            <button type="submit" name="submit" class="btn">Login</button>
            <p>don't have an account? <a href="register.php">register here!</a></p>
        </form>
     </div>
  
 

    
</body>
</html>