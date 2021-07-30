<?php
include "/xampp/htdocs/ultras/shared/shared.php";
if(isset($_SESSION['admin'])){

if(isset($_POST['addcourse'])){
$name = $_POST['name'];
$details = $_POST['details'];
$fees = $_POST['fees'];

         ///IMAGE PART
$lname = $_FILES['image']['name'];
$ltype = $_FILES['image']['type'];
$ltmp = $_FILES['image']['tmp_name'];
$location = "upload/";
move_uploaded_file($ltmp , $location . $lname);

$fname = $_FILES['file']['name'];
$ftype = $_FILES['file']['type'];
$ftmp = $_FILES['file']['tmp_name'];
$location = "upload/";
move_uploaded_file($ltmp , $location . $lname);

$insert = " INSERT INTO `courses` VALUES (NULL , '$name' , '$details', $fees , '$lname' , '$fname') ";
$i = mysqli_query($connect , $insert);
//if($i){echo"ok";}else{    echo"no".mysqli_error($connect);}


header("location: /ultras/courses/admin/update.course.php ");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $edit = "SELECT * FROM `courses` WHERE id = $id";
    $e = mysqli_query($connect , $edit);
    $row = mysqli_fetch_assoc($e);
    $name = $row ['name'];
    $details = $row ['details'];
    $fees = $row ['fees'];
    $lname = $row ['img'];
    $fname = $row ['file'];


if(isset($_POST['update'])){
    $name = $_POST['name'];
    $details = $_POST['details'];
    $fees = $_POST['fees'];

    $lname = $_FILES['image']['name'];
    $ltype = $_FILES['image']['type'];
    $ltmp = $_FILES['image']['tmp_name'];
   $llocation = "upload/";
move_uploaded_file($ltmp , $llocation . $lname);

$fname = $_FILES['file']['name'];
$ftype = $_FILES['file']['type'];
$ftmp = $_FILES['file']['tmp_name'];
$flocation = "upload/";
move_uploaded_file($ftmp , $flocation . $fname);

    $update = "UPDATE `courses` SET name = '$name' , details = '$details' , fees = $fees , img ='$lname' , file = '$fname' WHERE id = $id";
    $u = mysqli_query($connect , $update);
    if($u){
        echo "done";
    }else{
        echo "no".mysqli_error($connect);
    }

    header("location: /ultras/courses/admin/update.course.php ");
}
}




?>

<div class="container col-6 mt-5">
    <h1 style="text-align: center;">Course</h1>
    <form method="POST" enctype="multipart/form-data">


        <div>
            <label>Course Name</label>
            <?php if(isset($_GET['edit'])){ ?>
            <input class="form-control" value="<?php echo $name ?>"   name="name" placeholder="insert course name">
            <?php }else{ ?>
                <input class="form-control" name="name" placeholder="insert course name">
            <?php } ?>
        </div>
        
        <div>
        <label>Course Details</label>
        <?php if(isset($_GET['edit'])){ ?>
            <input class="form-control" value="<?php echo $details ?>" name="details" placeholder="insert course details">
            <?php }else{ ?>
                <input class="form-control" name="details" placeholder="insert course details">
            <?php } ?>
        </div>
        
        <div>
        <label>Course Fees</label>
        <?php if(isset($_GET['edit'])){ ?>
            <input class="form-control" value="<?php echo $fees ?>" name="fees" placeholder="insert course fees">
            <?php }else{ ?>
                <input class="form-control" name="fees" placeholder="insert course fees">
            <?php } ?>
        </div>
        <div class="form-group">
    <label>image</label>
    <input name="image" type="file" class="form-control">
  </div>
  <div class="form-group">
    <label>file</label>
    <input name="file" type="file" class="form-control">
  </div>


        <?php if(isset($_GET['edit'])){?>
            <button class="btn btn-danger mt-4" name="update">EDIT</button>
            <?php }else{?>

        <button class="btn btn-info mt-4" name="addcourse">ADD</button>
        <?php } ?>
    </form>
</div>

<?php } ?>