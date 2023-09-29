<?php
   class layout{
       public function headers($conf){
           ?>
           <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../blog/css/bootstrap.min.css">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="../../blog/css/style.css">

    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul class="nav-bar">
                <h1 class ="logo">Life Unscripted</h1>
                <input type="checkbox" id="check">
                <span class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Start Blogging</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contactpage.html">Contact</a></li>
                    <label for="check" class="close-menu"><i class="fas fa-times"></i> </label>
                </span>
                <span class="topnav">
                  <input type="checkbox" id="check">
                  <input type="text" placeholder="Search..">
                </span>
                <label for="check" class="open-menu"><i class="fas fa-bars"></i> </label>
                <a href="logout.html" class="btn btn-dark rounded-0 py-3 px-5">LOGOUT</a>

            </ul>
        </nav>
    </header>
    

    <?php
         }
         public function footer($conf){
             ?>
             <footer class="footer-20192">
        <div class="site-section">
          <div class="container">
  
            <div class="cta d-block d-md-flex align-items-center px-5">
              <div>
                <h2 class="mb-0">Ready for your next blog?</h2>
                <h3 class="text-dark">Let's get started!</h3>
              </div>
              <div class="ml-auto">
                <a href="login.html" class="btn btn-dark rounded-0 py-3 px-5">LOGIN</a>
              </div>
            </div>
            <div class="row">
  
              <div class="col-sm">
                <a href="#" class="footer-logo">LIFE UNSCRIPTED</a>
                <p class="copyright">
                  <small>&copy; 2019</small>
                </p>
              </div>
              <div class="col-sm">
                <h3>Aouthors</h3>
                <ul class="list-unstyled links">
                  <li><a href="#">Your Aritcles</a></li>
                  <li><a href="#">View Articles</a></li>
                </ul>
              </div>
              <div class="col-sm">
                <h3>Company</h3>
                <ul class="list-unstyled links">
                  <li><a href="about.html">About us</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                </ul>
              </div>
              <div class="col-sm">
                <h3>Further Information</h3>
                <ul class="list-unstyled links">
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h3>Follow us</h3>
                <ul class="list-unstyled social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-medium"></span></a></li>
                  <li><a href="#"><span class="icon-paper-plane"></span></a></li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
      </footer>

<?php
         }}
         ?>

             