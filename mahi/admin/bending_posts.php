<?php

 include "/xampp/htdocs/ultras/shared/shared.php";
 if(isset($_SESSION['admin'])){

   // include '../shared/nav.php';

$select = "SELECT * FROM `user_post`";
$s = mysqli_query($connect , $select);

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM `user_post` WHERE id = $id";
    $d = mysqli_query($connect , $delete);
}

if(isset($_GET['accept'])){
    $id = $_GET['accept'];

$select = "SELECT * FROM `user_post` WHERE id = $id";
$sel = mysqli_query($connect , $select);
$ss = mysqli_fetch_assoc($sel);

$name = $ss['name'];
$title = $ss['title'];
$descr = $ss['descr'];
$uid = $ss['UID'];

    $insert = "INSERT INTO `user_approved` VALUES(NULL , '$name' , '$title' , '$descr' , $uid) ";
    $i = mysqli_query($connect , $insert);


   $delete = "DELETE FROM `user_post` WHERE id = $id";
    $d = mysqli_query($connect , $delete);
    header("location: /ultras/mahi/admin/bending_posts.php ");
}

?>
<div class="container col-6 mt-5">
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Title</th>
            <th>Post</th>
            <th>UID</th>
            <th>Accept</th>
            <th>Delete</th>
        </tr>
        <?php foreach($s as $s){ ?>
        <tr>
            <td><?php echo $s['id']; ?></td>
            <td><?php echo $s['name']; ?></td>
            <td><?php echo $s['title']; ?></td>
            <td><?php echo $s['descr']; ?></td>
            <td><?php echo $s['UID']; ?></td>
            <td><a href="bending_posts.php?accept=<?php echo $s['id']; ?>" class="btn btn-info">Accept</a></td>
            <td><a href="bending_posts.php?delete=<?php echo $s['id']; ?>" class="btn btn-danger">Delete</a></td>  
        </tr>
        <?php } ?>
    </table>
</div>




<?php
// include '../shared/script.php';
?>

<?php } ?>