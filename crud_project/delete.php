<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delete Table</title>
  <!-- Gogle font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Borel&family=Nunito&family=Poppins&display=swap"
    rel="stylesheet">
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    * {
      font-family: 'Nunito', sans-serif;
    }

    .dash {
      background-color: #FAFBFC;
      height: 100vh;

    }

    .borel {
      font-family: 'Borel', cursive;
      font-weight: bold;

    }

    .list {
      height: 30px;
      font-size: 10px;
      font-weight: bold;
    }
    .no-underline {
      text-decoration: none;
    }

    .icon {
      width: 20px;
      margin-right: 10px;
    }

    .position {
      position: relative;
      top: 3px;
      font-size: 15px;
    }

    .search-bar {
      border-bottom: 1px solid #50A769;
      color: black;
      height: 90px;
    }

    .search-text {
      color: #BCBCBC;
      padding: 33px 35px;
    }

    .account {
      width: 167px;
    height: 51px;
    background-color: #E5F2FF;
    margin-top: auto;
    margin-bottom: auto;

    }

    .pfp {
      margin-top: auto;
      margin-bottom: auto;
      width: 35px;
      height: 35px;
      object-fit: cover;
      border-radius: 50%;
      position: relative;
      top: 7px;
    left: 9px;
    }

    .account-text {
      font-size: 15px;
    position: relative;
    bottom: 20px;
    left: 17px;
    }

   

    .bg-green {
      background-color: #50A769;
    }

    .text-green {
      color: #50A769;

    }

    .bg-foam {
      background-color: #CEEDE1;
    }
    .table-style{
      font-size: 11px;
    }
    .btn-text{
      font-size: 9px;
      
    }
  </style>

</head>

<body>


  <div class="container-fluid">
    <div class="row">
      <!-- dash board start -->
      <div class="col-2 dash">
        <h1 class="text-center fs-3 text-success my-5 borel">Dashboard</h1>
        <a class="text-dark no-underline " href="newData.php">
            <div class="list mt-5"> <img src="img/newEdit.png" class="icon" alt=""><span class="position">Add User</span>
            </div>
          </a>
  
          <a class="text-dark no-underline" href="index.php">
            <div class="list mt-3"><img src="img/newbook.png" class="icon" alt=""><span class="position ">Retrive
                Data</span>
            </div>
          </a>

        <a class="text-dark no-underline" href="update.php">
          <div class="list mt-3"> <img src="img/newHome.png" class="icon" alt=""><span class="position ">Update
              Data</span>
          </div>
        </a>

        <a class="text-dark no-underline" href="delete.php">
          <div class="list mt-3"> <img src="img/newdelete.png" class="icon" alt=""><span class="position ">Delete
              User</span>
          </div>
        </a>

      </div>
      <!-- dash board end -->
      <!-- Header start -->
      <div class="col-10 search-bar">
        <div class="row">
          <div class="col-6 search-text fs-5">Search for decleration</div>
          <div class="col-6 d-flex justify-content-end">
            <div class="account  me-3"> <img class="pfp" src="img/pfp.jpg" alt="">
              <p class="account-text text-center">Syed Raza Ali</p>
            </div>
          </div>
        </div>
        <!-- Overview start -->
        <p class="fs-2 my-3 mx-2">Overview</p>
        <div class="row">

          <div class="col-md-3 ">
            <div class="bg-green text-dark text-left ">
              <p class="fw-bold fs-6 pt-2 mx-2 ">Total No. Of Entries</p>
              <p class="ps-2 fs-3 text-light">100</p>
            </div>
          </div>

          <div class="col-md-3 ">
            <div class="bg-foam text-dark text-left ">
              <p class="fw-bold fs-6 pt-2 mx-2 ">New Declearations</p>
              <p class="ps-2 fs-3 text-green">100</p>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="bg-foam text-dark text-left ">
              <p class="fw-bold fs-6 pt-2 mx-2 ">Created Declerations</p>
              <p class="ps-2 fs-3 text-green">100</p>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="bg-foam text-dark text-left ">
              <p class="fw-bold fs-6 pt-2 mx-2 ">Tickets Created</p>
              <p class="ps-2 fs-3 text-green">100</p>
            </div>
          </div>

          <!-- Table start -->
          <div class="row">
            <div class="col">
              <h5 class="my-3 mx-2 fs-2">Delete php</h5>
              
                <table class="table table-hover  my-4 mx-4">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">E-mail</th>
                      <th scope="col">Grade</th>
                      <th scope="col">Password</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                    <?php
                    include("connection.php");
                    $query = "SELECT * FROM `user_data`";
                    $result =  mysqli_query($conn,$query);

                    if($result == true){
                      while($row = mysqli_fetch_assoc($result)){
                        $user_id = $row['user_id'];
                        $user_name = $row['user_name'];
                        $user_email = $row['user_email'];
                        $user_grade = $row['user_grade'];
                        $user_password = $row['user_password'];

                        echo "
                        <th scope='row'>$user_id</th>
                        <td>$user_name</td>
                        <td>$user_email</td>
                        <td>$user_grade</td>
                        <td>$user_password</td>
                        <td><a href='deleteLogic.php?deleteId=$user_id'><button type='button' class='btn btn-danger fs-7'>Delete</button></a></td>
                      </tr>
                        ";
                        
                        
                      }
                    }

?>
                     
                   
                  </tbody>
                </table>

            </div>
          </div>
          <!-- Table end -->

        </div>
      </div>
      <!-- Overview end -->

     
    <!-- Header end -->
  </div>




</body>

</html>