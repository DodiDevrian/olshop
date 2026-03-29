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
									<th></th>

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
									<td><img src="<?php echo base_url() ?>assets/uploads/bukti/<?php echo $inv->gambar ?>" width="50px"></td>
									<td class="img-btn">
										<?php if ($inv->status == 'Menunggu Validasi') { ?>
											<span class="badge rounded-pill bg-danger"><?php echo $inv->status ?></span>
											<?php echo anchor('https://wa.me/62'.$inv->nomor. '?text=Pembelian Produk Toko Media Data Computer Pada Tanggal '.$inv->tgl_pesan.' Dengan Rincian :%0A%0AKode Pembelian: MDC-INV-'.$inv->id.'%0ANama Lengkap: '.$inv->nama.'%0AAlamat : '.$inv->alamat.'%0AKurir : '.$inv->kurir.'%0A%0ASedang dilakukan validasi pembayaran, silahkan tunggu beberapa saat.',  '<iconify-icon icon="logos:whatsapp-icon"></iconify-icon>') ?> 
										<?php }else { ?>
											<span class="badge rounded-pill bg-success"><?php echo $inv->status ?></span>
											<?php echo anchor('https://wa.me/62'.$inv->nomor. '?text=Pembelian Produk Toko Media Data Computer Pada Tanggal '.$inv->tgl_pesan.' Dengan Rincian :%0A%0AKode Pembelian: MDC-INV-'.$inv->id.'%0ANama Lengkap: '.$inv->nama.'%0AAlamat : '.$inv->alamat.'%0AKurir : '.$inv->kurir.'%0A%0APembayaran sudah tervalidasi.',  '<iconify-icon icon="logos:whatsapp-icon"></iconify-icon>') ?> 
										<?php } ?>
									</td>
									<td>
										<div class="d-flex gap-2">
											<a href="<?= base_url('admin/invoice/detail/'.$inv->id) ?>"><div class="btn btn-sm btn-primary"><i class="fas fa-info-circle"></i></iconify-icon></div></a>
											<a href="<?= base_url('admin/invoice/edit/'.$inv->id) ?>"><div class="btn btn-sm btn-secondary"><i class="far fa-edit"></i></iconify-icon></div></a>
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