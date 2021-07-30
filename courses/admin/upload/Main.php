<?php
include "/xampp/htdocs/ultras/shared/shared.style.php";

if(isset($_SESSION['admin']) || isset($_SESSION['student']) ){


?>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="/ultras/courses/user/view.course.php"><img src="./ultras.jpeg" class="d-block w-100 h-75" alt="1"></a>
    </div>
    <div class="carousel-item">

      <a href="/ultras/mahi/admin/show_posts.php"><img src="./ultras.jpeg" class="d-block w-100 h-75" alt="2"></a>
    </div>
    <div class="carousel-item">

      <a href="/ultras/feedback/feedback.php"><img src="./ultras.jpeg" class="d-block w-100 h-75" alt="3"></a>
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
