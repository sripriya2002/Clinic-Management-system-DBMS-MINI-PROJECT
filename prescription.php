<?php include "db_config.php";?>
<?php 
session_start();

$P_id=$_GET['P_id'];

$s = "SELECT * FROM patient WHERE P_id='$P_id'";
$result = mysqli_query($conn,$s);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
<button class="back"><i class="fa-solid fa-backward"></i><a href="display.php">Back</a></button> <br>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">ADD PRESCRIPTION</h1>
 </div><br>

 <label> Patient ID: </label>
 <input type="number" name="P_id" placeholder=" " value="<?php echo $row['P_id']?>"class="form-control" readonly> <br>

 <label> Patient Name: </label>
 <input type="text" name="P_name" pattern="[a-zA-Z]{3,}" placeholder=" " value="<?php echo $row['P_name']?>" class="form-control"> <br>

 <label> Disease: </label>
 <input type="text" name="Disease" pattern="[a-zA-Z]{3,}" placeholder=" " value="<?php echo $row['Disease']?>" class="form-control"> <br>

 <label> Prescription: </label>
 <input type="text" name="Prescription" pattern="[a-zA-Z]{3,}" class="form-control" required> <br>

 <label> Doctor Id: </label>
 <input type="number" name="Doctor_id" class="form-control" required>  <br>

 <button class="btn btn-success" type="submit" name="Submit"> Submit </button><br>
 <button class="btn btn-danger" type="submit" name="cancel" onclick="location.href='display.php'" value="cancel"> cancel </button><br>

 </div>
 </form>
 </div>
 <?php
	if (isset($_POST['Submit']))
	{
		
		$P_id=$_GET['P_id'];
		$P_name=$_POST['P_name'];
		$Disease=$_POST['Disease'];
        $Prescription=$_POST['Prescription'];
        $Doctor_id=$_POST['Doctor_id'];
			
		$sql="INSERT into medical_record(P_id,P_name,Disease,Prescription,Doctor_id) values ('$P_id','$P_name','$Disease','$Prescription','$Doctor_id')";
			
		if(mysqli_query($conn,$sql))
		{
			echo "<h1>success</h1>";
            
		}
		else 
		{
			echo "fail";
		}  
	}
	
?>
	
    </body>
</html>