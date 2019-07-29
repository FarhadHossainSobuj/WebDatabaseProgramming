<?php  
  
class Singup_model extends CI_Model {  
  
    public function sign_in_correctly() {  
  
        $data = array(
            'name' => $this->input->post('name'), 
            'email' => $this->input->post('email'), 
            'password' => $this->input->post('password'), 
            'role' => $this->input->post('role')
        );
        $query = $this->db->insert('users', $data);  
  
//        redirect("main/data");
  
    }    
      
}  
?>  