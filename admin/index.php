<?php 
session_start();
// Check if the user is not logged in
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
  header('Location: ../sign-up.php'); // Redirect to the sign-up page
  exit; // Prevent further execution
}

$title = "Welcome";

include('includes/header.php');

?>

<div class="container-fluid">
  <div class="row mt-4">
    <div class="col-md-12">
    <video class="embed-responsive-16by9" width="100%" src="assets/video/dashboard_video.mp4" type="video/mp4" autoplay muted preload="auto" controls controlsList="nodownload"></video>
    </div>
    
  </div>
</div>




<?php include('includes/footer.php') ?>