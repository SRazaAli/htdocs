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
    <table border="5">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Appointment Date</th>
            <th>Apointment Time</th>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM tbl_appointment WHERE doctor_id=$_SESSION[myuser]";
            $result = mysqli_query($con,$query);

            foreach($result as $row){
                echo "<tr>";
                echo "<td>$row[p_id]</td>";
                echo "<td>$row[p_name]</td>";
                echo "<td>$row[p_date]</td>";
                echo "<td>$row[p_time]</td>";
                echo "</tr>";

            }

            
            ?>
        </tbody>
    </table>
</body>
</html>