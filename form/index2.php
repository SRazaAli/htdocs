<?php
    //Inserting data in database
    $server = "localhost";
    $username = "root";
    $passwrod = "";
    $dbname = "std_data";
    $conn = mysqli_connect($server,$username,$passwrod,$dbname);

    if($conn == true){
        echo "Connection to the database was successful <br>";
    }
    else{
        echo "Error connecting to db due to : ".mysqli_connect_error();
    }

    if(isset($_POST['save'])){
        $name = $_POST['std_name'];
        $age = $_POST['std_age'];
        $mobile = $_POST['std_mobile'];
        $gender = $_POST['std_gender'];
        $email = $_POST['std_email'];
        $feedback = $_POST['std_feedback'];

        $query = " INSERT INTO `std_info` (`Name`, `age`, `mobile no`, `gender`, `email`, `feedback`) VALUES ('$name', '$age', '$mobile', '$gender', '$email', '$feedback');";

        $result = mysqli_query($conn,$query);
        if($result == true){
            echo "data inserted successfuly";
        }
        else{
            echo "There was an error in inserting data";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1 >Student data form</h1>
        <form method="post">
            <input type="text" name="std_name" id="" placeholder="name">
            <br>
            <br>
            <input type="text" name="std_age" id="" placeholder="age">
            <br>
            <br>
            <input type="text" name="std_mobile" id="" placeholder="mobile no">
            <br>
            <br>
            <input type="text" name="std_gender" id="" placeholder="gender">
            <br>
            <br>
            <input type="text" name="std_email" id="" placeholder="email">
            <br>
            <br>
            <input type="text" name="std_feedback" id="" placeholder="feedback">
            <br>
            <br>
            <input type="submit" value="Submit" name="save">
            <br>
        </form>


       
  
</body>
</html>