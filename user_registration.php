<?php include "db_config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styledoctor.css">
    
</head>
<style>
    button{
        
        text-decoration: none;
        background-color: #5F9EA0;
        color: white;
        outline: none;
    }
</style>
<body>
    <div class="container">
        <div class="title"><h1>User Registration</h1></div>
        <form action="#" method="POST">
            <div class="userdetails">
                <div class="inputbox">
                    <span class="details">Username</span>
                    <input type="text" name="Username" pattern="[a-zA-Z]{3,}" placeholder="Enter the name" required>
                    
                </div>
                
                <div class="inputbox">
                    <label for="User_type">User_type</label>
                    <select id="User_type" name="User_type">
                        <option value="User_type">Select User type</option>
                        <option value="admin">Admin</option>
                        <option value="doctor">Doctor</option>
                        <option value="receptionist">Receptionist</option>


                    </select>
    
                    
                </div>
                
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$" placeholder="Enter the mail-id"required>
    
                </div>
                <div class="inputbox">
                    <span class="details">Password</span>
                    <input type="password" name="Password" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$" placeholder="Password of 8 digit lenght" title="Password must have atleast one capital,one small,one digit and one special character"required>
    
                </div>
               
            </div>
            <div class="button">
                <input type="submit" name="Register" value="Register">
                
            </div>
            
            <button><a href="login.php">Click here to login</a></button>
        </form>
    </div>
    <?php
	
	if (isset($_POST['Register']))
	{
		
		$Username=$_POST['Username'];
		$Email=$_POST['Email'];
		$User_type=$_POST['User_type'];
        $Password=$_POST['Password'];
			
		$sql="INSERT into user_registration(Username,Email,User_type,Password) values ('$Username','$Email','$User_type','$Password')";
			
		if(mysqli_query($conn,$sql))
		{
			
            echo "<h1><center>Registered successfully</center></h1>";
		}
		else 
		{
			echo "fail";
		}  
	}
?>
</body>
</html>