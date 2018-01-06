<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_email extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_positif(){
     if(date('H:i') < "09:30"){
     $this->db->where('tgl_post >=',date('Y-m-d H:i',strtotime("yesterday 17:00")));
     //$this->db->where('tgl_berita',date('Y-m-d'));
     }else{
     $this->db->where('tgl_berita',date('Y-m-d'));
     }
    $this->db->where('tone_berita',1);
    return $this->db->get('isi_berita');
  }
  function get_negatif(){
    if(date('H:i') < "09:30"){
     $this->db->where('tgl_post >=',date('Y-m-d H:i',strtotime("yesterday 17:00")));
     //$this->db->where('tgl_berita',date('Y-m-d'));
     }else{
     $this->db->where('tgl_berita',date('Y-m-d'));
     }
    $this->db->where('tone_berita',-1);
    return $this->db->get('isi_berita');
  }
  function get_netral(){
    if(date('H:i') < "09:30"){
     $this->db->where('tgl_post >=',date('Y-m-d H:i',strtotime("yesterday 17:00")));
     //$this->db->where('tgl_berita',date('Y-m-d'));
     }else{
     $this->db->where('tgl_berita',date('Y-m-d'));
     }
    $this->db->where('tone_berita',0);
    return $this->db->get('isi_berita');
  }

}