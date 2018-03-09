<?php
class horseclub extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
				$this->load->helper('form');
        }

        public function index()
        {
		     $this->load->view('horseclub/index');
			 
                
        }

        
}
?>