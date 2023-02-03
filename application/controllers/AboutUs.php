<?php
class AboutUs extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Kode','m_kode');
		$this->load->model('M_AboutUs','m_aboutus');
		// $this->load->model('kategori_model');
	}
    public function index()
	{
		$this->data['title'] = 'About Us';
		$this->data['list'] = $this->m_kode->list();
		$this->data['data'] = $this->m_aboutus->list()->result();
		$this->data['no'] = 1;

		if($this->session->userdata('role') == "user"){	
			$this->load->view('about',	$this->data);
		}else if($this->session->userdata('role') == "admin"){

			$this->load->view('admin/AboutUs',$this->data);
		}else{
			$this->load->view('about',	$this->data);
		}
		
	}

	public function view($id){
		$where = array(
			"id" => $id
		);

		$this->data['list'] = $this->m_kode->list();
		$this->data['title'] = 'Ubah About Us';
		$this->data['data'] = $this->m_aboutus->lihat_id($where)->row();;
		$this->load->view('admin/editAboutUs',$this->data);
	}

	public function proses_ubah($id){
		$data = [
			'gambar' => $this->input->post('gambar'),
			'deskripsi' => $this->input->post('deskripsi'),
			'judul' => $this->input->post('judul'),
			'subjudul' => $this->input->post('subjudul'),
		];

		if($this->m_aboutus->ubah($data, $id)){	
			$this->session->set_flashdata('success', 'Data About Us <strong>Berhasil</strong> Diubah!');
			redirect('AboutUs');

		} else {
			$this->session->set_flashdata('error', 'Data About Us <strong>Gagal</strong> Diubah!');
			redirect('AboutUs/view'.$id);
		}
	}

	public function tambah(){
		$this->data['list'] = $this->m_kode->list();
		$this->data['title'] = 'Tambah About Us';
		$this->load->view('admin/editAboutUs',$this->data);
	}

	public function proses_tambah(){

		$data = [
			'gambar' => $this->input->post('gambar'),
			'deskripsi' => $this->input->post('deskripsi'),
			'judul' => $this->input->post('judul'),
			'subjudul' => $this->input->post('subjudul'),
		];
		

		if($this->m_aboutus->tambah($data)){
			$this->session->set_flashdata('success', 'Data About Us <strong>Berhasil</strong> Ditambahkan!');
			redirect('AboutUs');
		} else {
			$this->session->set_flashdata('error', 'Data About Us <strong>Gagal</strong> Ditambahkan!');
			redirect('AboutUs/tambah');
		}
	}

	public function hapus($id){

		$where = array(
			"id" => $id
		);
		if($this->m_aboutus->hapus($id)){
			$this->session->set_flashdata('success', 'Data About Us <strong>Berhasil</strong> Dihapus!');
			redirect('AboutUs');
		} else {
			$this->session->set_flashdata('error', 'Data About Us <strong>Gagal</strong> Dihapus!');
			redirect('AboutUs');
		}
	}
}