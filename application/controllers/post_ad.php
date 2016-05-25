<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Post_Ad extends CI_Controller {
    
    function loadTree()
    {
        
         $data= array("content"=>'template/treeview',"sideNavBar"=>null);
        //$this->load->view('welcome_message');
        $status = $this->session->userdata('status');
        //echo $status;
         
        if($status==1)
        {
        $this->load->view('template/main_template_logged', $data);
        }
        else
        {
            $this->load->view('template/main_template', $data);
        }
    }
    
    
    
}
