<?php
$con = mysqli_connect("localhost","root","","dbshop");

$query = "SELECT * FROM tbl_product";
$result = mysqli_query($con,$query);


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
    <select>
        <option hidden>Select any Product</option>
      
            <?php
            foreach($result as $row){
                echo "<option>$row[name]</option>";

            }
            
            ?>



   
    </select>
</body>
</html>