<?php  
  
class Login_model extends CI_Model {  
  
    public function log_in_correctly() {  
  
        $this->db->where('email', $this->input->post('email'));  
        $this->db->where('role', $this->input->post('role'));  
        $this->db->where('password', $this->input->post('password'));  
        $query = $this->db->get('users');  
  
        if ($query->num_rows() == 1)  
        {  
            return true;  
        } else {  
            return false;  
        }  
  
    }  
  
      
}  
?>  