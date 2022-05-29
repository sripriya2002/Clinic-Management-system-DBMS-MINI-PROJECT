<?php include "db_config.php";?>

<!DOCTYPE html>
<html>
    <head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

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
    <script>
        function myFunction(){
            var result=confirm("Are you sure you want to delete?");
            if(result==true){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
    <body>
    <button class="back"><i class="fa-solid fa-backward"></i><a href="admin_home.php">Back</a></button> <br>
    <div class="container">
    <div class="col-lg-12">
    <br><br>
    <h1 class="text-warning text-center" > Display Table Data </h1>
    <br>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
    <tr class="bg-dark text-white text-center">
 
    <th> Doctor_id </th>
    <th> Doctor_name </th>
    <th> Specialization</th>
    <th> Phone</th>
    <th> Email</th>
    <th> Address</th>
    
    <th> Delete</th>

    </tr >

    <?php

 
        $sql="SELECT *FROM doctor";

        $query = mysqli_query($conn,$sql);

        while($res = mysqli_fetch_array($query)){
?>
        <tr class="text-center">
            <td> <?php echo $res['Doctor_id'];  ?> </td>
            <td> <?php echo $res['Doctor_name'];  ?> </td>
            <td> <?php echo $res['Specialization'];  ?> </td>
            <td> <?php echo $res['Phone'];  ?> </td>
            <td> <?php echo $res['Email'];  ?> </td>
            <td> <?php echo $res['Address'];  ?> </td>
            <td> <button class="btn-danger btn"> <a href="delete_doctor.php?Doctor_id=<?php echo $res['Doctor_id']; ?>" onclick="return myFunction()" class="text-white"> Delete </a>  </button> </td>
             

            </tr>

    <?php 
    }
    ?>
 
    </table>  

    </div>
    </div>

    <script type="text/javascript">
 
    $(document).ready(function(){
    $('#tabledata').DataTable();
    }) 
 
 </script>


</body>
</html>