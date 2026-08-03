
<?php

include '../includes/db/connect.php';



if ($_SERVER["REQUEST_METHOD"] === "POST") {


$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password=
password_hash($_POST['password'], PASSWORD_DEFAULT);


$sql = "INSERT INTO users (fullname, email, password)
 VALUES ('$fullname', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Account created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

$conn->close();
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Sign Up-Gardenn Wears</title>


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
                            <h2>Create Account</h2>
                    <p class="auth-subtitle">
                            Join Gardenn Wears Today
                    </p>
                    <form id="sign-up-form" class="auth-form" action="signup.php" method="POST">
                        <div class="input-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" id="fullname"name="fullname" placeholder="Mustafa Abdi" required>
                        </div>
                        <div class="input-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com" required>
                        </div>

                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="******" required>
                        </div>
                        
                        <div class="input-group">
                            <label for="terms">I agree to the Terms & Conditions</label>
                            <input type="checkbox" id="terms" required>
                        </div>

                        <button type="submit"id="signup-btn" name="signup-btn"class="auth-btn">Sign Up</button>

                    </form>
                        <p class="auth-footer">Already have an account?<a href="login.php"  >Login here</a></p>
            </div>
        </div>

<?php
include '../partials/footer.php';
?>

