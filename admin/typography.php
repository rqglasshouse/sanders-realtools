<?php

// Set page title
$title = "Typography";

include('includes/header.php');

?>

<div class="container-fluid g-sm-6 my-3 colors-typography">

  <h2 class="bebas-neue sanders-primary">Typography</h2>
  <h3 class="bebas-neue mt-3 mb-6">Font</h3>


  <div class="row">

    <!-- Font Example -->

    <div class="col-auto font-display-standard">
      <h3 class="mb-0 font-title-span heading-inline baskers">Baskerville</h3> <!-- mb-0 removes the default bottom margin from the heading -->
    </div>
    <div class="col-auto">
      <span class="badge badge-small bg-gray">WEB</span> <!-- bg-pink is a custom class for background color -->
    </div>

  </div>

  <!-- Standard Style Row -->
  <div class="row">
  <!-- Alphabet & Numbers -->
  <div class="col-sm-6 font-display-standard">
    <h2 class="display-3 baskers">Aa</h2>
    <p class="baskers">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
    <p class="baskers">abcdefghijklmnopqrstuvwxyz</p>
    <p class="baskers">1234567890(,;:!$&*)</p>
  </div>

  <!-- Font Name & Description -->
  <div class="col-sm-4 d-flex align-items-center fontdescrip-bord font-display">
    <div class="p-3">
      <h5 class="inter inter-400">Baskervville</h5>
      <p class="baskers">Weight:</p>
      <p class="baskers">Style: <strong>Normal</strong></p>
    </div>
  </div>
</div>


  <!-- Italic Style Row -->
  <div class="row mt-4">
    <div class="col-sm-6 font-display-italic">


      <h2 class="display-3 baskers">Aa</h2>

      <p class=" baskers">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
      <p class=" baskers">abcdefghijklmnopqrstuvwxyz</p>
      <p class="baskers">1234567890(,;:!$&*)</p>
    </div>

    <!-- Font Name & Description -->
    <div class="col-sm-4 d-flex align-items-center fontdescrip-bord font-display">
      <div class="p-3">
        <h5 class="inter inter-400">Baskervville</h5>
        <p class=" inter">Weight:</p>
        <p class=" inter">Style: <strong>Italic</strong></p>
      </div>
    </div>
  </div>

  <!-- Usage Rows -->

  <div class="row mt-3">
    <div class="col-auto">
      <p class="code-label">HTML</p>
      <div class="d-flex align-items-center" id="baskerHref">

        <code>&lt;link href="https://fonts.googleapis.com/css?family=Baskervville" rel="stylesheet" type="text/css"&gt;</code>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-auto">
      <p class="code-label">CSS</p>
      <div class="d-flex align-items-center" id="baskerHref">

        <code>font-family: "Baskervville", sans-serif;</code>
      </div>
    </div>
  </div>



  <!-- Inter Rows -->
  <div class="row mt-6">

    <!-- Font Example -->

    <div class="col-auto font-display-standard">
      <h3 class="mb-0 font-title-span heading-inline baskers">Inter</h3> <!-- mb-0 removes the default bottom margin from the heading -->
    </div>
    <div class="col-auto">
      <span class="badge badge-small bg-gray">WEB</span> <!-- bg-pink is a custom class for background color -->
    </div>

  </div>

  <!-- Standard Style Row -->
  <div class="row">
    <div class="col-sm-6 font-display-standard">


      <h2 class="display-3 inter-tight inter-tight-100 inter-100">Aa</h2>

      <p class=" inter-tight inter-tight-100 inter-100">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
      <p class=" inter-tight inter-tight-100 inter-100">abcdefghijklmnopqrstuvwxyz</p>
      <p class="inter-tight inter-tight-100 inter-100">1234567890(,;:!$&*)</p>
    </div>

    <!-- Font Name & Description -->
    <div class="col-sm-4 d-flex align-items-center fontdescrip-bord font-display">
      <div class="p-3">
        <h5 class="inter inter-400">Inter</h5>
        <p class=" inter inter-400">Weight: 100</p>
        <p class=" inter inter-400">Style: <strong>Normal</strong></p>
      </div>
    </div>
  </div>

  <!-- Italic Style Row -->
  <div class="row mt-4">
    <div class="col-sm-6  font-display-standard">


      <h2 class="display-3 inter">Aa</h2>

      <p class=" inter-200">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
      <p class=" inter-200">abcdefghijklmnopqrstuvwxyz</p>
      <p class="inter-200">1234567890(,;:!$&*)</p>
    </div>

    <!-- Font Name & Description -->
    <div class="col-sm-4 d-flex align-items-center fontdescrip-bord font-display">
      <div class="p-3">
        <h5 class="inter inter-400">Inter</h5>
        <p class=" baskers">Weight: 200</p>
        <p class=" baskers">Style: <strong>Normal</strong></p>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-sm-6 font-display-standard">


      <h2 class="display-3 inter inter-400">Aa</h2>

      <p class=" inter-400">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
      <p class=" inter-400">abcdefghijklmnopqrstuvwxyz</p>
      <p class="inter-400">1234567890(,;:!$&*)</p>
    </div>

    <!-- Font Name & Description -->
    <div class="col-sm-4 d-flex align-items-center fontdescrip-bord font-display">
      <div class="p-3">
        <h5 class="inter inter-400">Inter</h5>
        <p class=" baskers">Weight: 400</p>
        <p class=" baskers">Style: <strong>Normal</strong></p>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-sm-6 font-display-standard">


      <h2 class="display-3 inter inter-800">Aa</h2>

      <p class=" inter-800">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
      <p class=" inter-800">abcdefghijklmnopqrstuvwxyz</p>
      <p class="inter-800">1234567890(,;:!$&*)</p>
    </div>

    <!-- Font Name & Description -->
    <div class="col-sm-4 d-flex align-items-center fontdescrip-bord font-display">
      <div class="p-3">
        <h5 class="inter inter-400">Inter</h5>
        <p class=" baskers">Weight: 400</p>
        <p class=" baskers">Style: <strong>Normal</strong></p>
      </div>
    </div>
  </div>

  <!-- Usage Rows -->

  <div class="row mt-3">
    <div class="col-auto">
      <p class="code-label">HTML</p>
      <div class="d-flex align-items-center" id="baskerHref">

        <code>&lt;link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Inter:wght@100;200;400;800&display=swap" rel="stylesheet"&gt;</code>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-auto">
      <p class="code-label">CSS</p>
      <div class="d-flex align-items-center" id="baskerHref">

        <code>font-family: "Inter", sans-serif;</code>
      </div>
    </div>
  </div>


  <!-- Bebas Neue Row -->

  <div class="row mt-4">
    <div class="col-sm-6 font-display-standard">


      <h2 class="display-3 bebas-neue">Aa</h2>

      <p class=" bebas-neue">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
      <p class=" bebas-neue">abcdefghijklmnopqrstuvwxyz</p>
      <p class="bebas-neue">1234567890(,;:!$&*)</p>
    </div>

    <!-- Font Name & Description -->
    <div class="col-sm-4 d-flex align-items-center fontdescrip-bord font-display">
      <div class="p-3">
        <h5 class="inter inter-400">Bebas Neue</h5>
        <p class=" baskers">Weight: 400</p>
        <p class=" baskers">Style: <strong>Normal</strong></p>
      </div>
    </div>
  </div>

  <!-- Usage Rows -->
  <div class="row mt-3">
    <div class="col-auto">
      <p class="code-label">HTML</p>
      <div class="d-flex align-items-center" id="baskerHref">

        <code>&lt;link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet" type="text/css"&gt;</code>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-auto">
      <p class="code-label">CSS</p>
      <div class="d-flex align-items-center" id="baskerHref">

        <code>font-family: "Bebas Neue", sans-serif;</code>
      </div>
    </div>
  </div>



  <!-- Styles Row -->

  <h3 class="bebas-neue mt-6 mb-6">Styles</h3>

  <div class="row mt-4">
    <div class="col-md-3 font-display-standard">


      <h2 class="style-label bebas-neue">H1</h2>

      <p class="baskers">Text Color: #000000</p>
      <p class="baskers">Background: #FFFFFF</p>
      <p class="baskers">Font: Bebas Neue</p>
      <p class="baskers">Size: 90px</p>
      <p class="baskers">Line Height: 0.8</p>
      <p class="baskers">Spacing: 1px</p>
    </div>

    <!-- Font Name & Description -->
    <div class="col-md-3 d-flex align-items-center text-bordering">
      <div class="p-3">
        <h5 class="main-headline">Main<br>Headline</h5>

      </div>
    </div>
  </div>

  <!-- SUBHEADING -->

  <div class="row mt-4">
    <div class="col-md-3 font-display-standard">


      <h2 class="style-label bebas-neue">H2</h2>

      <p class="baskers">Text Color: #000000</p>
      <p class="baskers">Background: #FFFFFF</p>
      <p class="baskers">Font: Bebas Neue</p>
      <p class="baskers">Size: 90px</p>
      <p class="baskers">Line Height: 0.8</p>
      <p class="baskers">Spacing: 5px</p>
    </div>

    <!-- Font Name & Description -->
    <div class="col-md-3 d-flex align-items-center text-bordering">
      <div class="p-3">
        <h5 class="subheading">Subheading</h5>

      </div>
    </div>
  </div>


  <!-- Serif Subheading -->

  <div class="row mt-4">
    <div class="col-md-3 font-display-standard">


      <h2 class="style-label bebas-neue">H3</h2>

      <p class="baskers">Text Color: #000000</p>
      <p class="baskers">Background: #FFFFFF</p>
      <p class="baskers">Font: Baskervville</p>
      <p class="baskers">Size: 32px</p>
      <p class="baskers">Line Height: 1</p>
      <p class="baskers">Spacing: 1px</p>
    </div>

    <!-- Font Name & Description -->
    <div class="col-md-3 d-flex align-items-center text-bordering">
      <div class="p-3">
        <h5 class="serif-subheading">Serif Subheading</h5>

      </div>
    </div>
  </div>

  <!-- Form Heading -->

  <div class="row mt-4">
    <div class="col-md-3 font-display-standard">


      <h2 class="style-label bebas-neue">H4</h2>

      <p class="baskers">Text Color: #000000</p>
      <p class="baskers">Background: #FFFFFF</p>
      <p class="baskers">Font: Bebas Neue</p>
      <p class="baskers">Size: 28px</p>
      <p class="baskers">Line Height: 1</p>
    </div>

    <!-- Font Name & Description -->
    <div class="col-md-3 d-flex align-items-center text-bordering">
      <div class="p-3">
        <h5 class="form-heading">Form Heading</h5>

      </div>
    </div>
  </div>

  <!-- Label -->

  <div class="row mt-4">
    <div class="col-md-3 font-display-standard">


      <h2 class="style-label bebas-neue">H5</h2>

      <p class="baskers">Text Color: #000000</p>
      <p class="baskers">Background: #FFFFFF</p>
      <p class="baskers">Font: Bebas Neue</p>
      <p class="baskers">Size: 18px</p>
      <p class="baskers">Line Height: 1</p>
      <p class="baskers">Spacing: 3px</p>
    </div>

    <!-- Font Name & Description -->
    <div class="col-md-3 d-flex align-items-center text-bordering">
      <div class="p-3">
        <h5 class="label-head">Label</h5>

      </div>
    </div>
  </div>

  <!-- BODY LARGE -->

  <div class="row mt-4">
    <div class="col-md-3 font-display-standard">


      <h2 class="style-label bebas-neue">BODY LARGE</h2>

      <p class="baskers">Text Color: #000000</p>
      <p class="baskers">Background: #FFFFFF</p>
      <p class="baskers">Font: Baskervville</p>
      <p class="baskers">Size: 24px</p>
      <p class="baskers">Line Height: 1</p>

    </div>

    <!-- Font Name & Description -->
    <div class="col-md-3 d-flex align-items-center text-bordering">
      <div class="p-3">
        <h5 class="body-large">Single Sentence</h5>

      </div>
    </div>
  </div>

  <!-- BODY -->

  <div class="row mt-4">
    <div class="col-md-3 font-display-standard">


      <h2 class="style-label bebas-neue">BODY</h2>

      <p class="baskers">Text Color: #000000</p>
      <p class="baskers">Background: #FFFFFF</p>
      <p class="baskers">Font: Inter</p>
      <p class="baskers">Size: 16px</p>
      <p class="baskers">Line Height: 1.4</p>

    </div>

    <!-- Font Name & Description -->
    <div class="col-md-3 d-flex align-items-center text-bordering">
      <div class="p-3">
        <h5 class="body-head">A longer block of text about many things. A paragraph consists of 2 or more sentences. </h5>

      </div>
    </div>
  </div>


  <!-- CAption -->

  <div class="row mt-4">
    <div class="col-md-3 font-display-standard">


      <h2 class="style-label bebas-neue">CAPTION</h2>

      <p class="baskers">Text Color: #000000</p>
      <p class="baskers">Background: #FFFFFF</p>
      <p class="baskers">Font: Inter</p>
      <p class="baskers">Size: 16px</p>
      <p class="baskers">Line Height: 1.4</p>

    </div>

    <!-- Font Name & Description -->
    <div class="col-md-3 d-flex align-items-center text-bordering">
      <div class="p-3">
        <h5 class="caption-head">Descriptive text for an image or icon</h5>

      </div>
    </div>
  </div>



  <!-- Unique Type Treatments Row -->

  <h4 class="display-6 bebas-neue mt-6 mb-3">Unique Type Treatments</h4>
  <p class="baskers">Two-tone headlines are an important part of the Sanders visual language. Use this style only on H1 type. Either half of the statement or the last word should be gold. You can optionally underline the statement with a 32px stroke to mimic the "foundation" element of the A icon in the primary logo. Spacing between the underline and the type should be equal the the height of the underline.</p>

  <div class="row mt-6 software-description">
    <div class="col-md-3 font-display-standard p-4">
      <div>
        <a href="assets/img/mostimportantmessagenow.png" download>
          <img src="assets/img/mostimportantmessagenow.png" width="75%" class="">
          <p class="pt-3 text-primary">Black-Gold-Headline</p>
        </a>
      </div>
    </div>


    <!-- Font Name & Description -->
    <div class="col-md-3 p-4">
      <div CLASS="bg-charcoal p-4">
        <a href="assets/img/onedirectionthreeways.png" download>
          <img src="assets/img/onedirectionthreeways.png" width="75%" class="">
        </a>
      </DIV>
      <p class="pt-3 text-primary">White-Gold-Headline</p>
    </div>


  </div>

  <div class="row mt-6">
    <div class="col-md-4 font-display-standard">
      <div>
        <a href="assets/img/planyournextmove.png" download>
          <img src="assets/img/planyournextmove.png" width="75%" class="">
        </a>
      </div>
    </div>


    <p class="baskers pt-3">You have the option to underline H2 type with a gold line sized at 4px (or similar size outside of web). The underline should be at spacing 16px (or corresponding ratio outside of web) from the type and should only be colored in Real Gold.</p>


  </div>





</div>















<?php include('includes/footer.php') ?>