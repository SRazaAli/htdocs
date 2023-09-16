<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Makaan - Real Estate HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

 

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


  
</head>
<body >



    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Login as Admin</h3>
      
                  <form action="" method="post">

                  <input type="text" placeholder="Enter username" name="admin_username" ><br><br>
                  <input type="text" placeholder="Enter password" name="admin_password" ><br><br>
                  <input type="button" name="btn-submit" class="btn btn-success" value="Login">
                  </form>

                  <?php
                  
                  include("connection.php");
                  if($con){
                      if(isset($_POST['btn-submit'])){
                          $admin_username = $_POST['admin_username'];
                          $admin_password = $_POST['admin_password'];
              
                          $query ="SELECT * FROM `admin` WHERE username='$admin_username' AND password='$admin_password'";
              
                          $result = mysqli_query($con,$query);
                          if($result){
                            echo "<script> window.location.href=admin-portal.php</script>";
                          }
                        }
                      }
                  // INSERT INTO `admin` (`id`, `username`, `password`) VALUES ('1', 'admin', 'admin123');
                  
                  ?>
      
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>