<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Crud Operation</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>


    <div class="container my-5">
        <button class="btn btn-primary"><a href="addUser.php" class="text-light">Add User</a></button>


        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    include 'connection.php';
                    $query = "SELECT * FROM `crud_tbl`";
                    $result = mysqli_query($conn,$query);

                    if($result){
                        // $row = mysqli_fetch_assoc($result);  for fetching 1 data
                        // echo $row['Name'];
                        //as we have multiple data so we will use a loop

                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['ID'];
                            $name = $row['Name'];
                            $email = $row['E-mail'];
                            $mobile = $row['Mobile'];
                            $password = $row['Password'];

                            echo "<tr>
                            <th>$id</th>
                            <td>$name</td>
                            <td>$email</td>
                            <td>$mobile</td>
                            <td>$password</td>
                            <td><button class='btn btn-success'><a class='text-light' href='update.php'>Update</a></button>
                            <button class='btn btn-danger'><a class='text-light' href='delete.php?delId = $id'>Delete</a></button>
                    </td>
                        </tr>";
                        }
                    }
                ?>


                <!-- <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody> -->
            </tbody>
        </table>

    </div>


</body>

</html>