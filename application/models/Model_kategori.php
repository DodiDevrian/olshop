<?php 

class Model_kategori extends CI_Model{
	public function data_laptop($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'laptop'),$limit, $start);
	}

	public function data_proyektor($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'komponen'), $limit, $start);
	}

	public function data_aksesoris($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'aksesoris'), $limit, $start);
	}

	public function data_printer($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'printer'), $limit, $start);
	}

	public function data_tshirt($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'tshirt'),$limit, $start);
	}

	public function data_olahraga($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'olahraga'),$limit, $start);
	}

	public function data_kemeja($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'kemeja'),$limit, $start);
	}

	public function data_flanel($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'flanel'),$limit, $start);
	}

	public function data_jaketpria($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'jaketpria'),$limit, $start);
	}

	public function data_jaketwanita($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'jaketwanita'),$limit, $start);
	}

	public function data_jaketkulit($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'jaketkulit'),$limit, $start);
	}

	public function data_hoodie($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'hoodie'),$limit, $start);
	}

	public function data_jeans($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'jeans'),$limit, $start);
	}

	public function data_kargo($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'kargo'),$limit, $start);
	}

	public function data_chinos($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'chinos'),$limit, $start);
	}
	
	public function data_bahan($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'bahan'),$limit, $start);
	}

	public function data_jas($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'jas'),$limit, $start);
	}

	public function data_tempxkorea($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'tempxkorea'),$limit, $start);
	}

	public function data_pakaiananak($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'pakaiananak'),$limit, $start);
	}

	public function data_pakaianwanita($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'pakaianwanita'),$limit, $start);
	}

	public function data_sepatu($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'sepatu'),$limit, $start);
	}
} 