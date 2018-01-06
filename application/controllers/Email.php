<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('M_berita');
    $this->load->model('M_email');
    $this->load->model('M_media');
  }

  function index()
  {
    //untuk berita hari ini
    $berita_today = $this->M_berita->get_berita_hari_ini();
    $data['jml_berita_today'] = $berita_today->num_rows();
    $positif_today = $this->M_email->get_positif()->num_rows();
    $negatif_today = $this->M_email->get_negatif()->num_rows();
    $netral_today = $this->M_email->get_netral()->num_rows();

    $data['positif'] = $positif_today;
    $data['negatif'] = $negatif_today;
    $data['netral'] = $netral_today;
    foreach($berita_today->result() as $value){
      $data['judul_berita'][] = $value->judul;
      $data['id_isi_berita'][] = $value->id_isi_berita;
      $str = substr($value->isi_berita,0);
      $data['isi_berita'][] = $str;
      $id_media = $value->id_media;
      $query = $this->M_media->get_all_where($id_media)->row();
      $data['nama_media'][] = $query->nama_media;
      $data['tgl_berita'][] = $value->tgl_berita;
      $post_time = strtotime($value->tgl_post);
      $data['jam_berita'][] = date('H:i',$post_time);
      $data['tone_berita'][] = $value->tone_berita;
      $data['link_berita'][] = $value->link_berita;
      $data['gambar'][] = $value->gambar;
      $data['halaman'][] = $value->halaman;
      $data['wartawan'][] = $value->wartawan;
    }
    $this->load->view('email/email',$data);
  }

}
