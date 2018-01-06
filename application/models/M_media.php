<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_media extends CI_Model {



	public function __construct()
	{
		parent::__construct();

	}

	function get_media_group(){
		$this->db->select('id_media, COUNT(id_media) as total,tgl_post');
		$this->db->group_by('id_media');
		return $this->db->get('isi_berita');
	}

	function get_media_group_date($date){

		$this->db->select('id_media, COUNT(id_media) as total, tgl_post');
		$this->db->group_by('id_media');
		$this->db->like('tgl_post',substr($date,0,10));
		return $this->db->get('isi_berita');
	}

	function get_berita_where_media($id_media,$tgl_post){
		$this->db->order_by('tgl_post','ASC');
		$this->db->where('id_media', $id_media);
		$this->db->like('tgl_post', $tgl_post);
		return $this->db->get('isi_berita');
	}


	function get_all_where($id_media){
		$this->db->where('id_media', $id_media);
		return $this->db->get('media');
	}

	function get_all(){
		$this->db->order_by('id_media', 'asc');
		return $this->db->get('media');
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
