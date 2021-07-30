<?php
include "/xampp/htdocs/ultras/shared/shared.php";

 if(isset($_SESSION['admin']) || isset($_SESSION['student']) ){

    $select = "SELECT * FROM `course_feedback`";
    $s = mysqli_query($connect , $select);
    ?>

<?php  foreach($s as $s){ ?>
<div class="container mt-3 card" style="padding: 20px;">
  <div class="card-header">
  <h5 class="card-title">Feedback by <?php echo $s['name'] ?></h5>
  </div>
  <div class="card-body">
    <h5 style="text-align: center;" class="card-title"><?php echo $s['course'] ?> Course </h5>
    <h6 style="text-align: center;"  class="card-text">Rate Is " <?php echo $s['rate'] ?> "</h6>
    <p style="text-align: center;"  class="card-text"><?php echo $s['comment'] ?></p>

  </div>
</div>
<hr>
<?php } ?>

    <?php } ?>