<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>login page</title> 
   </head> 
   <body> 
         <?php 
            echo form_open_multipart('mainpagecontrolleriwp/signup_stud');
          
            echo "<br/>"; 
			
            echo form_label('Name'); 
            echo form_input(array('id'=>'name','name'=>'name')); 
            echo "<br/>"; 
			
			echo form_label('email'); 
            echo form_input(array('id'=>'email','name'=>'email')); 
            echo "<br/>";
			
			echo form_label('password'); 
            echo form_input(array('id'=>'pass','name'=>'pass')); 
            echo "<br/>";
			
			echo form_label('confirm password'); 
            echo form_input(array('id'=>'passcon','name'=>'passcon')); 
            echo "<br/>";
			
            echo form_submit(array('id'=>'signupval','value'=>'signup')); 
            echo form_close();
 			
			
         ?> 
   </body>
</html>