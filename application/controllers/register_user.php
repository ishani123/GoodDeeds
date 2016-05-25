<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register_User extends CI_Controller {

    function __construct() {
        parent::__construct();
       
       $this->load->model('register_users/register_users_model');
       $this->load->model('register_users/register_users_model_service');
    }

    /**
     * add new user
     * @return boolean true success ,false error
     */
    function add_user(){
        $register_users_model = new Register_Users_model();
        $register_users_model_service = new Register_Users_Model_Service();
        
        $name='hh';
        
        
        $register_users_model->setFullName($this->input->post('fullName', TRUE));
        $register_users_model->setAddress($this->input->post('address', true));
        $register_users_model->setNic($this->input->post('nic', true));
        $register_users_model->setEmail($this->input->post('email', true));
        $register_users_model->setMobileNumber($this->input->post('phone', true));
        $register_users_model->setPassword($this->input->post('password', true));
        
       //$register_users_model->setName($name);  
        
     $register_users_model_service->register_user($register_users_model); 
      //echo $this->load->lastquery();
       
       //$this->db->query("insert into users values(152,'$s','$name','w','s',1,'s')");
        
        $s=$this->input->post('password');
       
        redirect('/login_user/logged_in_home');
         
       
        
    }
    /**
     * loding the register form page
     */
    
    function load_register_page()
    {
       // $data['sideNavBar']='template/sideNavBar';
        $data= array("content"=>'template/register',"sideNavBar"=>NULL);
        
        //$this->load->view('welcome_message');
        $this->load->view('template/main_template', $data);
    }
    
    
    
    
    

}
