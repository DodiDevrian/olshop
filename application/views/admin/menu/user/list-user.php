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
                  <a href="#">Data User</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">User</h4>
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
									<th>Username</th>
									<th>Nama User</th>
									<th>Role</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
	                        <tbody>
	                        	<?php
	                        	$no=1;
	                        	foreach ($user as $user) : 
	                        		if ($user->role == 2) { ?>

	                        	<tr>
	                        		<td><?php echo $no++ ?></td>
	                                <td><?php echo $user->username ?></td>
	                                <td><?php echo $user->nama_user ?></td>
	                                <td>
	                                	<?php if ($user->role == 1) {
	                                	echo 'Admin';
	                                } else echo 'User'; ?>
	                                </td>
	                                <td onclick="javascript: return confirm('Yakin Untuk Menghapus Data Ini?')" align="center">
	                                	<?php echo anchor('admin/user/delete/' .$user->id_user, '<div class="btn btn-danger btn-sm"><li class="fa fa-trash"></div>') ?>
	                                </td>
	                            </tr>
	                        	<?php }; endforeach; ?>

	                        </tbody>
	                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>