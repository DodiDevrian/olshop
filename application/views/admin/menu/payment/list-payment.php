        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Data Metode Pembayaran</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Home</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Data Metode Pembayaran</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Metode Pembayaran</h4>
                        <a data-bs-toggle="modal" data-bs-target="#tambahPayment"
                                class="btn btn-primary btn-round ms-auto"
                            >
                                <i class="fa fa-plus"></i>
                                Tambah Metode
                        </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <?php
                    if ($this->session->flashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                        echo $this->session->flashdata('pesan');
                        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>';
                        echo '</div>';
                    }
                    ?>
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
	                        <thead>
	                            <tr>
	                                <th>No</th>
	                                <th>Metode Pembayaran</th>
	                                <th>Nama Penerima</th>
	                                <th>Nomor Rekening / E-wallet</th>
	                                <th>Action</th>
	                                
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php  
	                        	$no=1;
	                        	foreach($payment as $brg) : ?>
	                        	<tr>
	                                <td><?php echo $no++ ?></td>
	                                <td><?php echo $brg->nama_payment ?></td>
	                                <td><?php echo $brg->nama_penerima ?></td>
	                                <td><?php echo $brg->nomor ?></td>
	                                <td align="center">
	                                	<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ubahPayment<?php echo $brg->id ?>"><i class="fas fa-edit"></i></button>
	                                	<span onclick="javascript: return confirm('Yakin Untuk Menghapus Data Ini?')">
	                                		<?php echo anchor('admin/produk/delete/' .$brg->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
	                                	</span>
	                                </td>
	                            </tr>
	                        	<?php endforeach; ?>
	                        </tbody>
	                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<div class="modal fade" id="tambahPayment" tabindex="-1" aria-labelledby="tambahPaymentLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahPaymentLabel">Tambah Metode Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/payment/tambah_payment/'); ?>
        
        <div class="form-floating form-floating-custom mb-3">
            <select
            class="form-select"
            id="selectFloatingLabel"
            name="nama_payment"
            required
            >
                <option disabled selected>-- Pilih Metode Pembayaran --</option>
                <option value="Bank BCA">Bank BCA</option>
                <option value="Bank Mandiri">Bank Mandiri</option>
                <option value="Bank BNI">Bank BNI</option>
                <option value="Bank BRI">Bank BRI</option>
                <option value="GOPAY">GOPAY</option>
                <option value="OVO">OVO</option>
                <option value="DANA">DANA</option>
            </select>
            <?php echo form_error('kategori', '<div class="text-danger small">', '</div>') ?>
            <label for="selectFloatingLabel">Metode Pembayaran</label>
        </div>
        <div class="form-floating form-floating-custom mb-3">
          <input class="form-control" type="text" name="nama_penerima" placeholder="Masukkan Nama Penerima">
          <?php echo form_error('nama_penerima', '<div class="text-danger small">', '</div>') ?>
          <label class="label-input" for="floatingInput">Nama Penerima</label>
        </div>
        <div class="form-floating form-floating-custom mb-3">
          <input class="form-control" type="text" name="nomor" placeholder="Masukkan Nomor Rekening / E-wallet">
          <?php echo form_error('nomor', '<div class="text-danger small">', '</div>') ?>
          <label class="label-input" for="floatingInput">Nomor Rekening / E-wallet</label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<?php foreach($payment as $brg) : ?>
<div class="modal fade" id="ubahPayment<?= $brg->id ?>" tabindex="-1" aria-labelledby="ubahPaymentLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ubahPaymentLabel">Ubah Metode Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/payment/update_payment/' . $brg->id); ?>
        
        <div class="form-floating form-floating-custom mb-3">
            <select
            class="form-select"
            id="selectFloatingLabel"
            name="nama_payment"
            required
            >
                <option value="<?= $brg->nama_payment ?>"><?= $brg->nama_payment ?></option>
                <option value="Bank BCA">Bank BCA</option>
                <option value="Bank Mandiri">Bank Mandiri</option>
                <option value="Bank BNI">Bank BNI</option>
                <option value="Bank BRI">Bank BRI</option>
                <option value="GOPAY">GOPAY</option>
                <option value="OVO">OVO</option>
                <option value="DANA">DANA</option>
            </select>
            <?php echo form_error('kategori', '<div class="text-danger small">', '</div>') ?>
            <label for="selectFloatingLabel">Metode Pembayaran</label>
        </div>
        <div class="form-floating form-floating-custom mb-3">
          <input class="form-control" type="text" name="nama_penerima" placeholder="Masukkan Nama Penerima" value="<?= $brg->nama_penerima ?>">
          <?php echo form_error('nama_penerima', '<div class="text-danger small">', '</div>') ?>
          <label class="label-input" for="floatingInput">Nama Penerima</label>
        </div>
        <div class="form-floating form-floating-custom mb-3">
          <input class="form-control" type="text" name="nomor" placeholder="Masukkan Nomor Rekening / E-wallet" value="<?= $brg->nomor ?>">
          <?php echo form_error('nomor', '<div class="text-danger small">', '</div>') ?>
          <label class="label-input" for="floatingInput">Nomor Rekening / E-wallet</label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<?php endforeach; ?>