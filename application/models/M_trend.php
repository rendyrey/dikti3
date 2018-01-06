<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_trend extends CI_Model {



	public function __construct()
	{
		parent::__construct();

	}

	function get_all_sort(){
		$this->db->select('topik_berita,isi_berita.id_berita as id_berita,id_sub_topik,count(isi_berita.id_berita) as total');
		$this->db->from('isi_berita,topik_berita');
		// $this->db->where('tgl_berita',date('Y-m-d'));
		$this->db->where('isi_berita.id_berita=topik_berita.id_berita');
		$this->db->group_by('isi_berita.id_berita');
		$this->db->order_by('total', 'desc');
		return $this->db->get();
    // return $this->db->query('select topik_berita,count(isi_berita.id_berita) as total from isi_berita,topik_berita where isi_berita.id_berita=topik_berita.id_berita GROUP BY isi_berita.id_berita order by total DESC');
  }

	function get_all_sort_day(){
		$this->db->select('nama_sub_topik,isi_berita.id_berita as id_berita,isi_berita.id_sub_topik,count(isi_berita.id_sub_topik) as total');
		$this->db->from('isi_berita,sub_topik_berita');
		if(date('H:i') <= "09:30"){
		$this->db->where('tgl_post >=',strtotime("yesterday 17:00"));
		$this->db->where('tgl_berita',date('Y-m-d'));
		}else{
		$this->db->where('tgl_berita',date('Y-m-d'));
		}
		
		$this->db->where('isi_berita.id_sub_topik=sub_topik_berita.id_sub_topik');
		$this->db->group_by('isi_berita.id_sub_topik');
		$this->db->order_by('total', 'desc');
		$this->db->limit(10);
		return $this->db->get();
	}



}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */