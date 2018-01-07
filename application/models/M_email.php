<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_email extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
function get_berita_today_kemenristekdikti(){
  if(date('H:i') < "09:30"){
      $this->db->where('tgl_post >=',date('Y-m-d H:i',strtotime("yesterday 17:00")));
      //$this->db->where('tgl_berita',date('Y-m-d'));
      }else{
      $this->db->where('tgl_berita',date('Y-m-d'));
      }
      $this->db->where('jenis_berita = "Kemenristekdikti"');
  $this->db->order_by('tgl_post', 'desc');
  return $this->db->get('isi_berita');
}

function get_berita_today_nonkemenristekdikti(){
  if(date('H:i') < "09:30"){
      $this->db->where('tgl_post >=',date('Y-m-d H:i',strtotime("yesterday 17:00")));
      //$this->db->where('tgl_berita',date('Y-m-d'));
      }else{
      $this->db->where('tgl_berita',date('Y-m-d'));
      }
      $this->db->where('jenis_berita = "Non-Kemenristekdikti"');
  $this->db->order_by('tgl_post', 'desc');
  return $this->db->get('isi_berita');
}


  function get_positif(){
     if(date('H:i') < "09:30"){
     $this->db->where('tgl_post >=',date('Y-m-d H:i',strtotime("yesterday 17:00")));
     //$this->db->where('tgl_berita',date('Y-m-d'));
     }else{
     $this->db->where('tgl_berita',date('Y-m-d'));
     }
    $this->db->where('tone_berita',1);
    $this->db->where('jenis_berita = "Kemenristekdikti"');
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
    $this->db->where('jenis_berita = "Kemenristekdikti"');

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
    $this->db->where('jenis_berita = "Kemenristekdikti"');

    return $this->db->get('isi_berita');
  }

  function get_positif_non(){
     if(date('H:i') < "09:30"){
     $this->db->where('tgl_post >=',date('Y-m-d H:i',strtotime("yesterday 17:00")));
     //$this->db->where('tgl_berita',date('Y-m-d'));
     }else{
     $this->db->where('tgl_berita',date('Y-m-d'));
     }
    $this->db->where('tone_berita',1);
    $this->db->where('jenis_berita = "Non-Kemenristekdikti"');
    return $this->db->get('isi_berita');
  }
  function get_negatif_non(){
    if(date('H:i') < "09:30"){
     $this->db->where('tgl_post >=',date('Y-m-d H:i',strtotime("yesterday 17:00")));
     //$this->db->where('tgl_berita',date('Y-m-d'));
     }else{
     $this->db->where('tgl_berita',date('Y-m-d'));
     }
    $this->db->where('tone_berita',-1);
    $this->db->where('jenis_berita = "Non-Kemenristekdikti"');

    return $this->db->get('isi_berita');
  }
  function get_netral_non(){
    if(date('H:i') < "09:30"){
     $this->db->where('tgl_post >=',date('Y-m-d H:i',strtotime("yesterday 17:00")));
     //$this->db->where('tgl_berita',date('Y-m-d'));
     }else{
     $this->db->where('tgl_berita',date('Y-m-d'));
     }
    $this->db->where('tone_berita',0);
    $this->db->where('jenis_berita = "Non-Kemenristekdikti"');

    return $this->db->get('isi_berita');
  }

}
