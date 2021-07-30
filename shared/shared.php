<?php
include "/xampp/htdocs/ultras/shared/connect.php";
session_start();
if(isset($_GET['adlogout'])){
    session_unset();
    session_destroy();

    header("location: /ultras/index.php");
}

if(isset($_GET['studentlogout'])){
    session_unset();
    session_destroy();

    header("location: /ultras/index.php");
}


if(isset($_GET['profile'])){

    header("location: /ultras/user/user.profile.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>ULTRAS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('/ultras/background.jpg');background-repeat: no-repeat;background-size:cover;">

<?php if(isset($_SESSION['student']) || isset($_SESSION['admin']) ){ ?>

<nav class="navbar navbar-light bg-dark">
  <form class="form-inline">

 <a href="/ultras/main.php" >   <button class="btn btn-info btn-sm mr-1" type="button">Home</button> </a>
 <a href="/ultras/courses/user/view.course.php" >   <button class="btn btn-info btn-sm mr-1" type="button">View Courses</button></a>
 <a href="/ultras/courses/user/apply.course.php"  >   <button class="btn btn-info btn-sm mr-1" type="button">Apply For Course Directly</button></a>
 <a href="/ultras/feedback/previous.feed.php" >  <button class="btn btn-info btn-sm mr-1" type="button">View Our Coustomers Feedback</button></a>
 <a href="/ultras/feedback/courseFeedback.php" >   <button class="btn btn-info btn-sm mr-1" type="button">Add Course Feedback</button></a>
 <a href="/ultras/feedback/feedback.php" >   <button class="btn btn-info btn-sm mr-1" type="button">Add Feedback</button></a>
 <a href="/ultras/feedback/CViewCourseFeedback.php" >   <button class="btn btn-info btn-sm mr-1" type="button">View Course Feedback</button></a>
 <a href="/ultras/mahi/admin/show_posts.php" >   <button class="btn btn-info btn-sm mr-1" type="button">View & Add Posts</button></a>
 <a href="/ultras/mahi/admin/show_admin_posts.php" >   <button class="btn btn-info btn-sm mr-1" type="button">News</button></a>
 <a href="/ultras/mahi/admin/about.us.php" >   <button class="btn btn-info btn-sm mr-1" type="button">About Us</button></a>

    <?php if(isset($_SESSION['admin'])){ ?>

   <div class="dropdown">
  <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Admin Choices
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/ultras/courses/admin/insert.course.php">Add New Course</a>
    <a class="dropdown-item" href="/ultras/courses/admin/update.course.php">View & Update Courses</a>
    <a class="dropdown-item" href="/ultras/feedback/admin.view.feed.php">View Feedbacks</a>
    <a class="dropdown-item" href="/ultras/feedback/ViewCourseFeedback.php">View Course Feedback</a>
    <a class="dropdown-item" href="/ultras/mahi/admin/admin.write_post.php">Write a Post</a>
    <a class="dropdown-item" href="/ultras/mahi/admin/bending_posts.php">View Users Posts</a>
    <a class="dropdown-item" href="/ultras/courses/admin/view_app.php">View Users Applications</a>
    <form method="GET">
    <a class="dropdown-item"><button name="adlogout" class="btn btn-danger">LogOut</button></a> 
    </form>
  </div>
</div>



    <?php } ?>

    <?php if(isset($_SESSION['student'])){ ?>

        <div class="dropdown">
  <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    More
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

  <form method="GET">
    <a class="dropdown-item"><button name="profile" class="btn btn-success">profile</button></a> 
    <a class="dropdown-item"><button name="studentlogout" class="btn btn-danger">LogOut</button></a> 
    </form>

  </div>
</div>
    <?php } ?>

  </form>
</nav>

<?php } ?>

</body>
</html>