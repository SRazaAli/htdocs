<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Image Submisson form</h1>
    <form action="" method="post" enctype="multipart/form-data">

        <label for="">Enter your name</label><br><br>
        <input type="text" name="user_name" id="" placeholder="name"><br><br>
        <input type="file" name="image_name" id="" ><br><br>
        <input type="submit" value="Submit" name="btn-upload">

        
    </form>
    <?php
    
    $server = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbname = "image_db";

    $conn = mysqli_connect($server,$userName,$userPassword,$dbname);
    if($conn){


        echo "connection to the db was successful";

        if(isset($_POST['btn-upload'])){
            $user_name = $_POST['user_name'];
            // variables for image
            $image_name = $_FILES['image_name']['name'];
            $image_tmp_name = $_FILES['image_name']['tmp_name'];
            $image_size = $_FILES['image_name']['size'];
            $image_type = $_FILES['image_name']['type'];
            //creating a folder of username
            $folder = "images/".$user_name;

            if(file_exists($user_name)){
                echo "File with the name ".$user_name." already exists";
            }
            else{
                //moving file into the folder
                mkdir($folder,0777,true);
                    $folder = $folder."/".$image_name;

                    move_uploaded_file($image_tmp_name,$folder);

                //inserting file name in db
                $query = "INSERT INTO `image_tbl` (`user_name`, `image_name`) VALUES ( '$user_name', '$image_name');";

                $result = mysqli_query($conn,$query);
                if($result){
                    echo "Image was uploaded successfully :)";
                }
                else{
                    echo "Error! ".$conn;
                }
            }

        }
        
        
    }
    
    ?>
    
    
</body>
</html>