<!-- used to delete the record from dbms -->
<?php


    include("connection.php");
    $user_Id = $_POST['user_id'];
    $query = "DELETE FROM `tbl_dbms` WHERE ID=$user_Id;"
    mysqli_query($connection,$query);

   

?>