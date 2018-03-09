<?php
class Blog_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		public function get_blog_count()
		{
			$this->db->like('user_id', $this->session->userdata('userId'));
            $this->db->from('blog');
			$count_rows = $this->db->count_all_results();
            return $count_rows;
		}
		public function fetch_blogs($limit, $start)
        {   
           
            //inner join with users
		    $this->db->select('*');    
			$this->db->from('blog');
			$this->db->join('users', 'blog.user_id = users.user_id');
			$this->db->limit($limit, $start);
			$query = $this->db->get_where('', array('blog.user_id' => $this->session->userdata('userId')));
			if ($query->num_rows() > 0) {
				return $query->result_array();
			}
            
        }
		public function add_blog()
		{
			$data = array(
					'post_title' => strip_tags($this->input->post('post_title')),
					'post_text' => strip_tags($this->input->post('post_text')),
					'user_id' => strip_tags($this->session->userdata('userId'))
			);
			$this->db->insert('blog', $data);
			return true;
		}
		public function delete_post($post_id){
			
		   $this -> db -> where('post_id', $post_id);
           $this -> db -> delete('blog');
		   return true;
		}
		public function get_posts($id)
        {   
            $query = $this->db->get_where('blog', array('post_id' => $id));
            return $query->row_array();
        }
		public function update_post($id)
        {
            $data = array(
			    'post_title' => $this->input->post('form_post_title'),
				'post_text' => $this->input->post('form_post_text') 
				 
			);
			$this->db->where('post_id', $id);
			$this->db->update('blog', $data);
			return true;
        }
		
}

?>