
<!DOCTYPE html>
<html>
<body>

<h1> ASSIGNMENT </h1>
		 <br>
		 
  
         
			<form action=" " method="post" enctype="multipart/form-data">
			<?php 
         // echo form_open_multipart('mainpagecontrolleriwp/assignsub');
		   echo "<br/>"; 
			
            echo form_label('upload the assignment here');
				echo "<br/>";			?>
			
           <input type="file" name="1" value="1" size="20" > 
          <?php   echo "<br/>"; 
		  
            echo form_submit(array('id'=>'assign','value'=>'submit','name'=>'assign')); 
            echo form_close();
 			
			if(isset($_POST['assign']))
			{//$move = "/xampp/htdocs/codeIgniter/application/modules/".basename($_FILES['1']['name']);
			$path="/xampp/htdocs/codeIgniter/application/modules/".$_SESSION['name'];
			$move=$path."/".basename($_FILES['1']['name']);
				//$n=$_SESSION['name'];
				mkdir($path);
				
				 $x=$_FILES['1']['name'];
				 $y=$_FILES['1']["tmp_name"];
				move_uploaded_file($_FILES['1']['tmp_name'], $move);
			}
         ?> 

</body>
</html>








<?php






?>