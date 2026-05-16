        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Data Invoice</h3>
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
                  <a href="#">Data Invoice</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Invoice</h4>
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
										<th>Kode Pembelian</th>
										<th>Nama Pembeli</th>
										<th>Alamat Pengiriman</th>
										<th>Tanggal Pemesanan</th>
										<th>Nomor HP</th>
										<th>Bukti Pembayaran</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($invoice as $inv) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td>SHOP-INV-<?php echo $inv->id ?></td>
										<td><?php echo $inv->nama ?></td>
										<td><?php echo $inv->alamat ?></td>
										<td>
											<?php
												$tanggal = $inv->tgl_pesan;

												switch (date('m', strtotime($tanggal))) {
													case '01':
														$bulan = 'Januari';
														break;
													case '02':
														$bulan = 'Februari';
														break;
													case '03':
														$bulan = 'Maret';
														break;
													case '04':
														$bulan = 'April';
														break;
													case '05':
														$bulan = 'Mei';
														break;
													case '06':
														$bulan = 'Juni';
														break;
													case '07':
														$bulan = 'Juli';
														break;
													case '08':
														$bulan = 'Agustus';
														break;
													case '09':
														$bulan = 'September';
														break;
													case '10':
														$bulan = 'Oktober';
														break;
													case '11':
														$bulan = 'November';
														break;
													case '12':
														$bulan = 'Desember';
														break;
													
													default:
														$bulan = 'Tidak diketahui';
														break;
												}

												echo date('d', strtotime($tanggal)). ' '. $bulan. ' '. date('Y', strtotime($tanggal));
											?>
										</td>
										<td><?php echo $inv->nomor ?></td>
										<td><img type="button" data-bs-toggle="modal" data-bs-target="#buktiPembayaran<?= $inv->id ?>" src="<?php echo base_url() ?>assets/uploads/bukti/<?php echo $inv->gambar ?>" width="50px"></td>
										<td class="img-btn">
											<?php if ($inv->status == 'Menunggu Validasi') { ?>
												<span class="badge rounded-pill bg-danger"><?php echo $inv->status ?></span>
											<?php }else { ?>
												<span class="badge rounded-pill bg-success"><?php echo $inv->status ?></span>
											<?php } ?>
										</td>
										<td>
											<div class="d-flex align-items-center gap-2">
												<span>
													<a class="fs-4" type="button" data-bs-toggle="modal" data-bs-target="#validasiPembayaran<?= $inv->id ?>">
														<?php if ($inv->status == 'Menunggu Validasi') { ?>
															<iconify-icon icon="mdi:clipboard-check-outline"></iconify-icon>
														<?php } else { ?>
															<iconify-icon icon="mdi:clipboard-check"></iconify-icon>
														<?php } ?>	
													</a>
												</span>
												<?php if ($inv->status == 'Menunggu Validasi') { ?>
													<span>
														<a href="<?= 'https://wa.me/'.$inv->nomor. '?text=Pembelian Produk Toko Mondan Shop Pada Tanggal '.$inv->tgl_pesan.' Dengan Rincian :%0A%0AKode Pembelian: SHOP-INV-'.$inv->id.'%0ANama Lengkap: '.$inv->nama.'%0AAlamat : '.$inv->alamat.'%0A%0ASedang dilakukan validasi pembayaran, silahkan tunggu beberapa saat.' ?> " target="_blank">
															<div class="fs-4"><iconify-icon icon="logos:whatsapp-icon"></iconify-icon></div>
														</a>
													</span>
												<?php }else { ?>
													<span>
														<a href="<?= 'https://wa.me/'.$inv->nomor. '?text=Pembelian Produk Toko Mondan Shop Pada Tanggal '.$inv->tgl_pesan.' Dengan Rincian :%0A%0AKode Pembelian: SHOP-INV-'.$inv->id.'%0ANama Lengkap: '.$inv->nama.'%0AAlamat : '.$inv->alamat.'%0A%0APembayaran sudah tervalidasi.' ?>" target="_blank">
															<div class="fs-4"><iconify-icon icon="logos:whatsapp-icon"></iconify-icon></div>
														</a>
													</span>
												<?php } ?>

												<?php if ($inv->status == 'Selesai Validasi') { ?>
													<span>
														<a href="<?php echo base_url('admin/invoice/detail/'.$inv->id) ?>" target="_blank">
															<div class="text-secondary fs-4"><iconify-icon icon="mdi:information"></iconify-icon></div>
														</a>
													</span>
												<?php } ?>
											</div>
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

		<!-- Modal Lihat Bukti Pembayaran -->
		 <?php foreach ($invoice as $inv) : ?>
		<div class="modal fade" id="buktiPembayaran<?= $inv->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<img src="<?php echo base_url() ?>assets/uploads/bukti/<?php echo $inv->gambar ?>" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		
		<!-- Modal Validasi Pembayaran -->
		<?php foreach ($invoice as $inv) : ?>
		<div class="modal fade" id="validasiPembayaran<?= $inv->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Validasi Pembayaran</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<img src="<?php echo base_url() ?>assets/uploads/bukti/<?php echo $inv->gambar ?>" class="img-fluid" alt="">

						<form action="<?php echo base_url(). 'admin/invoice/update' ?>" enctype="multipart/form-data" method="post">
							<!-- <div class="upload-img">
								<label class="label-input">Status</label>
								<input type="hidden" name="id" value="<?php echo $inv->id ?>">
								<div class="box-kategori">
								<select class="option-kategori" name="status" value="<?php echo $inv->status ?>">
									<option value="" disable selected hidden>Status Pembayaran</option>
									<option value="Menunggu Validasi"><button class="dropdown-item" type="button">Menunggu Validasi</button></option>
									<option value="Selesai Validasi"><button class="dropdown-item" type="button">Selesai Validasi</button></option>
								</select>
								</div>
							</div> -->
							<div class="form-group">
								<label>Status Validasi Pembayaran</label><br />
								<input type="hidden" name="id" value="<?php echo $inv->id ?>">
								<div class="d-flex">
									<div class="form-check">
									<input
										class="form-check-input"
										type="radio"
										name="status"
										id="flexRadioDefault1"
										value="Menunggu Validasi"
										<?php if ($inv->status == 'Menunggu Validasi') {
											echo 'checked';
										} ?>
									/>
									<label
										class="form-check-label"
										for="flexRadioDefault1"
									>
										Menunggu Validasi
									</label>
									</div>
									<div class="form-check">
									<input
										class="form-check-input"
										type="radio"
										name="status"
										id="flexRadioDefault2"
										value="Selesai Validasi"
										<?php if ($inv->status == 'Selesai Validasi') {
											echo 'checked';
										} ?>
									/>
									<label
										class="form-check-label"
										for="flexRadioDefault2"
									>
										Selesai Validasi
									</label>
									</div>
								</div>
							</div>
							<!-- <div class="row input-row">
								<button type="submit" class="col-auto btn btn-primary ms-auto mt-4 mb-5">Ubah Data</button>
							</div> -->
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>