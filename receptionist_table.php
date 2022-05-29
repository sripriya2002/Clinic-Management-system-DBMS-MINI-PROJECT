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
    <body>

    <div class="container">
    <div class="col-lg-12">
    <br><br>
    <h1 class="text-warning text-center" > RECEPTIONIST DETAILS </h1>
    <br>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
    <tr class="bg-dark text-white text-center">
 
    <th> Recep_id </th>
    <th> Recep_name </th>
    <th> Email</th>
    <th> Phone</th>
    
    <th> Address</th>
    
    <th> Update</th>

    </tr >

    <?php

 
        $sql="SELECT *FROM receptionist";

        $query = mysqli_query($conn,$sql);

        while($res = mysqli_fetch_array($query)){
?>
        <tr class="text-center">
            <td> <?php echo $res['Recep_id'];  ?> </td>
            <td> <?php echo $res['Recep_name'];  ?> </td>
            <td> <?php echo $res['Email'];  ?> </td>
            <td> <?php echo $res['Phone'];  ?> </td>
            <td> <?php echo $res['Address'];  ?> </td>
            <td> <button class="btn-primary btn"> <a href="update_recep.php?Recep_id=<?php echo $res['Recep_id']; ?>" class="text-white"> Update </a> </button> </td>
             

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