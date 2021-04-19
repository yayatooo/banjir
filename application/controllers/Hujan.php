<?php 

class Hujan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_hujan');
	}
	function index(){
		$data['hujan']=$this->Model_hujan->hujan()->result_array();
		$data['content']='view_hujan';
		$this->load->view('dashboard',$data);

	}

	function create(){

		$data['content']='add_hujan';
		$this->load->view('dashboard',$data);

	}

	function store(){

		$data=[
			
			
			'tahun'=>$this->input->post('tahun'),
			'januari'=>$this->input->post('januari'),
			'febuari'=>$this->input->post('febuari'),
			'maret'=>$this->input->post('maret'),
			'april'=>$this->input->post('april'),
			'mei'=>$this->input->post('mei'),
			'juni'=>$this->input->post('juni'),
			'juli'=>$this->input->post('juli'),
			'agustus'=>$this->input->post('agustus'),
			'september'=>$this->input->post('september'),
			'oktober'=>$this->input->post('oktober'),
			'november'=>$this->input->post('november'),
			'desember'=>$this->input->post('desember')


		];
		$this->db->insert('tb_curah_hujan',$data);
		redirect('hujan/index');

	}
	function edit($id){
		$data=$this->db->get_where('tb_curah_hujan',['id_hujan'=>$id])->row_array();
		echo json_encode($data);

	}

	function hapus($id){

		$this->db->where('id_hujan',$id);
		$this->db->delete('tb_curah_hujan');
		redirect('hujan/index');
	}
	function hasil_perhitungan(){

		$data['isi']=$this->db->select('januari,tahun')->get('tb_curah_hujan')->result_array();
		$data['content']='view_perhitungan';
		$this->load->view('dashboard',$data);

	}


}










?>