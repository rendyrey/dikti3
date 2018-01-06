<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
		$this->load->model('M_berita');
		// $this->load->library('../controllers/Dashboard.php');
	}

	public function index()
	{
		if($this->session->userdata('login')==TRUE && $this->session->userdata('user')=='administrator'){
			$query=$this->M_berita->get();
			$data['jml'] = $query->num_rows();
			$i=0;
			foreach($query->result() as $row){
				$data['id_berita'][$i]= $row->id_berita;
				$data['topik_berita'][$i]= $row->topik_berita;
				$i++;
			}
			redirect('Dashboard/index');
			// $this->load->view('dashboard',$data);
		}else{
			$data['message']=$this->session->flashdata('message');
			$data['action']='Login/process_login_admin';
			$this->load->view('index',$data);
		}
	}


	function process_login_admin(){
		// $username=$this->input->post('username');
		// $password=$this->input->post('password');
		// echo $username;
		// echo "lalaa";
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==TRUE){
			$username=$this->input->post('username');
			$password=md5($this->input->post('password'));
			// echo $password;
			$ambil=$this->M_login->get($username);
			foreach($ambil->result() as $row){
				$id=$row->username;
			}

			if($this->M_login->check_user('admin',$username,$password)==TRUE){
				$data=array(
					'id'=>$id,
					'username'=>$username,
					'login'=>TRUE,
					'user'=>'administrator',
					);
				$this->session->set_userdata($data);

				$query=$this->M_berita->get();
				$data['jml'] = $query->num_rows();
				$i=0;
				foreach($query->result() as $row){
					$data['id_berita'][$i]= $row->id_berita;
					$data['topik_berita'][$i]= $row->topik_berita;
					$i++;
				}
				redirect('Dashboard/index');
				// $this->Dashboard->index();
				// $this->load->view('dashboard',$data);
			}else{
				$data['message']=$this->session->set_flashdata('message','Maaf, username atau password anda salah');
				redirect('Login');
			}
		}else{
			$data['message']=$this->session->flashdata('message');
			$data['action']='Login/index';
			$this->load->view('index',$data);
		}
	}


	function process_logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */
