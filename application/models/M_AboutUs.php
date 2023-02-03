<?php

class M_AboutUs extends CI_Model{
    protected $_table = 'AboutUs';

    public function list(){
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


    public function hapus($id){
		return $this->db->delete($this->_table, ['id' => $id]);
	}
}