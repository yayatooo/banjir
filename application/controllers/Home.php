<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->library('calculation');
        $this->load->model('Model_hujan');

        $this->calculation->get();

        // $maxYear = $this->Model_hujan->table()->select('MAX(tahun)')->get()->row();
        // $maxMonthInYear = $this->Model_hujan->table()->select('MAX(tahun)')->get()->row();
        // dd($maxMonth);

        $se = $this->calculation->getSe();

        $badge = [
        	'string' => '',
        	'class' => ''
        ];

        if ($se >= 0 && $se <= 100) {
        	$badge['string'] = 'aman';
        	$badge['class'] = 'text-success';
        } elseif ($se >= 101 && $se <= 300) {
        	$badge['string'] = 'siaga';
        	$badge['class'] = 'text-warning';
        } elseif ($se >= 301 && $se <= 500) {
        	$badge['string'] = 'bahaya';
        	$badge['class'] = 'text-danger';
        }

        $this->load->view('layout/guest', [
            'content' => 'home/index',
            'data' => $se,
            'badge' => $badge,
            'se' => $this->calculation->getSe(),
        ]);
    }

}

/* End of file Home.php */
