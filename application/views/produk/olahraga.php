<main>
    <div class="container kategori margin-bot mt-3">
        <div class="title-kategori">
            <h3 style="color: white;">Pakaian Olahraga</h3>
        </div>
        <div class="row">
            <?php foreach ($olahraga as $brg) : ?>
                <?php if ($brg->stok > 0) { ?>
                    <div class="mt-5 col-lg-3 col-6 d-flex">
                        <div class="card" style="width: 18rem;">
                        <div style="width: 100%; aspect-ratio: 1 / 1; overflow: hidden;">
                            <img src="<?php echo base_url() ?>assets/uploads/<?php echo $brg->gambar ?>" class="card-img-top" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                        </div>
                        <div class="card-body text-center flex-bedge d-flex flex-column">
                            <div class="reg1">
                                <h5 class="card-title text-start"><?php echo character_limiter($brg->nama_produk, 45); ?></h5>
                                </span><br>
                            </div>
                            <div class="reg1 text-start mt-auto">
                                <p class="text-start harga">Rp  <?php echo number_format($brg->harga)  ?></p>
                                <div class="row">
                                    <?php if($this->session->userdata('username')) { ?>
                                        <?php if ($brg->stok > 0) { ?>
                                            <div class="col-12 col-md-6 mb-2">
                                                <a href="<?= base_url('dashboard/keranjang/'). $brg->id_produk ?>" 
                                                class="btn btn-warning bg-gradient w-100">
                                                <i class="fas fa-cart-arrow-down"></i>
                                                </a>
                                            </div>
                                        <?php } else { ?>
                                            <div class="col-12 col-md-6 mb-2">
                                                <button class="btn btn-primary bg-gradient w-100" 
                                                        data-toggle="modal" 
                                                        data-target="#stok0">
                                                    + Keranjang
                                                </button>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>

                                    <div class="col-12 col-md-6 mb-2">
                                        <a href="<?= base_url('dashboard/detail/'. $brg->id_produk) ?>" 
                                        class="btn btn-success bg-gradient w-100">
                                        Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>  
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
        <div class="col mt-5"><?php echo $pagination; ?></div>
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