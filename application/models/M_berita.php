<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_berita extends CI_Model {



	public function __construct()
	{
		parent::__construct();

	}

	function get_sub_topik_name($id_sub_topik){
		$this->db->where('id_sub_topik',$id_sub_topik);
		return $this->db->get('sub_topik_berita',1);
	}
	function get_berita_hari_ini(){
		if(date('H:i') < "09:30"){
     		$this->db->where('tgl_post >=',date('Y-m-d H:i',strtotime("yesterday 17:00")));
     		//$this->db->where('tgl_berita',date('Y-m-d'));
     		}else{
     		$this->db->where('tgl_berita',date('Y-m-d'));
     		}
		$this->db->order_by('tgl_post', 'desc');
		return $this->db->get('isi_berita');
	}

	function get_berita_hari_ini_tone($tone){
		if(date('H:i') < "09:30"){
     		$this->db->where('tgl_post >=',date('Y-m-d H:i',strtotime("yesterday 17:00")));
     		//$this->db->where('tgl_berita',date('Y-m-d'));
     		}else{
     		$this->db->where('tgl_berita',date('Y-m-d'));
     		}
		$this->db->where('tone_berita',$tone);
		$this->db->order_by('tgl_post', 'desc');
		return $this->db->get('isi_berita');
	}

	function get(){
		return $this->db->get('topik_berita');
	}

	function get_sub_topik($id_berita){
		$this->db->where('id_berita', $id_berita);
		return $this->db->get('sub_topik_berita');
	}

	function get_all_sub_topik(){
		$this->db->order_by('nama_sub_topik', 'asc');
		return $this->db->get('sub_topik_berita');
	}

	function get_where($param){
		$this->db->where('id_berita',$param);
		return $this->db->get('topik_berita');
	}

	function get_isi_berita(){
		//this->db->limit(400,100);
		return $this->db->get('isi_berita');
	}

	function get_last_isi_berita(){
		$this->db->order_by('id_isi_berita','desc');
		return $this->db->get('isi_berita',1);
	}

	function get_isi_berita_where($param,$tgl_skrg=null){
		$this->db->select("*");
		$this->db->where('id_berita',$param);
		if($tgl_skrg!=null) $this->db->where('tgl_berita',$tgl_skrg);
		$this->db->order_by('tgl_berita','desc');
		$this->db->order_by(SUBSTR('tgl_post',-8),'desc');
		return $this->db->get('isi_berita');
	}

	function get_isi_berita_where_id_sub($param,$tgl_skrg=null){
		$this->db->select("*");
		$this->db->where('id_sub_topik',$param);
		if($tgl_skrg!=null) $this->db->where('tgl_berita',$tgl_skrg);
		return $this->db->get('isi_berita');
	}

	function get_isi_berita_where_tgl($param,$tgl_awal,$tgl_akhir){
		$this->db->where('id_berita',$param);
		$this->db->where('tgl_berita >=',$tgl_awal);
		$this->db->where('tgl_berita <=',$tgl_akhir);
		$this->db->order_by('tgl_berita','desc');
		$this->db->order_by(SUBSTR('tgl_post',-8),'desc');
		return $this->db->get('isi_berita');
	}



	function get_detail_berita($id_isi_berita){
		$this->db->where('id_isi_berita', $id_isi_berita);
		return $this->db->get('isi_berita',1);
	}

	function update_tone($id_isi_berita,$tone){
		$this->db->set('tone_berita',$tone);
		$this->db->where('id_isi_berita',$id_isi_berita);
		$this->db->update('isi_berita');
	}

	function update_tone_judul($id_isi_berita,$tone){
		$this->db->set('tone_judul',$tone);
		$this->db->where('id_isi_berita',$id_isi_berita);
		$this->db->update('isi_berita');
	}

	function get_media(){
		$this->db->order_by('nama_media','ASC');
		return $this->db->get('media');
	}

	function get_media_where($param){
		$this->db->where('id_media',$param);
		return $this->db->get('media');
	}

	function insert_isi_berita($data){
		$this->db->set('tgl_post','NOW()',FALSE);
		return $this->db->insert('isi_berita',$data);
	}

	function delete_isi_berita($id_isi_berita){
		$this->db->where('id_isi_berita',$id_isi_berita);
		$this->db->delete('isi_berita');
	}

	function update_isi_berita($id_isi_berita,$data){
		$set = array(
			'id_berita'=>$data['id_berita'],
			'id_sub_topik'=>$data['id_sub_topik'],
			'id_media'=>$data['id_media'],
			'id_narasumber'=>$data['id_narasumber'],
			'id_narasumber2'=>$data['id_narasumber2'],
			'id_narasumber3'=>$data['id_narasumber3'],
			'id_narasumber4'=>$data['id_narasumber4'],
			'judul'=>$data['judul'],
			'isi_berita'=>$data['isi_berita'],
			'tgl_berita'=>$data['tgl_berita'],
			'kutipan'=>$data['kutipan'],
			'tone_judul'=>$data['tone_judul'],
			'tone_berita'=>$data['tone_berita'],
			'tone_kutipan'=>$data['tone_kutipan'],
			'ad_value'=>$data['ad_value'],
			'news_value'=>$data['news_value'],
			'link_berita'=>$data['link_berita']);

			$this->db->set($set);
			$this->db->where('id_isi_berita',$id_isi_berita);
			$this->db->update('isi_berita');
		}



		//untuk mendapatkan semua:
		function get_all($id_isi_berita){
			$this->db->select('*,isi_berita.id_berita as kd_berita,
			isi_berita.id_sub_topik as kd_sub_topik,
			isi_berita.id_media as kd_media'
		);
		$this->db->where('isi_berita.id_berita = topik_berita.id_berita');
		$this->db->where('isi_berita.id_media = media.id_media');
		$this->db->where('isi_berita.id_sub_topik = sub_topik_berita.id_sub_topik');
		$this->db->where('isi_berita.id_isi_berita', $id_isi_berita);
		return $this->db->get('isi_berita,media,topik_berita,sub_topik_berita');
	}

	function get_narasumber($id_sub_narasumber){
		$this->db->where('narasumber.id_narasumber = sub_narasumber.id_narasumber');
		$this->db->where('id_sub_narasumber',$id_sub_narasumber);
		return $this->db->get('narasumber,sub_narasumber');
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
