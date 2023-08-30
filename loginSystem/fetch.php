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
    

    <h1>All Records</h1>
 <div style="display: flex; justify-content: center;">
    <table border="4">
        <thead>
            <th>S.no</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status</th>
            <th colspan="2">Options</th>
            <th></th>
        </thead>
        <tbody>
            <?php
            include("connection.php");
            if($con){

                $query = "SELECT * FROM `tbl_system`";
                $result = mysqli_query($con,$query);
                $record = "";
                if($result){
                    foreach($result as $row){
                        echo "<tr>";
                        echo "<td>$row[id]</td>";
                        echo "<td>$row[name]</td>";
                        echo "<td>$row[username]</td>";
                        echo "<td>$row[password]</td>";
                        echo "<td>$row[status]</td>";
                        echo "<td> 
                        <a href='active.php?id=$row[id]'>
                        <button>Activate</button>
                        </a>
                        <a href='deactive.php?id=$row[id]'>
                        <button>Deactivate</button>
                        </a>";
                        }
                }
                
            }
            ?>
        </tbody>
    </table>
 </div>
    
</body>
</html>