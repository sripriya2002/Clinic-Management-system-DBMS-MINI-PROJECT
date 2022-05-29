<?php include "db_config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="homestyle.css">
    <script src="https://kit.fontawesome.com/c5e1e9640e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="menu_bar">
        <h1 class="logo">Clinic<span>Management</span></h1>
       <ul>
           <li><a href="#Home">Home</a></li>
           <li><a href="#About">About</a></li>
           <li><a href="#Contact">Contact</a></li>
           <li><a href="user_registration.php">Register</a></li>
           <li><a href="login.php">Login</a></li>
       </ul> 
    </div>
    <div class="center">
        <span class="text1">Welcome To</span>
        <span class="text2">Clinic Management System</span>
    </div>
    <section class="home">
        &nbsp;
    </section>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section About" id=About>
                <h1 class="logo-text">Clinic<span>Management</span></h1>
                <p>
                    Clinic Mangement page is used to help the Receptionist and the Doctors to have a proper record of patients.This will help to reduce maintainance of records manually.
                </p>
            </div>
            <div class="footer-section Contact" id=Contact>
                <h1>Contact</h1>
                <span><i class="fas fa-phone"></i> &nbsp;  123-456-789</span><br>
                <span><i class="fa-solid fa-envelope-open"></i> &nbsp;  clinicmanagement@gmail.com</span><br>
                

                
            </div>
        </div>
        <div class="footer-bottom">
            &copy;clinicmanagement.com | Designed by clinicmanagement
        </div>
    </div>
    
</body>
</html>