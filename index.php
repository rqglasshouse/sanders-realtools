<?php 
session_start();





include('includes/header.php');


?>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('assets/sign-in-background.webp');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <div class="border-radius-lg py-3 pe-1">
                <div class="row text-center p-3">
                    <img class="img-fluid" id="signin-logo" src="admin/assets/img/sanderstransparent.png">
                  </div>
                  <h4 class="text-primary font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                  <?php if(isset($_SESSION['message'])) 
            
            { ?>

            
            <div class="alert mt-3 alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>

              <?php 
              unset($_SESSION['message']);
            }

              ?>
                  
                </div>
              </div>
              <div class="card-body">
              <form action="functions/authcode.php" method="POST" form> 
                  <div class="input-group input-group-outline my-3">
                    
                    <input placeholder="Email" type="email" name="email" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    
                    <input placeholder="Password" type="password" name="password" class="form-control">
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" name="sign-in-btn" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                    Don't have an account?
                    <a href="sign-up.php" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
             
            </div>
            
          </div>
        </div>
      </footer>
    </div>
  </main>
 
 
  <?php include('includes/footer.php');?>