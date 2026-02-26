<div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Form</h3>
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
                  <a href="#">Tema</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Tambah Produk</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Form Tambah Produk</div>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($error_upload)) {
                            echo '<div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
                        }

                        echo form_open_multipart('admin/produk/add');
                        ?>

                        <div class="form-floating form-floating-custom mb-3">
                          <input class="form-control" type="text" name="nama_produk" placeholder="Masukkan Nama Lengkap">
                          <?php echo form_error('nama_produk', '<div class="text-danger small">', '</div>') ?>
                          <label class="label-input" for="floatingInput">Nama Produk</label>
                        </div>
                        <div class="form-floating form-floating-custom mb-3">
                          <input class="form-control" type="text" name="merek" placeholder="Masukkan Merek">
                          <?php echo form_error('merek', '<div class="text-danger small">', '</div>') ?>
                          <label class="label-input" for="floatingInput">Merek</label>
                        </div>
                        <div class="form-floating form-floating-custom mb-3">
                          <input class="form-control" type="text" name="harga" placeholder="Masukkan Harga">
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
                                <option value="" disable selected hidden>Pilih Kategori</option>
                                <option value="T-shirt">T-shirt</option>
                                <option value="Pakaian Olahraga">Pakaian Olahraga</option>
                                <option value="Kemeja">Kemeja</option>
                                <option value="Jaket Pria">Jaket Pria</option>
                                <option value="Jaket Wanita">Jaket Wanita</option>
                                <option value="Jaket Kulit">Jaket Kulit</option>
                                <option value="Sweater">Sweater</option>
                                <option value="Hoodie">Hoodie</option>
                                <option value="Flanel">Flanel</option>
                                <option value="Celana Jeans">Celana Jeans</option>
                                <option value="Celana Kargo">Celana Kargo</option>
                                <option value="Celana Chinos">Celana Chinos</option>
                                <option value="Celana Bahan">Celana Bahan</option>
                                <option value="Jas">Jas</option>
                                <option value="Temp-x Korea">Temp-x Korea</option>
                                <option value="Pakaian Anak">Pakaian Anak</option>
                                <option value="Pakaian Wanita">Pakaian Wanita</option>
                                <option value="Sepatu">Sepatu</option>
                            </select>
                            <?php echo form_error('kategori', '<div class="text-danger small">', '</div>') ?>
                            <label for="selectFloatingLabel">Kategori</label>
                        </div>

                        <div class="mb-3">
                          <div class="upload-img">
                            <label class="label-input">Gambar</label>
                            <input class="img-btn" type="file" name="gambar">
                          </div>
                          <?php echo form_error('gambar', '<div class="text-danger small">', '</div>') ?>
                        </div>

                        <div class="input-keluhan">
                          <label class="lebel-ckeditor" for="comment">Keterangan Produk</label>
                          <textarea id="details" class="input-areaa" name="detail_produk" placeholder="Masukkan Keluhan"></textarea>
                          <?php echo form_error('detail_produk', '<div class="text-danger small">', '</div>') ?>
                        </div>
                        <button type="submit" class="col-auto btn btn-primary ms-auto mt-4">Tambah Produk</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<script src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('details');
</script>