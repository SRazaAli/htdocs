<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>



    <div class="container my-5">
        <h1>Enter data in form </h1>
       <form method="post">
        <div class="mb-3">
            <label class="form-label">Enter your name</label>
            <input type="name" class="form-control" name="user_name" placeholder="Name" autocomplete="off">
        </div>

        <div class="mb-3">
            <label class="form-label">Enter your Email</label>
            <input type="email" class="form-control" name="user_email" placeholder="E-mail" autocomplete="off">
        </div>

        <div class="mb-3">
            <label class="form-label">Enter your mobile number</label>
            <input type="number" class="form-control" name="user_mobile" placeholder="Mobile number" autocomplete="off">
        </div>

        <div class="mb-3">
            <labelclass="form-label">Enter your Password</label>
                <input type="text" class="form-control" name="user_password" placeholder="Password" autocomplete="off">
        </div>

        <div>
            <button type="submit" class="btn btn-primary my-3" name="save">Submit</button>
        </div>
       </form>
    </div>


    <?php

        include 'connection.php';
    if($conn == true){
        // echo "Connection to the database was successful ;)";
        if(isset($_POST['save'])){
            $name = $_POST['user_name'];
            $email = $_POST['user_email'];
            $mobile = $_POST['user_mobile'];
            $password = $_POST['user_password'];
    
            $query = "INSERT INTO `crud_tbl` (`Name`, `E-mail`, `Mobile`, `Password`) VALUES ('$name', '$email', '$mobile', '$password');";
    
            $result = mysqli_query($conn,$query);
            if($result == true){
                // echo "data was successfully inserted in dabatbase";
                header("location:index.php");
            }
        }
    }
 
      
   
      
      ?>

</body>

</html>