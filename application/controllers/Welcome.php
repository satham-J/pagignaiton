<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('pagination');
    }

	public function index($start=0)
	{
		$config['base_url'] = base_url('Welcome/index');
		$config['per_page'] = 2;
		$config['total_rows'] = $this->DataCount();
		$data['DataResult']=$this->Datalist($config['per_page'],$start);
		$data['x']=$start;
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
		$this->load->view('welcome_message',@$data);
	}

	public function DataCount(){
		$query=$this->db->get_where('sample_table');
		return $query->num_rows(); 
	}

	public function Datalist($per_page,$start){
		$query=$this->db->get_where('sample_table',array(),$per_page,$start);
		return $query->result_array(); 
	}

	public function form(){
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('date','Date','required');
		if (!$this->form_validation->run() == FALSE) {
			echo 'Validation Success'; exit;
		}
		$this->load->view('form');
	}
}
