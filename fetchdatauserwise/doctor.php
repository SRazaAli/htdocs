<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
<input type="text" placeholder="Enter Your Username" name="txtusername" autocomplete="off"><br><br>
<input type="password" placeholder="Enter Your Password" name="txtpass" autocomplete="off"><br><br>
<input type="submit" value="Login" name="btnlogin">

    </form>
    <?php
    if(isset($_POST['btnlogin'])){
        $username = $_POST['txtusername'];
        $pass = $_POST['txtpass'];
        $query = "SELECT * FROM tbl_doctor WHERE d_username='$username' and d_password='$pass'";
        // $result = mysqli_query($con,$query);
        if(mysqli_num_rows(mysqli_query($con,$query))){

            $fetch_id = "SELECT d_id FROM tbl_doctor WHERE d_username='$username'";
            $result = mysqli_query($con,$query);
            $row = mysqli_fetch_array($result);

            $_SESSION['myuser']=$row['d_id'];

            header("location:fetchuser.php");




            
        }
    }
    
    ?>
</body>
</html>