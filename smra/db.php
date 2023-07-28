<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container{
            display: flex;
            justify-content: center;
        }
        form input{
            margin: 10px;
            padding:5px;
        }
       
    </style>
    <title>Document</title>
</head>
<body>

   <div class="container">
    <div class="child">
        <h2>Employee Data Form</h2>
        <form action="" method="post">
            <input type="text" name="emp_id" id="emp_id" placeholder="Enter your id"><br>
            <input type="text" name="emp_name" id="emp_name" placeholder="Enter your name"><br>
            <input type="text" name="emp_designation" id="emp_designation"
             placeholder="Enter yoyr designation"><br>
            <input type="text" name="emp_salary" id="emp_salary" placeholder="Enter your salary"><br>
            <input type="button" value="Submit" name="save">
        </form>    


        <?php
            $connection = mysqli_connect("localhost","root","","employee_name");
            if($connection == true){
                echo "Connection to database was successful :)";
            }
            else{
                echo "Connection to database wasn't successful :(";

            }
            
            if(isset($_POST['save'])){
                $id = $_POST['emp_id'];
                $name = $_POST['emp_name'];
                $designation = $_POST['emp_designation'];
                $salary = $_POST['emp_salary'];
                $query = "INSERT INTO `emp_data` (`ID`, `Name`, `Designation`, `Salary`) VALUES ($id, $name, $designation, $salary);";

                $result = mysqli_query($connection,$query);
                if($result == true){
                    echo "Data inserted successfully :)";
                }
            }
          
            // else{
            //     echo "There was an error in insering data :(";
            // }

            
        ?>
        
        
        
    </div>
   </div>
        
</body>
</html>