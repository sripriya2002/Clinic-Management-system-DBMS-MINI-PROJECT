<?php include "db_config.php";?>
<?php 
session_start();
$Recep_id=$_GET['Recep_id'];

$s = "SELECT * FROM receptionist WHERE Recep_id='$Recep_id'";
$result = mysqli_query($conn,$s);
$row = mysqli_fetch_array($result);
?>

<?php
 if(isset($_POST['done'])){

 $Recep_id = $_GET['Recep_id'];
 $Recep_name = $_POST['Recep_name'];
 $Phone = $_POST['Phone'];
 $Email = $_POST['Email'];
 $Address = $_POST['Address'];
 $q = " update receptionist set  Recep_name='$Recep_name', Phone='$Phone',Email='$Email',Address='$Address' where Recep_id=$Recep_id ";

 $query = mysqli_query($conn,$q);

 header('location:receptionist_table.php');
 }

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
 <h1 class="text-white text-center">  Update Detail</h1>
 </div><br>

 <label> Receptionist ID: </label>
 <input type="number" name="Recep_id" placeholder=" " value="<?php echo $row['Recep_id']?>"class="form-control" readonly> <br>

 <label> Receptionist Name: </label>
 <input type="text" name="Recep_name" placeholder=" " value="<?php echo $row['Recep_name']?>"class="form-control"> <br>

 <label> Phone: </label>
 <input type="phone" name="Phone" placeholder=" " pattern="[789][0-9]{9}" value="<?php echo $row['Phone']?>"class="form-control"> <br>

 <label> Email: </label>
 <input type="email" name="Email" placeholder=" " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$" value="<?php echo $row['Email']?>" class="form-control"> <br>

 <label> Address: </label>
 <input type="text" name="Address" pattern="[a-zA-Z]{3,}" placeholder=" " value="<?php echo $row['Address']?>"class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 <button class="btn btn-danger" type="submit" > <a href="receptionist_table.php">Cancel</a> </button><br>
 </div>
 </form>
 </div>
</body>
</html>