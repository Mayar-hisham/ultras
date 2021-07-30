<?php
include "/xampp/htdocs/ultras/shared/shared.php";

 if(isset($_SESSION['admin']) || isset($_SESSION['student']) ){
	
	
	

//$studentId = $_SESSION['id'];
if(isset($_POST['send'])){
$course = $_POST['courses'];
$rate = $_POST['rate'];
$comments = $_POST['comments'];
$name = $_POST['name'];


$insert = "INSERT INTO `course_feedback` VALUES (NULL ,'$name', '$course' , '$rate','$comments')";
$q = mysqli_query($connect , $insert);
if($q){
    ?>
       
    
            <div class="alert alert-success" role="alert">
          <?php   echo "Feedback Sent Successfully"; ?>
            
          </div>
       <?php }   }?>


    <h1 class="agile_head text-center " >Feedback Form</h1>
	
    <div class="w3layouts_main wrap container col-6 mt-5">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
	    <form method="POST" class="agile_form">
		  <h2>How satisfied were you with our Service?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="rate" value="excellent" id="excellent" required> 
				 	  <label for="excellent">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="rate" value="good" id="good"> 
					  <label for="good"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="rate" value="neutral" id="neutral">
					 <label for="neutral">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="rate" value="poor" id="poor"> 
					  <label for="poor">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			 <div>
			<label>If you have specific feedback, please write to us...</label>
			<input name="comments" placeholder="Additional comments" class="form-control" ></input>
			 </div><br>
			 <div>
                 <label>select the course</label><br>
                 <select class="form-control" name="courses">
					 <option selected disabled></option>
                     <?php
                     $select = "SELECT * FROM `courses`";
                     $q = mysqli_query($connect , $select);
                      foreach($q as $c){ ?>
						<option value="<?php echo $c['name']; ?>"><?php echo $c['name']; ?></option>
                      <?php } ?>
                     
                    
                 </select>
                
             </div>
			 <br>
			 <div>
       <label>user name</label>
<input type="text" name="name" value="<?php echo $_SESSION['name'] ?>" class="form-control">

			 </div>

			
<button name="send" class="btn btn-info">submit</button>

	  </form>
	</div>

	<?php  }?>


