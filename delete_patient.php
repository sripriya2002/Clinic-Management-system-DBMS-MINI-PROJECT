<?php include "db_config.php";?>
<?php



$P_id = $_GET['P_id'];

$q = " DELETE FROM `patient` WHERE P_id = $P_id ";

mysqli_query($conn, $q);

header('location:display.php');

?>