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

	public function data_kemeja($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'kemeja'),$limit, $start);
	}

	public function data_kaos($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'kaos'),$limit, $start);
	}

	public function data_jaket($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'jaket'),$limit, $start);
	}

	public function data_sweater($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'sweater'),$limit, $start);
	}

	public function data_cardigan($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'cardigan'),$limit, $start);
	}

	public function data_jeans($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'jeans'),$limit, $start);
	}

	public function data_kolor($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'kolor'),$limit, $start);
	}

	public function data_kulot($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'kulot'),$limit, $start);
	}

	public function data_training($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'training'),$limit, $start);
	}

	public function data_dasar($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'dasar'),$limit, $start);
	}

	public function data_chinos($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'chinos'),$limit, $start);
	}
	
} 