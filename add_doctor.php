<?php include "db_config.php";?>
<?php 
session_start();
error_reporting(0);
$User_id=$_GET['User_id'];

$s = "SELECT * FROM user_registration WHERE User_id='$User_id'";
$result1 = mysqli_query($conn,$s);
$row1 = mysqli_fetch_array($result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor details</title>
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
    <button class="back"><i class="fa-solid fa-backward"></i><a href="doctor_home.php">Back</a></button> <br>
    <div class="container">
        <div class="title"><h1>Additional Details</h1></div>
        <form action="#" method="POST">
            <div class="userdetails">
            <div class="inputbox">
                    <span class="details">Doctor_id</span>
                    
                    <input type="text" name="Doctor_id" placeholder=" " value="<?php echo $row1['User_id']?>"required readonly>
                </div>
                <div class="inputbox">
                    <span class="details">Doctor_Name</span>
                    <input type="text" name="Doctor_name" pattern="[a-zA-Z]{3,}" placeholder=" " value="<?php echo $row1['Username']?>" required readonly>
                    
                </div>
                <div class="inputbox">
                    <span class="details">Specialization</span>
                    <input type="text" name="Specialization" pattern="[a-zA-Z]{3,}" placeholder="Enter the specialization" required>
                    
                </div>
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="email"  name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$" placeholder=" " value="<?php echo $row1['Email']?>"required readonly>
    
                </div>
                <div class="inputbox">
                    <span class="details">Phone</span>
                    <input type="phone" name="Phone" pattern="[1-9][0-9]{9}" placeholder="Enter the number" required>
    
                    
                </div>
                
                
                <div class="inputbox">
                    <span class="details">Address</span>
                    <input type="text" name="Address" pattern="[a-zA-Z]{3,}" placeholder="Enter the address">
                    
                </div>
            </div>
            <div class="button">
                <input type="submit" name="Submit" value="Submit">

            </div>
        </form>
    </div>
    <?php
	
	if (isset($_POST['Submit']))
	{   
        
		$Doctor_id = $_POST['Doctor_id'];
        $Doctor_name = $_POST['Doctor_name'];
        $Email = $_POST['Email'];
		
		$Specialization=$_POST['Specialization'];
       
        $Phone=$_POST['Phone'];
        $Address=$_POST['Address'];
			
		$sql="INSERT into doctor(Doctor_id,Doctor_name,Specialization,Email,Phone,Address) values ('$Doctor_id','$Doctor_name','$Specialization','$Email','$Phone','$Address') ";
			
		if(mysqli_query($conn,$sql))
		{
			echo "<h1><center>Details added successfully</center></h1>";
            
		}
		else 
		{
			echo "fail";
		}  
	}
    
	  
?>
</body>
</html>