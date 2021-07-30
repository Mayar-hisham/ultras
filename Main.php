<?php
include "/xampp/htdocs/ultras/shared/shared.php";

if(isset($_SESSION['admin']) || isset($_SESSION['student']) ){


?>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner mt-5">
    <div class="carousel-item active">
      <a href="/ultras/courses/user/view.course.php"><img src="./courses.jpg" class="d-block w-50 h-50 mx-auto" alt="1"></a>
    </div>
    <div class="carousel-item">

      <a href="/ultras/mahi/admin/show_posts.php"><img src="./post.jpg" class="d-block w-50 h-50 mx-auto" alt="2"></a>
    </div>
    <div class="carousel-item">

      <a href="/ultras/feedback/feedback.php"><img src="./feedback.jpg" class="d-block w-50 h-50 mx-auto" alt="3"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php } ?>
