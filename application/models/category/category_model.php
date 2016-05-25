<?php

class Category_Model extends CI_Model {

    var $cat_id;
    var $name;
    var $parent;
    var $description;
    var $status;

    function setCat_id($cat_id) {
        $this->cat_id = $cat_id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setParent($parent) {
        $this->parent = $parent;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function getCat_id() {
        return $this->cat_id;
    }

    function getName() {
        return $this->name;
    }

    function getParent() {
        return $this->parent;
    }

    function getDescription() {
        return $this->description;
    }

    function getStatus() {
        return $this->status;
    }

}
