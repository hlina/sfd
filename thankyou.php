<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Note there is no responsive meta tag here -->

    <link rel="icon" href="../../favicon.ico">

    <title>Stephen Family Dentistry</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="home.css" rel="stylesheet">

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.html">Stephen Family Dentistry</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="about.html">About Us</a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Our Services<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="bonding.html">Bonding/White Fillings</a></li>
                <li><a href="bridges.html">Bridges</a></li>
                <li><a href="crown.html">Crowns</a></li>
                <li><a href="mini.html">Mini Implant</a></li>
                <li><a href="dental.html">Dental Implant</a></li>
                <li><a href="veneers.html">Veneers</a></li>
                <li><a href="hygiene.html">Hygiene/Periodontal Health</a></li>
                <li><a href="teeth.html">Teeth Whitening</a></li>
                <li><a href="zoom.html">ZOOM! Whitening</a></li>
                <li><a href="dentures.html">Dentures/Partial Dentures</a></li>
                <li><a href="extractions.html">Extractions</a></li>
                <li><a href="braces.html">Adult Braces</a></li>
                <li><a href="rootcanal.html">Root Canal (Endodontics)</a></li>
                <li><a href="lengthening.html">Crown Lengthening</a></li>
                <li><a href="postop.html">Post Op Instructions</a></li>
                <li><a href="bone.html">Bone Grafting</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Our Practice <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="practice.html">Practice Information</a></li>
                <li><a href="financialagree.pdf">Form Financial Agreement</a></li>
                <li><a href="InformationandHistoryback.pdf">Form Medical Information 2</a></li>
                <li><a href="InformationandHistoryfront.pdf">Form Medical Information 1</a></li>
                <li><a href="privacysign.pdf">HIPPA--Privacy</a></li>
                <li><a href="contact.html">Request an Appointment</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Our Technology <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="digital.html">Digital X-Ray</a></li>
                <li><a href="itraoral.html">Itraoral Camera</a></li>
                <li><a href="rotary.html">Rotary Endodontics</a></li>
              </ul>
            </li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Additional Section<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="billing.html">Our Billing Companies</a></li>
                <li><a href="coverage.html">Dental Coverage Plan</a></li>
                <li><a href="referral.html">Referral Program</a></li>
              </ul>
            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <script type="text/javascript">
      var slideimages = new Array() // create new array to preload images
      slideimages[0] = new Image() // create new instance of image object
      slideimages[0].src = "1.jpg" // set image object src property to an image's src, preloading that image in the process
      slideimages[1] = new Image()
      slideimages[1].src = "2.jpg"
      slideimages[2] = new Image()
      slideimages[2].src = "3.jpg"
      </script>

      <img src="1.jpg" id="slide" width="950" height="400" />

      <script type="text/javascript">
      //variable that will increment through the images
      var step=0
      function slideit(){
       //if browser does not support the image object, exit.
       if (!document.images)
        return
       document.getElementById('slide').src = slideimages[step].src
       if (step<2)
        step++
       else
        step=0
       //call function "slideit()" every 2.5 seconds
       setTimeout("slideit()",2500)
      }
      slideit()
      </script>

      <div class="page-header">
        <h1>Our Services</h1>
      </div>
      <p class="lead">
Thank you for Contacting Us.</p>
    </div>

    <footer class="footer">
      <div class="bottom-nav">
        <div class = "links">
          <li class = "bottom-links"><a href="contact.html">Contact Us</a></li>
          <li class = "bottom-links"><a href="smile.html">Smile Gallery</a></li>
          <li class = "bottom-links"><a href="links.html">Links</a></li>
          <li class = "bottom-links"><a href="FAQ.html">FAQ</a></li>
        </div>
      </div>
    </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
