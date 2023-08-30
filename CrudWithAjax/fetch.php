<!-- used to fetch and print data -->
<?php
include("connection.php");
$query = "SELECT * FROM `tbl_dbms`";
$result = mysqli_query($connection,$query);
$record= "";
    
foreach($result as $row){
    
   echo "
   <tr> <td>$row[ID]</td>
    <td>$row[Name]</td>
    <td>$row[age]</td>
    <td>$row[Salary]</td>
    <td><button id='btn-delete' rowId='$row[ID]' >Delete</button></td>
    <td><button id='btn-update' rowId='$row[ID]' >Update</button></td>
    </tr>";

}


?>