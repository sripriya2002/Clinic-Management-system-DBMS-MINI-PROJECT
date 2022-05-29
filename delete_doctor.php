<?php include "db_config.php";?>
<?php



$Doctor_id = $_GET['Doctor_id'];

$q = " DELETE FROM `doctor` WHERE Doctor_id = $Doctor_id ";

mysqli_query($conn, $q);

header('location:view_doctor.php');

?>