<?php
include '/xampp/htdocs/ultras/shared/shared.php';

if(isset($_SESSION['admin']) || isset($_SESSION['student']) ){

    $select = "SELECT * FROM `student`";
    $se = mysqli_query($connect , $select);

    if(isset($_POST['apply'])){

        $name = $_POST['name'];
        $uid = $_POST['UID'];
        $phone = $_POST['phone'];
        $course_id = $_POST['course'];
        $status = $_POST['status'];

        $insert = "INSERT INTO `course_app` VALUES(NULL , $uid , '$name' , $phone , $course_id , '$status')";
        $i = mysqli_query($connect , $insert);

  
    if($i){
    ?>
       
    
            <div class="alert alert-success" role="alert">
          <?php   echo "Application Done Successfully"; ?>
            
          </div>
       <?php }   }?>




<div class="container col-6 mt-5">
    <h1 style="text-align: center;">Apply For Course</h1>

<form method="POST">
    <div>
       <label>Your Username</label>

       <input type="text" name="name" value="<?php echo $_SESSION['name'] ?>" class="form-control" >
  
    </div>
<br>

<div>
       <label>Your UserID</label>

       <input type="text" name="UID" value="<?php echo $_SESSION['id'] ?>" class="form-control" >
  
    </div>
    <br>

<div>
       <label>Your Phone Number</label>

       <input type="numbers" name="phone" class="form-control" >
  
    </div>
<br>
    <div>
       <label>Select Required Course</label>
      <select name="course" class="form-control">
      <option  selected disabled> </option>
          <?php $select = "SELECT * FROM `courses`"; 
                $s = mysqli_query($connect , $select);

                foreach($s as $s){
          ?>
          <option  value="<?php echo $s['id']; ?>"><?php echo $s['name']; ?></option>
          <?php } ?>
      </select>
    </div>
<br>
    <div>
      <label>Choose Course Status</label>

      <div>
      <input name="status" class="form-check-input" type="checkbox" value="online">
      <label class="form-check-label" for="">
    Online
  </label>
      </div>
      <div>
  <input name="status" class="form-check-input" type="checkbox" value="offline">
  <label class="form-check-label" for="">
    Offline
  </label>
      </div>
    </div>    

    <button name="apply" class="btn btn-info mt-4">Apply</button>
</form>

</div>

<?php } ?>