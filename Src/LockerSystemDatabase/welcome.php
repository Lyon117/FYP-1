
<?php
session_start();
if(isset($_SESSION["loggedin"]) != true) {
    header('Location: login.php');
    exit;
}
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Gp3_8 Database</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
  <body>
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="login.php"><h2>LOG <em>OUT</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="welcome.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item"><a class="nav-link" href="usersregistration.php">USER REGISTRATION</a></li>

                <li class="nav-item active"><a class="nav-link" href="historyrecord.php">HISTORY RECORD</a></li>

                <li class="nav-item"><a class="nav-link" href="demo.php">DEMOSTRATION</a></li>

            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-1-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Welcome! Administrator!</h4>
              <h2>Gp3_8 Locker System Database</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>

    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Overview of the project</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Function of this  website</h4>
              <p>Locker systems are popular in Hong Kong and are used in a variety of situations. The purpose of this project is to provide a secured locker system based on RFID technology that can be implemented in the community, this system allows authorized users only to access the system and interact with lockers.</p>
              <p>This website can help administrator to track all relevant record from users who are using our locker system.It include user registration information, locker borrow & return time, demonstration of functionality, export, searching function...etc.</p>
            </div>
          </div>
        </div>
      </div>

          <!-- Bootstrap core JavaScript -->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


          <!-- Additional Scripts -->
          <script src="assets/js/custom.js"></script>
          <script src="assets/js/owl.js"></script>
        </body>

      </html>
