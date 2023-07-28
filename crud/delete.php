<?php


        include("connection.php");
        
        if(isset($_GET['delId'])){
            $id = $_GET['delId'];
            
            $query = "DELETE FROM `crud_tbl` WHERE `ID`='$id'";
            $result = mysqli_query($conn,$query);
            if($result){
                echo "Data Deleted Successfully ;)";
            }
          
            
        }


?>