<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('login_model');
 
	}
 
	public function index(){
        $data['title']='Login';

		$this->load->view('login/index');
	}

    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->login_model->cek_login("user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("home"));
 
		}else{
            $this->session->set_flashdata('flash-data','username dan password dengan benar !!!');
			redirect('login','refresh');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}


}
?>