<?php 
	
class Model_produk extends CI_Model{
	public function tampil_data($limit, $start){
		return $this->db->order_by('id_produk', 'DESC')->get('produk', $limit, $start);
	}

	public function tampil_data_keranjang(){
		return $this->db->get('produk');
	}

	public function tampil_data_admin(){
		return $this->db->order_by('id_produk', 'DESC')->get('produk');
	}

	public function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function add($data)
    {
        $this->db->insert('produk', $data);
    }

	public function edit_produk($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function edit($data)
    {
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->update('produk', $data);
    }

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete_produk($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id){
		$result = $this->db->where('id_produk', $id)
						   ->order_by('id_produk', 'DESC')
						   ->limit(1)
						   ->get('produk');	

		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function detail($id_produk)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_produk', $id_produk);
        return $this->db->get()->row(); 
    }

	public function detail_produk($id_produk){
		$result = $this->db->where('id_produk',$id_produk)->get('produk');
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->like('nama_produk',$keyword);
		
		return $this->db->get()->result();
	}
	
}