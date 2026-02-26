<main>
	<div class="container" style="margin-top: 100px;">
		<?php foreach ($barang as $brg) : ?>
		<div class="row mb-4">
			<div class="col-sm-12 col-lg-5">
				<img src="<?php echo base_url() ?>assets/uploads/<?php echo $brg->gambar ?>" class="img-fluid" style="border-radius: 5px; margin-bottom: 20px;">
			</div>
			<div class="col-sm-12 col-lg-7">
				<div class="card card-body shadow-sm">
					<div >
						
					</div>
					<h4 class="text-website">
						<?php echo $brg->nama_produk ?>
					</h4>
					<h4 class="text-warning">
						Rp <?php echo number_format($brg->harga,0,',','.') ?>
					</h4>

					<hr>
					<p class="b text-muted">Stok Tersedia <?php echo $brg->stok ?></p>
					<div class="my-2">
						<div class="row">
							<div class="tombol-detail">
								<?php if($this->session->userdata('username')) { ?>
									<?php if ($brg->stok > 0) { ?>
										<a href="<?= base_url('dashboard/keranjang/'). $brg->id_produk ?>"><div class="btn btn-primary bg-gradient">Tambah Keranjang</div></a>
										<!-- echo anchor('dashboard/keranjang/'. $brg->id_produk, '<div class="btn btn-primary bg-gradient">Tambah Keranjang</div>'); -->
										<a href="<?= base_url('dashboard/beli/'). $brg->id_produk ?>"><div class="btn btn-warning bg-gradient ml-1">Beli Sekarang</div></a>
										<!-- echo anchor('dashboard/beli/'. $brg->id_produk, '<div class="btn btn-warning bg-gradient ml-1">Beli Sekarang</div>'); -->
									<?php }else{
										echo '<div class="btn btn-primary bg-gradient" data-toggle="modal" data-target="#stok0">Tambah Keranjang</div>';
									}
									?>
								<?php } ?>
							</div>
						</div>
						
					</div>
				</div>
				<hr>
				<div class="list-group">
					<div class="list-group-item">
						<div class="table-responsive">
							<table>
								<tbody>
									<tr>
										<td>Merek</td>
										<td>&emsp;</td>
										<td>:</td>
										<td>&nbsp;</td>
										<td class="text-website"><?php echo $brg->merek ?></td>
										<td>&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="list-group-item b text-website">
						<b>Spesifikasi Produk</b>
					</div>
					<div class="list-group-item">
						<?php echo $brg->detail_produk ?>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

	<div class="modal fade" id="stok0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Stok Abis</h5>
		</div>
		<div class="modal-body">
			Maaf, Stok Barang Habis
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
	</div>
</main>

