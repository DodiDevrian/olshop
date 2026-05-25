<div class="container" style="margin-top: 50px; margin-bottom: 150px;">
	<div class="title-kategori mb-3">
		<h3>Keranjang Belanja</h3>
	</div>
	<div class="d-none d-lg-block">
    	<div class="list-group shadow-sm mb-4">
    
    		<div class="list-group-item bg-light text-website b">
    			<div class="row">
    				<div class="col-lg-1">No</div>
    				<div class="col-lg-4">Produk</div>
    				<div class="col-lg-3">Harga</div>
    				<div class="col-lg-2">Jumlah</div>
    				<div class="col-lg-2">Total Harga</div>
    			</div>
    		</div>
    
    		<?php $no=1; foreach ($this->cart->contents() as $items) : ?>
    
    		<div class="list-group-item">
    			<div class="row align-items-center my-3">
    
    				<div class="col-lg-1">
    					<p class="mb-0"><?= $no++ ?></p>
    				</div>
    
    				<div class="col-lg-4">
    					<div class="d-flex align-items-center">
    						<img src="<?= base_url() ?>assets/uploads/<?= $items['gambar'] ?>" 
    							 width="60" 
    							 class="me-3 rounded">
    
    						<div>
    							<p class="mb-0 text-dark">
    								<?= $items['name'] ?> 
    								(<?= $items['merek'] ?>)
    							</p>
    						</div>
    					</div>
    				</div>
    
    				<div class="col-lg-3">
    					<h6 class="text-website mb-0">
    						Rp <?= number_format($items['price'],0,',','.') ?>
    					</h6>
    				</div>
    
    				<div class="col-lg-2">
    					<p class="mb-0"><?= $items['qty'] ?></p>
    				</div>
    
    				<div class="col-lg-2">
    					<h6 class="text-website mb-0">
    						Rp <?= number_format($items['subtotal'],0,',','.') ?>
    					</h6>
    				</div>
    
    			</div>
    		</div>
    
    		<?php endforeach; ?>
    
    	</div>
    </div>
    
    
    <!-- ================= MOBILE ================= -->
    <div class="d-block d-lg-none">
    
    	<?php $no=1; foreach ($this->cart->contents() as $items) : ?>
    
    	<div class="card shadow-sm border-0 mb-3">
    		<div class="card-body">
    
    			<div class="d-flex">
    
    				<!-- Gambar -->
    				<div class="me-3">
    					<img src="<?= base_url() ?>assets/uploads/<?= $items['gambar'] ?>" 
    						 width="80"
    						 height="80"
    						 style="object-fit: cover;"
    						 class="rounded">
    				</div>
    
    				<!-- Detail -->
    				<div class="flex-grow-1">
    
    					<h6 class="mb-1 text-dark">
    						<?= $items['name'] ?>
    					</h6>
    
    					<small class="text-muted d-block mb-2">
    						<?= $items['merek'] ?>
    					</small>
    
    					<div class="d-flex justify-content-between mb-1">
    						<small>Harga</small>
    						<small class="text-website fw-bold">
    							Rp <?= number_format($items['price'],0,',','.') ?>
    						</small>
    					</div>
    
    					<div class="d-flex justify-content-between mb-1">
    						<small>Jumlah</small>
    						<small><?= $items['qty'] ?></small>
    					</div>
    
    					<hr class="my-2">
    
    					<div class="d-flex justify-content-between">
    						<small class="fw-bold">Total</small>
    
    						<small class="fw-bold text-website">
    							Rp <?= number_format($items['subtotal'],0,',','.') ?>
    						</small>
    					</div>
    
    				</div>
    			</div>
    
    		</div>
    	</div>
    
    	<?php $no++; endforeach; ?>
    
    </div>
	<div class="card card-body shadow-sm">
		<div class="row">
			<div class="col-lg-8"></div>
			<div class="col-lg-2">
				<h5>
					<span class="text-muted">Total Pesanan</span>
				</h5>
			</div>
			<div class="col-lg-2">
					<h5>
						<span class="badge bg-success">Rp <?php echo number_format($this->cart->total(),0,',','.')  ?></span>
					</h5>
			</div>
			<div class="col-lg-8 mt-3"></div>
			<div class="col-lg-2 mt-3">
				<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
					<div class="btn btn-sm btn-danger">Hapus</div>
				</a>
			</div>
			<div class="col-lg-2 mt-3">
				<a href="<?php echo base_url('dashboard/pembayaran') ?>">
					<div class="btn btn-sm btn-success">Pembayaran</div>
				</a>
			</div>
		</div>
	</div>
</div>