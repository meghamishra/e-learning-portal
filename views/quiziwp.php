
<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <title>QUIZ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="sample.css" type="text/css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script src="http://code.jquery.com/jquery.js"></script>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
     <link href="http://www.keith-wood.name/css/jquery.countdown.css" rel='stylesheet'></link>
  <!-- Necessary jQuery Files and Countdown Files -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://www.keith-wood.name/js/jquery.plugin.js"></script>
  <script src="http://www.keith-wood.name/js/jquery.countdown.js"></script>
 
 
   <!-- <script src="js/bootstrap.min.js"></script>-->
</head>

  <body ng-controller="myCtrl">   
  
  


   <script>
var app = angular.module('myApp', []);
app.controller('myCtrl',['$scope', function($scope) {
    var numbers=[1,2,3,4],num=4;
 //localStorage.setItem('answers', JSON.stringify($scope.answers));
 //$scope.answers = (localStorage.getItem('answers')!==null) ? JSON.parse(localStorage.getItem('answers')) : [];
 //alert($scope.answers[0]);
	var b=[],i=0;
	$scope.loadDoc=function(p){
		b[i]=p;i++;
			
	}
	
	
	 $scope.abc=function(){
		 $scope.count=0;
		//alert(b);
		 //alert(numbers);
		 for(t=0;t<i;t++)
		 {
			 if(b[t]==numbers[t])
			 {$scope.count++;}
				
		 }
		 
	}
		
	 
			
}]);
</script> 
<script>
  $(function () {
    // Define your end time (15 seconds from now)
    var expires = new Date();
    expires.setSeconds(expires.getSeconds() + 30); 
    
    // Wire up your countdown timer
    $('#defaultCountdown').countdown({until: expires,  onExpiry: countdownFinished }); 
 
  });
    
  // This function will trigger when your countdown expires
  function countdownFinished(){
      // Finished - disable your button
        document.getElementById('sub').click();
  }

</script>
  
   <div id='defaultCountdown'></div>


  
  
	<div class = "header">
<!-- 	<img src="logo.png" height= 60px> -->
	<a href= "<?php echo base_url() ?>" class="btn"><b>HOME</b></a>
	<a href= "<?php echo base_url('mainpagecontrolleriwp/courseview') ?>" class="btn"><b>COURSES</b></a>
	<a href= "<?php echo base_url('mainpagecontrolleriwp/aboutusview') ?>" class="btn"><b>ABOUT US</b></a>
	
	
	</div>
	
	<div id="demo">nmnm</div>
	
	<div class= "well">
	<form action="" method="post">
<h2 class="question">1. What is the answer to this question?</h2>        

<ul class="answers">   
        
<!--<input type="radio" value="1" name="1" onclick="javascript: submit.fun1();" >  <label for="q1a">Answer 1</label><br/>      -->
<input type="radio" ng-value="1" name="1" ng-model="k" ng-change="loadDoc(k)">  <label for="q1a">Answer 1</label><br/> 
<input type="radio" ng-value="x" name="1" ng-model="k" ng-change="loadDoc(k)">  <label for="q1b">Answer 2</label><br/>            
<input type="radio" ng-value="y" name="1" ng-model="k" ng-change="loadDoc(k)">  <label for="q1c">Answer 3</label><br/>           
<input type="radio" ng-value="z" name="1" ng-model="k" ng-change="loadDoc(k)">  <label for="q1d">Answer 4</label><br/>     
</ul>   

  <div id="ans">
  answer here
  </div>

<div id="coll">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  <div id="demo" class="collapse">

    Futbol Club Barcelona, commonly known as Barcelona <br>and familiarly as Barça, is a professional <br>football club, based in Barcelona, Catalonia, <br>Spain
  </div>
</div>

 </div> 
  

<div class= "well">

<h2 class="question">2. What is the answer to this question?</h2>        

<ul class="answers">            
<input type="radio" value="x" name="2"  ng-model="l" ng-change="loadDoc(l)" > <label for="q2a">Answer 1 </label><br/>           
<input type="radio" value="2" name="2"  ng-model="l" ng-change="loadDoc(l)" <?php //if($_REQUEST['2'] == "2") $score++ ?>> <label for="q2b">Answer 2</label><br/>            
<input type="radio" value="y" name="2"  ng-model="l" ng-change="loadDoc(l)">  <label for="q2c">Answer 3</label><br/>           
<input type="radio" value="z" name="2"  ng-model="l" ng-change="loadDoc(l)"> <label for="q2d">Answer 4</label><br/>       
</ul> 

<div class="container-fluid">
  <div class="col-sm-6">
  <div class="panel-group" id="accordion">
  <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a  data-toggle="collapse" data-parent="#accordion" href="#collapse2"><center>SHOW ANSWER</center></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">some desrcription about the answer.</div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-sm-6">
</div>

</div>       
<!--ques3-->
<div class= "well">

<h2 class="question">3. What is the answer to this question?</h2>        

<ul class="answers">            
<input type="radio" value="x" name="3" ng-model="m" ng-change="loadDoc(m)" >  <label for="q3a">Answer 1</label><br/>            
<input type="radio" value="y" name="3" ng-model="m" ng-change="loadDoc(m)" >  <label for="q3b">Answer 2</label><br/>            
<input type="radio" value="3" name="3" ng-model="m" ng-change="loadDoc(m)" <?php //if($_REQUEST['3'] == "3") $score++ ?> >  <label for="q3c">Answer 3</label><br/>           
<input type="radio" value="z" name="3" ng-model="m" ng-change="loadDoc(m)" >  <label for="q3d">Answer 4</label><br/>       
</ul> 

<div class="container">
  <div class="panel-group" id="accordion">
  <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><center>SHOW ANSWER</center></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">some desrcription about the answer.</div>
      </div>
    </div>
  </div>
</div>

</div>       

<!--ques4-->
<div class= "well">

<h2 class="question">4. What is the answer to this question?</h2>        

<ul class="answers">           
<input type="radio" value="x" name="4" ng-model="n" ng-change="loadDoc(n)">  <label for="q4a">Answer 1</label><br/>            
<input type="radio" value="y" name="4" ng-model="n" ng-change="loadDoc(n)">  <label for="q4b">Answer 2</label><br/>            
<input type="radio" value="z" name="4" ng-model="n" ng-change="loadDoc(n)">  <label for="q4c">Answer 3</label><br/>            
<input type="radio" value="4" name="4" ng-model="n" ng-change="loadDoc(n)" <?php //if($_REQUEST['4'] == "4") $score++ ?>>  <label for="q4d">Answer 4</label><br/>        
</ul> 

<div class="container">
  <div class="panel-group" id="accordion">
  <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><center>SHOW ANSWER</center></a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">some desrcription about the answer.</div>
      </div>
    </div>
  </div>
</div>
</form>
</div>       

<?php // echo "your score is". $score; ?>


<button ng-click=" abc()" id="sub">Click Me!</button>

<p > <b>your score is </b>{{count}}</p>



</body>
<script>
//var q=<?php //echo json_encode($lines); ?>;
//var r=<?php echo json_encode($_POST) ?>;
var a=[],i=0,v,k;

/*     function loadDoc(k) {
		a[i]=k.value;i++;
 
}
 */
function fcall()
{

	   var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
	
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		 alert("lsakld");
	var p=JSON.parse(this.responseText);
		
  document.getElementById("demo").innerHTML=p[0].ans;

     

    }
  };
 
  xhttp.open("POST", "quizans.json", true);
 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();
	
}

//a.open("POST","urlfileofajax.php?q="+q+"&r="+r,true);

//a.send();
 // fun1() close*/
</script>
</html>








