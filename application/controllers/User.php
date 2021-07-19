<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class User extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_user");
	}

	public function login()
	{
		$this->load->view('user/login');
		if($this->M_user->isLogin())
		{
			redirect(base_url());
		}
	}

	public function login_proses()
	{
		if($this->M_user->login_proses())
		{
			redirect(base_url());
		}
		else
		{
			$this->session->set_flashdata('login', 'Username atau password salah.');
			redirect(base_url('user/login'));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('user/login'));
	}

	public function data_user()
	{
		$data = $this->M_user->getAll();
		echo json_encode($data);
	}
	
}

 ?>