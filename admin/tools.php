<?php 

// Set page title
$title = "Tools";

include('includes/header.php');

?>

<div class="container-fluid g-sm-6 my-3">
  <!-- Software Row -->
  <div class="row mt-4 gx-6 gy-2">
    <div class="col-md-12 story-description">
      <h2 class="sanders-primary bebas-neue">Tools</h2>
      <h3 class="bebas-neue mt-6">Software</h3>

      <div class="row software-description">
        <!-- First Column -->
        <div class="col-12 col-md-3">
          <div class="software-image-container">
            <a href="https://app.followupboss.com/login" target="_blank">
              <img class="mt-3" src="assets/img/followupboss.svg" width="100%">
            </a>
          </div>
          <p class="mt-3">Follow Up Boss Login</p>
          <p class="software-description-sub">Click image to login</p>

        </div>

        <!-- Second Column -->
        <div class="col-12 col-md-3">
          <div class="software-image-container">
            <a href="https://my.brokermint.com/users/sign_in#/" target="_blank">
              <img class="mt-3" src="assets/img/brokermint.png" width="35%">
            </a>
          </div>
          <p class="mt-3">BrokerMint Login</p>
          <p class="software-description-sub">Click image to login</p>
        </div>

        <!-- Third Column -->
        <div class="col-12 col-md-3">
          <div class="software-image-container">
            <a href="https://connect.hifello.com/auth/login" target="_blank">
              <img class="mt-3" src="assets/img/fello-logo.svg" width="100%">
            </a>
          </div>
          <p class="mt-3">Fello Login</p>
          <p class="software-description-sub">Click image to login</p>
        </div>

        <!-- Fourth Column -->
        <div class="col-12 col-md-3">
          <div class="software-image-container">
            <a href="https://calendar.google.com/calendar/u/0?cid=cmVhbHR5b25lZWRnZS5jb21fcjNxM2NybzRzcHEwcWtkamZtODkwcWM3OWdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ"
              target="_blank">
              <img class="mt-3" src="assets/img/gcalendar.svg" width="25%">
            </a>
          </div>
          <p class="mt-3">Add Sanders Training Calendar</p>
          <p class="software-description-sub">Click image to login</p>
        </div>

      </div>
    </div>
  </div>

  <!-- Software Row 2 -->

  <div class="row mt-4 gx-6 gy-2">
    <div class="col-12 col-md-3 story-description software-description">
      <div class="software-image-container">
        <a href="https://referrals.opcity.com/login" target="_blank">
          <img class="mt-3" src="assets/img/readyconnect.svg" width="100%">
        </a>
      </div>
      <p class="mt-3">Ready Connect Concierge</p>
      <p class="software-description-sub">Click image to login</p>
    </div>
  </div>

  <!-- Agent Portal Row -->
  <div class="row mt-4 gx-6 gy-2">
    <div class="col-md-12 story-description">
      <h3 class="bebas-neue">Agent Portals</h3>

      <div class="row mt-4 software-description">
        <!-- First Column -->
        <div class="col-12 col-md-3">
          <div id="accessportal" class="image-container">
            <img class="img-fluid" src="assets/img/accessportal.png" width="200px" alt="Access Portal Logo">
            <a href="assets/img/accessportal.png" target="_blank" class="download-icon" download>
              <i class="material-icons opacity-10">download</i> <!-- Material icon -->
            </a></div>
          <p class="mt-3">Access Portal</p>
          <p class="software-description-sub">Click image to login</p>
        </div>

        <!-- Second Column -->
        <div class="col-12 col-md-3">
          <div id="ascendportal" class="image-container">
            <img class="img-fluid" src="assets/img/ascendportal.png" width="200px" alt="Ascend Portal Logo">
            <a href="assets/img/ascendportal.png" target="_blank" class="download-icon" download>
              <i class="material-icons opacity-10">download</i> <!-- Material icon -->
            </a></div>
          <p class="mt-3">Ascend Portal</p>
          <p class="software-description-sub">Click image to login</p>
        </div>

        <!-- Third Column -->
        <div class="col-12 col-md-3">
          <div id="ambassadorportal" class="image-container">
            <img class="img-fluid" src="assets/img/ambassadorportal.png" width="200px" alt="Ambassador Portal Logo">
            <a href="assets/img/ambassadorportal.png" target="_blank" class="download-icon" download>
              <i class="material-icons opacity-10">download</i> <!-- Material icon -->
            </a></div>
          <p class="mt-3">Ambassador Portal</p>
          <p class="software-description-sub">Click Image to Login</p>
        </div>

      </div>
    </div>
  </div>
</div>

<script>
  // Agent Portals Logins Script
  // Mapping IDs to URLs
  const idToUrlMap = {
    'accessportal': 'https://drive.google.com/drive/u/0/folders/1tisuwzDrzuLxAT69UJnVFNZJQIYjcwqk',
    'ascendportal': 'https://drive.google.com/drive/u/0/folders/1lnMwCjhsyUTZ6xPNRbD_AgMTorC9g3nC',
    'ambassadorportal': 'https://drive.google.com/drive/u/0/folders/1WOhz-KVuubuaE7BfQmWYSAk5V2jhZTc9'
  };
  Object.entries(idToUrlMap).forEach(([id, url]) => {
    const element = document.getElementById(id);
    if (element) {
      element.addEventListener('click', function(event) {
        if (!event.target.closest('download-icon')) {
          window.open(url, '_blank');
        }
      });
    }
  });
</script>

<?php include('includes/footer.php') ?>