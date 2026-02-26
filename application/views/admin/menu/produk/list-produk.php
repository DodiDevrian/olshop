        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Data Produk</h3>
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
                  <a href="#">Data Produk</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Produk</h4>
                        <a href="<?= base_url('admin/produk/tambah_produk') ?>"
                                class="btn btn-primary btn-round ms-auto"
                            >
                                <i class="fa fa-plus"></i>
                                Tambah Produk
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
	                                <th>Nama Barang</th>
	                                <th>Merek</th>
	                                <th>Harga</th>
	                                <th>Stok</th>
	                                <th>Kategori</th>
	                                <th>Gambar</th>
	                                <th>Action</th>
	                                
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php  
	                        	$no=1;
	                        	foreach($barang as $brg) : ?>
	                        	<tr>
	                                <td><?php echo $no++ ?></td>
	                                <td><?php echo $brg->nama_produk ?></td>
	                                <td><?php echo $brg->merek ?></td>
	                                <td>Rp. <?php echo number_format($brg->harga,0,',','.') ?></td>
	                                <td><?php if ($brg->stok == 0) {
                                    echo '<span class="badge bg-danger">Terjual</span>';
                                  } else {
                                    echo '<span class="badge bg-success">Tersedia</span>';
                                  } ?></td>
	                                <td><?php echo $brg->kategori ?></td>
	                                <td class="img-btn">
	                                	<img src="<?php echo base_url() ?>assets/uploads/<?php echo $brg->gambar ?>" width="50px">
                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#ubahGambar<?php echo $brg->id_produk ?>">
                                      <i class="fas fa-images"></i>
                                    </button>

	                                </td>
	                                <td align="center">
	                                	<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ubahData<?php echo $brg->id_produk ?>"><i class="fas fa-edit"></i></button>
	                                	<span onclick="javascript: return confirm('Yakin Untuk Menghapus Data Ini?')">
	                                		<?php echo anchor('admin/produk/delete/' .$brg->id_produk, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
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

<!-- Modal Edit Gambar -->
<?php foreach($barang as $brg) : ?> ?>
<div class="modal fade" id="ubahGambar<?php echo $brg->id_produk ?>" tabindex="-1" aria-labelledby="ubahGambar<?php echo $brg->id_produk ?>Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ubahGambar<?php echo $brg->id_produk ?>Label">Ubah Gambar Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          <img src="<?php echo base_url() ?>assets/uploads/<?php echo $brg->gambar ?>" width="100%">
        </div>
        <?php echo form_open_multipart('admin/produk/ubah_gambar/' . $brg->id_produk); ?>
        <div class="form-group text-start">
            <label class="form-label">Foto Produk</label>
            <input type="file" class="form-control" name="gambar">
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

<?php foreach($barang as $brg) : ?> ?>
<div class="modal fade" id="ubahData<?php echo $brg->id_produk ?>" tabindex="-1" aria-labelledby="ubahData<?php echo $brg->id_produk ?>Label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ubahData<?php echo $brg->id_produk ?>Label">Ubah Data Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/produk/update_data/' . $brg->id_produk); ?>
        
        <div class="form-floating form-floating-custom mb-3">
          <input class="form-control" type="text" name="nama_produk" placeholder="Masukkan Nama Lengkap" value="<?php echo $brg->nama_produk ?>">
          <?php echo form_error('nama_produk', '<div class="text-danger small">', '</div>') ?>
          <label class="label-input" for="floatingInput">Nama Produk</label>
        </div>
        <div class="form-floating form-floating-custom mb-3">
          <input class="form-control" type="text" name="merek" placeholder="Masukkan Merek" value="<?php echo $brg->merek ?>">
          <?php echo form_error('merek', '<div class="text-danger small">', '</div>') ?>
          <label class="label-input" for="floatingInput">Merek</label>
        </div>
        <div class="form-floating form-floating-custom mb-3">
          <input class="form-control" type="text" name="harga" placeholder="Masukkan Harga" value="<?php echo $brg->harga ?>">
          <?php echo form_error('harga', '<div class="text-danger small">', '</div>') ?>
          <label class="label-input" for="floatingInput">Harga</label>
        </div>

        <div class="form-floating form-floating-custom mb-3">
            <select
            class="form-select"
            id="selectFloatingLabel"
            name="kategori"
            required
            >
                <option value="<?php echo $brg->kategori ?>" selected><?php echo $brg->kategori ?></option>
                <option value="tshirt">T-shirt</option>
                <option value="olahraga">Pakaian Olahraga</option>
                <option value="kemeja">Kemeja</option>
                <option value="jaketpria">Jaket Pria</option>
                <option value="jaketwanita">Jaket Wanita</option>
                <option value="jaketkulit">Jaket Kulit</option>
                <option value="sweater">Sweater</option>
                <option value="hoodie">Hoodie</option>
                <option value="flanel">Flanel</option>
                <option value="jeans">Celana Jeans</option>
                <option value="kargo">Celana Kargo</option>
                <option value="chinos">Celana Chinos</option>
                <option value="bahan">Celana Bahan</option>
                <option value="jas">Jas</option>
                <option value="tempxkorea">Temp-x Korea</option>
                <option value="pakaiananak">Pakaian Anak</option>
                <option value="pakaianwanita">Pakaian Wanita</option>
                <option value="sepatu">Sepatu</option>
            </select>
            <?php echo form_error('kategori', '<div class="text-danger small">', '</div>') ?>
            <label for="selectFloatingLabel">Kategori</label>
        </div>

        <div class="input-keluhan">
          <label class="lebel-ckeditor" for="comment">Keterangan Produk</label>
          <textarea id="details<?= $brg->id_produk ?>" class="input-areaa" name="detail_produk" placeholder="Masukkan Keluhan"><?php echo $brg->detail_produk ?></textarea>
          <?php echo form_error('detail_produk', '<div class="text-danger small">', '</div>') ?>
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


<script src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
<script>
    <?php foreach ($barang as $brg) { ?>
        CKEDITOR.replace('details<?= $brg->id_produk ?>');
    <?php } ?>
</script>