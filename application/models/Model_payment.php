<?php 
	
class Model_payment extends CI_Model{
    public function tampil_data_admin(){
        return $this->db->order_by('id', 'DESC')->get('payment');
    }

    public function tampil_data(){
        return $this->db->get('payment');
    }

    public function tambah_payment($data,$table){
        $this->db->insert($table,$data);
    }

    public function add($data)
    {
        $this->db->insert('payment', $data);
    }

    public function edit_payment($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function delete_payment($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}