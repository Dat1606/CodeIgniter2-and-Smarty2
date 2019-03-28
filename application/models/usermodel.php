<?php

class Usermodel extends CI_Model
{
    public function __construct(){
      parent::__construct();
    }

    public function list_user(){
      $query = $this->db->limit(5)->get('users');
      return $query->result_array();
    }
}