<?php
    include("connection.php");
    $userId = $_GET['id'];
    $query = "UPDATE `tbl_system` SET status= 0 WHERE id=$userId";
    $result = mysqli_query($con,$query);
    
    if($result){
        header("location:fetch.php");
    }
    
?>