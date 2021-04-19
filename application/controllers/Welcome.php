<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}
	public function validasi(){

		$data=[
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))

		];
		$cek=$this->db->get_where('tb_user',$data);
		if ($cek->num_rows()>0) {
			$data=$cek->row_array();
			$session['username']=$data['username'];
			$session['level']=$data['level'];
			$this->session->set_userdata($session);
			redirect('Welcome/home');
		}else{
			$this->session->set_flashdata('notif','Login Gagal');
			redirect('welcome/index');
		}
	}

	public function home(){
		$data['squared']=$this->db->select('sum(squared) as jumlah')->get('tb_hasilperhitungan')->row_array();
		$data['count']=$this->db->select('count(*) as jumlah_data')->get('tb_hasilperhitungan')->row_array();
		$data['content']='home';
		$this->load->view('dashboard',$data);
		
	}
	function logout(){

		$this->session->sess_destroy();
		redirect('welcome');	
	}
}
