<?php
/**
 * 
 */
class Model_hujan extends CI_Model
{
	
	function hujan(){

		return $this->db->get('tb_curah_hujan');
	}
	
}