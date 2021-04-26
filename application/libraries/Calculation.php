<?php

class Calculation {

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function get()
    {
        $data['hujan'] = $this->CI->db->get('tb_hasilperhitungan')->result_array();
		$data['count'] = $this->CI->db->select('count(*) as jumlah')->get('tb_hasilperhitungan')->row_array();

        return $data;
    }

    public function getSe()
    {
        $data = $this->get();

        $totalforceast=0; 
        $totalerror=0; 
        $totalabsolute=0; 
        $totalsquared=0;

        foreach ($data['hujan'] as $hujan) {
            $totalforceast +=$hujan['forceast']; 
            $totalerror +=$hujan['error']; 
            $totalabsolute +=$hujan['absolute']; 
            $totalsquared +=$hujan['squared'];
        }

        return sqrt($totalsquared/8);
    }

}