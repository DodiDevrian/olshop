<?php

class Payment extends CI_Controller{

	public function __construct(){
		parent ::__construct();

		$this->load->helpers(['menuAktif']);
        $this->load->model('Model_payment');

		if ($this->session->userdata('role')!=1) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Belum Melakukan <strong>Login!</strong>
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('auth/login');
		}
	}

	public function index() {

		$data['payment'] = $this->Model_payment->tampil_data_admin()->result();

		$this->load->view('admin/templates2/header');
		$this->load->view('admin/templates2/sidebar');
		$this->load->view('admin/templates2/navbar');
		$this->load->view('admin/menu/payment/list-payment', $data);
		$this->load->view('admin/templates2/footer');
	}

    public function tambah_payment()
	{
		$data = array(
            'nama_payment' => $this->input->post('nama_payment'),
            'nama_penerima' => $this->input->post('nama_penerima'),
            'nomor' => $this->input->post('nomor'),
		);

        $this->Model_payment->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
        redirect('admin/payment');
        return;
	}

    public function update_payment($id)
    {
        $data = array(
			'id'	=> $id,
			'nama_payment' => $this->input->post('nama_payment'),
			'nama_penerima' => $this->input->post('nama_penerima'),
			'nomor' => $this->input->post('nomor')
		);
		$this->Model_payment->update_data(array('id'=>$id), $data, 'payment');
		$this->session->set_flashdata('pesan', 'Data Pembayaran Berhasil Diubah!');

		redirect('admin/payment');
    }
}