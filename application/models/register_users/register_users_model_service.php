<?php

class Register_Users_Model_Service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('register_users/register_users_model');
    }

    /**
     * insert new registered user
     * @param object $register_users_model Input model
     * @return integer
     */
    function register_user($register_users_model) {

        $this->db->insert('users', $register_users_model);
       // echo $this->db->insert_id();
    }

    /**
     * check email existence
     * @param varchar $email taken from register form
     * @return boolean true if exists else false 
     */
    function check_email($email) {
        $this->db->from('users');
        $this->db->where('email', $email);
        $query = $this->db->get();
        $res = $query->row();
        if (empty($res))
            return true;
        return false;
    }

    /**
     * authenticatiing a user
     * @param varchar $email requested
     * @param vachar $password requested
     * @param int $phone requested
     * @return row $res 
     */
    function authenticate($email, $password, $phone) {
       
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->row();
    }

}
