
<?php
include "/xampp/htdocs/ultras/shared/shared.php";
if(isset($_SESSION['admin'])){

$select = "SELECT * FROM `feedback` ";
$q = mysqli_query($connect , $select);

if(isset($_GET['delete'])){
  $id = $_GET['delete'];

  $delete = "DELETE FROM `feedback` WHERE id = $id";
  $del = mysqli_query($connect , $delete);
}
?>
<div class="container col-6 mt-5">
<table class="table table-dark">
  <tr>
      <th>ID</th>
      <th>Name</th>
      <th>feedback</th>
      <th>comments</th>
      <th>action</th>
      
    </tr>
  <?php
 foreach($q as $data){?>
  <tr style="background-color: bfc0c0;">
      <th > <?php echo $data['id'];?></th>
      <td > <?php echo $data['name'];?></td>
      <td > <?php echo $data['feedback'];?></td>
      <td > <?php echo $data['comments'];?></td>
     <td> <a href="admin.view.feed.php?delete=<?php echo $data['id']; ?>" type="button" class="btn btn-danger"><i class="bi bi-trash"></i> Delete </a></td>

        <?php }?>

        <?php } ?>
