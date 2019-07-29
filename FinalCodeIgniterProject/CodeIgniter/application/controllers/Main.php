<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Main extends CI_Controller {  
  
    public function index()  
    {  
        $this->login();
    }  
  
    public function login()  
    {  
        $this->load->view('header');  
        $this->load->view('nav');  
        $this->load->view('login_view');  
        $this->load->view('footer');  
    }  
  
    public function signin()  
    {  
        $this->load->view('header');  
        $this->load->view('nav');  
        $this->load->view('signin');  
        $this->load->view('footer');  
    }  
  
    public function data()  
    {  
        if ($this->session->userdata('currently_logged_in'))   
        {  
            $this->load->view('header');  
            $this->load->view('valid_nav');  
            $this->load->view('content');  
            $this->load->view('footer');  
        } else {  
            //redirect('Main/invalid'); 
            $this->load->view('header');  
            $this->load->view('nav');  
            $this->load->view('invalid');  
            $this->load->view('footer');  
        }  
    }  
  
    public function invalid()  
    {  
        $this->load->view('header');  
            $this->load->view('nav');  
            $this->load->view('invalid');  
            $this->load->view('footer');   
    }  
  
    public function login_action()  
    {  
        $this->load->helper('security');  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('email', 'Email:', 'required|trim|xss_clean|callback_validation');  
        $this->form_validation->set_rules('password', 'Password:', 'required|trim');  
  
        if ($this->form_validation->run())   
        {  
            $data = array(  
                'email' => $this->input->post('email'),  
                'currently_logged_in' => 1  
                );    
                    $this->session->set_userdata($data);  
                redirect('Main/data');  
        }   
        else {  
            $this->load->view('header');  
            $this->load->view('nav');  
            $this->load->view('login_view');  
            $this->load->view('footer');  
        }  
    }  
  
    public function signin_validation()  
    {  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|is_unique[users.email]');  
  
        $this->form_validation->set_rules('password', 'Password', 'required|trim');   
  
        $this->form_validation->set_message('is_unique', 'username already exists');  
  
    if ($this->form_validation->run())  
        {  
            echo "Welcome, you are logged in.";  
         }   
            else {  
              
            $this->load->view('header');  
            $this->load->view('nav');  
            $this->load->view('signin');  
            $this->load->view('footer');  
        }  
    }  
  
    public function validation()  
    {  
        $this->load->model('login_model');  
  
        if ($this->login_model->log_in_correctly())  
        {  
  
            return true;  
        } else {  
            $this->form_validation->set_message('validation', 'Incorrect username/password.');  
            return false;  
        }  
    }  
  
    public function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('Main/login');  
    }   
  
    public function signup()  
    {  
        
        $data = array(
            'name' => $this->input->post('name'), 
            'email' => $this->input->post('email'), 
            'password' => $this->input->post('password'), 
            'role' => $this->input->post('role')
        );
        $this->db->insert('users', $data);
        
        $this->load->helper('security');  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('email', 'Email:', 'required|trim|xss_clean|callback_validation');  
        $this->form_validation->set_rules('password', 'Password:', 'required|trim');  
  
        if ($this->form_validation->run())   
        {  
            $data = array(  
                'email' => $this->input->post('email'),  
                'currently_logged_in' => 1  
                );    
                    $this->session->set_userdata($data);  
                redirect('Main/data');  
        }   
        else {  
            $this->load->view('header');  
            $this->load->view('nav');  
            $this->load->view('login_view');  
            $this->load->view('footer');  
        } 
    }  
    public function addProduct() {
        $this->load->view('header');
        $this->load->view('valid_nav');
        $this->load->view('add_product');
        $this->load->view('footer');
    }  
    public function addProductDetails() {
        $productName = $_POST['productName']; 
        $price = $_POST['productPrice']; 
        $details = $_POST['productDetails']; 
        $filetemp = $_FILES['productImage']['tmp_name'];
        $filename = $_FILES['productImage']['name'];
        $filetype = $_FILES['productImage']['type'];
        $filepath = "img/".$filename;
        
        
        
        $data = array(
            'productName' => $productName, 
            'price' => $price, 
            'details' => $details, 
            'filetemp' => $filetemp,
            'filename' => $filename,
            'filetype' => $filetype,
            'filepath' => $filepath
        );
        
        $config['upload_path']          = './img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('productImage'))
        {
            redirect("Main/addProduct");
        }
        else
        {                
            redirect("Main/productList");
        }
    }
    public function productList(){
        $this->load->model("productmodel", "a");
        $this->load->view('header');
        $this->load->view('valid_nav');
        $this->load->view('products');
        $this->load->view('footer');
    }
    public function product_detail(){
        $id = $_GET['id'];
        $this->load->model("productmodel", "a");
        $this->load->view('header');
        $this->load->view('valid_nav');
        $this->load->view('product_detail');
        $this->load->view('footer');
    }
  
}  
?>  