<?php
include "/xampp/htdocs/ultras/shared/shared.php";
if(isset($_SESSION['admin']) || isset($_SESSION['student']) ){

$select = "SELECT * FROM `courses`";
$s = mysqli_query($connect , $select);
?>



<div class="container">

  <div class="row">
  <?php foreach($s as $s) { ?>
    <div class="col">

    <div class="card mb-5 " style="width: 18rem;">
  <div class="card-body">
    <img style="width: 250px;height:300px" src="../admin/upload/<?php echo $s['img']; ?> ">
    <h5 class="card-title"><?php echo $s['name']; ?></h5>
    <p class="card-text"><?php echo $s['details']; ?></p>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $s['fees']; ?> EGP </h6>
    <a href="<?php echo $s['file']; ?>" download class="card-link">View More Details</a>
    <a href="./apply.course.php" class="card-link">Apply Now</a>
  </div>
  </div>

    </div>
    <?php } ?>
  </div>
 
</div>


</div>



<?php } ?>