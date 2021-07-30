<?php 


/* دي كوبي في ال nav bar
<a href="/ultras/about.us.php" >   <button class="btn btn-info mr-2" type="button">About us</button></a>   */


/* و دي كوبي في ال shared.style
if(isset($_GET['about.us'])){
  header("location: /ultras/about.us.php");
}*/


include "/xampp/htdocs/ultras/shared/shared.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <div style="color: black; font-weight:bolder;">
  <p style="text-align: center;">نحن مجموعة من الشباب الذي يهتم بعالم الكمبيوتر وكل ما يتعلق به</p>
<p style="text-align: center;">  وجهنا فكرتنا لانشاء مجتمع يجمع كل من له علاقة بالكمبيوتر وعالم التطور ولتركيز مجهوداتنا علي نشر الوعي والتثقيف كما نهتم بالترفيه ايضا</p>
<p style="text-align: center;"> We are a group of young people who are interested in the world of computers and everything related to it

We directed our idea to create a society that brings together everyone who has a relationship with computers and the world of development , and to focus our efforts on spreading awareness and education we also care about entertaining too .</p> 
</div>
</div>
<div class = "container";>
<h2 style="text-align:center; font-Weight:bolder;">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card" style="margin-left: 20px;">
      <div class="container">
        <h2> Ahmed Ebeed </h2>
        <p class="title">CEO & Founder</p>
        <p>Excellent</p>
        <p>Ebeed@FCS.com</p>
        <p>Whatsapp : 011557823</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card" >
      <div class="container">
        <h2>Mohamed Ayman</h2>
        <p class="title">Art Director</p>
        <p>Very Good</p>
        <p>Ayman@FCS.com</p>
        <p>Whatsapp : 0100385675</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card" style="margin-right:20px ;">
      <div class="container">
        <h2>Ganna Seif</h2>
        <p class="title">Designer</p>
        <p>Good</p>
        <p>Seif@FCS.com</p>
        <p>Whatsapp : 012367890</p>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
