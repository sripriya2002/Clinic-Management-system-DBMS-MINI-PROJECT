<?php include "db_config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN Home Page</title>
    <link rel="stylesheet" href="stylerecep.css">
    <script src="https://kit.fontawesome.com/c5e1e9640e.js" crossorigin="anonymous"></script>
</head>
<style>
    .menu-button{
        padding: 10px;
        display: block;
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
    }
</style>
<body>
    <div class="center">
        <span class="adminicon"><i class="fas fa-user-tie fa-4x"></i></span><h1>ADMIN HOME PAGE</h1>
    </div>
    <section class="container">
        <div class="card">
            <div class="cardimg doctor"></div>
            <a href="view_doctor.php"><h1>View Doctor</h1></a>
            <p>To view the doctor and all required  details and also delete if required</p>
        </div> 
        
        <div class="card">
            <div class="cardimg receptionist"></div>
            <a href="view_receptionist.php"><h1>View Receptionist</h1></a>
            <p>To view the receptionist and all required  details and also delete if required</p>
        </div> 
        <div class="logout">
        <button class="menu-button"><a href="logout.php">LOGOUT</a></button>
        </div>
    

    </section>
    
</body>
</html>