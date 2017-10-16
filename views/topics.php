<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
 <link rel="stylesheet" href="projectpage_files/bootstrap.css">
  
  

 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  
<style>

body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


body {
background-color:#e6ffff;
}
h1 {text-align:center; }



.jumbotron{
background-color:  #cccccc;
    padding-top: 20px;
    
}
#header{ background-color: #ccccff}


</style>
</head>
<body>
<div id="header" class="jumbotron">
<h1>TOPICS</h1>
<br>
<hr>
</div>
<br>

<a href='<?php echo base_url() ?>'> HOME </a>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">topics</a>
  <a href="#">ask doubt</a>
  <a href="#">quizzes</a>
  <a href="#">assignments</a>
</div>



<div id="main" >
	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
	<br><br>
	<div class="row" class="container" >
		<div class="col-md-4" ><iframe width="400" height="345" src="https://www.youtube.com/embed/60OkiR1ujdg" >
			</iframe>
			<p> video 1</p></div>
		<div class="col-md-4" ><iframe width="400" height="345" src="https://www.youtube.com/embed/lEjwyYOFwZg" >
			</iframe>
			<p> video 2</p></div>
		<div class="col-md-4" ><iframe width="400" height="345" src="https://www.youtube.com/embed/5JdHSmaRiP4" >
			</iframe>
			<p> video 3</p></div>
<br><br>
	</div>
		<div class="row" class="container" >
		<div class="col-md-4" ><iframe width="400" height="345" src="https://www.youtube.com/embed/60OkiR1ujdg" >
			</iframe>
			<p> video 4</p></div>
		<div class="col-md-4" ><iframe width="400" height="345" src="https://www.youtube.com/embed/lEjwyYOFwZg" >
			</iframe>
			<p> video 5</p></div>
		<div class="col-md-4" ><iframe width="400" height="345" src="https://www.youtube.com/embed/5JdHSmaRiP4" >
			</iframe>
			<p> video 6</p></div>

	</div>
				
 
</div>




<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     

 </body>
 </html>