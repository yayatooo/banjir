<?php
/**
 * 
 */
class Hitung extends CI_Controller
{
	
	//function __construct(argument)
	//{
		# code...
	//}
	function index(){
		$data['hujan']=$this->db->get('tb_hasilperhitungan')->result_array();
		$data['count']=$this->db->select('count(*) as jumlah')->get('tb_hasilperhitungan')->row_array();
		$data['content']='view_hitung';
		$this->load->view('dashboard',$data);
		
	}
	function create(){

		$data['content']='add_hitung';
		$this->load->view('dashboard',$data);
	}
	function forceast($nilai){
		$data=array();
		$sql=$this->db
		->order_by('id_hasil','desc')
		->get('tb_hasilperhitungan')->row_array();
		if ($sql) {
			$curah=$sql['nilai'];
			$forceast=$sql['forceast'];
			$data['forceast']=$forceast+0.8*($curah-$forceast);
			$f=$forceast+0.8*($curah-$forceast);
			$data['error']=$nilai-$f;
			$err=$nilai-$f;;
			$nilai_bilangan=$err;
			$nilai_pangkat=2;
			$data['absolute']=abs($err);
			$data['squared']=pow($nilai_bilangan, $nilai_pangkat);
			echo json_encode($data);

		}else{

			$data['forceast']=$nilai;
			$data['error']=0;

			echo json_encode($data);
		}

		
	}
	
	function store(){

		$data=[
			'bulan'=>$this->input->post('bulan'),
			'tahun'=>$this->input->post('tahun'),
			'nilai'=>$this->input->post('curah_hujan'),
			'forceast'=>$this->input->post('forceast'),
			'error'=>$this->input->post('error'),
			'absolute'=>$this->input->post('absolute'),
			'squared'=>$this->input->post('squared')

		];
		$this->db->insert('tb_hasilperhitungan',$data);
		$this->session->set_flashdata('flash','Simpan');
		redirect('hitung');
	}
	function edit($id){
		$data['edit']=$this->db->get_where('tb_hasilperhitungan',['id_hasil'=>$id])->row_array();
		$data['content']='edit_hitung';
		$this->load->view('dashboard',$data);


	}
	function update($id){
		$data=[
			'bulan'=>$this->input->post('bulan'),
			'tahun'=>$this->input->post('tahun'),
			'nilai'=>$this->input->post('curah_hujan'),
			'forceast'=>$this->input->post('forceast'),
			'error'=>$this->input->post('error'),
			'absolute'=>$this->input->post('absolute'),
			'squared'=>$this->input->post('squared')

		];
		$this->db->where('id_hasil',$id);
		$this->db->update('tb_hasilperhitungan',$data);
		$this->session->set_flashdata('flash','Edit');
		redirect('hitung');

	}
	function hapus($id){

		$this->db->where('id_hasil',$id);
		$this->db->delete('tb_hasilperhitungan');
		$this->session->set_flashdata('flash','Hapus');
		redirect('hitung');
	}
	function forceastedit($nilai,$id){
	$data=array();
		 $idbaru=$id-1;
	
		$sql=$this->db->get_where('tb_hasilperhitungan',['id_hasil'=>$idbaru])->row_array();
		$curah=$sql['nilai'];
			$forceast=$sql['forceast'];
			$data['forceast']=$forceast+0.8*($curah-$forceast);
			$f=$forceast+0.8*($curah-$forceast);
			$data['error']=$nilai-$f;
			$err=$nilai-$f;
			$nilai_bilangan=$err;
			$nilai_pangkat=2;
			$data['absolute']=abs($err);
			$data['squared']=pow($nilai_bilangan, $nilai_pangkat);
			echo json_encode($data);
	}
}


?>