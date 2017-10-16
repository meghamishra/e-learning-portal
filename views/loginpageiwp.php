<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>login page</title> 
   </head> 
   <body> 
         <?php 
          	echo form_open('mainpagecontrolleriwp/login_stud');
            echo "<br/>"; 
			
            echo form_label('Name'); 
            echo form_input(array('id'=>'name','name'=>'name')); 
            echo "<br/>"; 
		
			echo form_label('password'); 
            echo form_input(array('id'=>'pass','name'=>'pass')); 
            echo "<br/>";
			
			
			
            echo form_submit(array('id'=>'submit','value'=>'submit')); 
			
			
			echo "<br/>";
           // echo form_submit(array('id'=>'signup','value'=>'signup')); 
            echo form_close();
			
			echo form_open('mainpagecontrolleriwp/methodname');
		
			echo form_submit('submit','ADD');
			echo form_close();
			?> 
			

         
   </body>
</html>