<?php

class M_Transaksi extends CI_Model{
    protected $_table = 'transaksi';

    public function lihat(){
		$this->db->select('a.*, b.*');
		$this->db->from('mst_produk as a');
		$this->db->join('transaksi as b','a.id=b.id_produk');
        $query = $this->db->get();
		return $query;
	}

    public function lihat_id($where){
		$this->db->select('a.*, b.gambar,b.nama_produk,b.kode');
		$this->db->from('transaksi as a');
		$this->db->join('mst_produk as b','a.id_produk=b.id');
        $this->db->where($where);
        $query = $this->db->get();

		
		return $query;
	}

    public function tambah($data){
		return $this->db->insert($this->_table, $data);
	}


    public function ubah($data, $id){
		$query = $this->db->set($data);
		$query = $this->db->where();
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function update_status($status,$id){
		$query = $this->db->set(['status' => $status]);
		$query = $this->db->where(['id' => $id]);
		$query = $this->db->update($this->_table);
		return $query;
	}

    public function hapus($id){
		return $this->db->delete($this->_table, ['id' => $id]);
	}
}