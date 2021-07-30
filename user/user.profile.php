
<?php
include "/xampp/htdocs/ultras/shared/shared.php";
if(isset($_SESSION['student'])){ 
    $id = $_SESSION["id"];
    //$select = "SELECT * FROM `comments`";
    //$s = mysqli_query($connect , $select);

    $selectt = "SELECT * FROM `user_approved` WHERE UID = $id";
    //$selectt = "SELECT * FROM `user_approve` INNER JOIN `student` ON `user_approve`.name = `student`.name";
    $slc = mysqli_query($connect , $selectt);


    if(isset($_GET['delete'])){
        $idd = $_GET['delete'];

        $delete = "DELETE FROM `user_approved` WHERE id = $idd";
        $d = mysqli_query($connect , $delete);
    }

    $id = $_SESSION['id'];
    $s = " SELECT * FROM `course_app` WHERE UID = $id ";
    // $s = "SELECT * FROM `course_applied` INNER JOIN `course` ON `course_applied`.id = `course`.id";
    $sl = mysqli_query($connect , $s);
    /*
   if($sl){
       echo"yes";
   }else{
       echo"no".mysqli_error($connect);
   }
   */

  if(isset($_GET['deleted'])){
    $idd = $_GET['deleted'];

    $delete = "DELETE FROM `course_app` WHERE id = $idd";
    $d = mysqli_query($connect , $delete);
}
?>


<div class="container col-3 mt-5">
    <h1 style="text-align: center;" > Your Posts </h1>
    <table class="table table-dark">
        <tr>

            <th>Name</th>
            <th>Title</th>
            <th>Descr</th>
            <th>Delete</th>
        </tr>
        <?php foreach($slc as $slc){ ?>
        <tr>

            <td><?php echo $slc['name']; ?></td>
            <td><?php echo $slc['title']; ?></td>
            <td><?php echo $slc['descr']; ?></td>
            <td><a href="user.profile.php?delete=<?php echo$slc['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
       
        <?php } ?>
    </table>
</div>

<div class="container col-3 mt-5">
    <h3 style="text-align: center;" > Your Previous Courses </h3>
    <table class="table table-dark">
        <tr>
            <th>student Name</th>
            <th>course name</th>
            <th>course status</th>
            <th>delete</th>

        </tr>
        <?php foreach($sl as $slt) { ?>
        <tr>
            <td><?php echo $slt['name']; ?></td>

            <?php
    $g =$slt['course_id'];
    $slesct4 = "SELECT name FROM `courses` WHERE id = $g";
    $q = mysqli_query($connect , $slesct4);
    $num = mysqli_num_rows($q);
    $row = mysqli_fetch_assoc($q);
    ?>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $slt['status']; ?></td>
            <td><a href="user.profile.php?deleted=<?php echo$slt['id']; ?>" class="btn btn-danger">Delete</a></td>
        
        </tr>
        <?php } ?>

    </table>
</div>

<?php } ?>

