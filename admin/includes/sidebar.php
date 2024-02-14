<?php

$current_page = basename($_SERVER['REQUEST_URI']);

?>


<aside class="sidenav navbar navbar-vertical navbar-expand-xs fixed-start collapse  bg-gradient-dark" id="sidenav-main">
  
  <div class="p-3">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="index.php" target="_blank">

      <img src="assets/img/realtools.svg" height="400px">
    </a>
  </div>

  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">

      <li class="navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'index.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="index.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Home</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'story.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="story.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-icons">
              library_books
            </span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Story</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'tools.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="tools.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-symbols-outlined">construction</span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Tools</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'marketingassets.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="marketingassets.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-icons">
              collections
            </span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Marketing Assets</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'presentationbooks.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="presentationbooks.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-icons">
              menu_book
            </span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Presentation Books</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'guidelines.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="guidelines.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-icons">
              assignment
            </span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Guidelines</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'programlogos.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="programlogos.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-icons">
              image
            </span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Program Logos</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'colors.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="colors.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-icons">
              color_lens
            </span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Colors</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'typography.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="typography.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-icons">
              text_fields
            </span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Typography</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'iconography.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="iconography.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-icons">
              opacity
            </span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Iconography</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'graphicelements.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="graphicelements.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-icons">
              waterfall_chart
            </span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Graphic Elements</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'usageexamples.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="usageexamples.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-icons">
              data_usage
            </span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Usage Examples</span>
        </a>
      </li>

      <li class=" navbar-nav nav-item">
        <a class="<?php echo ($current_page == 'medialibrary.php') ? 'active bg-gradient-primary' : ''; ?>  nav-link text-white " href="medialibrary.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-icons">
              collections_bookmark
            </span>
          </div>
          <span class="bebas-primary nav-link-text ms-1">Media Library</span>
        </a>
      </li>



    </ul>
  </div>


</aside>