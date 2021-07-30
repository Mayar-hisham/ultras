<?php
include "/xampp/htdocs/ultras/shared/shared.php";
if(isset($_SESSION['admin'])){

    $select = "SELECT course_app.*, courses.name as cname FROM `course_app` JOIN `courses` ON course_app.course_id = courses.id";
    $s = mysqli_query($connect , $select);

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete = "DELETE FROM `course_app` WHERE id = $id";
        $d = mysqli_query($connect , $delete);
    }
    ?>


<div class="container col-6 mt-5">
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>COURSE</th>
            <th>STATUS</th>     
            <th>DELETE</th> 
        </tr>
        <?php foreach($s as $s){ ?>
        <tr>
            <td><?php echo $s['id']; ?></td>
            <td><?php echo $s['name']; ?></td>
            <td><?php echo $s['phone']; ?></td>
            <td> <?php echo $s['cname']; ?> </td>
            <td><?php echo $s['status']; ?></td>
            <td><a href="view_app.php?delete=<?php echo $s['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</div>



    <?php } ?>