<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_narasumber extends CI_Model {



	public function __construct()
	{
		parent::__construct();

	}

	function get_sub_narasumber($id_narasumber){
		$this->db->from('narasumber','sub_narasumber');
		$this->db->where('id_narasumber',$id_narasumber);
		return $this->db->get();
	}

	function get_narasumber(){
		return $this->db->get('narasumber');
	}

	function get_nama_narasumber($id_sub_narasumber){
		$this->db->where('id_sub_narasumber', $id_sub_narasumber);
		return $this->db->get('sub_narasumber');
	}

	function get_subnarsum($id_narsum){
		$this->db->where('id_narasumber',$id_narsum);
		return $this->db->get('sub_narasumber');
	}



}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
