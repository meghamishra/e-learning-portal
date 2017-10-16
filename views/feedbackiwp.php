<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>feedback</title> 
   </head> 
   <body> 
         <h1> FEEDBACK </h1>
		 <br>
		 <?php 
            echo form_open_multipart('mainpagecontrolleriwp/feedback_stud');
          
            echo "<br/>"; 
			
            echo form_label('was the website useful'); 
            echo form_textarea(array('id'=>'q1','name'=>'q1')); 
            echo "<br/>"; 
			 echo "<br/>";
			echo form_label('any other course you want to add'); 
            echo form_textarea(array('id'=>'q2','name'=>'q2')); 
            echo "<br/>";
			 echo "<br/>";
			echo form_label('suggestions'); 
            echo form_textarea(array('id'=>'q3','name'=>'q3')); 
            echo "<br/>";
			 echo "<br/>";
		
			
            echo form_submit(array('id'=>'feesback','value'=>'submit')); 
            echo form_close();
 			
			
         ?> 
         
   </body>
</html>