<?php
include "./inc.php" ;

if(isset($_POST['signup'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$pwdr = $_POST['pwdr'];


$insert = "INSERT INTO `users` VALUES (NULL , '$name' , '$email' , $password)";
$i = mysqli_query($connect , $insert);

if($i){
    header("Location: /confrence/UI/mainpage.php");
}

}


if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM `users` WHERE email = '$email' && password = $password";
    $s = mysqli_query($connect , $select);
   // if($s){ echo "ok";} else{ echo "no".mysqli_error($connect);}

   if($s){
       header("Location: /confrence/UI/mainpage.php");
   }
}
?>

<nav style="background-color: grey;">

<h1 style="text-align: center;" > Welcome To Coursita </h1>

</nav>

<div class="container col-6 mt-5" style="background-color: grey;border-radius:25%;padding:50px">
<h3 style="text-align: center;">Sign In</h3>
<form method="POST">

<div>
<lable>Email</lable>
<input type="email" name="email" class="form-control" placeholder="enter your email">
</div>

<div>
<lable>Passwod</lable>
<input type="password" name="password" class="form-control" placeholder="enter your password">
</div>


<button type="submit" name="signin" class="btn btn-success mt-4">Sign In</button>

</form>
</div>

<br> <br>


<div class="container col-6 mt-5" style="background-color: grey;border-radius:25%;padding:50px">
<h1 style="text-align: center;">Sign Up</h1>
<form method="POST">

<div>
<lable>Name</lable>
<input type="text" name="name" class="form-control" placeholder="enter your name">
</div>

<div>
<lable>Email</lable>
<input type="email" name="email" class="form-control" placeholder="enter your email">
</div>

<div>
<lable>Passwod</lable>
<input type="password" name="password" class="form-control" placeholder="set password">
</div>

<div>
<lable>Repeat Password</lable>
<input type="password" name="pwdr" class="form-control" placeholder="repeate password">
</div>

<button type="submit" name="signup" class="btn btn-success mt-4">Sign Up</button>

</form>
</div>

<a href="/confrence/Back/loginadmin.php"> <button class="btn btn-success">AdminLOG</button> </a>

