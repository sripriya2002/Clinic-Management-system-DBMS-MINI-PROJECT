<?php include "db_config.php";?>
<?php 
session_start();
$Doctor_id=$_GET['Doctor_id'];

$s = "SELECT * FROM doctor WHERE Doctor_id='$Doctor_id'";
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
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Update Doctor </h1>
 </div><br>

 <label> Doctor ID: </label>
 <input type="number" name="Doctor_id" placeholder=" " value="<?php echo $row['Doctor_id']?>" class="form-control"  readonly> <br>

 <label> Doctor Name: </label>
 <input type="text" name="Doctor_name" pattern="[a-zA-Z]{3,}" placeholder=" " value="<?php echo $row['Doctor_name']?>" class="form-control"><br>

 <label> Phone: </label>
 <input type="phone" name="Phone" placeholder=" " pattern="[789][0-9]{9}" value="<?php echo $row['Phone']?>" class="form-control"> <br>

 <label> Email: </label>
 <input type="email" name="Email" placeholder=" " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$" value="<?php echo $row['Email']?>" class="form-control"> <br>

 <label> Address: </label>
 <input type="text" name="Address" pattern="[a-zA-Z]{3,}" placeholder=" " value="<?php echo $row['Address']?>"class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 <button class="btn btn-danger" type="submit" > <a href="doctor_table.php">Cancel</a> </button><br>

 </div>
 </form>
 </div>
 <?php

 

 if(isset($_POST['done'])){

  $Doctor_id=$_GET['Doctor_id'];
 $Doctor_name = $_POST['Doctor_name'];
 $Phone = $_POST['Phone'];
 $Email = $_POST['Email'];
 $Address = $_POST['Address'];
 $q = " update doctor set  Doctor_name='$Doctor_name', Phone='$Phone',Email='$Email',Address='$Address' where Doctor_id=$Doctor_id  ";

 $query = mysqli_query($conn,$q);

 header('location:doctor_table.php');
 }

?>
</body>
</html>