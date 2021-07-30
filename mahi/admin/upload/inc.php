<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "coursita";

$connect = mysqli_connect($servername , $dbusername , $dbpassword , $dbname);

session_start();



if(isset($_GET['exit'])){
  session_unset();
  session_destroy();

    header("Location: /confrence/Back/loginadmin.php");

}

?>


<!doctype html>
<html lang="en">
<head>
  <title> coursita </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('/confrence/img.jpg');">


    <div>
<?php if(isset($_SESSION['admins'])){ ?>

  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: grey;">
  <a class="navbar-brand">Coursita Admins</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/confrence/Back/ViewCourse.php"><button class="btn btn-success">View Courses</button></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/confrence/Back/InsertCourse.php"><button class="btn btn-success">Insert Courses</button></a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link" href="/confrence/Back/ViewInstructors.php"><button class="btn btn-success">View Instructors</button></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/confrence/Back/InsertInstructor.php"><button class="btn btn-success">Insert Instructor</button></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/confrence/Back/ViewCategory.php"><button class="btn btn-success">View Categories</button></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/confrence/Back/InsertCategory.php"><button class="btn btn-success">Insert Categories</button></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

  <form method="GET">
<button name="exit" class="btn btn-danger">exit</button>
</form>
<?php } ?>
  </div>

</nav>









</body>
</html>