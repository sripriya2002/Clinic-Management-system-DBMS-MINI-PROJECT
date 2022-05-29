<?php include "db_config.php";?>
<?php



$Rec_no = $_GET['Rec_no'];

$q = " DELETE FROM `medical_record` WHERE Rec_no = $Rec_no ";

mysqli_query($conn, $q);

header('location:display_record.php');

?>