<?php

session_start();
include'../includes/db/connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){
$email = $_POST['email'];
$password = $_POST['password'];

$sql="SELECT * FROM users WHERE email='$email' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) == 1){
    $user =
     mysqli_fetch_assoc($result);
    if(password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['fullname'] = $user['fullname'];

       header('Location: /gardennwears/index.php');
        exit();



    exit();
    }else{
        echo "Wrong password";
    }
    }else{
        echo "User not found";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Gardenn Wears</title>

    <link rel="stylesheet" href="/gardennwears/assets/css/style.css">
    <link rel="icon" type="image/png" href="/gardennwears/assets/image/icons8-clothes-94.png">

</head>
<body>
    
<div class="video">
        <video autoplay loop muted playsinline id="bg-video">
            <source src="/gardennwears/assets/video/clothes.mp4" type="video/mp4">
        </video>
    </div>

   
<div class="auth-container">
<div class="auth-card">
<h2>Welcome Back</h2>
<p class="auth-subtitle">Log in to your Gardenn Wears account</p>

<form class="auth-form" action="login.php" method="POST">
<div class="input-group">
<label for="email">Email Address</label>
<input type="email" id="email" name="email" placeholder="you@example.com" required>
</div>
<div class="input-group">

<label for="password">Password</label>
<input type ="password" id="password"name="password" placeholder="......" required>
</div>

<div class="auth-extra-links">
                  
</div>

<button type="submit" class="auth-btn">Log In</button>
<a href="#" class="forgot-pass">Forgot Password</a>
</form>
<p class="auth-footer">Don't have an account?<a href="signup.php">Sign up here</a></p>

</div>
</div>


<?php
include '../partials/footer/php';

?>

