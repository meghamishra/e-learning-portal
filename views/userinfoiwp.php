<!doctype html>
<html>

<body>

<a href="<?php echo base_url() ?>">home</a>
<h2> user info</h2>
<p>
		name: <?php print_r($_SESSION['name']);?>
		<br>
		courses: <?php if(isset($_SESSION['course']))
						{print_r($_SESSION['course']);
						$c=$_SESSION['course'];}
						else
						{echo "you are not registered for any course";}

				?>
		<br>

 
		<?php  if(isset($_SESSION['course']))
		{if(strcmp($c,"course1")==0) { ?>
		<a href="<?php echo base_url('mainpagecontrolleriwp/courseview')?>">my courses</a>
		<?php } ?>
		<?php  
		if(strcmp($c,"course2")==0){  ?>
		<a href="<?php echo base_url('mainpagecontrolleriwp/courseview') ?>">my courses</a>
		<?php  }
		}		?>

</p>







</body>
</html>