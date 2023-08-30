<?php
  include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

            <form method="post">
                <input type="text" placeholder="Enter your name" id="user_name"><br><br>
                <input type="text" placeholder="Enter your age"  id="user_age"><br><br>
                <input type="text" placeholder="Enter your salary" id="user_salary"><br><br>
                <input type="button" value="Submit" id="btn-register">
            </form>

            <table border=4>
                <thead >
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th colspan="2">Options</th>
                </thead>
                <tbody id="tbody"></tbody>
            </table>

<script src="jquery-3.7.0.js"></script>
<script>

    //basic syntax of jQuery
    $(document).ready(function(){

        //functions are defined here
        function insert(){
            var user_name = $("#user_name").val();
            var user_age = $("#user_age").val();
            var user_salary = $("#user_salary").val();
            $.ajax({
                url:"insert.php",
                type:"post",
                data:{userName:user_name,userAge:user_age,userSalary:user_salary},
                success:function(data){
                    $("#user_name").val("");
                    $("#user_age").val("");
                    $("#user_salary").val("");
                }
            });
        }
        function fetchData(){
            $.ajax({
                    url:"fetch.php",
                    type:"post",
                    success:function(data){
                        $("#tbody").html(data);
                    }
                });
        }
    
        //functions are used here
        $("#btn-register").on("click",function(){
                insert();
                fetchData();

        });

        $(document).on("click","#btn-delete",function(){

            var userId = $(this).attr("rowId");
            alert(userId);
            
            $.ajax({
                url:"delete.php",
                type:"post",
                data:{user_id:userId},
                success:function(data){
                        fetchData();
                }
            });        

            });
            
        });
    
</script>
</body>
</html>