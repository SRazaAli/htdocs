<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin portal</title>
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Borel&family=Nunito&family=Poppins&display=swap"
        rel="stylesheet">

      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/bootstrap.min.css" rel="stylesheet">


      <!-- Template Stylesheet -->
      <link rel="stylesheet" href="css/admin-portal.css">
 
</head>
<body>
    

    <body>
        <div class="container-fluid">
            <div class="row">
              <!-- dash board start -->
              <div class="col-2 dash">
                <h1 class="text-center fs-3 text-success my-5 borel">Dashboard</h1>
        
                <a class="text-dark no-underline " href="newData.html">
                  <div class="list mt-5 active"> <img src="img/add-product.png" class="icon" alt=""><span class="position">Add Product</span>
                    </div>
                </a>
        
                <a class="text-dark no-underline" href="index.html">
                  <div class="list mt-3"><img src="img/view-product.png" class="icon" alt=""><span class="position ">Retrive Product</span>
                  </div>
                </a>
        
                <a class="text-dark no-underline" href="update.html">
                  <div class="list mt-3"> <img src="img/edit-product.png" class="icon" alt=""><span class="position ">Update Product</span>
                  </div>
                </a>
        
                <a class="text-dark no-underline" href="delete.html">
                  <div class="list mt-3"> <img src="img/delete-product.png" class="icon" alt=""><span class="position ">Delete Product</span>
                  </div>
                </a>
    
                <!-- options for tester start -->
                <a class="text-dark no-underline " href="newData.html">
                  <div class="list mt-5"> <img src="img/add-tester.png" class="icon" alt=""><span class="position">Add Tester</span>
                    </div>
                </a>
        
                <a class="text-dark no-underline" href="index.html">
                  <div class="list mt-3"><img src="img/view-tester.png" class="icon" alt=""><span class="position ">Retrive Tester</span>
                  </div>
                </a>
        
                <a class="text-dark no-underline" href="update.html">
                  <div class="list mt-3"> <img src="img/edit-tester.png" class="icon" alt=""><span class="position ">Update Tester</span>
                  </div>
                </a>
        
                <a class="text-dark no-underline" href="delete.html">
                  <div class="list mt-3"> <img src="img/delete-tester.png" class="icon" alt=""><span class="position ">Delete Tester</span>
                  </div>
                </a>
                <!-- options for tester end -->
                <!-- review options start  -->
                <a class="text-dark no-underline " href="newData.html">
                  <div class="list mt-5"> <img src="img/review-request.png" class="icon" alt=""><span class="position">Review Requests</span>
                  </div>
                </a>
                
                <a class="text-dark no-underline" href="index.html">
                  <div class="list my-3"><img src="img/review-user.png" class="icon" alt=""><span class="position ">Review Users</span>
                  </div>
                </a>
                <!-- review options end  -->
    
                <div class="d-flex justify-content-center ">
                  <button  class="btn btn-success btn-logout mt-4">Log Out</button>
                </div>
    
        
              </div>
              <!-- dash board end -->
              <!-- Header start -->
              <div class="col-10 search-bar">
                <div class="row">
                  <div class="col-6 search-text fs-5">Search for Products</div>
                  <div class="col-6 d-flex justify-content-end">
                    <div class="account  me-3"> <img class="pfp" src="img/team-1.jpg" alt="">
                      <p class="account-text text-center">Admin</p>
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
                      <h5 style="font-family: 'Nunito', sans-serif; color: black;" class="fw-normal my-3 mx-2 fs-2 ">All Entries</h5>
                      
                        <table class="table table-hover  my-4 mx-4 text-dark">
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
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                              <td>@mdo</td>
                              <td><button type="button" class="btn btn-outline-success fs-7">In review</button></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>Thornton</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>Thornton</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
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
</body>
</html>