<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_berita');
		$this->load->model('M_narasumber');
		$this->load->model('M_dashboard');
		$this->load->model('M_trend');
	}
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
	public function index()
	{
		if($this->session->userdata('login')==TRUE && $this->session->userdata('user')=='administrator'){
			// $this->load->view('templates/script_header');
			$query=$this->M_berita->get();
			$data['jml'] = $query->num_rows();
			$i=0;
			foreach($query->result() as $row){
				$data['id_berita_menu'][$i] = $row->id_berita;
				$data['topik_berita'][$i]= $row->topik_berita;
				$i++;
			}
			$berita_netral = $this->M_dashboard->get_netral_today();
			$data['jml_netral'] = $berita_netral->num_rows();
			$berita_negatif = $this->M_dashboard->get_negatif_today();
			$data['jml_negatif'] = $berita_negatif->num_rows();
			$berita_positif = $this->M_dashboard->get_positif_today();
			$data['jml_positif'] = $berita_positif->num_rows();
			$total = $data['jml_netral']+$data['jml_negatif']+$data['jml_positif'];
			$data['total'] = $total;
			$data['persen_tot'] = 100;
			if($total!=0){
				$data['persen_neg'] = ($data['jml_negatif']/$total)*100;
				$data['persen_pos'] = ($data['jml_positif']/$total)*100;
				$data['persen_net'] = ($data['jml_netral']/$total)*100;
			}else{
				$data['persen_neg'] = 0;
				$data['persen_pos'] = 0;
				$data['persen_net'] = 0;
			}


			//untuk berita hari ini
			$berita_today = $this->M_berita->get_berita_hari_ini();
			$data['jml_berita_today'] = $berita_today->num_rows();
			foreach($berita_today->result() as $value){
				$data['judul_berita'][] = $value->judul;
				$data['id_isi_berita'][] = $value->id_isi_berita;
				$data['tgl_berita'][] = $value->tgl_berita;
			}

			//untuk trend
			$query = $this->M_trend->get_all_sort_day();
			$data['jml_trend'] = $query->num_rows();
			$i=0;
			foreach($query->result() as $row){
				$data['total_trend'][$i] = $row->total;
				$data['topik_trend'][$i] = $row->nama_sub_topik;
				$data['id_sub_topik'][$i] = $row->id_sub_topik;
				$data['id_berita'][$i] = $row->id_berita;
				$i++;
			}
			$this->load->view('dashboard',$data);
		}else{
			$data['message']=$this->session->flashdata('message');
			$data['action']='Login/process_login_admin';
			// $this->load->view('templates/script_header');
			$this->load->view('index',$data);
		}
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


	public function media(){

		$this->check_login();
		// $this->load->view('templates/script_header');
		$query=$this->M_berita->get();
		$data['jml'] = $query->num_rows();
		$i=0;
		foreach($query->result() as $row){
			$data['id_berita'][$i] = $row->id_berita;
			$data['topik_berita'][$i]= $row->topik_berita;
			$i++;
		}
		$this->load->view('media_title',$data);
		// $this->load->view('templates/script_footer');



	}

	public function trend(){

		$this->check_login();
		// $this->load->view('templates/script_header');
		$query=$this->M_berita->get();
		$data['jml'] = $query->num_rows();
		$i=0;
		foreach($query->result() as $row){
			$data['id_berita'][$i] = $row->id_berita;
			$data['topik_berita'][$i]= $row->topik_berita;
			$i++;
		}
		$this->load->view('trend_berita',$data);

	}

	public function grafik(){
		$this->check_login();
		$query=$this->M_berita->get();
		$data['jml'] = $query->num_rows();
		$i=0;
		foreach($query->result() as $row){
			$data['id_berita'][$i] = $row->id_berita;
			$data['topik_berita'][$i]= $row->topik_berita;
			$i++;
		}
		$this->load->view('grafik',$data);


	}

	public function post(){

		$this->check_login();
		$query_topik = $this->M_berita->get_all_sub_topik();
		$data['jml_sub_topik'] = $query_topik->num_rows();
		$i=0;
		foreach($query_topik->result() as $row){
			$data['id_sub_topik'][$i] = $row->id_sub_topik;
			$data['id_berita_sub'][$i] = $row->id_berita;
			$data['nama_sub_topik'][$i] = $row->nama_sub_topik;
			$i++;
		}

		// buat ambil berita
		$query=$this->M_berita->get();
		$data['jml'] = $query->num_rows();
		$i=0;
		foreach($query->result() as $row){
			$data['id_berita'][$i] = $row->id_berita;
			$data['topik_berita'][$i]= $row->topik_berita;
			$i++;
		}
		// buat ambil media
		$query2=$this->M_berita->get_media();
		$data['jml_media'] = $query2->num_rows();
		$i=0;
		foreach($query2->result() as $row){
			$data['id_media'][$i] = $row->id_media;
			$data['nama_media'][$i]= $row->nama_media;
			$i++;
		}
		// buat ambil narasumber
		$query3=$this->M_narasumber->get_narasumber();
		$data['jml_narasumber'] = $query3->num_rows();
		$i=0;
		foreach($query3->result() as $row){
			$data['id_narasumber'][$i] = $row->id_narasumber;
			$data['nama_narasumber'][$i] = $row->nama_narasumber;
			$i++;
		}

		$data['message']=$this->session->flashdata('message');
		$this->load->view('post_berita',$data);

	}

	public function load_rss(){
		$this->load->view('native/get_rss');
	}


}
