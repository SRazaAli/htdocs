<?php
include("connection.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book YOur Appointment</title>
</head>
<body>
    <form  method="post">
        <input type="text" placeholder="Enter Your Name" name="txtname"><br><br>
        <input type="date" name="date">
        <br><br>
        <select name="time">
            
            <option hidden>Select Your Time</option>
            <option value="9-11">9 - 11</option>
            <option value="11-1">11 - 1</option>
            <option value="1-3">1 - 3</option>
            <option value="3-5">3 - 5</option>
            <option value="5-7">5 - 7</option>
        </select>
        <br><br>
<select name="doctor">
<option>Select Doctor</option>
<?php
$query = "SELECT * FROM tbl_doctor";
$result = mysqli_query($con,$query);
foreach($result as $row){
echo "<option value='$row[d_id]'>$row[d_name]</option>";
}

?>
</select>
<br><br>
<input type="submit" value="Book appointment" name="btnappointment">

    </form>
    <?php
    if(isset($_POST['btnappointment'])){
        $name = $_POST['txtname'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $doctor = $_POST['doctor'];
        $query = "INSERT INTO tbl_appointment (p_name,p_date,p_time,doctor_id) VALUES('$name','$date','$time',$doctor)";
$result = mysqli_query($con,$query);
    }
    
    
    ?>
</body>
</html>