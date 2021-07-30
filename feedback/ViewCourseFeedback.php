<?php
include "/xampp/htdocs/ultras/shared/shared.php";

 if(isset($_SESSION['admin']) || isset($_SESSION['student']) ){

    $select = "SELECT * FROM `course_feedback`";
    $s = mysqli_query($connect , $select);

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete = "DELETE FROM `course_feedback` WHERE id = $id";
        $d = mysqli_query($connect , $delete);
    }

     ?>

<div class="container col-6 mt-5">
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Rate</th>
            <th>Comment</th>
            <th>Delete</th>
        </tr>
        <?php foreach($s as $s){ ?>
        <tr>
            <td><?php echo $s['id']; ?></td>
            <td><?php echo $s['name']; ?></td>
            <td><?php echo $s['course']; ?></td>
            <td><?php echo $s['rate']; ?></td>
            <td><?php echo $s['comment']; ?></td>
            <td><a href="ViewCourseFeedback.php?delete=<?php echo $s['id']; ?>" class="btn btn-danger">Delete</a></td>  
        </tr>
        <?php } ?>
    </table>
</div>


<?php } ?>