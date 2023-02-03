<?php

class M_Product extends CI_Model{
    protected $_table = 'mst_produk';

    public function lihat($where){
		
        $query = $this->db->where($where);
        $query = $this->db->get($this->_table);
		return $query;
	}

    public function lihat_id($where){
		
        $query = $this->db->where($where);
        $query = $this->db->get($this->_table);
		return $query;
	}

    public function tambah($data){
		return $this->db->insert($this->_table, $data);
	}

    public function ubah($data, $id){
		$query = $this->db->set($data);
		$query = $this->db->where(['id' => $id]);
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function update_stok($stok,$id){
		$query = $this->db->set(['stok' => $stok]);
		$query = $this->db->where(['id' => $id]);
		$query = $this->db->update($this->_table);
		return $query;
	}

    public function hapus($id){
		return $this->db->delete($this->_table, ['id' => $id]);
	}
}