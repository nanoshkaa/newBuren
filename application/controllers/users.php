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

	public function show_my_profile (){	 
		$user_id = $this->session->userdata('user_id');
		$this->load->model('User');
		$user = $this->User->show_user($user_id); 
		$this->load->view('my_profile.php',['user'=> $user]);
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
	public function filters (){
		 $ddd = $this->input->post();
		 $this->load->model('user');
         $res = $this->user->filter($ddd);
         $this->load->view('profile',['filters'=> $res]);
		
	}
        public function sign_up(){

          $this->form_validation->set_rules('name','name','required|alpha|min_length[3]|max_length[25]|trim',array(
            'required'=>'You must eneter data to field',
            'alpha'=>'please enter only letters',
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
                $all_users = $this->user->get_all_user();
				$this->load->view('profile',['all_users'=> $all_users]);		
            }
        }

            


}

function add_profile_img() {
		// var_dump($this->input->post());
		// var_dump($_FILES);
		// die();
			$errors = [];
			
				if ($_FILES["image"]["tmp_name"]) {

		$target_dir = "./assets/image/profile/";
					$target_file = $target_dir . basename($_FILES["image"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
				    $check = getimagesize($_FILES["image"]["tmp_name"]);
				    if($check !== false) {
				        $uploadOk = 1;
				    } else {
				        $errors[] = "<p>File is not an image.</p>";
				        $uploadOk = 0;
				    }
					// Check if file already exists
					if (file_exists($target_file)) {
					    $errors[] = "<p>Sorry, file already exists.</p>";
					    $uploadOk = 0;
					}
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
						// echo "inside the not image validation";
					    $errors[] = "<p>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
					    $uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						$this->session->set_flashdata('errors', $errors);
						//redirect('../users/add_profile_img');
						$this->load->view('my_profile.php',$errors);
					// if everything is ok, try to upload file
					} else {
					    if (copy($_FILES["image"]["tmp_name"], $target_file)) {
					        $errors[] = "<p style='color: green'>The file ". basename( $_FILES["image"]["name"]). " has been succesfully uploaded.</p>";
							$errors[] =  "<p style='color: green'>New Image has succesfully been added</p>";
							$this->load->model('user');
						$this->user->add_img($this->input->post(), $target_file);
							$this->session->set_flashdata('errors', $errors);
							$this->load->view('my_profile.php',$errors);
							//redirect('../users/add_profile_img');
					    } else {
					        $errors[] = "<p>Sorry, there was an error uploading your file.</p>";
							$this->session->set_flashdata('errors', $errors);
							$this->load->view('my_profile.php',$errors);
							//redirect('../users/add_profile_img');
					    }
					}
				} else {
					$errors[] = '<p style="color: red">A image file is required</p>';
					$this->session->set_flashdata('errors', $errors);
					$this->load->view('my_profile.php',$errors);
					//redirect('../users/add_profile_img');
				}
			}
		 
	

	// public function show($id){
	// 	$this->load->model('user');
	// 	$user = $this->user->show_user($id);
	// 	$this->load->view('users/show.php',['user' => $user]);
	// }
	// public function logIn(){
	// 	 $post = $this->input->post(NULL , TRUE); 
	// 	 $this->load->model('user');
	// 	 $user = $this->user->get_user($post);

	// 	if($user){
	// 	$session_data=array
	// 	(
	// 		'id'=>$user['id'],
	// 		'email'=>$user['email']
	// 	);
	// 	$this->session->set_userdata(['name'=>$user['name']]);
	// 	//$this->session->set_userdata($session_data);
	// 	$users = $this->user->get_all_user();	
	// 	$this->load->view('users/main.php',['users' => $users]);
	// }
	// else
	// {
	// 	$errors['errors']="invalid email or password";
	// 	$this->load->view('users/index.php',$errors);
	// }
			
 		 

	// }


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
        // var_dump($user_data);
        // die();
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
