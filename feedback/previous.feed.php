<?php

 //include '../shared/config.php';
 include "/xampp/htdocs/ultras/shared/shared.php";

 if(isset($_SESSION['admin']) || isset($_SESSION['student']) ){
  //include 'xampp/htdocs/ultras/mahi/shared/nav.php';



?>

<?php
 $select = "SELECT * FROM `feedback`";
 $slc = mysqli_query($connect , $select);
?>

<?php  foreach($slc as $s){ ?>
<div class="container mt-3 card" style="padding: 20px;">
  <div class="card-header">
  <h5 class="card-title">Feedback by <?php echo $s['name'] ?></h5>
  </div>
  <div class="card-body">
    <h5 style="text-align: center;" class="card-title"><?php echo $s['feedback'] ?></h5>
    <p style="text-align: center;"  class="card-text"><?php echo $s['comments'] ?></p>

  </div>
</div>
<hr>
<?php } ?>





<?php } ?>