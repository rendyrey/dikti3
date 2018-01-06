<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_berita');
    $this->load->model('M_narasumber');
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
  public function get_topik()
  {
    $this->load->view('native/get_topik');
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

  public function tabel_berita($id_berita,$tgl_skrg=null){


    $this->check_login();
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    if($tgl_skrg==null){
      $tgl_skrg = date('Y-m-d');
    }
    //mengambil topik berita
    $query=$this->M_berita->get();
    $data['jml'] = $query->num_rows();
    $i=0;
    foreach($query->result() as $row){
      $data['tipe_berita'][$i] = $row->id_berita;
      $data['topik_berita'][$i]= $row->topik_berita;
      $i++;
    }

    //mengambil topik berita berdasarkan id berita
    $query2=$this->M_berita->get_where($id_berita);
    $row2 = $query2->row();
    $data['topik'] = $row2->topik_berita;
    $data['berita_aktif']=$id_berita;




    //mengambil isi berita berdasarkan id berita
    if(isset($tgl_awal) && isset($tgl_akhir)){
      $query3 = $this->M_berita->get_isi_berita_where_tgl($id_berita,$tgl_awal,$tgl_akhir);
    }else{
      $query3 = $this->M_berita->get_isi_berita_where($id_berita,$tgl_skrg);
    }
    $data['jml_isi_berita'] = $query3->num_rows(); //jml berita berdasarkan id berita
    $i=0;
    foreach($query3->result() as $row3){
      $data['id_isi_berita'][$i] = $row3->id_isi_berita;
      $data['id_berita'][$i] = $row3->id_berita;
      $data['id_sub_topik'][$i] = $row3->id_sub_topik;
      //untuk mengambil nama topik
      $get_name_sub = $this->M_berita->get_sub_topik_name($data['id_sub_topik'][$i])->row();
      $data['nama_sub_topik'][$i] = $get_name_sub->nama_sub_topik;
      //
      $data['isi_berita'][$i] = $row3->isi_berita;
      $data['judul'][$i] = $row3->judul;
      $date_post = strtotime($row3->tgl_berita);
      $data['tgl_berita'][$i] = date('D, dS F Y',$date_post);
      $post_time = strtotime($row3->tgl_post);
      $data['jam_berita'][$i] = date('H:i',$post_time);
      $data['tone_judul'][$i] = $row3->tone_judul;
      $data['tone_berita'][$i] = $row3->tone_berita;
      $data['tone_kutipan'][$i] = $row3->tone_kutipan;
      $data['ad_value'][$i] = $row3->ad_value;
      $data['news_value'][$i] = $row3->news_value;
      $data['wartawan'][$i] = $row3->wartawan;
      $data['link_berita'][$i] = $row3->link_berita;

      //mengambil isi media berdasarkan berita
      $query4 = $this->M_berita->get_media_where($row3->id_media);
      $row4 = $query4->row();
      $data['media'][$i] = $row4->nama_media;
      $i++;
    }

    $this->load->view('berita',$data);


  }

  public function tabel_tone($tone,$tgl_skrg=null){


        $this->check_login();
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        if($tgl_skrg==null){
          $tgl_skrg = date('Y-m-d');
        }
        //mengambil topik berita
        $query=$this->M_berita->get();
        $data['jml'] = $query->num_rows();
        $i=0;
        foreach($query->result() as $row){
          $data['tipe_berita'][$i] = $row->id_berita;
          $data['topik_berita'][$i]= $row->topik_berita;
          $i++;
        }



        //mengambil isi berita berdasarkan id berita
        // if(isset($tgl_awal) && isset($tgl_akhir)){
        //   $query3 = $this->M_berita->get_isi_berita_where_tgl($id_berita,$tgl_awal,$tgl_akhir);
        // }else{
        //   $query3 = $this->M_berita->get_isi_berita_where($id_berita,$tgl_skrg);
        // }
        $query3 = $this->M_berita->get_berita_hari_ini_tone($tone);
        $data['jml_isi_berita'] = $query3->num_rows(); //jml berita berdasarkan id berita
        $i=0;
        foreach($query3->result() as $row3){
          $data['id_isi_berita'][$i] = $row3->id_isi_berita;
          $data['id_berita'][$i] = $row3->id_berita;
          $data['isi_berita'][$i] = $row3->isi_berita;
          $data['judul'][$i] = $row3->judul;
          $data['id_sub_topik'][$i] = $row3->id_sub_topik;

          //untuk mengambil nama topik
          $get_name_sub = $this->M_berita->get_sub_topik_name($data['id_sub_topik'][$i])->row();
          $data['nama_sub_topik'][$i] = $get_name_sub->nama_sub_topik;
          //
          $date_post = strtotime($row3->tgl_berita);
          $data['tgl_berita'][$i] = date('D, dS F Y',$date_post);
          $post_time = strtotime($row3->tgl_post);
          $data['jam_berita'][$i] = date('H:i',$post_time);
          $data['tone_judul'][$i] = $row3->tone_judul;
          $data['tone_berita'][$i] = $row3->tone_berita;
          $data['tone_kutipan'][$i] = $row3->tone_kutipan;
          $data['ad_value'][$i] = $row3->ad_value;
          $data['news_value'][$i] = $row3->news_value;
          $data['wartawan'][$i] = $row3->wartawan;
          $data['link_berita'][$i] = $row3->link_berita;

          //mengambil isi media berdasarkan berita
          $query4 = $this->M_berita->get_media_where($row3->id_media);
          $row4 = $query4->row();
          $data['media'][$i] = $row4->nama_media;
          $i++;
        }
        $data['tone'] = $tone;
        $this->load->view('tbl_tone',$data);
  }

  public function berita_trend($id_berita,$id_sub_topik){


        $this->check_login();


          $tgl_skrg = date('Y-m-d');

        //mengambil topik berita
        $query=$this->M_berita->get();
        $data['jml'] = $query->num_rows();
        $i=0;
        foreach($query->result() as $row){
          $data['tipe_berita'][$i] = $row->id_berita;
          $data['topik_berita'][$i] = $row->topik_berita;
          $i++;
        }

        //mengambil topik berita berdasarkan id berita
        $query2=$this->M_berita->get_where($id_berita);
        $row2 = $query2->row();
        $data['topik'] = $row2->topik_berita;
        $data['berita_aktif']=$id_berita;




        //mengambil isi berita berdasarkan id berita
        if(isset($tgl_awal) && isset($tgl_akhir)){
          $query3 = $this->M_berita->get_isi_berita_where_tgl($id_berita,$tgl_awal,$tgl_akhir);
        }else{
          $query3 = $this->M_berita->get_isi_berita_where_id_sub($id_sub_topik,$tgl_skrg);
        }
        $data['jml_isi_berita'] = $query3->num_rows(); //jml berita berdasarkan id berita
        $i=0;
        foreach($query3->result() as $row3){
          $data['id_isi_berita'][$i] = $row3->id_isi_berita;
          $data['id_berita'][$i] = $row3->id_berita;
          $data['isi_berita'][$i] = $row3->isi_berita;
          $data['judul'][$i] = $row3->judul;
          $date_post = strtotime($row3->tgl_berita);
          
            //untuk mengambil nama topik
            $data['id_sub_topik'][$i] = $row3->id_sub_topik;
          $get_name_sub = $this->M_berita->get_sub_topik_name($data['id_sub_topik'][$i])->row();
          $data['nama_sub_topik'][$i] = $get_name_sub->nama_sub_topik;

          $data['tgl_berita'][$i] = date('D, dS F Y',$date_post);
          $post_time = strtotime($row3->tgl_post);
      	  $data['jam_berita'][$i] = date('H:i',$post_time);
          $data['tone_judul'][$i] = $row3->tone_judul;
          $data['tone_berita'][$i] = $row3->tone_berita;
          $data['tone_kutipan'][$i] = $row3->tone_kutipan;
          $data['ad_value'][$i] = $row3->ad_value;
          $data['news_value'][$i] = $row3->news_value;
          $data['wartawan'][$i] = $row3->wartawan;
          $data['link_berita'][$i] = $row3->link_berita;


          //mengambil isi media berdasarkan berita
          $query4 = $this->M_berita->get_media_where($row3->id_media);
          $row4 = $query4->row();
          $data['media'][$i] = $row4->nama_media;
          $i++;
        }

        $this->load->view('berita',$data);


  }

public function detail($id_isi_berita){
    $query = $this->M_berita->get_detail_berita($id_isi_berita);
    foreach($query->result() as $rows){
      $id_topik = $rows->id_berita;
      $query2 = $this->M_berita->get_sub_topik($id_topik);
      $row2 = $query2->row();
      $data['nama_sub_topik'] = $row2->nama_sub_topik;
      $data['isi_berita'] = $rows->isi_berita;
      $data['kutipan'] = $rows->kutipan;
      $data['judul'] = $rows->judul;
      $data['tone_berita'] = $rows->tone_berita;
      $data['tone_judul'] = $rows->tone_judul;
      $data['tone_kutipan'] = $rows->tone_kutipan;
      $data['link_berita'] = $rows->link_berita;
      $data['ad_value'] = $rows->ad_value;
      $data['news_value'] = $rows->news_value;
      $data['gambar'] = $rows->gambar;
      $data['wartawan'] = $rows->wartawan;
      $date_post = strtotime($rows->tgl_berita);
      $time_post = strtotime($rows->tgl_post);
      $data['jam_berita'] = date('H:i',$time_post);
      $data['tgl_berita'] = date('D, dS F Y',$date_post);
      $query2 = $this->M_berita->get_media_where($rows->id_media);
      $row2 = $query2->row();
      $data['nama_media'] = $row2->nama_media;
      $narasumber1=$rows->id_narasumber;
      $narasumber2=$rows->id_narasumber2;
      $narasumber3=$rows->id_narasumber3;
      $narasumber4=$rows->id_narasumber4;
      $data['narasumber1']='';
      $data['narasumber2']='';
      $data['narasumber3']='';
      $data['narasumber4']='';
      $query = $this->M_narasumber->get_nama_narasumber($narasumber1)->row();
      $data['narasumber1'] = $query->nama_sub_narasumber;
      if($narasumber2){
      $query2 = $this->M_narasumber->get_nama_narasumber($narasumber2)->row();
      $data['narasumber2'] = $query2->nama_sub_narasumber;
      }
      if($narasumber3){
      $query3 = $this->M_narasumber->get_nama_narasumber($narasumber3)->row();
      $data['narasumber3'] = $query3->nama_sub_narasumber;
      }
      if($narasumber4){
      $query4 = $this->M_narasumber->get_nama_narasumber($narasumber4)->row();
      $data['narasumber4'] = $query4->nama_sub_narasumber;
      }


    }
    $this->load->view('detail_berita', $data);
  }

  public function detail2($id_isi_berita){
    $query = $this->M_berita->get_detail_berita($id_isi_berita);
    foreach($query->result() as $rows){
      $id_topik = $rows->id_berita;
      $query2 = $this->M_berita->get_sub_topik($id_topik);
      $row2 = $query2->row();
      $data['nama_sub_topik'] = $row2->nama_sub_topik;
      $data['isi_berita'] = $rows->isi_berita;
      $data['kutipan'] = $rows->kutipan;
      $data['judul'] = $rows->judul;
      $data['tone_berita'] = $rows->tone_berita;
      $data['tone_judul'] = $rows->tone_judul;
      $data['tone_kutipan'] = $rows->tone_kutipan;
      $data['link_berita'] = $rows->link_berita;
      $data['ad_value'] = $rows->ad_value;
      $data['news_value'] = $rows->news_value;
      $date_post = strtotime($rows->tgl_berita);
      $data['tgl_berita'] = date('D, dS F Y',$date_post);
      $query2 = $this->M_berita->get_media_where($rows->id_media);
      $row2 = $query2->row();
      $data['nama_media'] = $row2->nama_media;
    }
    $this->load->view('detail_berita2', $data);
  }

  public function post(){
    $this->check_login();
    $query=$this->M_berita->get_last_isi_berita()->row();
    $jml = $query->id_isi_berita;
    $jml++;
    $temp = explode(".", $_FILES["file_upload"]["name"]);
    $extension = end($temp);
    $filename = $jml.".".$extension;
    $nama_file = $_FILES['file_upload']['name'];
    $file_tmp = $_FILES['file_upload']['tmp_name'];
    $target = "assets/img_berita/".$filename;
    move_uploaded_file($file_tmp,$target);
    $data['gambar'] = $filename;
    $data['jenis_berita'] = $this->input->post('jenis_berita');
    $data['id_berita'] = $_POST['id_berita'];
    $data['wartawan'] = $_POST['wartawan'];
    $data['id_sub_topik'] = $_POST['id_sub_topik'];
    $data['id_media'] = $_POST['id_media'];
    $data['id_narasumber'] = $_POST['sub_narasumber'];
    $data['id_narasumber2'] = $_POST['sub_narasumber2'];
    $data['id_narasumber3'] = $_POST['sub_narasumber3'];
    $data['id_narasumber4'] = $_POST['sub_narasumber4'];
    $data['judul'] = $_POST['judul'];
    $data['isi_berita'] = nl2br($_POST['isi_berita']);
    $data['tgl_berita'] = $_POST['tgl_berita'];
    $data['kutipan'] = $this->separate_quote($_POST['isi_berita']);
    $data['tone_judul'] = $this->calculate_tone($data['judul']);
    $data['tone_berita'] = $this->calculate_tone($data['isi_berita']);
    $data['tone_kutipan'] = $this->calculate_tone($data['kutipan']);
    $ad=str_replace('.','' ,$_POST['ad_value']);
    $news=str_replace('.','',$_POST['news_value']);
    $data['ad_value'] = $ad;
    $data['news_value'] = $news;
    $data['link_berita'] = $this->input->post('link_berita');
    $data['halaman'] = $this->input->post('halaman');

    $this->M_berita->insert_isi_berita($data);
    $this->session->set_flashdata('message','Post Berita Berhasil!');

    redirect('Dashboard/post');

  }

  public function hapus($id_isi_berita,$id_berita){
    $this->check_login();
    $query=$this->M_berita->delete_isi_berita($id_isi_berita);
    redirect('Berita/tabel_berita/'.$id_berita);
  }



  public function edit($id_isi_berita,$id_berita){
    $this->check_login();
    // buat ambil berita
    $query=$this->M_berita->get();
    $data['jml'] = $query->num_rows();
    $data['jml_topik'] = $data['jml'];
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

    $query_topik = $this->M_berita->get_all_sub_topik();
    $data['jml_sub_topik'] = $query_topik->num_rows();
    $i=0;
    foreach($query_topik->result() as $row){
      $data['id_sub_topik'][$i] = $row->id_sub_topik;
      $data['id_berita_sub'][$i] = $row->id_berita;
      $data['nama_sub_topik'][$i] = $row->nama_sub_topik;
      $i++;
    }


    $query_get_all=$this->M_berita->get_all($id_isi_berita);
    $row = $query_get_all->row();
    $data['kd_topik'] = $row->kd_berita;
    $data['kd_sub_topik'] = $row->kd_sub_topik;
    $data['judul'] = $row->judul;
    $data['sumber'] = $row->kd_media;
    $data['id_narasumber1'] = $row->id_narasumber;
    $data['id_narasumber2'] = $row->id_narasumber2;
    $data['id_narasumber3'] = $row->id_narasumber3;
    $data['id_narasumber4'] = $row->id_narasumber4;

    $query_narsum = $this->M_narasumber->get_nama_narasumber($data['id_narasumber1'])->row();
    $data['narasumber_inti1'] = $query_narsum->id_narasumber;
    $query_subnarsum = $this->M_narasumber->get_subnarsum($data['narasumber_inti1']);
    $data['jml_subnarsum1'] = $query_subnarsum->num_rows();
    $data['subnarsum1'] = $query_subnarsum->result_array();
    if($data['id_narasumber2']!=''){
      $query_narsum = $this->M_narasumber->get_nama_narasumber($data['id_narasumber2'])->row();
      $data['narasumber_inti2'] = $query_narsum->id_narasumber;
      $query_subnarsum = $this->M_narasumber->get_subnarsum($data['narasumber_inti2']);
      $data['jml_subnarsum2'] = $query_subnarsum->num_rows();
      $data['subnarsum2'] = $query_subnarsum->result_array();
    }
    if($data['id_narasumber3']!=''){
      $query_narsum = $this->M_narasumber->get_nama_narasumber($data['id_narasumber3'])->row();
      $data['narasumber_inti3'] = $query_narsum->id_narasumber;
      $query_subnarsum = $this->M_narasumber->get_subnarsum($data['narasumber_inti3']);
      $data['jml_subnarsum3'] = $query_subnarsum->num_rows();
      $data['subnarsum3'] = $query_subnarsum->result_array();
    }
    if($data['id_narasumber4']!=''){
      $query_narsum = $this->M_narasumber->get_nama_narasumber($data['id_narasumber4'])->row();
      $data['narasumber_inti4'] = $query_narsum->id_narasumber;
      $query_subnarsum = $this->M_narasumber->get_subnarsum($data['narasumber_inti4']);
      $data['jml_subnarsum4'] = $query_subnarsum->num_rows();
      $data['subnarsum4'] = $query_subnarsum->result_array();
    }
    $data['tgl_berita'] = $row->tgl_berita;
    $data['isi_berita'] = $row->isi_berita;
    $data['link_berita'] = $row->link_berita;
    $data['ad_value'] = $row->ad_value;
    $data['news_value'] = $row->news_value;
    $data['id_isi_berita'] = $id_isi_berita;
    $data['wartawan'] = $row->wartawan;
    $data['gambar'] = $row->gambar;
    $data['jenis_berita'] = $row->jenis_berita;
    $data['halaman'] = $row->halaman;
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    $this->load->view('edit_berita', $data);

  }

  public function edit_berita($id_isi_berita){
    $this->check_login();
    $query=$this->M_berita->get_last_isi_berita()->row();
    $jml = $query->id_isi_berita;
    $jml++;
    $temp = explode(".", $_FILES["file_upload"]["name"]);
    $extension = end($temp);
    $filename = $jml.".".$extension;
    $nama_file = $_FILES['file_upload']['name'];
    $file_tmp = $_FILES['file_upload']['tmp_name'];
    $target = "assets/img_berita/".$filename;
    move_uploaded_file($file_tmp,$target);
    $data['gambar'] = $filename;


    $data['id_berita'] = $_POST['id_berita'];
    $data['id_sub_topik'] = $_POST['id_sub_topik'];
    $data['id_media'] = $_POST['id_media'];
    $data['id_narasumber'] = $_POST['sub_narasumber'];
    $data['id_narasumber2'] = $this->input->post('sub_narasumber2');
    $data['id_narasumber3'] = $this->input->post('sub_narasumber3');
    $data['id_narasumber4'] = $this->input->post('sub_narasumber4');
    $data['judul'] = $_POST['judul'];
    $data['isi_berita'] = nl2br($_POST['isi_berita']);
    $data['tgl_berita'] = $_POST['tgl_berita'];
    $data['kutipan'] = $this->separate_quote($_POST['isi_berita']);
    $data['tone_judul'] = $this->calculate_tone($data['judul']);
    $data['tone_berita'] = $this->calculate_tone($data['isi_berita']);
    $data['tone_kutipan'] = $this->calculate_tone($data['kutipan']);
    $data['wartawan'] = $this->input->post('wartawan');
    $data['jenis_berita'] = $this->input->post('jenis_berita');
    $data['link_berita'] = $this->input->post('link_berita');
    $data['halaman'] = $this->input->post('halaman');
    $ad=str_replace('.','' ,$_POST['ad_value']);
    $news=str_replace('.','',$_POST['news_value']);
    $data['ad_value'] = $ad;
    $data['news_value'] = $news;
    $data['link_berita'] = $_POST['link_berita'];

    $id_berita = $data['id_berita'];
    $this->M_berita->update_isi_berita($id_isi_berita,$data);

    $this->session->set_flashdata('message','Post Berita Berhasil!');
    header("location:http://lensadata.id/index.php/Berita/tabel_berita/$id_berita");
    // redirect('Berita/tabel_berita/');

  }

  public function calculate_tone($string){
    $this->check_login();
    $data['string'] = $string;
    $tone =  $this->load->view('tone/examples/tone', $data,TRUE);
    // error_reporting(0);
    // echo $tone."haha";
    // echo $string;
    // $tone = $this->load->view('tone/examples/tone',$data,TRUE);
    $sentiment=0;


    if($tone == "pos"){
      $sentiment = 1;
    }else if($tone == "neg"){
      $sentiment = -1;
    }else if($tone == "neu"){
      $sentiment = 0;
    }
    // echo $sentiment;
    // echo $sentiment;
    return $sentiment;
  }

  public function separate_quote($data){
    $this->check_login();
    preg_match_all('/"([^"]+)"/', $data, $m);
    $quote="";
    foreach($m[1] as $words){
      $quote=$quote.",".$words;
    }
    return $quote;
  }

  public function update(){
    $this->check_login();
    $query = $this->M_berita->get_isi_berita();
    foreach($query->result() as $row){
      $data['string'] = $row->isi_berita;
      $tone =  $this->load->view('tone/examples/tone', $data,TRUE);
      $data['id_isi_berita'] = $row->id_isi_berita;
      $sentiment = '';
      if($tone == "pos"){
        $sentiment = 1;
      }else if($tone == "neg"){
        $sentiment = -1;
      }else if($tone == "neu"){
        $sentiment = 0;
      }
      $this->M_berita->update_tone($data['id_isi_berita'],$sentiment);
    }
  }

  public function update_judul(){
    $this->check_login();
    $query = $this->M_berita->get_isi_berita();
    foreach($query->result() as $row){
      $data['string'] = $row->judul;
      $tone =  $this->load->view('tone/examples/tone', $data,TRUE);
      $data['id_isi_berita'] = $row->id_isi_berita;
      $sentiment = '';
      if($tone == "pos"){
        $sentiment = 1;
      }else if($tone == "neg"){
        $sentiment = -1;
      }else if($tone == "neu"){
        $sentiment = 0;
      }
      $this->M_berita->update_tone_judul($data['id_isi_berita'],$sentiment);
    }
  }

  public function export_pdf(){

      $this->load->view('html2pdf.php');
      // require_once('wkhtmltopdf/wkhtmltopdf.php');     // Ensure this path is correct !


  }

}