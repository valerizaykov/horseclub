<?php
class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('login_model');
                $this->load->helper('url_helper');
				$this->load->helper('form');
                $this->load->library('form_validation');
				 
        }
        public function index(){
          $data = array();
          $data['title'] = 'Login Form';
          if($this->session->userdata('success_msg')){
			$data['success_msg'] = $this->session->userdata('success_msg');
			$this->session->unset_userdata('success_msg');
          }
          if($this->session->userdata('error_msg')){
			$data['error_msg'] = $this->session->userdata('error_msg');
			$this->session->unset_userdata('error_msg');
          }
		  if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
				$email=$this->input->post('email');
				$pass=md5($this->input->post('password'));
                $checkLogin = $this->login_model->check_user($email,$pass);
				
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin[0]['user_id']);
					$this->session->set_userdata('userName',$checkLogin[0]['user_name']);
                    redirect('horseclub/index/');
                }
				else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
          }
          //load the view
          $this->load->view('horseclub/login' ,$data);
		}
		public function logout(){
			$this->session->unset_userdata('isUserLoggedIn');
			$this->session->unset_userdata('userId');
			$this->session->unset_userdata('userName');
			$this->session->sess_destroy();
			redirect('horseclub/index');
		}
		public function registration(){
			$data = array();
			$userData = array();
			$data['title'] = 'User Registration';
			if($this->input->post('regisSubmit')){
				$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('password', 'password', 'required');
				$this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

				$userData = array(
                'user_name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')) 
                  
				);

				if($this->form_validation->run() == true){
					$insert = $this->login_model->insert($userData);
					if($insert){
						$this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
						redirect('login/index');
					}else{
						$data['error_msg'] = 'Some problems occured, please try again.';
					}
				}
			}
        $data['user'] = $userData;
        //load the view
        $this->load->view('horseclub/registration', $data);
	 }
}
?>