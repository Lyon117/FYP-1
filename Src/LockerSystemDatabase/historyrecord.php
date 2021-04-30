<?php
session_start();
if(isset($_SESSION["loggedin"]) != true) {
    header('Location: login.php');
    exit;
} else {
    $servername = "localhost";
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    $dbname = "LOCKER_SYSTEM";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM HISTORY_RECORD";
    $result = mysqli_query($conn, $sql);
}
?>
<html>
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
              <h2>History Record System</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

<body>
  
    <div class="container">
        
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>User Registration</h2>
            </div>
            </div>
          </div>
          
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student ID</th>
                    <th>Locker ID</th>
                    <th>Borrow Time</th>
                    <th>Return Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['ID'] . '</td>';
                        echo '<td>' . $row['STUDENT_ID'] . '</td>';
                        echo '<td>' . $row['LOCKER_ID'] . '</td>';
                        echo '<td>' . $row['BORROW_TIME'] . '</td>';
                        echo '<td>' . $row['RETURN_TIME'] . '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
