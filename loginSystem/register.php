<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    

    <h1>Registration form</h1>
    <div style="display: flex; justify-content: center;">
        <form method="post">
            <input type="text" name="name" placeholder="Enter your Name"><br><br>
            <input type="text" name="user_name" placeholder="Enter your username"><br><br>
            <input type="text" name="user_password" placeholder="Enter your password"><br><br>
            <input type="submit" value="submit" name="btn-submit">
        </form>
    
    </div>

    <?php
    include("connection.php");

    if($con){
        if(isset($_POST['btn-submit'])){
            $name = $_POST['name'];
            $user_name = $_POST['user_name'];
            $user_password = $_POST['user_password'];

            $query = "INSERT INTO `tbl_system` (`name`, `username`, `password`) VALUES ('$name', '$user_name', '$user_password');";
            
            $result = mysqli_query($con,$query);

            if($result){
                echo "Registration successful";
            }
            else{
                echo "Error ".$con;
            }
        }
    }
    // 

    ?>
    

</body>
</html>