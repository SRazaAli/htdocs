<?php

   include("connection.php");

    if($connection){
        $userName = $_POST['userName'];
        $userAge = $_POST['userAge'];
        $userSalary = $_POST['userSalary'];

        $query = "INSERT INTO `tbl_dbms` (`Name`, `age`, `Salary`) VALUES ('$userName', $userAge, $userSalary);";

        mysqli_query($connection,$query);
    }

?>