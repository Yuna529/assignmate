<?php
require_once 'config.php';
if (isset($_SESSION['user_id'])) {
    header("Location: view/pages/dashboard/dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/a11.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

    <header>
        <div class="main">
            <div class="navbar">
               
            <a href="#" class="logo">
                   <img src="./public/assets/Assign.png" alt="Assignmate Logo" class="logo-img"
                </a>
                <div class="menu">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="features.html">FEATURES</a></li>
                        <li><a href="pricing.html">PRICING</a></li>
                        <li><a href="team.html">OUR TEAM</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </header>
    <div class="background-container">
        <div class="content">
        <h2>PLAN WITH ASSIGNMATE</h2>
            <p>For all your productivity and time management needs.<br>
            Schedule and track tasks online, manage your workload, achieve your goals.</p>
        <div class="button-container">
            <a href="./view/pages/login/login.php" class="button">Get Started<span></span></a>
            Don't have an account? <a href="./view/pages/register/register.php" class="button">Register here<span></span></a>
           
        </div>
        </div>
        <div class="upgrade-box">
    <img src="./public/assets/piggy.png" alt="Upgrade" class="upgrade-image">
    <p> Upgrade to Pro.Take your productivity to the next level.</p>
</div>
        <img src="./public/assets/landing.svg" alt="">
       
    </div>
    
    <section class="about" id="about">
        <div class="about-content">
        <img src="./public/assets/page2.svg" alt="">
        <div class="text-container">
                <h3>Why choose us?</h3>
                <p>Productivity is not a talent, it’s a skill. And we require the right tools to upgrade our skills.
                    With productivity and planning, a lot comes down to the little things that keep us organized and
                    focused on the finish line. Using a daily planner online is better than using nothing, but having an
                    excellent free schedule planner will make a world of difference. The process of creating subtasks,
                    working with task lists, and writing detailed meeting notes where it’s convenient for you has never
                    been easier.
                </p>
        </div>
        </div>
    </section>
    
    <section class="features" id="features">
        <div class="features-content">
        <img src="./public/assets/feature1.svg" class="image-top-left" alt="Feature 1">
        <img src="./public/assets/feature2.svg" class="image-bottom-right" alt="Feature 2">
            <div class="text-container">
                <h4>Features</h4>
            <p class="paragraph">Manage your daily schedule wherever you are. Keep up with your 
                daily routine no matter where you are. 
                Bordio’s digital daily planner app for iPhone and Android devices  enables you to stay on 
                top of your plan and progress 24/7 anywhere and everywhere. </p>
                 <p class="paragraph">Manage your daily schedule wherever you are. Keep up with your 
                daily routine no matter where you are. 
                Bordio’s digital daily planner app for iPhone and Android devices  enables you to stay on 
                top of your plan and progress 24/7 anywhere and everywhere. </p>
            </div>
        </div>
        
    </section>

    <section class="features2" id="features2">
        <div class="features2-content">
        <img src="./public/assets/feature3.svg" class="image-top-left" alt="Feature">
        <img src="./public/assets/feat2.svg" class="image-bottom-right" alt="Feature">
            <div class="text-container">
            <p class="paragraph">Manage your daily schedule wherever you are. Keep up with your 
                daily routine no matter where you are. 
                Bordio’s digital daily planner app for iPhone and Android devices  enables you to stay on 
                top of your plan and progress 24/7 anywhere and everywhere. </p>
                 <p class="paragraph">Manage your daily schedule wherever you are. Keep up with your 
                daily routine no matter where you are. 
                Bordio’s digital daily planner app for iPhone and Android devices  enables you to stay on 
                top of your plan and progress 24/7 anywhere and everywhere. </p>
            </div>
        </div>
        
    </section>
    <section class="pricing">
    <div class="card-wrapper">
        <div class="card-header">
            <img src="./public/assets/pay1.svg" alt="Feature Image">
            <p>STARTER</p>
        </div>
        <div class="card-detail">
            <p><span class="fas fa-check check"></span><b>1</b> full user</p>
            <p><span class="fas fa-check check"></span><b>5</b> content</p>
            <p><span class="fas fa-check"></span> content</p>
            <p><span class="fas fa-times no-check"></span> content</p>
        </div>
        <div class="card-price">
            <p><sup>$</sup>10<sub>/month</sub></p>
        </div>
    </div>

    <div class="card-wrapper">
        <div class="card-header">
            <img src="./public/assets/pay2.svg" alt="Feature Image">
            <p>PROFESSIONAL</p>
        </div>
        <div class="card-detail">
            <p><span class="fas fa-check check"></span><b>5</b> full user</p>
            <p><span class="fas fa-check check"></span><b>20</b> content</p>
            <p><span class="fas fa-check"></span> content</p>
            <p><span class="fas fa-times no-check"></span> content</p>
        </div>
        <div class="card-price">
            <p><sup>$</sup>25<sub>/month</sub></p>
        </div>
    </div>

    <div class="card-wrapper">
        <div class="card-header">
            <img src="./public/assets/pay3.svg" alt="Feature Image">
            <p>BUSINESS</p>
        </div>
        <div class="card-detail">
            <p><span class="fas fa-check check"></span><b>5</b> full user</p>
            <p><span class="fas fa-check check"></span><b>20</b> content</p>
            <p><span class="fas fa-check"></span> content</p>
            <p><span class="fas fa-check"></span> content</p>
        </div>
        <div class="card-price">
            <p><sup>$</sup>50<sub>/month</sub></p>
        </div>
    </div>
</section>
   <section class="ourteam">
    <div class="team">
        <p>Meet Our Team</p>
        <div class="profiles">
            <div class="profile">
                <img src="./public/assets/sailee.jpg">
                <p>Sailee Singh Maharjan</p>
                <p class="title">CEO</p>
                <p class="content">Jane is the CEO of the company and has over 10 years of experience in the industry</p>
            </div>
            <div class="profile">
                <img src="./public/assets/sailee.jpg">
                <p>Puja Adhikari</p>
                <p class="title">CEO</p>
                <p class="content">Jane is the CEO of the company and has over 10 years of experience in the industry</p>
            </div>
            <div class="profile">
                <img src="./public/assets/sailee.jpg">
                <p>Sophiya Prasain</p>
                <p class="title">CEO</p>
                <p class="content">Jane is the CEO of the company and has over 10 years of experience in the industry</p>
            </div>
        </div>
    </div>
</section>
    <section class="footer">
        <div class="text">
            <p>CONNECT WITH US</p>
        </div>
       
        <ul class="social-icons">
            <li>
                <a href="#"><i class="fa-brands fa-github"></i></a>
            </li>
            <li>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-envelope"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </li>
        </ul>
        <p>&copy; 2023 AssignMate. All rights reserved.</p>
    </section>
</body>


</html>