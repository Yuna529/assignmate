<?php
require '../../../config.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
    
</head>

<body>
    <?php include '../../includes/message.php' ?>
    <div class="wrapper">
        <form method="post" action="../../../controllers/login-controller.php">
            <h1>Login</h1>
            <div class="input-box">
                <input name="email" type="text" placeholder="Enter your email`" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input name="password" type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account?<a href="../register/register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>

</html>