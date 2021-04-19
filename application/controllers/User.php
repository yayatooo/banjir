<?php
/**
 * 
 */
class User extends CI_Controller
{
	
	//function __construct()
//	{
		# code...
	//}

	function index(){

		$data['user']=$this->db->get('tb_user')->result();
		$data['content']='view_user';
		$this->load->view('dashboard',$data);

	}
	function create(){

		$data['content']='add_user';
		$this->load->view('dashboard',$data);
	}
	function store(){

		$data=[
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'level'=>$this->input->post('level')

		];
		$this->db->insert('tb_user',$data);
		$this->session->set_flashdata('flash','Simpan');
		redirect('user');
	}
	function edit($id){
		$data['edit']=$this->db->get_where('tb_user',['id_user'=>$id])->row_array();
		$data['content']='edit_user';
		$this->load->view('dashboard',$data);


	}
	function update($id){
		$data=[
			'username'=>$this->input->post('username'),
			'level'=>$this->input->post('level')

		];
		$this->db->where('id_user',$id);
		$this->db->update('tb_user',$data);
		$this->session->set_flashdata('flash','Edit');
		redirect('user');

	}
	function delete($id){
		$this->db->where('id_user',$id);
		$this->db->delete('tb_user');
		redirect('user');

	}
}









?>