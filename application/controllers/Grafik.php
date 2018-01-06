<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {

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
		$this->load->model('M_grafik');
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
		$tgl_awal = date('Y-m-d');
		$tgl_akhir = date('Y-m-d');
		$query = $this->M_grafik->get_count_tone_berita_by($tgl_awal,$tgl_akhir);
		$i=0;
		$data['judul'] = "Grafik Jumlah Tone Judul Secara Keseluruhan";
		$data['jml_grafik'] = $query->num_rows();
		foreach($query->result() as $row){
			$data['jml_tone'][$i] = $row->jml_tone;
			$data['tone_berita'][$i] = $row->tone_berita;
			if($data['tone_berita'][$i]==1){
				$data['tone'][$i] = "Positif";
			}else if($data['tone_berita'][$i]==-1){
				$data['tone'][$i] = "Negatif";
			}else if($data['tone_berita'][$i]==0){
				$data['tone'][$i] = "Netral";
			}
			$i++;
		}


		//untuk list berita di menu kiri
		$query=$this->M_berita->get();
		$data['jml'] = $query->num_rows();
		$i=0;
		foreach($query->result() as $row){
			$data['id_berita'][$i] = $row->id_berita;
			$data['topik_berita'][$i]= $row->topik_berita;
			$i++;
		}

		if(!isset($_POST['tone'])){ //jika tone tidak dipilih (langsung buka menu grafik)
			$data['judul'] = "Grafik Jumlah Tone Berita Secara Keseluruhan";
			$data['tampil'] = 'tone_berita';
			$this->load->view('grafik', $data);

		}else if(isset($_POST['tone'])){ //jika tone dipilih
			if($_POST['tone']=='tone_judul'){ //jika tone yang dipilih adalah tone judul
				$data['tampil'] = 'tone_judul';
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_count_tone_judul_by($tgl_awal,$tgl_akhir);
				$i=0;
				$data['jml_grafik'] = $query->num_rows();
				foreach($query->result() as $row){
					$data['jml_tone'][$i] = $row->jml_tone;
					$data['tone_berita'][$i] = $row->tone_judul;
					if($data['tone_berita'][$i]==1){
						$data['tone'][$i] = "Positif";
					}else if($data['tone_berita'][$i]==-1){
						$data['tone'][$i] = "Negatif";
					}else if($data['tone_berita'][$i]==0){
						$data['tone'][$i] = "Netral";
					}
					$i++;
				}
				$data['judul'] = "Grafik Jumlah Tone Judul Secara Keseluruhan";
				$this->load->view('grafik', $data);

			}else if($_POST['tone']=='tone_berita'){
				$data['tampil'] = 'tone_berita';

				// jika tone yang dipilih adalah tone judul
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_count_tone_berita_by($tgl_awal,$tgl_akhir);
				$i=0;
				$data['jml_grafik'] = $query->num_rows();
				foreach($query->result() as $row){
					$data['jml_tone'][$i] = $row->jml_tone;
					$data['tone_berita'][$i] = $row->tone_berita;
					if($data['tone_berita'][$i]==1){
						$data['tone'][$i] = "Positif";
					}else if($data['tone_berita'][$i]==-1){
						$data['tone'][$i] = "Negatif";
					}else if($data['tone_berita'][$i]==0){
						$data['tone'][$i] = "Netral";
					}
					$i++;
				}
				$data['judul'] = "Grafik Jumlah Tone Berita Secara Keseluruhan";
				$this->load->view('grafik', $data);

			}else if($_POST['tone']=='tone_kutipan'){
				$data['tampil'] = 'tone_kutipan';

				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_count_tone_kutipan_by($tgl_awal,$tgl_akhir);
				$i=0;
				$data['jml_grafik'] = $query->num_rows();
				foreach($query->result() as $row){
					$data['jml_tone'][$i] = $row->jml_tone;
					$data['tone_berita'][$i] = $row->tone_kutipan;
					if($data['tone_berita'][$i]==1){
						$data['tone'][$i] = "Positif";
					}else if($data['tone_berita'][$i]==-1){
						$data['tone'][$i] = "Negatif";
					}else if($data['tone_berita'][$i]==0){
						$data['tone'][$i] = "Netral";
					}
					$i++;
				}
				$data['judul'] = "Grafik Jumlah Tone Kutipan Secara Keseluruhan";
				$this->load->view('grafik', $data);
				// jika yang dipilih adalah media
			}else if($_POST['tone']=='media'){
				$data['tampil'] = 'media';

				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_count_media_by($tgl_awal,$tgl_akhir);
				$i=0;
				$data['jml_grafik'] = $query->num_rows();
				foreach($query->result() as $row){
					$data['jml_media'][$i] = $row->jml_media;
					$data['id_media'][$i] = $row->id_media;
					// $data['nama_media'][$i] = $row->nama_media;
					// $data['tone_berita'][$i] = $row->tone_kutip;
					$query2 = $this->M_media->get_all_where($data['id_media'][$i]);
					$baris = $query2->row();
					$data['nama_media'][$i] = $baris->nama_media;
					$i++;
				}
				$data['judul'] = "Grafik Jumlah Media Secara Keseluruhan";
				$this->load->view('grafik', $data);
			}else if($_POST['tone']=='narasumber'){
				$data['tampil'] = 'narasumber';
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_all_narasumber();
				$i=0;
				$data['jml_grafik'] = $query->num_rows();
				foreach($query->result() as $row){
					$data['nama_narasumber'][$i] = $row->nama_narasumber;
					$data['id_narasumber'][$i] = $row->id_narasumber;

					$id_narasumber = $data['id_narasumber'][$i];
					// $data['tone_berita'][$i] = $row->tone_kutip;
					$query2 = $this->M_grafik->get_count_narasumber_berita1($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris = $query2->row();
					$query3 = $this->M_grafik->get_count_narasumber_berita2($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris3 = $query3->row();
					$query4 = $this->M_grafik->get_count_narasumber_berita3($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris4 = $query4->row();
					$query5 = $this->M_grafik->get_count_narasumber_berita4($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris5 = $query5->row();
					$data['jml_narasumber'][$i] = $baris->jml_narasumber+$baris3->jml_narasumber+$baris4->jml_narasumber+$baris5->jml_narasumber;
					$i++;
				}
				array_multisort($data['jml_narasumber'],SORT_DESC,$data['nama_narasumber'],$data['id_narasumber']);



				$data['judul'] = "Grafik Jumlah Narasumber Secara Keseluruhan";
				$this->load->view('grafik', $data);
			}else if($_POST['tone']=='topik'){
				$data['tampil'] = 'topik';
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_all_topik();
				$i=0;
				$data['jml_grafik'] = $query->num_rows();
				foreach($query->result() as $row){
					$data['topik_berita'][$i] = $row->topik_berita;
					$data['id_berita'][$i] = $row->id_berita;

					$id_berita = $data['id_berita'][$i];
					// $data['tone_berita'][$i] = $row->tone_kutip;
					$query2 = $this->M_grafik->get_count_topik_berita($id_berita,$tgl_awal,$tgl_akhir);
					$baris = $query2->row();
					$data['jml_topik'][$i] = $baris->jml_topik;
					$i++;
				}
				$data['judul'] = "Grafik Jumlah Topik Secara Keseluruhan";

				$this->load->view('grafik', $data);

			}else if($_POST['tone']=='sub_topik'){
				$data['tampil'] = 'sub_topik';
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_all_sub_topik();
				$i=0;
				$data['jml_grafik'] = $query->num_rows();
				foreach($query->result() as $row){
					$data['sub_topik_berita'][$i] = $row->alias;
					$data['id_sub_topik'][$i] = $row->id_sub_topik;
					$id_sub_topik = $data['id_sub_topik'][$i];
					// $data['tone_berita'][$i] = $row->tone_kutip;
					$query2 = $this->M_grafik->get_count_sub_topik($id_sub_topik,$tgl_awal,$tgl_akhir);
					$baris = $query2->row();
					$data['jml_sub_topik'][$i] = $baris->jml_sub_topik;
					$i++;
				}
				$data['jml_grafik'] = 10;
				array_multisort($data['jml_sub_topik'],SORT_DESC,$data['id_sub_topik'],$data['sub_topik_berita']);
				$data['judul'] = "Grafik Jumlah Sub Topik Secara Keseluruhan";
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";

				$this->load->view('grafik', $data);
			}
			else if($_POST['tone']=='narasumber_int'){
				$data['tampil'] = 'narasumber';
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_all_narasumber_int();
				$i=0;
				$data['jml_grafik'] = $query->num_rows();
				foreach($query->result() as $row){
					$data['nama_narasumber'][$i] = $row->alias;
					$data['id_narasumber'][$i] = $row->id_sub_narasumber;

					$id_narasumber = $data['id_narasumber'][$i];
					// // $data['tone_berita'][$i] = $row->tone_kutip;
					$query2 = $this->M_grafik->get_count_sub_narasumber_berita1($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris = $query2->row();
					$query3 = $this->M_grafik->get_count_sub_narasumber_berita2($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris3 = $query3->row();
					$query4 = $this->M_grafik->get_count_sub_narasumber_berita3($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris4 = $query4->row();
					$query5 = $this->M_grafik->get_count_sub_narasumber_berita4($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris5 = $query5->row();
					$data['jml_narasumber'][$i] = $baris->jml_narasumber+$baris3->jml_narasumber+$baris4->jml_narasumber+$baris5->jml_narasumber;
					$i++;
				}
				array_multisort($data['jml_narasumber'],SORT_DESC,$data['nama_narasumber'],$data['id_narasumber']);
				$data['jml_grafik']=10;

				$data['judul'] = "Grafik Jumlah Narasumber Internal Secara Keseluruhan";
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
				$this->load->view('grafik', $data);
			}else if($_POST['tone']=='narasumber_eks'){
				$data['tampil'] = 'narasumber';
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_all_narasumber_eks();
				$i=0;
				$data['jml_grafik'] = $query->num_rows();
				foreach($query->result() as $row){
					$data['nama_narasumber'][$i] = $row->alias;
					$data['id_narasumber'][$i] = $row->id_sub_narasumber;

					$id_narasumber = $data['id_narasumber'][$i];
					// $data['tone_berita'][$i] = $row->tone_kutip;
					$query2 = $this->M_grafik->get_count_sub_narasumber_berita1($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris = $query2->row();
					$query3 = $this->M_grafik->get_count_sub_narasumber_berita2($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris3 = $query3->row();
					$query4 = $this->M_grafik->get_count_sub_narasumber_berita3($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris4 = $query4->row();
					$query5 = $this->M_grafik->get_count_sub_narasumber_berita4($id_narasumber,$tgl_awal,$tgl_akhir);
					$baris5 = $query5->row();
					$data['jml_narasumber'][$i] = $baris->jml_narasumber+$baris3->jml_narasumber+$baris4->jml_narasumber+$baris5->jml_narasumber;

						$i++;

				}

				$data['jml_grafik']=10;
				array_multisort($data['jml_narasumber'],SORT_DESC,$data['nama_narasumber'],$data['id_narasumber']);

				$data['judul'] = "Grafik Jumlah Narasumber Eksternal Secara Keseluruhan";
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
				$this->load->view('grafik', $data);
			}else if($_POST['tone']=='jenis_berita'){
				$data['tampil'] = 'jenis_berita';
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_jenis_berita($tgl_awal,$tgl_akhir);
				$i=0;
				$data['jml_grafik'] = $query->num_rows();
				foreach($query->result() as $row){
					$data['nama_jenis_berita'][$i] = $row->jenis_berita;
					//$data['id_narasumber'][$i] = $row->id_sub_narasumber;
					$data['jml_jenis_berita'][$i] = $row->jml_jenis_berita;

						$i++;

				}


				array_multisort($data['jml_jenis_berita'],SORT_DESC,$data['nama_jenis_berita']);

				$data['judul'] = "Grafik Jumlah Jenis Berita Secara Keseluruhan";
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
				$this->load->view('grafik', $data);
			}

		}

	}

	public function grafik_kronologi(){
		$this->check_login();
		$query=$this->M_berita->get();
		$data['jml'] = $query->num_rows();
		$i=0;
		foreach($query->result() as $row){
			$data['id_berita'][$i] = $row->id_berita;
			$data['topik_berita'][$i]= $row->topik_berita;
			$i++;
		}
		if(!isset($_POST['tone'])){ //jika tone tidak dipilih (langsung buka menu grafik)

			$data['data'] = 'tone_berita';
			$data['judul'] = "Kronologi Grafik Tone Berita";
			$query = $this->M_grafik->get_jml_tanggal_all();
			$data['jml_tgl'] = $query->num_rows();
			$i=0;
			foreach($query->result() as $row){
				$data['tgl_berita'][$i] = $row->tgl;
				$tgl = $data['tgl_berita'][$i];
				$query_positif = $this->M_grafik->get_jml_tone_berita_positif($tgl);
				$query_netral = $this->M_grafik->get_jml_tone_berita_netral($tgl);
				$query_negatif = $this->M_grafik->get_jml_tone_berita_negatif($tgl);
				$result_positif = $query_positif->row();
				$result_netral = $query_netral->row();
				$result_negatif = $query_negatif->row();
				$data['tone_positif'][$i] = $result_positif->jml_tone;
				$data['tone_netral'][$i] = $result_netral->jml_tone;
				$data['tone_negatif'][$i] = $result_negatif->jml_tone;
				$i++;
			}
			// $this->load->view('grafik_kronologi', $data);
		}else{
			if($_POST['tone']=='tone_judul'){ //jika tone yang dipilih adalah tone judul
				$data['data'] = 'tone_judul';

				$data['judul'] = "Kronologi Grafik Tone Judul";
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_jml_tanggal($tgl_awal,$tgl_akhir);
				$data['jml_tgl'] = $query->num_rows();
				$i=0;
				foreach($query->result() as $row){
					$data['tgl_berita'][$i] = $row->tgl;
					$tgl = $data['tgl_berita'][$i];
					$query_positif = $this->M_grafik->get_jml_tone_judul_positif($tgl);
					$query_netral = $this->M_grafik->get_jml_tone_judul_netral($tgl);
					$query_negatif = $this->M_grafik->get_jml_tone_judul_negatif($tgl);
					$result_positif = $query_positif->row();
					$result_netral = $query_netral->row();
					$result_negatif = $query_negatif->row();
					$data['tone_positif'][$i] = $result_positif->jml_tone;
					$data['tone_netral'][$i] = $result_netral->jml_tone;
					$data['tone_negatif'][$i] = $result_negatif->jml_tone;
					$i++;
				}


			}else if($_POST['tone']=='tone_berita'){
				$data['data'] = 'tone_berita';

				$data['judul'] = "Kronologi Grafik Tone Berita";
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_jml_tanggal($tgl_awal,$tgl_akhir);
				$data['jml_tgl'] = $query->num_rows();
				$i=0;
				foreach($query->result() as $row){
					$data['tgl_berita'][$i] = $row->tgl;
					$tgl = $data['tgl_berita'][$i];
					$query_positif = $this->M_grafik->get_jml_tone_berita_positif($tgl);
					$query_netral = $this->M_grafik->get_jml_tone_berita_netral($tgl);
					$query_negatif = $this->M_grafik->get_jml_tone_berita_negatif($tgl);
					$result_positif = $query_positif->row();
					$result_netral = $query_netral->row();
					$result_negatif = $query_negatif->row();
					$data['tone_positif'][$i] = $result_positif->jml_tone;
					$data['tone_netral'][$i] = $result_netral->jml_tone;
					$data['tone_negatif'][$i] = $result_negatif->jml_tone;
					$i++;
				}
			}else if($_POST['tone']=='tone_kutipan'){
				$data['data'] = 'tone_kutipan';

				$data['judul'] = "Kronologi Grafik Tone Kutipan";

				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_jml_tanggal($tgl_awal,$tgl_akhir);
				$data['jml_tgl'] = $query->num_rows();
				$i=0;
				foreach($query->result() as $row){
					$data['tgl_berita'][$i] = $row->tgl;
					$tgl = $data['tgl_berita'][$i];
					$query_positif = $this->M_grafik->get_jml_tone_kutipan_positif($tgl);
					$query_netral = $this->M_grafik->get_jml_tone_kutipan_netral($tgl);
					$query_negatif = $this->M_grafik->get_jml_tone_kutipan_negatif($tgl);
					$result_positif = $query_positif->row();
					$result_netral = $query_netral->row();
					$result_negatif = $query_negatif->row();
					$data['tone_positif'][$i] = $result_positif->jml_tone;
					$data['tone_netral'][$i] = $result_netral->jml_tone;
					$data['tone_negatif'][$i] = $result_negatif->jml_tone;
					$i++;
				}
			}else if($_POST['tone']=='media'){
				$data['data'] = 'media';
				$data['judul'] = "Kronologi Grafik Media";
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_jml_tanggal($tgl_awal,$tgl_akhir);
				$data['jml_tgl'] = $query->num_rows();
				$i=0;
				foreach($query->result() as $row){
					$data['tgl_berita'][$i] = $row->tgl;
					$tgl = $data['tgl_berita'][$i];
					$query_media=$this->M_media->get_all();
					$j=0;
					$data['jml_media'] = $query_media->num_rows();
					foreach($query_media->result() as $row_media){
						$query_cari_jml = $this->M_grafik->get_media($tgl,$row_media->id_media);
						$result = $query_cari_jml->row();
						$data['jml_sumber'][$i][$j] = $result->jml_media;
						$data['nama_media'][$j] = $row_media->nama_media;
						$j++;
					}
					$i++;
				}


			}else if($_POST['tone']=='topik'){
				$data['data'] = 'topik';
				$data['judul'] = "Kronologi Grafik Topik Berita";
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_jml_tanggal($tgl_awal,$tgl_akhir);
				$data['jml_tgl'] = $query->num_rows();
				$i=0;
				foreach($query->result() as $row){
					$data['tgl_berita'][$i] = $row->tgl;
					$tgl = $data['tgl_berita'][$i];
					$query_topik=$this->M_berita->get();
					$j=0;
					$data['jml_topik_all'] = $query_topik->num_rows();
					foreach($query_topik->result() as $row_topik){
						$query_cari_jml = $this->M_grafik->get_topik($tgl,$row_topik->id_berita);
						$result = $query_cari_jml->row();
						$data['jml_topik'][$i][$j] = $result->jml_topik;
						$data['nama_topik'][$j] = $row_topik->topik_berita;
						$j++;
					}
					$i++;
				}

			}else if($_POST['tone']=='sub_topik'){
				$data['data'] = 'sub_topik';
				$data['judul'] = "Kronologi Grafik Sub Topik Berita";
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_jml_tanggal($tgl_awal,$tgl_akhir);
				$data['jml_tgl'] = $query->num_rows();
				$i=0;
				foreach($query->result() as $row){
					$data['tgl_berita'][$i] = $row->tgl;
					$tgl = $data['tgl_berita'][$i];
					$query_sub_topik=$this->M_berita->get_all_sub_topik();
					$j=0;
					$data['jml_sub_topik_all'] = $query_sub_topik->num_rows();
					foreach($query_sub_topik->result() as $row_sub_topik){
						$query_cari_jml = $this->M_grafik->get_sub_topik($tgl,$row_sub_topik->id_sub_topik);
						$result = $query_cari_jml->row();
						$data['jml_sub_topik'][$i][$j] = $result->jml_sub_topik;
						$data['nama_sub_topik'][$j] = $row_sub_topik->alias;
						$j++;
					}
					$i++;
				}
			}
			else if($_POST['tone']=='narasumber'){
				$data['data'] = 'narasumber';
				$data['judul'] = "Kronologi Grafik Narasumber Berita";
				$tgl_awal = $_POST['tgl_awal'];
				$tgl_akhir = $_POST['tgl_akhir'];
				$query = $this->M_grafik->get_jml_tanggal($tgl_awal,$tgl_akhir);
				$data['jml_tgl'] = $query->num_rows();
				$i=0;
				foreach($query->result() as $row){
					$data['tgl_berita'][$i] = $row->tgl;
					$tgl = $data['tgl_berita'][$i];
					$query_narasumber=$this->M_narasumber->get_narasumber();
					$j=0;
					$data['jml_narasumber_all'] = $query_narasumber->num_rows();
					foreach($query_narasumber->result() as $row_narasumber){
						$query_cari_jml = $this->M_grafik->get_jml_narasumber_by($tgl,$row_narasumber->id_narasumber);
						$result = $query_cari_jml->row();
						$data['jml_narasumber'][$i][$j] = $result->jml_narasumber;
						$data['nama_narasumber'][$j] = $row_narasumber->nama_narasumber;
						$j++;
					}
					$i++;
				}
			}
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
		}

		$this->load->view('grafik_kronologi',$data);
	}



}
