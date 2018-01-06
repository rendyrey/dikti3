<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	public $variable;
	public $namatable;

	public function __construct()
	{
		parent::__construct();

	}

	function check_user($tablename,$username,$password){

		$this->namatable=$tablename;

		$query = $this->db->get_where($this->namatable, array('username'=>$username,'password'=>$password),1,0);

		if($query->num_rows()>0){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	function get($username){
		$this->db->where('username',$username);
		return $this->db->get('admin');
	}


}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
