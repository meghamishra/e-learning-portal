<!doctype html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.c1{
	 border: 2px solid #a1a1a1;
    padding: 10px 40px; 
    background: #dddddd;
    width: 300px;
    border-radius: 25px;
}
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}



.news{
	  background-color: green;
	height:100px
	 padding: 25px;
    margin: 25px;
}

ul {
    list-style-type: none;
    margin: 15;
    padding: 15;
    overflow: hidden;
    background-color: #66ccff;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 26px;
	text-decoration: none;
	font-size:150%;
    
}

 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 60%;
      margin: auto;
  
  
</style>

<title>student web portal</title>
</head>
<script>

</script>

<body>
<ul>
   <li><img src="logo.png" width="100" height="50"></li>
  <li><a href="#home">Home</a></li>
 <!-- <li><a href="loginpageiwp.php">login</a></li>-->

 <!--<li><a href="<?php //echo base_url('mainpagecontrolleriwp/loginview') ?>">Login</a></li>-->
 <?php 
 if(isset($_SESSION['id'])){  ?>

<li><a href="<?php echo base_url('mainpagecontrolleriwp/logout') ?>">Logout</a></li>
 <?php }
 else {?>
  
   <li><a href="<?php echo base_url('mainpagecontrolleriwp/loginview') ?>">Login</a></li>
 <?php }?>
  <li><a href="<?php echo base_url('mainpagecontrolleriwp/feedback') ?>">feedback</a></li>
  <li><a href="<?php echo base_url('mainpagecontrolleriwp/aboutusview') ?>">About</a></li>
		

</ul>
<?php 

if(isset($_SESSION['name']))
{
	?>
<script>
var a = document.createElement('a');
var linkText = document.createTextNode("my profile");
a.appendChild(linkText);
a.title = "my profile";
a.href = " <?php echo base_url('mainpagecontrolleriwp/userinfo') ?>";
document.body.appendChild(a);

</script>
<?php	
}
?>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="c1.jpg" alt="stdent and books" width="460" height="345">
      </div>

      <div class="item">
        <img src="c2.jpg" alt="stdent and books" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="c3.jpg" alt="stdent and books" width="460" height="345">
      </div>

      <div class="item">
        <img src="c4.jpg" alt="stdent and books" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<br><br><br><br>
<a href="<?php echo base_url('mainpagecontrolleriwp/news') ?>">
  <div class="news"  >
   NEWS AND ANNOUNCEMENTS
  </div>
</a>



<div>

<h2>select the courses</h2>

<!-- Trigger/Open The Modal -->
<div class="c1">
<h3> course 1</h3>
<pre> name of course
 topics to be covered
 duration of course
 </pre>
<button id="myBtn">Open Modal</button>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">


  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>some text about the video.some text about the video.some text about the video.some text about the video.some text about the video.some text about the video
	some text about the videosome text about the videosome text about the videosome text about the videosome text about the videosome text about the video
	some text about the videosome text about the videosome text about the videosome text about the videosome text about the videosome text about the video
	some text about the videosome text about the videosome text about the videosome text about the videosome text about the video</p>
	<button type="button" class="btn btn-primary btn-lg btn-block" name="modal1" id="modal1" onclick="window.location.href='<?php echo base_url('mainpagecontrolleriwp/enrollview1') ?>'">enroll now</button>
       
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<div class="c1">
<h3> course 2</h3>
<pre> name of course
 topics to be covered
 duration of course
 </pre>
<button id="myBtn2">Open Modal</button>
</div>
<!-- The Modal -->
<div id="myModal2" class="modal">


  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>some text about the video.some text about the video.some text about the video.some text about the video.some text about the video.some text about the video
	some text about the videosome text about the videosome text about the videosome text about the videosome text about the videosome text about the video
	some text about the videosome text about the videosome text about the videosome text about the videosome text about the videosome text about the video
	some text about the videosome text about the videosome text about the videosome text about the videosome text about the video</p>
	<button type="button" class="btn btn-primary btn-lg btn-block" name="modal2" id="modal2" onclick="window.location.href='<?php echo base_url('mainpagecontrolleriwp/enrollview2') ?>'">enroll now</button>
       
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal2');

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




</div>


</body>
</html>