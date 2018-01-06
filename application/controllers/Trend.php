<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trend extends CI_Controller {

  /**
  * Index Page for this controller.
  *
  * Maps to the following URL
  * 		http://example.com/index.php/welcome
  *	- or -
  * 		http://example.com/index.php/welcome/index
  *	- or -
  * Since this controller is set as the default controller in
  * config/routes.php, it's displayed at http://example.com/
  *
  * So any other public methods not prefixed with an underscore will
  * map to /index.php/welcome/<method_name>
  * @see https://codeigniter.com/user_guide/general/urls.html
  */

  public function __construct(){
    parent::__construct();
    $this->load->model('M_berita');
    $this->load->model('M_narasumber');
    $this->load->model('M_media');
    $this->load->model('M_trend');
  }
  public function index()
  {
    $this->check_login();

    $query = $this->M_trend->get_all_sort();
    $data['jml_trend'] = $query->num_rows();
    $i=0;
    foreach($query->result() as $row){
      $data['total'][$i] = $row->total;
      $data['topik'][$i] = $row->topik_berita;
      $i++;
    }


    //buat ambil list topik berita di database
    $query2=$this->M_berita->get();
    $data['jml'] = $query2->num_rows();
    $i=0;
    foreach($query2->result() as $row){
      $data['id_berita'][$i] = $row->id_berita;
      $data['topik_berita'][$i]= $row->topik_berita;
      $i++;
    }


    $this->load->view('trend_berita',$data);
  }

  public function check_login(){
    if($this->session->userdata('login')!=TRUE && $this->session->userdata('user')!='administrator'){
      $data['message']=$this->session->flashdata('message');
      $data['action']='Login/process_login_admin';
      // $this->load->view('templates/script_header');
      // $this->load->view('index',$data);
      // exit;
      redirect('Login');
    }
  }
}
