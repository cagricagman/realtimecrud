<?php
/**
 * Created by PhpStorm.
 * User: Çağrı
 * Date: 9.02.2018
 * Time: 11:51
 */

class Crud_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getView()
    {
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }

    public function postNew($data)
    {
        $this->db-insert('users',$data);
        return $this->db->insert_id();
    }

    public function postUpdate($where, $data)
    {
        $this->db->update('users', $data, $where);
        return $this->db->affected_rows();
    }

    public function getDelete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
    
}