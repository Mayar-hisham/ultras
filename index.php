<?php 
include "/xampp/htdocs/ultras/shared/shared.php";
include "./functions.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    if (existing_email( $connect , $email ) !== false) {
      header ("location: /ultras/index.php?error=emailtaken");
      exit();  
  }

  if (empty_input_su( $name , $email , $phone , $password ) !== false) {
    header ("location: /ultras/index.php?error=emptyinput");
    exit(); 
}


$insertquery = "INSERT INTO `student` VALUES (null ,'$name' , '$email' , $phone , '$password')";
$executequery= mysqli_query($connect,$insertquery);

if($executequery){?>
  <div class="alert alert-info" role="alert">
<?php  echo "Now Please LogIn";?>

</div>
<?php }

}


if(isset($_POST['login'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty_input_si( $email , $password ) !== false) {
      header ("location: /ultras/index.php?error=emptyinput");
      exit(); 
  }

    $select = "SELECT * FROM `student` WHERE email = '$email' and password = '$password'";

    $selectQuery = mysqli_query($connect, $select);

    $numberOfRows = mysqli_num_rows($selectQuery);

    $row = mysqli_fetch_assoc($selectQuery);
    if($numberOfRows > 0){
        $_SESSION["student"] = $email;
        $_SESSION["cart"] = array();
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        // echo  $_SESSION['name'] ;
      //  $dir = isset($_GET['dir']) ? $_GET['dir'] : "/ultras/main.php";
        header("location: /ultras/main.php");
    }
  


  else{

    if(isset($_POST['login'])){
      $email = $_POST["email"];
      $password = $_POST["password"];
      $select = "SELECT * FROM `admin` WHERE email = '$email' and password = '$password'";

      $selectQuery = mysqli_query($connect , $select);

      $numberOfRows = mysqli_num_rows($selectQuery);

      $row = mysqli_fetch_assoc($selectQuery);
      if($numberOfRows > 0){
          $_SESSION['admin'] = $email;
          $_SESSION['cart'] = array();
          $_SESSION['name'] = $row['name'];
          $_SESSION['aid'] = $row['id'];

         // echo $_SESSION['admin'];

        //  $dir = isset($_GET['dir']) ? $_GET['dir'] : "/ultras/main.php";
          header("location: /ultras/main.php");
        }
          
          else{?>
        <div class="alert alert-danger" role="alert">
      <?php  echo "Wrong Email or Password";?>
      
    </div>
    <?php }
  
      }
     
    }
  }

  if(isset($_GET["error"])){

    if($_GET["error"] == "emptyinput") {
         echo "<p>there is empty input</p>";
    }

    if($_GET["error"] == "emailtaken") {
      echo "<p>this email already exist</p>";
    }
  
  }
     ?>




<div class="container mt-5">
  <div class="row">
    <div class="col">

    <div class="mr-5">
        <h1 class="h11" style="text-align: center;">Add New Student</h1>
        <form  method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" required>

            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" required aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text" style="color:ivory;">We'll never share your email with anyone else.</div>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" required id="phone">
            </div>


            <button type="submit" name="submit" class="btn btn-info submit">Sign Up</button>

        </form>

    </div>

    </div>
    <div class="col">

    <div class = "ml-5">
    <h1 class="text-center mb-5">Login</h1>
  <form method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="email" id="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" id="password" required>
    </div>
        <button type="submit" name="login" class="btn btn-info float-right col-3">Login</button>
  </form>
</div>

    </div>
  </div>
</div>
