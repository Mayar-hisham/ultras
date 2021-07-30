<?php
include "/xampp/htdocs/ultras/shared/shared.php";
if(isset($_SESSION['admin'])){

$select = "SELECT * FROM `courses`";
$s = mysqli_query($connect , $select);

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM `courses` WHERE id = $id";
    $d = mysqli_query($connect , $delete);
}


?>

<div class="container col-6 mt-5">
    <table class="table table-dark">
        <tr>
           <th>ID</th>
           <th>NAME</th>
           <th>DETAILS</th>
           <th>FEES</th>
           <th>Image</th>
           <th>file</th>
           <th>edit</th>
           <th>delete</th>
        </tr>   

        <?php foreach ($s as $s) { ?>
        <tr> 
            <td> <?php echo $s ['id']; ?> </td>
            <td> <?php echo $s ['name']; ?> </td>
            <td> <?php echo $s ['details']; ?> </td>
            <td> <?php echo $s ['fees']; ?> </td>
            <td> <img style="height: 100px;width: 100px;" src="upload/<?php echo $s['img']; ?> "> </td> 
            <td><?php echo $s['file']; ?></td>
            
            <td> <a href="./insert.course.php?edit=<?php echo $s ['id']; ?>" class="btn btn-info">edit</a> </td>
            <td> <a href="update.course.php?delete=<?php echo $s ['id']; ?>" class="btn btn-danger">delete</a> </td>
            
        </tr>
        <?php } ?>
        </table>
</div>

<?php } ?>