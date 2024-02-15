<nav class="navbar navbar-expand-lg blur py-3">
  <div class="container-fluid">
    
    <button class="navbar-toggler shadow-none ms-2" id="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#sidenav-main" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="admin/index.php">
            <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
            Dashboard
          </a>
        </li>
        

        <?php

        if (isset($_SESSION['auth'])) {
        ?>
          <li class="nav-item">
            <a class="nav-link me-2" href="logout.php">
              <i class="fas fa-key opacity-6 text-dark me-1"></i>
              Logout
            </a>
          </li>
        <?php
        } 
        else 
        {
          ?>
<!-- Hidden Sign up
<li class="nav-item">
          <a class="nav-link me-2" href="sign-up.php">
            <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
            Sign Up
          </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link me-2" href="index.php">
              <i class="fas fa-key opacity-6 text-dark me-1"></i>
              Sign In
            </a>
          </li>
          <?php
        }

        ?>


       
      </ul>
      
    </div>
  </div>
</nav>