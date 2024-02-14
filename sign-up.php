<?php 

session_start();
include('includes/header.php');







?>

<body class="">
  


  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center  flex-column">
              <div class=" h-100 m-3 px-7 border-radius-lg" style="background-image: url('assets/signup-background.webp'); background-size: cover; background-position: center;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            
            <?php if(isset($_SESSION['message'])) 
            
            { ?>

            
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>

              <?php 
              unset($_SESSION['message']);
            }

              ?>

            <div class="card card-plain">
            
                <div class="card-header">
                  
                <img class="mb-6 mt-3 img-fluid" src="admin/assets/img/sanderstransparent.png" width="60%">   
                  
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form action="functions/authcode.php" method="POST" form">
                    <div class="input-group input-group-outline mb-3">
                      
                      <input type="text" placeholder="Name" name="name" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      
                      <input placeholder="Email" type="email" name="email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      
                      <input placeholder="Password" type="password" name="password" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      
                      <input placeholder="Confirm Password" type="password" name="cpassword" class="form-control">
                    </div>
                    
                    <div class="text-center">
                      <button type="submit" name="register_btn" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="index.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <?php include('includes/footer.php') ?>
</body>

</html>