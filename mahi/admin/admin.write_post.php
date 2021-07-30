<?php
//include '../shared/nav.php';
//include '../shared/config.php';
include "/xampp/htdocs/ultras/shared/shared.php";
if(isset($_SESSION['admin'])){

if(isset($_POST['post'])){

    $name = $_POST['name'];
    $title = $_POST['title'];
    $descr = $_POST['descr'];


    $lname = $_FILES['file']['name'];
    $ltype = $_FILES['file']['type'];
    $ltmp = $_FILES['file']['tmp_name'];
    $location = "upload/";
move_uploaded_file($ltmp , $location . $lname);

$insert = " INSERT INTO `admin_post` VALUES (NULL , '$name' , '$title', '$descr' , '$lname') ";
$i = mysqli_query($connect , $insert);
    
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM `admin_post` WHERE id = $id";
    $d = mysqli_query($connect , $delete);
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $edit = "SELECT * FROM `admin_post` WHERE id = $id";
    $e = mysqli_query($connect , $edit);
    $row = mysqli_fetch_assoc($e);
    $name = $row ['name'];
    $title = $row ['title'];
    $descr = $row ['descr'];
    $lname = $row ['file'];


if(isset($_POST['update'])){
    $name = $_POST['name'];
    $title = $_POST['title'];
    $descr = $_POST['descr'];
    
    $lname = $_FILES['file']['name'];
    $ltype = $_FILES['file']['type'];
    $ltmp = $_FILES['file']['tmp_name'];
    $location = "upload/";
move_uploaded_file($ltmp , $location . $lname);

    $update = "UPDATE `admin_post` SET name = '$name' , title = '$title' , descr = '$descr' , file = '$lname'  WHERE id = $id";
    $u = mysqli_query($connect , $update);
  //  if($u){      echo "done"; }else{     echo "no".mysqli_error($connect); }
}
}


 //include '../shared/script.php';
?>


<div class ='container col-4 mt-3'>
    <form method="POST" enctype="multipart/form-data">
<div>
<label>Write Post</label>
<input name="name" class="form-control" value=" <?php echo $_SESSION['name']; ?> ">
<br>
<input name="title" class="form-control" placeholder="write title" >
<br>
<input name="descr" class="form-control" placeholder="write body" >
</div>
<br>
<input name="file" type="file" class="form-control"  >
</div>
<br>
      
<?php if(isset($_GET['edit'])){?>
            <button class="btn btn-danger mt-4" name="update">EDIT</button>
            <?php }else{?>

        <button class="btn btn-info mt-4" name="post">Post</button>
        <?php } ?>
      <a href="admin.write_post.php" name ="des" class="btn btn-info">Discard</a>

    </form>
</div>


<div class="container col-6 mt-5">
    <table class="table table-dark">
        <tr>
           <th>ID</th>
           <th>NAME</th>
           <th>title</th>
           <th>description</th>
           <th>file</th>
           <th>edit</th>
           <th>delete</th>
        </tr>   

        <?php
        $select = "SELECT * FROM `admin_post`";
        $s = mysqli_query($connect , $select);
        foreach ($s as $s) { ?>
        <tr> 
            <td> <?php echo $s ['id']; ?> </td>
            <td> <?php echo $s ['name']; ?> </td>
            <td> <?php echo $s ['title']; ?> </td>
            <td> <?php echo $s ['descr']; ?> </td>
            <td><?php echo $s['file']; ?></td> 
            <td> <a href="admin.write_post.php?edit=<?php echo $s ['id']; ?>" class="btn btn-info">edit</a> </td>
            <td> <a href="admin.write_post.php?delete=<?php echo $s ['id']; ?>" class="btn btn-danger">delete</a> </td>
            
        </tr>
        <?php } ?>
        </table>
</div>
  
<?php } ?>