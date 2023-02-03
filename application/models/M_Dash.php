<?php

class M_Dash extends CI_Model{
    protected $_table = 'mst_dash';

    public function list(){
		
        $query = $this->db->get($this->_table);
		return $query->result();
	}
}