<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('category/category_model');
        $this->load->model('category/category_model_service');
    }

    /**
     * loding the unlogged homepage
     */
    function index() {
$this->load->helper('array');
        $category_model_service = new Category_Model_Service();
        $result = $category_model_service->load_category_tree();
        //$re= $category_model_service->sub_category('1');


        $data['content'] = 'template/home_content';
        $data['sideNavBar'] = 'template/sideNavBar';
        $data['categories'] = $result;
       
        foreach ($result as $parent)
        {
            $data[$parent->category]=array();
           
            
            
            $children = $category_model_service->sub_category($parent->id);
           
            foreach($children as $child)
            {
                array_push($data[$parent->category], $child->name);
                
               
            }
        }

        
        

        // $data = array("content" => 'template/home_content', "sideNavBar" => 'template/sideNavBar',"categories"=>$result);
        //$this->load->view('welcome_message');
        if ($this->session->userdata('status' == 1)) {
            $this->load->view('template/main_template_logged', $data);
        } else {
            $this->load->view('template/main_template', $data);
        }
    }

}
