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
    

    
    <h1>Login for user</h1>
    <div style="display: flex; justify-content: center;">
        <form method="post">
            <input type="text" name="name" placeholder="Enter your Name"><br><br>
            <input type="text" name="user_name" placeholder="Enter your username"><br><br>
            <input type="text" name="user_password" placeholder="Enter your password"><br><br>
            <input type="submit" value="login" name="btn-login">
        </form>
    </div>

    <?php
    
    include("connection.php");
    if($con){
        if(isset($_POST['btn-login'])){
            $name = $_POST['name'];
            $user_name = $_POST['user_name'];
            $user_password = $_POST['user_password'];

            $query ="SELECT * FROM `tbl_system` WHERE username='$user_name' AND password='$user_password'";

            $result = mysqli_query($con,$query);
            $loop = mysqli_num_rows($result);

            if($loop){
                $check_status = mysqli_fetch_assoc($result);

                if($check_status['status'] == 1){
                    echo "<script>
                            alert('User was successfully logged in');
                    </script>";
                }
                else if($check_status['status'] == 0){
                    echo "<script>
                            alert('user is deactivated by the admin');
                    </script>";
                }
                else{
                    echo "<script>
                    alert('incorrect credentials');
            </script>";
                }
            }


        }
        
        
    }    
    ?>
    
    
</body>
</html>