<?php
class Login_model extends CI_Model {

        public function __construct()
        {
             $this->load->database();
        }
		
		public function check_user($email,$pass)
		{
			 $sql = "select * from users where email = '".$email."' and password ='".$pass. "'";
			 $query= $this->db->query($sql);
             return $query->result_array();
        
		}
		public function insert($data = array()) 
		{
          //insert user data to users table
          $insert = $this->db->insert('users', $data);
          //return the status
          if($insert){
            return $this->db->insert_id();;
          }else{
            return false;
          }
        }
		
		
}

?>