<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_program_media extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_unit(){
    return $this->db->get('unit');
  }

  function insert($data){
    $this->db->insert('program', $data);
  }

}
