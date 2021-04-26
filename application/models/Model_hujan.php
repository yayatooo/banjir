<?php
/**
 * 
 */
class Model_hujan extends CI_Model
{
	function table()
	{
		return $this->db->from('tb_curah_hujan');
	}
	
	function hujan(){

		return $this->db->get('tb_curah_hujan');
	}
	
}