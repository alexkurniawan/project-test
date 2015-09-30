<?php
class M_pos_budget extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function list_data(){
        $query = $this->db->get('alokasi_budget');

        return $query->result();
    }

    function input($param){
        $this->db->insert('alokasi_budget',$param);
        return TRUE;
    }

    function getEdit($id){
        $this->db->where('id',$id);
        $query = $this->db->get('alokasi_budget');

        return $query->result();
    }

    function edit($param){
        $this->db->where('id',$id);
        $query = $this->db->get('alokasi_budget');
        return TRUE;
    }

    function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('alokasi_budget');
    }
}