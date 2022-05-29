<?php include "db_config.php";?>
<?php



$Recep_id = $_GET['Recep_id'];

$q = " DELETE FROM `receptionist` WHERE Recep_id = $Recep_id ";

mysqli_query($conn, $q);

header('location:view_receptionist.php');

?>