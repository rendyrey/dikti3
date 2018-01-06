<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramMedia extends CI_Controller {

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
    $this->load->model('M_program_media');

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

  public function wawancara(){
    $this->check_login();
    $query=$this->M_berita->get();
    $data['jml'] = $query->num_rows();
    $i=0;
    $data['message']=$this->session->flashdata('message');
    foreach($query->result() as $row){
      $data['id_berita'][$i] = $row->id_berita;
      $data['topik_berita'][$i]= $row->topik_berita;
      $i++;
    }
    // untuk sub topik_berita
    $query_topik = $this->M_berita->get_all_sub_topik();
		$data['jml_sub_topik'] = $query_topik->num_rows();
		$i=0;
		foreach($query_topik->result() as $row){
			$data['id_sub_topik'][$i] = $row->id_sub_topik;
			$data['id_berita_sub'][$i] = $row->id_berita;
			$data['nama_sub_topik'][$i] = $row->nama_sub_topik;
			$i++;
		}

    //untuk Unit
    $query_unit = $this->M_program_media->get_unit();
    $data['jml_unit'] = $query_unit->num_rows();
    $i=0;
    foreach($query_unit->result() as $row){
      $data['id_unit'][$i] = $row->id_unit;
      $data['nama_unit'][$i] = $row->nama_unit;
      $i++;
    }
    $this->load->view('wawancara',$data);
  }

  public function liputan_lapangan(){
    $this->check_login();
    $query=$this->M_berita->get();
    $data['jml'] = $query->num_rows();
    $i=0;
    $data['message']=$this->session->flashdata('message');
    foreach($query->result() as $row){
      $data['id_berita'][$i] = $row->id_berita;
      $data['topik_berita'][$i]= $row->topik_berita;
      $i++;
    }
    // untuk sub topik_berita
    $query_topik = $this->M_berita->get_all_sub_topik();
		$data['jml_sub_topik'] = $query_topik->num_rows();
		$i=0;
		foreach($query_topik->result() as $row){
			$data['id_sub_topik'][$i] = $row->id_sub_topik;
			$data['id_berita_sub'][$i] = $row->id_berita;
			$data['nama_sub_topik'][$i] = $row->nama_sub_topik;
			$i++;
		}
    //untuk Unit
    $query_unit = $this->M_program_media->get_unit();
    $data['jml_unit'] = $query_unit->num_rows();
    $i=0;
    foreach($query_unit->result() as $row){
      $data['id_unit'][$i] = $row->id_unit;
      $data['nama_unit'][$i] = $row->nama_unit;
      $i++;
    }
    $this->load->view('liputan_lapangan',$data);
  }

  public function press_release(){
    $this->check_login();
    $query=$this->M_berita->get();
    $data['jml'] = $query->num_rows();
    $i=0;
    $data['message']=$this->session->flashdata('message');
    foreach($query->result() as $row){
      $data['id_berita'][$i] = $row->id_berita;
      $data['topik_berita'][$i]= $row->topik_berita;
      $i++;
    }

    // untuk sub topik_berita
    $query_topik = $this->M_berita->get_all_sub_topik();
		$data['jml_sub_topik'] = $query_topik->num_rows();
		$i=0;
		foreach($query_topik->result() as $row){
			$data['id_sub_topik'][$i] = $row->id_sub_topik;
			$data['id_berita_sub'][$i] = $row->id_berita;
			$data['nama_sub_topik'][$i] = $row->nama_sub_topik;
			$i++;
		}
    //untuk Unit
    $query_unit = $this->M_program_media->get_unit();
    $data['jml_unit'] = $query_unit->num_rows();
    $i=0;
    foreach($query_unit->result() as $row){
      $data['id_unit'][$i] = $row->id_unit;
      $data['nama_unit'][$i] = $row->nama_unit;
      $i++;
    }
    $this->load->view('press_release',$data);
  }

  public function konferensi_pers(){
    $this->check_login();
    $query=$this->M_berita->get();
    $data['jml'] = $query->num_rows();
    $i=0;
    $data['message']=$this->session->flashdata('message');
    foreach($query->result() as $row){
      $data['id_berita'][$i] = $row->id_berita;
      $data['topik_berita'][$i]= $row->topik_berita;
      $i++;
    }
    // untuk sub topik_berita
    $query_topik = $this->M_berita->get_all_sub_topik();
		$data['jml_sub_topik'] = $query_topik->num_rows();
		$i=0;
		foreach($query_topik->result() as $row){
			$data['id_sub_topik'][$i] = $row->id_sub_topik;
			$data['id_berita_sub'][$i] = $row->id_berita;
			$data['nama_sub_topik'][$i] = $row->nama_sub_topik;
			$i++;
		}
    //untuk Unit
    $query_unit = $this->M_program_media->get_unit();
    $data['jml_unit'] = $query_unit->num_rows();
    $i=0;
    foreach($query_unit->result() as $row){
      $data['id_unit'][$i] = $row->id_unit;
      $data['nama_unit'][$i] = $row->nama_unit;
      $i++;
    }
    $this->load->view('konferensi_pers',$data);
  }

  public function diskusi_media(){
    $this->check_login();
    $query=$this->M_berita->get();
    $data['jml'] = $query->num_rows();
    $i=0;
    $data['message']=$this->session->flashdata('message');
    foreach($query->result() as $row){
      $data['id_berita'][$i] = $row->id_berita;
      $data['topik_berita'][$i]= $row->topik_berita;
      $i++;
    }
    // untuk sub topik_berita
    $query_topik = $this->M_berita->get_all_sub_topik();
		$data['jml_sub_topik'] = $query_topik->num_rows();
		$i=0;
		foreach($query_topik->result() as $row){
			$data['id_sub_topik'][$i] = $row->id_sub_topik;
			$data['id_berita_sub'][$i] = $row->id_berita;
			$data['nama_sub_topik'][$i] = $row->nama_sub_topik;
			$i++;
		}
    //untuk Unit
    $query_unit = $this->M_program_media->get_unit();
    $data['jml_unit'] = $query_unit->num_rows();
    $i=0;
    foreach($query_unit->result() as $row){
      $data['id_unit'][$i] = $row->id_unit;
      $data['nama_unit'][$i] = $row->nama_unit;
      $i++;
    }
    $this->load->view('diskusi_media',$data);
  }

  public function grafik(){

  }

  public function post(){

    $data['id_program_media'] = $this->input->post('id_program');
    if($data['id_program_media']==1){
      $data['nama_program_media']="Wawancara";
      $page = "wawancara";
    }else if($data['id_program_media']==2){
      $data['nama_program_media']="Press Release";
      $page = "press_release";
    }else if($data['id_program_media']==3){
      $data['nama_program_media']="Konferensi Pers";
      $page = "konferenssi_pers";
    }else if($data['id_program_media']==4){
      $data['nama_program_media']="Liputan Lapangan";
      $page = "liputan_lapangan";
    }else if($data['id_program_media']==5){
      $data['nama_program_media']="Diskusi Media";
      $page = "diskusi_media";
    }

    $data['tgl_post'] = date('Y-m-d h:i:s');
    $data['tgl'] = date('Y-m-d');
    $data['id_sub_topik'] = $this->input->post('id_sub_topik');
    $data['id_unit'] = $this->input->post('id_unit');
    $data['judul'] = $this->input->post('judul');
    $data['tone'] = $this->input->post('tone');
    $data['isi'] = $this->input->post('isi');
    $data['ad_value'] = $this->input->post('ad_value');
    $this->M_program_media->insert($data);
    $this->session->set_flashdata('message','Post Berita Berhasil!');
    redirect("ProgramMedia/".$page);
  }

}
