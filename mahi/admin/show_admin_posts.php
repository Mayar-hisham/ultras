<?php
 include "/xampp/htdocs/ultras/shared/shared.php";

 if(isset($_SESSION['admin']) || isset($_SESSION['student']) ){

    ?>

<?php
 $select = "SELECT * FROM `admin_post`";
 $slc = mysqli_query($connect , $select);
?>

<?php  foreach($slc as $s){ ?>
<div class="container card  mt-3" style="padding: 10px;">
  <div class="card-header">
<h5 class="card-title"> post by Admin </h5>
  </div>
  <div class="card-body">
    <h5 style="text-align: center;" class="card-title"><?php echo $s['title'] ?></h5>
    <p style="text-align: center;"  class="card-text"><?php echo $s['descr'] ?></p>
    <p style="text-align: center;"  class="card-text"><a href="<?php echo $s['file']; ?>" download>More Details</a></p>
  </div>
</div>
<hr>
<?php } ?>
<?php } ?>



