<?php

            include("connection.php");
            $id = $_GET['deleteId'];
            $query = "DELETE FROM `user_data` WHERE `user_id` = $id";
            $result = mysqli_query($conn,$query);

            if($result == true){
                header("location:delete.php");
            }
?>

