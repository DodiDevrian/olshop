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
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                        <thead>
	                            <tr>
	                                <th>No</th>
	                                <th>Nama Barang</th>
	                                <th>Merek</th>
	                                <th>Harga</th>
	                                <th>Stok</th>
	                                <th>Kategori</th>
	                                <th>Gambar</th>
	                                <th></th>
	                                
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
	                                <td><?php echo $brg->stok ?></td>
	                                <td><?php echo $brg->kategori ?></td>
	                                <td class="img-btn">
	                                	<img src="<?php echo base_url() ?>assets/uploads/<?php echo $brg->gambar ?>" width="50px">
	                                		<?php echo anchor('admin/produk/edit_gambar/' .$brg->id_produk, '<i class="fa-solid fa-upload"></i>') ?>

	                                </td>
	                                <td align="center">
	                                	<?php echo anchor('admin/produk/edit/' .$brg->id_produk, '<div class="btn btn-secondary btn-sm"><li class="fa fa-edit"></li></div>') ?>
	                                	<span onclick="javascript: return confirm('Yakin Untuk Menghapus Data Ini?')">
	                                		<?php echo anchor('admin/produk/delete/' .$brg->id_produk, '<div class="btn btn-danger btn-sm"><li class="fa fa-trash"></div>') ?>
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