<?php

 //include '../shared/config.php';
 include "/xampp/htdocs/ultras/shared/shared.php";

 if(isset($_SESSION['admin']) || isset($_SESSION['student']) ){
//  include '../shared/nav.php';

if(isset($_POST['post'])){
  $name = $_POST['name'];
  $title = $_POST['title'];
  $descr = $_POST['descr'];
  $id = $_SESSION['id'];

  $insert = "INSERT INTO `user_post` VALUES (NULL , '$name' , '$title' , '$descr', $id)";
  $i = mysqli_query($connect , $insert);
 // if($i){   echo "done";}else {   echo "no".mysqli_error($connect);}
}

 if(isset($_POST['addcomment'])){
$comment = $_POST['comment'];
$postID = $_POST["postID"];

$insertt = "INSERT INTO `comments` VALUES (NULL , '$comment', $postID) ";
$ii = mysqli_query($connect , $insertt);
//if($ii){  echo "done";}else{  echo "no".mysqli_error($connect);}

 }





?>

<?php  if(isset($_SESSION['student'])){ ?>

<div class ='container col-4 mt-3'>
    <form method="POST">
<div>
<label>Write's on your mind </label>
<input name="name" class="form-control" value=" <?php echo $_SESSION['name']; ?> ">
<br>
<input name="title" class="form-control" placeholder="write title" >
<br>
<input name="descr" class="form-control" placeholder="write body" >
</div>
<br>
      <button name = "post" class="btn btn-primary">Post</button>
      <a href="show_posts.php" name ="des" class="btn btn-info">Discard</a>

    </form>
</div>


<hr> <hr>
<?php } ?>

<?php
 $select = "SELECT * FROM `user_approved`";
 $slc = mysqli_query($connect , $select);



?>

<?php  foreach($slc as $s){ ?>
<div class="container card mb-3 mt-3" style="padding: 10px;">
  <div class="card-header">
<h5 class="card-title"> post by  <?php echo $s['name'] ?></h5>
  </div>
  <div class="card-body">
    <h5 style="text-align: center;" class="card-title"><?php echo $s['title'] ?></h5>
    <p style="text-align: center;"  class="card-text"><?php echo $s['descr'] ?></p>
  </div>
  <hr>
  <div class="col-4" > 
    <form method="POST">  
      <input type="hidden" value="<?php echo $s['id'] ?>" name="postID">
<input name="comment" class="form-control" placeholder="Add Comment" ><button name="addcomment" class="btn btn-light">Add</button> 
    </form>
    </div>

    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    previous comments
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php 
  $post_id = $s["id"];
  $choose = "SELECT * FROM `comments` where post_id =  $post_id"; 
      $ch = mysqli_query($connect , $choose);
      foreach($ch as $ch){ ?>
    <li><?php echo $ch['comment']; ?></li>
    <?php } ?>
  </div>
</div>

    </div>
    <hr>
    <?php } ?>





<?php
// include '../shared/script.php';
?>

<?php } ?>