<?php

class Register_Users_model extends CI_Model {
    var $id;
    var $fullName;
    var $address;
    var $email;
    var $nic;
    var $mobileNumber;
    var $password;
    
    function setFullName($fullName) {
        $this->fullName = $fullName;
    }

    function getFullName() {
        return $this->fullName;
    }

        function setId($id) {
        $this->id = $id;
    }


    function setAddress($address) {
        $this->address = $address;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNic($nic) {
        $this->nic = $nic;
    }

    function setMobileNumber($mobileNumber) {
        $this->mobileNumber = $mobileNumber;
    }

    function setPassword($password) {
        $this->password = $password;
    }

        function getId() {
        return $this->id;
    }

    function getAddress() {
        return $this->address;
    }

    function getEmail() {
        return $this->email;
    }

    function getNic() {
        return $this->nic;
    }

    function getMobileNumber() {
        return $this->mobileNumber;
    }

    function getPassword() {
        return $this->password;
    }


}


