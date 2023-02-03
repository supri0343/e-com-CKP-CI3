<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('M_Kode','m_kode');
		 $this->load->model('M_Dash','m_dash');
	 }
	public function index()
	{
		$this->data['list'] = $this->m_kode->list();
		$this->data['dash'] = $this->m_dash->list();
		$this->data['title'] = "Dashboard";
		
		if($this->session->userdata('role') == "user"){
			
			$this->load->view('dashboard',$this->data);
		}else if($this->session->userdata('role') == "admin"){
			$this->data['title'] = "Dashboard Admin";
			$this->load->view('admin/dashboard',$this->data);
		}else{
			$this->load->view('dashboard',$this->data);
		}
		
	}


}
