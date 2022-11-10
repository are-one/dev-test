<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data', 'data');
    }

    public function index()
	{
		$data['data'] = $this->data->get_count_data_by_kategori();
        $this->load->view('data/index', $data);
	}

    
}
