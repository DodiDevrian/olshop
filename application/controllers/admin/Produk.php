<?php

class Produk extends CI_Controller{

	public function __construct(){
		parent ::__construct();

		$this->load->helpers(['menuAktif']);

		if ($this->session->userdata('role')!=1) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Belum Melakukan <strong>Login!</strong>
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('auth/login');
		}
	}

	public function index() {

		$data['barang'] = $this->Model_produk->tampil_data_admin()->result();

		$this->load->view('admin/templates2/header');
		$this->load->view('admin/templates2/sidebar');
		$this->load->view('admin/templates2/navbar');
		$this->load->view('admin/menu/produk/list-produk', $data);
		$this->load->view('admin/templates2/footer');
	}

	public function tambah_produk(){

		$this->load->view('admin/templates2/header');
		$this->load->view('admin/templates2/sidebar');
		$this->load->view('admin/templates2/navbar');
		$this->load->view('admin/menu/produk/form');
		$this->load->view('admin/templates2/footer');
	}

	public function tambah_data(){

		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required',[
				'required' => 'Nama Produk wajib diisi!']);
		$this->form_validation->set_rules('merek', 'Merek', 'required',[
				'required' => 'Merek wajib diisi!']);
		$this->form_validation->set_rules('harga', 'Harga', 'required',[
				'required' => 'Harga wajib diisi!']);
		$this->form_validation->set_rules('detail_produk', 'Detail Produk', 'required',[
				'required' => 'Detail Produk wajib diisi!']);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required',[
				'required' => 'Kategori wajib diisi!']);

		if (empty($_FILES['gambar']['name'])){
		    $this->form_validation->set_rules('gambar', 'Gambar', 'required',[
				'required' => 'Gambar wajib diisi!']);
		}

		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/templates/navbar');
			$this->load->view('admin/menu/produk/form');
			$this->load->view('admin/templates/footer');
		}else{
			$nama_produk	= $this->input->post('nama_produk');
			$merek			= $this->input->post('merek');
			$harga			= $this->input->post('harga');
			$stok			= 1;
			$detail_produk	= $this->input->post('detail_produk');
			$kategori		= $this->input->post('kategori');
			$gambar			= $_FILES['gambar']['name'];
			if ($gambar =''){}else{
				$config ['upload_path']= './assets/uploads';
				$config ['allowed_types']= 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					echo "Gambar Gagal Diupload";
				}else{
					$gambar=$this->upload->data('file_name');
				}
			}

			$data = array(
				'nama_produk'	=> $nama_produk,
				'merek'			=> $merek,
				'harga'			=> $harga,
				'stok'			=> $stok,
				'detail_produk'	=> $detail_produk,
				'kategori'		=> $kategori,
				'gambar'		=> $gambar
			);

			$this->Model_produk->tambah_data($data, 'produk');
			redirect('admin/produk');
		}

	}

	public function add()
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required',[
				'required' => 'Nama Produk wajib diisi!']);
		$this->form_validation->set_rules('merek', 'Merek', 'required',[
				'required' => 'Merek wajib diisi!']);
		$this->form_validation->set_rules('harga', 'Harga', 'required',[
				'required' => 'Harga wajib diisi!']);
		$this->form_validation->set_rules('detail_produk', 'Detail Produk', 'required',[
				'required' => 'Detail Produk wajib diisi!']);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required',[
				'required' => 'Kategori wajib diisi!']);

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './assets/uploads/';
            $config['allowed_types']    = 'jpg|png|jpeg|gif';
            $config['max_size']         = 20000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                $this->load->view('admin/templates2/header');
				$this->load->view('admin/templates2/sidebar');
				$this->load->view('admin/templates2/navbar');
				$this->load->view('admin/menu/produk/form');
				$this->load->view('admin/templates2/footer');
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/uploads/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_produk'     => $this->input->post('nama_produk'),
					'merek'           => $this->input->post('merek'),
					'harga'           => $this->input->post('harga'),
					'stok'            => 1,
					'detail_produk'   => $this->input->post('detail_produk'),
					'kategori'        => $this->input->post('kategori'),
                    'gambar'         => $upload_data['uploads']['file_name']
                );

                $this->Model_produk->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
                redirect('admin/produk');
                return;
            }
        }
        
        $this->load->view('admin/templates2/header');
		$this->load->view('admin/templates2/sidebar');
		$this->load->view('admin/templates2/navbar');
		$this->load->view('admin/menu/produk/form');
		$this->load->view('admin/templates2/footer');
    }

	public function edit($id){
		$where = array('id_produk' => $id);
		$data['barang'] = $this->Model_produk->edit_produk($where, 'produk')->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/menu/produk/form-edit', $data);
		$this->load->view('admin/templates/footer');
	}

	public function update_data($id_produk)
    {
        $data = array(
			'id_produk'	=> $id_produk,
			'nama_produk' => $this->input->post('nama_produk'),
			'merek' => $this->input->post('merek'),
			'harga' => $this->input->post('harga'),
			'detail_produk' => $this->input->post('detail_produk'),
			'kategori' => $this->input->post('kategori')
		);

		$this->Model_produk->update_data(array('id_produk'=>$id_produk), $data, 'produk');
		$this->session->set_flashdata('pesan', 'Data Produk Berhasil Diubah!');

		redirect('admin/produk');
    }

	public function edit_gambar($id){
		$where = array('id_produk' => $id);
		$data['barang'] = $this->Model_produk->edit_produk($where, 'produk')->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/menu/produk/edit-gambar', $data);
		$this->load->view('admin/templates/footer');
	}

	public function update(){

		$id				= $this->input->post('id_produk');
		$nama_produk	= $this->input->post('nama_produk');
		$merek			= $this->input->post('merek');
		$harga			= $this->input->post('harga');
		$stok			= $this->input->post('stok');
		$masa_garansi	= $this->input->post('masa_garansi');
		$detail_produk	= $this->input->post('detail_produk');
		$kategori		= $this->input->post('kategori');

		$data = array(
			'nama_produk'	=> $nama_produk,
			'merek'			=> $merek,
			'harga'			=> $harga,
			'stok'			=> $stok,
			'masa_garansi'	=> $masa_garansi,
			'detail_produk'	=> $detail_produk,
			'kategori'		=> $kategori
		);

		$where = array('id_produk' => $id);

		$this->Model_produk->update_data($where,$data, 'produk');
		redirect('admin/produk');
	}

	public function update_gambar($id_produk){
		$id				= $id_produk;
		$gambar			= $_FILES['gambar']['name'];
		if ($gambar =''){}else{
			$config ['upload_path']= './assets/uploads';
			$config ['allowed_types']= 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar Gagal Diupload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}


		$data = array(
			'gambar'		=> $gambar
		);

		$where = array('id_produk' => $id);

		$this->Model_produk->update_data($where,$data, 'produk');
		redirect('admin/produk');
	}

	public function ubah_gambar($id_produk)
	{
		$config['upload_path']   = './assets/uploads/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size']      = 20000;

		$this->load->library('upload');
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('gambar')) {

			echo $this->upload->display_errors();

		} else {

			$upload_data = $this->upload->data();
			$nama_file   = $upload_data['file_name'];

			// Resize (optional, tapi lebih aman)
			$config2['image_library']  = 'gd2';
			$config2['source_image']   = './assets/uploads/'.$nama_file;
			$config2['maintain_ratio'] = TRUE;
			$config2['width']          = 500;
			$config2['height']         = 500;

			$this->load->library('image_lib', $config2);
			$this->image_lib->resize();
			$this->image_lib->clear();

			// Hapus gambar lama
			$foto = $this->Model_produk->detail($id_produk);
			if (!empty($foto->gambar) && file_exists('./assets/uploads/'.$foto->gambar)) {
				unlink('./assets/uploads/'.$foto->gambar);
			}

			$data = array(
				'id_produk' => $id_produk,
				'gambar'    => $nama_file
			);

			$this->Model_produk->edit($data);

			$this->session->set_flashdata('pesan', 'Data Gambar Produk Berhasil Diubah!');
			redirect('admin/produk');
		}
	}


	public function delete($id){
		$where = array('id_produk' => $id);
		$this->Model_produk->delete_produk($where, 'produk');
		redirect('admin/produk');
	}
}