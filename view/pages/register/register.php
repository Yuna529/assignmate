<?php
require_once '../../../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./register.css">
    <link rel="stylesheet" href="../../../public/css/gobals.scss">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Register</title>
</head>

<body>
    <?php require '../../includes/message.php' ?>
    <div class='top-bar top-bar-login-register'>
       
        <nav>
            <a class="back-btn" href="../../../index.php">Go back</a>
        </nav>
    </div>
    <div class="wrapper register-container">-
        <form method="post" action="../../../controllers/register-controller.php">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" name="full_name" placeholder="Enter your name" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Enter your email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="number" name="phone_no" placeholder="Enter your phone number" required>
                <i class='bx bxs-phone'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Enter password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <input type="submit" value="Register" class="btn" />
        </form>
        <div class="register-link">
            <p>Already have an account? <a href="../login/login.php">Login</a></p>
        </div>
    </div>
</body>

</html>
