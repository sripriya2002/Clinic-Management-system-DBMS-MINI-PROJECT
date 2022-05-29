<?php include "db_config.php";?>
<?php 
session_start();
error_reporting(0);
$P_id=$_GET['P_id'];

$s = "SELECT * FROM patient WHERE P_id='$P_id'";
$result = mysqli_query($conn,$s);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill details</title>
    <link rel="stylesheet" href="styledoctor.css">
</head>
<body>
    <div class="container">
        <div class="title"><h1>Bill Details</h1></div>
        <form action="#" method="POST">
            <div class="userdetails">
                
                <div class="inputbox">
                    <span class="details">Patient_id</span>
                    
                    <input type="number" name="P_id" placeholder=" " value="<?php echo $row['P_id']?>"required readonly>
                </div>
                <div class="inputbox">
                    <span class="details">Patient_name</span>
                    
                    <input type="text" name="P_name" pattern="[a-zA-Z]{3,}" placeholder=" " value="<?php echo $row['P_name']?>"required>
                </div>
                
                

                
                <div class="inputbox">
                    <span class="details">Fee</span>
                    <input type="number" name="fee" placeholder="Enter the Amount" required>
                    
                </div>
                <div class="inputbox">
                    <span class="details">Receptionist Id</span>
                    <input type="number" name="Recep_id" placeholder="Enter the id" required>
                    
                </div>
                
                
            </div>
            <div class="button">
                <input type="submit" name="Submit" value="Submit">
                <input type="submit" name="cancel" onclick="location.href='display_patient_recep.php'" value="cancel">
                <button class="menu-button"><a href="display_bill.php">VIEW BILL DETAILS</a></button>
            </div>
        </form>
    </div>
     
    <?php
    if (isset($_POST['Submit']))
	{
		$P_id=$_GET['P_id'];
		$P_name=$_POST['P_name'];
		
        $fee=$_POST['fee'];
        $Recep_id=$_POST['Recep_id'];
			
		$sql="INSERT into bill(P_id,P_name,fee,Recep_id) values ('$P_id','$P_name','$fee','$Recep_id')";
			
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