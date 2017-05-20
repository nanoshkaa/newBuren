<?php
class user extends CI_Model{
	public function __construct()
{
	parent::__construct();
}
	
	public function is_user_exist($data)
{
	
	$this->db->select('email');
	$this->db->from('users');
	$this->db->where('email',$data);
	$result=$this->db->get();
	if ($result->num_rows()==1) 
	{
		return true;
	}
	else
	{
		return false;
	}

}
	public function get_all_user(){
		$this->db->select('*');
		$this->db->from('users, situation , family_info , fotos');
		$this->db->group_by ('foto_profile');
		$query = $this->db->get(); ;
		
		return $query->result_array();
	}
	public function filter($data){
		// var_dump($data);
		// die();
			if (isset($data['guest'])) {
			$this->db->like('guest',$data['guest']);
			}
		  	if (isset($data['host'])){
		   	$this->db->like('host',$data['host']);
		    }
		   	 if (isset($data['total_n'])) {
			$this->db->like('total_n',$data['total_n']);
			}
			if (isset($data['location'])) {
			$this->db->like('location',$data['location']);
			}
			$this->db->group_by ('email');
			$filter = $this->db->get('users, situation , family_info , fotos');
		 // var_dump($filter);
		 // die();
    return $filter->result_array();
	}
	// else  if (isset($data['guest'])) {
	// 	$this->db->like('guest',$data['guest']);
	// 		$this->db->like('total_n',$data['total_n']);
	// 		$this->db->like('location',$data['location']);
	// 		$this->db->group_by ('email');
	// 		$filter = $this->db->get('users, situation , family_info , fotos');
	// 	 // var_dump($filter);
	// 	 // die();
 //    return $filter->result_array();
	// }
//}
	public function get_user($post){
		$email = ($post['email']);
		$password = ($post['password']);
		$query = "SELECT * FROM users where email = '{$email}' and password = '{$password}'";
		return $this->db->query($query)->row_array();
	}
	public function chick($post){

		$email = ($post['email']);
		$query = "SELECT * FROM users where email = '{$email}'";

		return $this->db->query($query)->row_array();
	}
	public function show_user($id) {
		$query = "SELECT * FROM users Where id =? ";
		$values = [$id];
		return $this->db->query($query, $values)->result_array();
	}
	public function insert_user($post){

		$query = "INSERT INTO users(name, email,password,age_user,telphon_number, gender_user, location, describtion, profile_type, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?,?, NOW(),NOW())";
		$values = [$post['name'],$post['email'],$post['password'],$post['age'],$post['telephon_number'],$post['gender_user'],$post['location'],$post['textarea'],$post['profile_type']];
		return $this->db->query($query , $values);

	}
	public function insert_address($post){

		$user_id = $this->session->userdata('user_id');
		if ($_POST) {
		$query1 = "INSERT INTO address(street, postcode,city,created_at, updated_at, users_id) VALUES (?,?,?, NOW(),NOW(),?)";
		$values = [$post['street'],$post['postcode'],$post['city'],$user_id];
		return $this->db->query($query1 , $values);}
	}

	public function insert_situation($post){
		$user_id = $this->session->userdata('user_id'); 
		if ( isset($post['gast']) && isset($post['host'])) {
			$data=array
           		 (
                'guest'=>$post['gast'],
                'host'=>$post['host'],
                'n_guests'=>$post['guests'],
                'users_id'=>$user_id,
                'created_at'=>date('Y/m/d h:i:sa'),
				'updated_at'=>date('Y/m/d h:i:sa')
            	);
			}

			else if ( isset($post['gast'])) {
			$data=array
           		 (
                'guest'=>$post['gast'],
                'n_guests'=>$post['guests'],
             	'users_id'=>$user_id,
                'created_at'=>date('Y/m/d h:i:sa'),
				'updated_at'=>date('Y/m/d h:i:sa')

            );

		}

        else {
			$data=array
            (
                'host'=>$post['host'],
                'n_guests'=>$post['guests'],
                'users_id'=>$user_id,
                'created_at'=>date('Y/m/d h:i:sa'),
				'updated_at'=>date('Y/m/d h:i:sa')
            );
		}
			$this->db->insert('situation',$data);
	}
	public function insert_lang($post){
		$user_id = $this->session->userdata('user_id');
		// var_dump($post);
		// die(); 
		if (isset($post['nederlands'])) {
			$this->db->set('dutch',$post['nederlands']);
			}

			if (isset($post['turquish'])) {
				$this->db->set('turquish',$post['turquish']);
			}

        if (isset($post['polsk'])) {
			$this->db->set('polsk',$post['polsk']);
			}
		if (isset($post['english'])) {
			$this->db->set('english',$post['english']);
			}
		if (isset($post['arabic'])) {
			$this->db->set('arabic',$post['arabic']);
			}
		if (isset($post['russian'])) {
			$this->db->set('russian',$post['russian']);
			}
		if (isset($post['other'])) {
			$this->db->set('other',$post['other']);
			}
		if (isset($post['tijrijna'])) {
			$this->db->set('tijrijna',$post['tijrijna']);
			}
		if (isset($post['faresi'])) {
			$this->db->set('faresi',$post['faresi']);
			}
		if (isset($post['spanish'])) {
			$this->db->set('spanish',$post['spanish']);
			}
		if (isset($post['french'])) {
			$this->db->set('french',$post['french']);
			}
		$this->db->set('users_id',$user_id);	
		$this->db->insert('languages');
			
	}
	public function insert_family($post){
		$user_id = $this->session->userdata('user_id');
 
		if (isset($post['family_sum'])) {
			$this->db->set('total_n',$post['family_sum']);
			}
		$this->db->set('users_id',$user_id);
		$this->db->insert('family_info');
			
	}

	public function add_img($post,$img) {
		$user_id = $this->session->userdata('user_id');
       $query = "INSERT INTO fotos (foto_profile, created_at, updated_at, users_id) VALUES (?, NOW(), NOW(),?)";
       $values = [$img, $this->session->userdata('user_id')];
        $this->db->query($query, $values);
     }
    
}
   


?>
