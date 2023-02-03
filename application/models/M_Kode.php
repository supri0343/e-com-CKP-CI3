<?php

class M_Kode extends CI_Model{
    protected $_table = 'mst_kode';

    public function list(){
		
        $query = $this->db->get($this->_table);
		return $query->result();
	}
}