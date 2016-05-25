<?php

class Category_Model_Service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('category/category_model');
    }

    function load_category_tree() {

        $query = $this->db->query("
                                    SELECT t1.cat_id as id, t1.name AS category
                                    FROM categories AS t1 
                                    where t1.parent is null");
        
        return $query->result();
        
    }
    function sub_category($parentId)
    {
         $query = $this->db->query("SELECT cat_id as id, name FROM categories WHERE parent = $parentId");
         return $query->result();
    }

}
