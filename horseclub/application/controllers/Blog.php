<?php
class Blog extends CI_Controller {

        public function __construct()
        {
		parent::__construct();
                $this->load->model('blog_model');
                $this->load->helper('url_helper');
				$this->load->helper('form');
                $this->load->library('form_validation');
				$this->load->library('pagination');
				
        }

        public function index()
        {
		$config['base_url'] = base_url() .'index.php/Blog/index';
		$config['total_rows'] = $this->blog_model->get_blog_count();
		$config['per_page'] = 2;
              	$this->pagination->initialize($config);
              	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
             
              	if($this->session->userdata('isUserLoggedIn')){
				  
			$data['blog'] = $this->blog_model->fetch_blogs($config["per_page"], $page);
			$this->load->view('horseclub/blog',$data);
				 
		}
		else{
			redirect('login/index');
		}
                
        }
	public function edit_post($post_id)
	{
		$blog_item['post_item']=$this->blog_model->get_posts($post_id);
		if (empty($blog_item['post_item']))
		{
		   show_404();
		}
		//print_r($blog_item['post_item']);
		$blog_item['post_title'] = $blog_item['post_item']['post_title'];
		$blog_item['post_text'] = $blog_item['post_item']['post_text'];
		$blog_item['post_id'] = $blog_item['post_item']['post_id'];
		$this->load->view('horseclub/edit_post',$blog_item);
		//$this->load->index();
	}
	public function post($post_id=0)
        {
		if($post_id==0){
			$this->form_validation->set_rules('post_title', 'Title', 'required');
			$this->form_validation->set_rules('post_text', 'Text', 'required');
				 
			if($this->form_validation->run() == true){
				$this->blog_model->add_blog();
				echo"success create!!";
			}
			else{
				echo"please enter a value";
			}	
		}else{
			$this->blog_model->update_post($post_id);
			echo"success_update!!";
		}
		redirect('/blog/index', 'refresh');
		  	
       }
	public function delete($post_id)
        {
		$this->blog_model->delete_post($post_id);
		echo"success!!";
		redirect('/blog/index', 'refresh');
		   
	}
  }
?>
