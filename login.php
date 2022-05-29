<?php 
    session_start();
    include "db_config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styledoctor.css">
    <script src="https://kit.fontawesome.com/c5e1e9640e.js" crossorigin="anonymous"></script>
    
</head>
<style>
	.back{
            top: 10px;
            position:absolute;
            padding: 10px;
            width: 80px;
            text-align: center;
            
        }

</style>
<body>
<button class="back"><i class="fa-solid fa-backward"></i><a href="index.php">Back</a></button> <br>
    <div class="container">
        <div class="title"><h1>Login</h1></div>
        <form action="#" method="POST">
            <div class="userdetails">
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="email" name="Email" placeholder="Enter the mail" required>
                    
                </div>
                <div class="inputbox">
                    <span class="details">Password</span>
                    <input type="password" name="Password" placeholder="Enter the password" required>
    
                </div>
                <div class="inputbox">
                    <label for="User_type">User_type</label>
                    <select id="User_type" name="User_type" required>
                        <option value="User_type">Select User type</option>
                        <option value="admin">Admin</option>
                        <option value="doctor">Doctor</option>
                        <option value="receptionist">Receptionist</option>
                    </select>                
                </div>
                     </div>
            <div class="button">
                <input type="submit" name="Login" value="Login">
            </div>
        </form>
    </div>
    <?php   
	if (isset($_POST['Login']))
	{
		$Email=$_POST['Email'];
        $Password=$_POST['Password'];	
        $User_type=$_POST['User_type'];
        
        $sql="select * from user_registration where Email='$Email' and Password='$Password' and User_type='$User_type'";
        $result=mysqli_query($conn,$sql);
        
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        $count=mysqli_num_rows($result);
        if($count==1){
            $_SESSION['User_id']=$fetch['User_id'];
            if($row['Email']==$Email && $row['Password']==$Password && $row['User_type']=='Admin'){
                header("Location: admin_home.php");
            }
            elseif($row['Email']==$Email && $row['Password']==$Password && $row['User_type']=='Doctor'){
                $_SESSION['User_id']= $row['User_id'];
                header("Location: doctor_home.php");
            }
            elseif($row['Email']==$Email && $row['Password']==$Password && $row['User_type']=='Receptionist'){
                $_SESSION['User_id']=$row['User_id'];
                header("Location: receptionist_home.php");
            }          
        }
        else{
            echo "<h1><center> Login failed invalid username or password or user type</center></h1>";
        }
    
    }
    ?>
</body>
</html>