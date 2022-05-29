<?php include "db_config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient details</title>
    <link rel="stylesheet" href="styledoctor.css">
</head>
<body>
    <div class="container">
        <div class="title"><h1>Patient Details</h1></div>
        <form action="#" method="post">
            <div class="userdetails">
                <div class="inputbox">
                    <span class="details">Patient Name</span>
                    <input type="text" name="P_name" pattern="[a-zA-Z]{3,}" placeholder="Enter the name" required>
                    
                </div>
                
                <div class="inputbox">
                    <span class="details">Phone</span>
                    <input type="text" pattern="[789][0-9]{9}" name="Phone" placeholder="Enter the number" required>
    
                    
                </div>
                
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$" name="Email" placeholder="Enter the mail-id"required>
    
                </div>
                <div class="inputbox">
                    <span class="details">Address</span>
                    <input type="text" name="Address" pattern="[a-zA-Z]{3,}" placeholder="Enter the address" required>
                    
                </div>
                <div class="inputbox">
                    <span class="details">Disease</span>
                    <input type="text" name="Disease" pattern="[a-zA-Z]{3,}" placeholder="Enter the disease" required>
                    
                </div>
            </div>
            <div class="button">
                <input type="submit" name="Submit" value="Submit">
                <input type="submit" name="cancel" onclick="location.href='receptionist_home.php'" value="cancel">
            </div>
            
        </form>
    </div>
    <?php
	
	if (isset($_POST['Submit']))
	{
		
		
		$P_name=$_POST['P_name'];
		$Phone=$_POST['Phone'];
        $Email=$_POST['Email'];
        $Address=$_POST['Address'];
        $Disease=$_POST['Disease'];
			
		$sql="INSERT into  patient(P_name,Phone,Email,Address,Disease) values ('$P_name','$Phone','$Email','$Address','$Disease') ";
			
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