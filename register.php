<?php

include 'config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM `user_info` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $message[] = 'user already exist!';
    }else {
        mysqli_query($conn, "INSERT INTO `user_info`(fullname, uname, email, password) VALUES('$name','$uname','$email', '$pass')") or die('query failed');
        $message[] = 'registered successfuly';
        header('location:login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<?php

if(isset($message)){
    foreach($message as $message){
        echo '<div class="messagebox" onclick="this.remove();">' .$message. '</div>';
    }
}
?>
    
     <div class="registration-form">
        <h1>Register</h1>
        <form action="" method="post">
            <p>Full Name:</p>
            <input type="text" name="fullname" class="form-control" required>
            <p>User Name:</p>
            <input type="text" name="uname" class="form-control" required>
            <p>Email:</p>
            <input type="email" name="email" class="form-control" required>
            <p>Password:</p>
            <input type="password" name="password" class="form-control" required>
            <button type="submit" name="submit" class="btn">Register</button>
            <p>already have an account? <a href="login.php">login here!</a></p>
        </form>
     </div>
  
 

    
</body>
</html>