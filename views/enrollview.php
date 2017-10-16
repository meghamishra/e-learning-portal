<!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.4.min.js" type="text/javascript"></script>
<script type="text/javascript">

		$(document).ready(function(){
		   $("#page1").click(function(){
		   	$('#result').load("topics #page1");
		     //alert("Thanks for visiting!");
		   }); 
 
		   $("#page2").click(function(){
		   	$('#result').load('pages/page2.html');
		     //alert("Thanks for visiting!");
		   });
		 });
		 
		 
		 
		 <?php 
		 $co=" comments posted ";
		 function postcomment()
		 {
			 if(isset($_POST["comm"]))
			 {
				 $a=$_POST["te"];
				 $myfile = fopen("comments.txt", "w") or die("Unable to open file!");
					fwrite($myfile, $a);
					echo $a;
					fclose($myfile);
					
					
			 }
			 
			 
		 }
		 
		function posting()
		{postcomment();
			
			$myfile = fopen("comments.txt", "r") or die("Unable to open file!");
					$co= fread($myfile,filesize("comments.txt"));
					$coo=fgets($myfile);
					echo $co;
					echo $coo;
					fclose($myfile);
				 
		}
		 
		 ?>
	</script>
<style>
body {
    font-family: "Lato", sans-serif;
	 background-image: url("bg.gif");
    background-color: #cccccc;
	 background-size: 80px 60px;
}

#comment{ font-size: 150%;}
.tarea{  border-style: solid grey;
    border-width: medium;}

	.endpart{ padding:40px;
	}


textarea:focus{background-color:#cce6ff;
 box-shadow: 0 0 5px rgba(81, 203, 238, 1);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);}



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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<!--<button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='<?php //echo base_url('mainpagecontrolleriwp/mailtest') ?>'">mail test</button-->
<p> you are enrolled for this course.   <?php echo 	$_SESSION['course']	;?></p>


  <div id="result" style="clear:both;">
</div>

<h1 align="center"> SUBJECT NAME </h1>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="<?php echo base_url('mainpagecontrolleriwp/topics') ?>" id="page1">topics</a>
  <a href="#">ask doubts</a>
  <a href="<?php echo base_url('mainpagecontrolleriwp/assign') ?>">assignments</a>
  <a href="<?php echo base_url('mainpagecontrolleriwp/quiz') ?>">quizzes</a>

</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<div class="container">
 <div class="row">
  <div class="col-md-8"><p>introduction introduction introduction introduction introductionintroduction introduction introduction introduction introduction
  introductionintroductionintroductionintroductionintroductionintroduction introduction introduction introduction introduction introduction introductionintroductionintroduction
   introduction introduction introduction introduction introduction introduction introduction introduction introductionintroduction introduction introduction
   </p></div>
  <div class="col-md-4"><div class="col-md-4" ><iframe width="400" height="345" src="https://www.youtube.com/embed/0zkew0GIb7Y" >
			</iframe></div></div>
  
</<div>

</<div>


<div  class="endpart" align="left">
<p id="comment"><b>COMMENTS:</b></p>

<br>
<form action=" " method="post">
<textarea class="tarea" rows="4" cols="100" name="te" >
</textarea>

<br><br>
 <input class="btn btn-primary btn-md" value="Post Comment" type="submit" onclick="posting()" name="comm">
 
 </form>
</div>


<div class="panel panel-default">
    <div class="panel-body" onload="posting()" ><?php  echo $co ?></div>
  </div>

<br>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html> 












