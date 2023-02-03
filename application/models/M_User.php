<?php

class M_User extends CI_Model{
    protected $_table = 'user';

    public function list($username){
        $query = $this->db->where(['username' => $username]);
        $query = $this->db->get($this->_table);
		return $query;
	}
}