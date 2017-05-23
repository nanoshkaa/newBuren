<?php
class Users extends CI_Controller{
	public function __construct()
	{
    parent::__construct();
    $this->load->model('user');
    $this->load->helper(array('form','url'));
    $this->load->library('session');
    $this->load->library('form_validation');
	}
	public function index (){
		$this->load->view('main.php');
	}
	public function sign_out (){
		$this->session->sess_destroy();
		$this->load->view('main.php');
	}
	public function show_sign_in (){
		$this->load->view('sign-in.php');
	}
	public function show_sign_up (){
		$this->load->view('signin.php');
	}
	public function show_testimonial (){
		$this->load->view('testimonial.php');
	}
	public function events (){
		$this->load->view('events.php');
	}

	public function show_my_profile (){	 
		$user_id = $this->session->userdata('user_id');
		$this->load->model('User');
		$user = $this->User->show_user($user_id);
		$errors = array();
		$this->load->view('my_profile.php',['user'=> $user]+['errors'=>$errors] );
	}
	public function show_user_profile($id){
		$this->load->model('User');
		$user = $this->User->show_user($id);
		$this->load->view('user_profile.php',['user'=> $user]);
	}
	public function show_profile (){	 
		$all_users = $this->user->get_all_user();
		$this->load->view('profile',['all_users'=> $all_users]);
	}
	public function faq (){
		$this->load->view('faq.php');
	}
	public function contact (){
		$this->load->view('contact.php');
	}
	public function send_contact (){
	$to = "ah.alhowidi@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    //$last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $_POST['message'];
    $message2 = "Here is a copy of your message " .$_POST['message'];
	$headers = "From:" . $from . "\r\n";
	$headers2 = "From:" . $to . "\r\n";

    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
		$this->load->view('contact.php');
	}
	public function filters (){
		 $ddd = $this->input->post();
		 $this->load->model('user');
         $res = $this->user->filter($ddd);
         $this->load->view('profile',['filters'=> $res]);
		
	}
    public function sign_up(){

      $this->form_validation->set_rules('name','name','required|min_length[3]|max_length[25]',array(
        'required'=>'You must eneter data to field',
        'min_length[3]'=>'the name must at least 3 letters'
    ));
        $this->form_validation->set_rules('email','email','required|trim|valid_email',array(
        'required'=>'You must eneter data to field',
        'valid_email'=>'please enter valid email',
    ));
        $this->form_validation->set_rules('password','password','required|min_length[3]|max_length[15]|trim',array(
        'required'=>'You must eneter data to field',        
        'min_length[8]'=>'the name must at least 8 letters'
    ));
        $this->form_validation->set_rules('conf_password','conf_password','required|min_length[3]|max_length[15]|trim|matches[password]',array(
        'required'=>'You must eneter data to field',
        'min_length[8]'=>'the name must at least 8 letters',
        'matches[password]'=>'no match'
    ));
        $this->form_validation->set_rules('textarea','textarea','required|min_length[3]',array(
        'required'=>'You must eneter data to field',
    ));
    if ($this->form_validation->run()==false) 
    {  
        $this->load->view('signin');
    }
    else
    {
        $data=array
        (
            'name'=>$this->input->post('name',true),
            'email'=>$this->input->post('email',true),
            'password'=>$this->input->post('password',true)
        );
        if ($this->user->is_user_exist($data['email'])) 
        {
            $message['errors']='you are already exist';
            $this->load->view('signin',$message);
        }
        else
        {
            $data = $this->input->post(NULL,true);
            $this->load->model('user');
            $this->user->insert_user($data);
            $user_info = $this->user->get_user($data);
            $user = array(
                'name'=>$user_info['name'],
            	'email'=>$user_info['email'],
            	'user_id'=>$user_info['user_id'],
            	'logged_in'=> TRUE
            );
            $this->session->set_userdata($user);
            $this->user->insert_address($data);
            $this->user->insert_situation($data);
            $this->user->insert_lang($data);
            $this->user->insert_family($data);
            $this->user->add_img();
            $all_users = $this->user->get_all_user();
			$this->load->view('profile',['all_users'=> $all_users]);		
        }
        }
    }
	public function add_profile_img() {
		$errors = [];			
			if ($_FILES["image"]["tmp_name"]) {

		$target_dir = "./assets/image/profile/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		    $check = getimagesize($_FILES["image"]["tmp_name"]);
		    if($check !== false) {
		        $uploadOk = 1;
		    } else {
		        $errors[] = "<p style='color: red'>File is not an image.</p>";
		        $uploadOk = 0;
		    }
			if (file_exists($target_file)) {
			    $errors[] = "<p style='color: red'>Sorry, file already exists.</p>";
			    $uploadOk = 0;
			}
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			    $errors[] = "<p style='color: red'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
			    $uploadOk = 0;
			}
			if ($uploadOk == 0) {
				$this->session->set_flashdata('errors', $errors);
				$user_id = $this->session->userdata('user_id');
				$this->load->model('User');
				$user = $this->User->show_user($user_id); 
				$this->load->view('my_profile.php',['user'=> $user]+['errors'=>$errors] );
			} else {
			    if (copy($_FILES["image"]["tmp_name"], $target_file)) {
			        $errors[] = "<p style='color: green'>The file ". basename( $_FILES["image"]["name"]). " has been succesfully uploaded.</p>";
					$errors[] =  "<p style='color: green'>New Image has succesfully been added</p>";
					$this->load->model('user');
				$this->user->update_pic($this->input->post(), $target_file);
					$user_id = $this->session->userdata('user_id');
				$this->load->model('User');
				$user = $this->User->show_user($user_id); 
				$this->load->view('my_profile.php',['user'=> $user]+['errors'=>$errors] );;
			    } else {
			        $errors[] = "<p>Sorry, there was an error uploading your file.</p>";
					$user_id = $this->session->userdata('user_id');
				$this->load->model('User');
				$user = $this->User->show_user($user_id); 
				$this->load->view('my_profile.php',['user'=> $user]+['errors'=>$errors] );
			    }
			}
		} else {
			$errors[] = '<p style="color: red">An image file is required</p>';
				$user_id = $this->session->userdata('user_id');
				$this->load->model('User');
				$user = $this->User->show_user($user_id); 
				$this->load->view('my_profile.php',['user'=> $user]+['errors'=>$errors] );
		}
	}
			//to do
		/*function edit_profile($id) {
	        $result = $this->admins->get_profile($id);
	        $boxes = $this->boxes_name();
	        $this->load->view('/', array('product' => $result, 'boxes' => $boxes));
    		}
		function remove_profile($id) {
		    $this->admins->remove_profile_by_id($id);
		    redirect('../.././.');
		    }*/
	public function sign_in(){
		$data=array
		(
			'email'=>$this->input->post('email',true),
			'password'=>$this->input->post('password',true)

		);
	$user_info=$this->user->get_user($data);
	if ($user_info){
	          $user=array
	          (
	            'name'=>$user_info['name'],
	            'email'=>$user_info['email'],
	            'user_id'=>$user_info['user_id'],
	            'logged_in'=> TRUE
	            );	             
	    $this->session->set_userdata($user);
		$all_users = $this->user->get_all_user();
		$this->load->view('profile',['all_users'=> $all_users]);
	}
	else
	{
		$message['errors']="invalid email or password";
		$this->load->view('sign-in',$message);
	}
    } 
}
?>
