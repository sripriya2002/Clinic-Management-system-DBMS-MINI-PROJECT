<?php include "db_config.php";?>
<?php
	session_start();
	if(!ISSET($_SESSION['User_id'])){
		header('location:index.php');
	}
?>
<style>
        .text-success{
            color: darkgray;
            display: block;
            position: absolute;
            width: 200px;
            height: 60px;
            top: 10px;
            border: 2px solid black;
            padding: 5px;
            left: 15%;
        }
</style>
<?php
			
				
		$query = mysqli_query($conn, "SELECT * FROM `user_registration` WHERE `User_id`='$_SESSION[User_id]'");
		$fetch = mysqli_fetch_array($query);
                echo "<h2 class='text-success'>Doctor_id:".$fetch['User_id']."</h2>";
                echo "<h2 class='text-success'>Doctor Name:".$fetch['Username']."</h2>";
                
				
                
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Home Page</title>
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
        <span class="docicon"><i class="fas fa-user-md fa-4x"></i></span><h1>DOCTOR HOME PAGE</h1>
        
        
    </div>
    <div class="menu-bar">
        <ul><li><a href=""></a></li></ul>
    </div>
    <section class="container">
        <div class="card">
            <div class="cardimg patient"></div>
            <a href="display.php"><h1>View Patient</h1></a>
            <p>To view patient personal and medical details</p>
        </div> 
        
        
        <div class="card">
            <div class="cardimg doctor"></div>
            <a href="add_doctor.php?User_id=<?php echo $fetch['User_id']; ?>" ><h1>Add Details</h1></a>
            <p>To add more details about the doctor</p>
        </div> 
        <div class="card">
            <div class="cardimg doctor1"></div>
            <a href="doctor_table.php?User_id=<?php echo $fetch['User_id']; ?>"><h1>View Doctor Table</h1></a>
            <p>To view,update the details about doctor</p>
        </div> 
        <div class="logout">
            <button class="menu-button"><a href="logout.php">LOGOUT</a></button>
        </div>
        
            
    </section>
    
    
</body>
</html>