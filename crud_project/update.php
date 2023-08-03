<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update table</title>
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
<?php
$user_id = $_GET['user_id'];
$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_grade = $_GET['user_grade'];
$user_password = $_GET['user_password'];
?>
          <!-- Table start -->
          <div class="row">
            <div class="col">
              <h5 class="my-3 mx-2 fs-2">Update Data</h5>
              
              <form class="my-4 mx-4" method="post">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >ID</label>
                    <input disabled  type="text" class=" form-control py-2" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo"$user_id" ?>">
                  </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control py-2" id="exampleInputEmail1" aria-describedby="emailHelp" name="updated_name" value="<?php echo "$user_name"  ?>">
                  </div>
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">E-mail</label>
                  <input type="email" class="form-control py-2" id="exampleInputEmail1" aria-describedby="emailHelp" name="updated_email" value="<?php echo "$user_email"  ?>">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Grade</label>
                  <input type="text" class="form-control py-2" id="exampleInputEmail1" aria-describedby="emailHelp" name="updated_grade" value="<?php echo "$user_grade"  ?>">
                 
                </div>
                
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="text" class="form-control py-2" name="updated_password" id="exampleInputPassword1" value="<?php echo "$user_password"  ?>">
                </div>
                
                <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-success " name="btn-update">Update</button>
        
        
        <?php  
include("connection.php");

  if(isset($_POST['btn-update'])){
  $updated_id = $user_id;
  $updated_name = $_POST['updated_name'];
  $updated_email= $_POST['updated_email'];
  $updated_grade = $_POST['updated_grade'];
  $updated_password = $_POST['updated_password'];
  
  
  $query = "UPDATE `user_data` SET `user_name`='$updated_name',`user_email`='$updated_email',`user_grade`='$updated_grade',`user_password`='$updated_password' WHERE `user_id`='$updated_id'";
  
  
  $result = mysqli_query($conn,$query);
  if($result == true){
      // header("location:index.php");
      echo "<script>
      window.location.href='index.php';
      </script>";
  }
  else{
      echo "Error: " . mysqli_error($conn);
  }
}
?>


                </div>
              </form>

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