<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

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

	public function index(){
		$this->check_login();
		$query = $this->M_media->get_media_group();
		$i=0;
		$j=0;
		foreach($query->result() as $row){
			$data['id_media'][$i] = $row->id_media;
			$data['total'][$i] = $row->total;
			$data['tgl_post'][$i] = $row->tgl_post;

			$query2 = $this->M_media->get_all_where($data['id_media'][$i]);
			$row_media = $query2->row();
			$data['nama_media'][$i] = $row_media->nama_media;
			$query_isi_berita = $this->M_media->get_berita_where_media($data['id_media'][$i],'');
			$j=0;
			foreach($query_isi_berita->result() as $row2){
				$data['berita'][$i][$j] = $row2->judul;
				$data['jam_berita'][$i][$j] = substr($row2->tgl_post,11,5);
				$data['id_isi_berita'][$i][$j] = $row2->id_isi_berita;
				$j++;
			}
			$data['berita'][$i]['jml'] = $j;
			$i++;
		}
		$data['jml_media'] = $i;
		$query=$this->M_berita->get();
		$data['jml'] = $query->num_rows();
		$i=0;
		foreach($query->result() as $row){
			$data['id_berita'][$i] = $row->id_berita;
			$data['topik_berita'][$i]= $row->topik_berita;
			$i++;
		}

		$this->load->view('media_title', $data);

	}

	public function group(){
		if($_POST['tgl']==''){
			redirect('Media/index');
		}else{
			$date=$_POST['tgl'];
			$this->check_login();
			$query = $this->M_media->get_media_group_date($date);
			$i=0;
			$j=0;
			foreach($query->result() as $row){
				$data['id_media'][$i] = $row->id_media;
				$data['total'][$i] = $row->total;
				$data['tgl_post'][$i] = $row->tgl_post;
				$query2 = $this->M_media->get_all_where($data['id_media'][$i]);
				$row2 = $query2->row();
				$data['nama_media'][$i] = $row2->nama_media;
				$query_isi_berita = $this->M_media->get_berita_where_media($data['id_media'][$i],substr($data['tgl_post'][$i],0,10));
				$j=0;
				foreach($query_isi_berita->result() as $row2){
					$data['berita'][$i][$j] = $row2->judul;
					$data['jam_berita'][$i][$j] = substr($row2->tgl_post,11,5);
					$j++;
				}
				$data['berita'][$i]['jml'] = $j;
				$i++;
			}
			$data['jml_media'] = $i;
			$query=$this->M_berita->get();
			$data['jml'] = $query->num_rows();
			$i=0;
			foreach($query->result() as $row){
				$data['id_berita'][$i] = $row->id_berita;
				$data['topik_berita'][$i]= $row->topik_berita;
				$i++;
			}

			$this->load->view('media_title', $data);
		}
	}
}
