<?php include "db_config.php";?>
<?php

 

 if(isset($_POST['done'])){

 $Rec_no = $_GET['Rec_no'];
 $P_id = $_POST['P_id'];
 $P_name = $_POST['P_name'];
 $Disease = $_POST['Disease'];
 $Doctor_id = $_POST['Doctor_id'];
 $q = " update medical_record set Rec_no='$Rec_no',P_id='$P_id', P_name='$P_name', Disease='$Disease',Doctor_id='$Doctor_id'where Rec_no=$Rec_no ";

 $query = mysqli_query($conn,$q);

 header('location:display_record.php');
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
 <h1 class="text-white text-center">  Update Record</h1>
 </div><br>

 <label> Record number: </label>
 <input type="number" name="Rec_no" class="form-control"> <br>

 <label> Patient ID: </label>
 <input type="number" name="P_id" class="form-control"> <br>

 <label> Patient Name: </label>
 <input type="text" name="P_name" class="form-control"> <br>

 <label> Disease: </label>
 <input type="text" name="Disease" class="form-control"> <br>

 <label> Prescription: </label>
 <input type="text" name="Prescription" class="form-control"> <br>

 <label> Doctor ID: </label>
 <input type="number" name="Doctor_id" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 <button class="btn btn-danger" type="submit" name="cancel" onclick="location.href='login.php'" value="cancel"> cancel </button><br>

 </div>
 </form>
 </div>
</body>
</html>