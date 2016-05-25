<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_User extends CI_Controller {
    function __construct() {
        parent::__construct();
       
       $this->load->model('register_users/register_users_model');
       $this->load->model('register_users/register_users_model_service');
    }
    
    
    function load_login_page()
    {
         $data= array("content"=>'template/login',"sideNavBar"=>NULL);
         $this->load->view('template/main_template', $data);
    }
    function authenticate_user()
    {
        $register_users_model = new Register_Users_model();
        $register_users_model_service = new Register_Users_Model_Service();
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
//        $register_users_model->setEmail($email);
//        $register_users_model->setPassword($password);
        
        $result=$register_users_model_service->authenticate($email, $password, NULL);
       // echo count($result);
//        echo $email;
        
         if(count($result)==1)
         {
             $this->session->set_userdata('status', '1');
             $this->session->set_userdata('name', $result->fullName);
             redirect('/login_user/logged_in_home');
             
//             $data= array("content"=>'template/home_content',"sideNavBar"=>"template/sideNavBar","name"=>$result->fullName);
//             $this->load->view('template/main_template_logged', $data);
         }
        
        
        
    }
    
    
    function logged_in_home()
    {
        if( $status = $this->session->userdata('status')==1)
        {
        $data= array("content"=>'template/home_content',"sideNavBar"=>"template/sideNavBar","name"=>$this->session->userdata('name'));
        $this->load->view('template/main_template_logged', $data);
        }
        else
        {
            redirect(base_url());
        }
    }
    
            
    function is_logged_in()
    {
        if( $this->session->userdata('status'==1))
        {
            return true;
            
        }
        else
        {
            return false;
        }
    }
    
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url());
    }
}