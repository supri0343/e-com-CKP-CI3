<?php
class Transaksi extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Product','m_produk');
		$this->load->model('M_Kode','m_kode');
		$this->load->model('M_Transaksi','m_transaksi');
	}

	

	public function index(){
		$this->data['list'] = $this->m_kode->list();
		$this->data['title'] = "Data Pesanan";
		$this->data['no'] = 1;
		$where = array(
			"nama" => $this->session->userdata('username')
		);

		if($this->session->userdata('role') == "user"){
			$this->data['listOrder'] = $this->m_transaksi->lihat_id($where)->result();
		}elseif($this->session->userdata('role') == "admin"){
			$this->data['listOrder'] = $this->m_transaksi->lihat()->result();
		}
		$this->load->view('statusOrder',$this->data);
	}
	
	public function view($id){
		$where = array(
			"a.id" => $id
		);
		$selectData = $this->m_transaksi->lihat_id($where)->row();

		$this->data['list'] = $this->m_kode->list();
		$this->data['title'] = 'Ubah Status Transaksi';
		$this->data['data'] = $selectData;
		$this->load->view('admin/editstatusorder',$this->data);
	}

	public function proses_ubah($id){
		$status = $this->input->post('status');

		if($this->m_transaksi->update_status($status, $id)){	
			$this->session->set_flashdata('success', 'Status Pemesanan <strong>Berhasil</strong> Diubah!');
			redirect('transaksi');

		} else {
			$this->session->set_flashdata('error', 'Status Pemesanan <strong>Gagal</strong> Diubah!');
			redirect('transaksi/view'.$id);
		}
	}

    public function CheckOut($id){
        $where = array(
			"id" => $id
		);
		$produk = $this->m_produk->lihat($where)->row();

	
        $this->data['produk'] = $produk;
		$this->data['stok'] = $produk->stok;
		$this->data['list'] = $this->m_kode->list();
    
		$submit = $this->input->post('placeOrder');

		if(isset($submit)){
			$custData = array(
				'id_produk'	=> $produk->id,
				'nama'     => strip_tags($this->input->post('name')),
				'email'     => strip_tags($this->input->post('email')),
				'phone'     => strip_tags($this->input->post('phone')),
				'alamat'=> strip_tags($this->input->post('address')),
				'qty_order'=> strip_tags($this->input->post('qty')),
				'tgl_order'=> date('Y-m-d'),
				'harga_pembelian' => $produk->harga,
				'total_bayar' => $produk->harga * $this->input->post('qty'),
				'status' => 'Sedang Diproses'
			);

			$this->data['custData'] = $custData;
			
			if($this->input->post('qty') > $produk->stok){
				$this->session->set_flashdata('error', 'Qty order tidak boleh lebih dari Stok');
				
			}else if
			($this->input->post('qty') == 0){
			
				$this->session->set_flashdata('error', 'Qty order tidak boleh 0');
			}else{
				$remaining_stok = $produk->stok - strip_tags($this->input->post('qty'));
				$this->m_transaksi->tambah($custData);
				$this->m_produk->update_stok($remaining_stok,$produk->id);
				$this->session->set_flashdata('success', 'Transaksi anda akan diproses.');
			}
			// echo("save");
		}

		$this->load->view('checkout',$this->data);
    }

	
}
