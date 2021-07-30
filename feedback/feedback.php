<?php
include "/xampp/htdocs/ultras/shared/shared.php";
if(isset($_SESSION['admin']) || isset($_SESSION['student']) ){

if(isset($_POST['send'])){
//session id
$name = $_POST['name'];
$rate = $_POST['rate'];
$comments = $_POST['comments'];

$insert = "INSERT INTO `feedback` VALUES (NULL , '$name' , '$rate','$comments')";
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
			 <label>Name</label>
			 <li> <input class="form-control" name="name" value="<?php echo $_SESSION['name'] ?>" > 
				 </li>
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
			 <ul>
			<label>If you have specific feedback, please write to us...</label>
			<input name="comments" placeholder="Additional comments" class="form-control" ></input>
            </ul>
			 <br>
<ul>
			
<button name="send" class="btn btn-info">submit</button>

<a href="./previous.feed.php" class="btn btn-info">View Other Feedbacks</a>
</ul>
	  </form>
	</div>



	<?php } ?>


