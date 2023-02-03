<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Product','m_produk');
		$this->load->model('M_Kode','m_kode');
	
	}
    public function GetData_Product($kode){
        $this->data['title'] = 'Data Produk';
		$where = array(
			"kode" => $kode
		);

		$this->data['list'] = $this->m_kode->list();
		$this->data['kode'] = $kode;
		$this->data['produk'] = $this->m_produk->lihat($where)->result();
		$this->data['no'] = 1;
		if($this->session->userdata('role') == "user"){	
			$this->load->view('catalog',$this->data);
		}else if($this->session->userdata('role') == "admin"){

			$this->load->view('admin/catalog',$this->data);
		}else{
			$this->load->view('catalog',$this->data);
		}
    }

	public function view($id){
		$where = array(
			"id" => $id
		);
		$selectData = $this->m_produk->lihat_id($where)->row();
		$this->data['list'] = $this->m_kode->list();
		$this->data['title'] = 'View Produk';
		$this->data['barang'] = $selectData;
		$this->data['kode'] = $selectData->kode;
		$this->load->view('admin/editcatalog',$this->data);
	}

	public function proses_ubah($id){
		$data = [
			'kode' => $this->input->post('kode'),
			'nama_produk' => $this->input->post('nama'),
			'stok' => $this->input->post('stok'),
			'harga' => $this->input->post('harga'),
			'gambar' => $this->input->post('gambar'),
			'deskripsi' => $this->input->post('deskripsi'),
		];

		if($this->m_produk->ubah($data, $id)){	
			$this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Diubah!');
			redirect('product/GetData_Product/'.$this->input->post('kode'));
		} else {
			$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Diubah!');
			redirect('product/GetData_Product/'.$this->input->post('kode'));
		}

	}

	public function hapus($id){

		$where = array(
			"id" => $id
		);
		$data = $this->m_produk->lihat_id($where)->row();
		if($this->m_produk->hapus($id)){
			$this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Dihapus!');
			redirect('product/GetData_Product/'.$data->kode);
		} else {
			$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Dihapus!');
			redirect('product/GetData_Product/'.$data->kode);
		}
	}

	public function tambah($kode){
		$this->data['list'] = $this->m_kode->list();
		$this->data['title'] = 'Tambah Produk';
		$this->data['kode'] = $kode;
		$this->load->view('admin/editcatalog',$this->data);
	}

	public function proses_tambah(){

		$data = [
			'kode' => $this->input->post('kode'),
			'nama_produk' => $this->input->post('nama'),
			'stok' => $this->input->post('stok'),
			'harga' => $this->input->post('harga'),
			'gambar' => $this->input->post('gambar'),
			'deskripsi' => $this->input->post('deskripsi'),
		];
		

		if($this->m_produk->tambah($data)){
			$this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Ditambahkan!');
			redirect('product/GetData_Product/'.$this->input->post('kode'));
		} else {
			$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Ditambahkan!');
			redirect('product/GetData_Product/'.$this->input->post('kode'));
		}
	}




}