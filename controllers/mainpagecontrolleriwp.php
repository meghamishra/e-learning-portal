<?php 
   class mainpagecontrolleriwp extends CI_Controller {
	 public $x="";
      function __construct() { 
	    
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database();
		 $this->load->model('iwploginmodel');
		 $this->load->helper(array('form', 'url')); 
		 $this->load->model('iwpsignupmodel');
		 $this->load->model('iwpfeedbackmodel');
		 	 $this->load->model('answers_iwp_model')
			 $this->load->library('session');
		 
      } 
  
      public function index() { 
	  
		
         $query4=$this->db->get("courses");
         $query = $this->db->get("login");
		 $query2 = $this->db->get("signup");
		 $query3 = $this->db->get("feedback");
        $data['records'] = $query->result(); //data is  passed by the name of records in view or other places
		 $data['records2'] = $query2->result();	
		  $data['records3'] = $query3->result();	
         $this->load->helper('url'); 
         $this->load->view('iwpviewmainpage'); 
		// $this->load->view('upload_form', array('error' => ' ' )); 
		 
      } 

- 
	  function userinfo()
	  {
		  $this->load->view('userinfoiwp'); 
	  }
	  
	  function loginview()
	  {
		     $this->load->view('loginpageiwp'); 
		  
	  }
	  
	  
	  function methodname(){
    $this->load->view('signupformiwp');
}
   function aboutusview()
	  {
		     $this->load->view('aboutusviewiwp'); 
		  
	  }
     
	 function feedback()
	  {
		     $this->load->view('feedbackiwp'); 
		  
	  }
	  
	/*  public function nameofstud()
	  {
		  $n=$this->input->post('name');
		
		  return $n;
	  }*/
	    
	 public function login_stud() { 
		//$sql =$db->query('SELECT * FROM signup where name='".$_POST['name']."' and password = '".$_POST['pass'].");
		// $this->db->get("signup"); 
		
		//$this->db->get_where('signup');		
		
		$n=$this->input->post('name');
		//define('x',$n);
		$x=$n;
		$pass=$this->input->post('pass');
		$this->db->select('password'); 
		$this->db->from('signup');   
		$this->db->where('password', $pass);
		$row= $this->db->get()->result();
//	 $row = get_object_vars($row);
		$x=$n;
		 //$this->session->set_flashdata('item', $x);
		
//print_r($row['password']);
//print_r($row->password);
//print_r($pass);

		$array = json_decode(json_encode($row), true);

		$roww=$array[0];
		$rowww=$roww['password'];

		//if($row['name']==$name&&$row['password']==$pass)
			if($rowww==$pass)
		{       $_SESSION['id']=$rowww;
				$_SESSION['name']=$n;
				
				//echo $roww2['coursename']; die;
				//if(isset($roww2['coursename']))
				
					$this->db->select('coursename'); 
					$this->db->from('courses');   
					$this->db->where('name', $n);
					$row2= $this->db->get()->result();
					//var_dump($row2);die;
					$ss=sizeof($row2);
					
					if($ss!=0){
						
				$array2 = json_decode(json_encode($row2), true);

				$roww2=$array2[0];
		
					$rowww2=$roww2['coursename'];
			
				$_SESSION['course']=$rowww2;
			echo "login successful welcome"."  $n";
			
			
		}}
		else
		{echo "failed to login";
		}
		
		
         $this->load->model('iwploginmodel');
			
         $data = array( 
            
            'name' => $this->input->post('name'),
			'password' => $this->input->post('pass') 
         ); 
		//	print_r($data);
	
         $this->iwploginmodel->insert($data); 
   
         $query = $this->db->get("login"); 
         $data['records'] = $query->result();	 
		 $etc['flag']=1;
        $this->load->view('iwpviewmainpage',$etc); 
		
		//return $x;
		
	
		
		
		
		
      } 
	  public function logout()
	  {
		  $this->session->sess_destroy();
		   unset($_SESSION['id']);
		   unset($_SESSION['name']);
		    unset($_SESSION['course']);
			// echo $_SESSION['course']."dgfgfdgd";
		   $this->load->view('iwpviewmainpage'); 
		
	  }
  
		public function signup_stud() { 
         $this->load->model('iwpsignupmodel');
			
         $data = array( 
            
            'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('pass'),
			'confirmpassword' => $this->input->post('passcon')
			
         ); 
		//	print_r($data);
	
         $this->iwpsignupmodel->insert($data); 
   
         $query2 = $this->db->get("signup"); 
         $data['records'] = $query2->result();

		 
       $this->load->view('iwpviewmainpage'); 
      } 
	   public function feedback_stud() { 
         $this->load->model('iwpfeedbackmodel');
			
         $data = array( 
            
            'q1' => $this->input->post('q1'),
			'q2' => $this->input->post('q2'),
			'q3' => $this->input->post('q3')
         ); 
		//	print_r($data);
	
         $this->iwpfeedbackmodel->insert($data); 
   
         $query3 = $this->db->get("feedback"); 
         $data['records3'] = $query3->result();

		 
        $this->load->view('iwpviewmainpage'); 
      } 
	  
	   function assign()
	  {
		   $this->load->view('assign');
	  }
	   public function assignsub() { 
         //$this->load->model('iwpassignmodel');
			
         $data = array( 
            
            '1' => $this->input->post('1'),
			
         ); 
	
		 print_r($data);die;
		//	print_r($data);
	
         $this->iwpfeedbackmodel->insert($data); 
   
         $query3 = $this->db->get("feedback"); 
         $data['records3'] = $query3->result();

		 
        $this->load->view('iwpviewmainpage'); 
      } 
	  
	  
	  
	  
	  
	  
	  function news()
	  {
		   $this->load->view('news');
	  }
	  function courseview()
	  {
		   $this->load->view('enrollview');
	  }
	  function enrollview1()
	  	  {			
		  $course="course1";
		 
		  $_SESSION['course']="course1";
		   $this->load->view('enrollview');		   
		    $this->load->model('iwpcourseenrollpmodel');	
			 $x = $_SESSION['name'];
			 $data = array( 
            
			'name'=>$x,
			'coursename' => $_SESSION['course']		
			
			 );
				
				
		 $this->iwpcourseenrollpmodel->insert($data);  
	}
	
		  function enrollview2()
	  {			  $course="course2";
	  $_SESSION['course']=$course;
		   $this->load->view('enrollview');		   
		    $this->load->model('iwpcourseenrollpmodel');	
				 $x = $_SESSION['name'];		
			 $data = array( 
            'name'=>$x,
			'coursename' =>  $_SESSION['course']		
			
			 );
						 
		 $this->iwpcourseenrollpmodel->insert($data);  
	}
	  
	  function quiz()
	  {
			$this->load->view('quiziwp');	
	  }
	 
	  function mailtest()
	  {$this->load->library('email');
		  
		  $this->load->helper('path');
	  $ci = get_instance();
$ci->load->library('email');
$config['protocol'] = "smtp";
$config['smtp_host'] = "ssl://smtp.gmail.com";
$config['smtp_port'] = "465";
$config['smtp_user'] = "meghamishra04@gmail.com"; 
$config['smtp_pass'] = "spaceshuttle4";
$config['charset'] = "utf-8";
$config['mailtype'] = "html";
$config['newline'] = "\r\n";
$config['validate'] = TRUE;

$ci->email->initialize($config);
	  
	 $this->email->from('meghamishra04@gmail.com', 'Megha');
    $this->email->to('meghamishra04@gmail.com');
    $this->email->subject('Email Test');
    $this->email->message('Testing the email class.');

	   $ci->email->send();
   if ($this->email->send()) {
    echo "you are luck!";
    } else {
    echo $this->email->print_debugger();
    }

	
	   
  }
		  
	function topics()
	{
		   $this->load->view('topics'); 
	}	
		  
	  
	  
   }


  ?>