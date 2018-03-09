<?php
class Contact extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
				$this->load->helper('form');
                $this->load->library('form_validation');
				
        }

        public function index()
        {
              if($this->session->userdata('isUserLoggedIn')){
                 $this->load->view('horseclub/contacts');
			  }
			  else{
				  redirect('login/index');
			  }
                
        }
		

  }
?>