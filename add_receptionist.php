<?php include "db_config.php";?>
<?php 
session_start();
$User_id=$_GET['User_id'];

$s = "SELECT * FROM user_registration WHERE User_id='$User_id'";
$result = mysqli_query($conn,$s);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist details</title>
    <link rel="stylesheet" href="styledoctor.css">
</head>
<body>
    <div class="container">
        <div class="title"><h1>Receptionist Details</h1></div>
        <form action="#" method="post">
            <div class="userdetails">
                <div class="inputbox">
                    <span class="details">Receptionist_id</span>
                    <input type="text" name="Recep_id" placeholder=" " value="<?php echo $row['User_id']?>"required readonly>
                </div>
                <div class="inputbox">
                    <span class="details">Receptionist Name</span>
                    <input type="text" name="Recep_name" pattern="[a-zA-Z]{3,}" placeholder=" " value="<?php echo $row['Username']?>" required readonly>
                </div>
                
                <div class="inputbox">
                    <span class="details">Phone</span>
                    <input type="text" name="Phone" pattern="[789][0-9]{9}" placeholder=" Enter the number"required>
                </div>
                
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$" name="Email" placeholder=" " value="<?php echo $row['Email']?>"required readonly>
                </div>
                <div class="inputbox">
                    <span class="details">Address</span>
                    <input type="text" name="Address" pattern="[a-zA-Z]{3,}" placeholder=" Enter the address"required>
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
		
		
		$Recep_id=$_POST['Recep_id'];
		$Recep_name=$_POST['Recep_name'];
        $Email=$_POST['Email'];
        $Phone=$_POST['Phone'];
        $Address=$_POST['Address'];
			
		$sql="INSERT into receptionist(Recep_id,Recep_name,Email,Phone,Address) values ('$Recep_id','$Recep_name','$Email','$Phone','$Address')";
			
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