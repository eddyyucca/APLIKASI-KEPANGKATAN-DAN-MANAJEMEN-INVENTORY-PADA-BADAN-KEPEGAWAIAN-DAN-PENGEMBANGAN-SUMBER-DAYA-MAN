<!-- Begin Page Content -->
<div class="container">
	<!-- Page Heading -->
	<div class="card-body">
		<div class="card shadow mb-4">
			<div class="card-header">
				Order Selesai
			</div>
			<div class="card">
				<div class="card-body">
					<form action="<?= base_url('order/cari') ?>" method="post">
						<div class="input-group mb-3 col-6">
							<input type="date" class="form-control" name="tanggal">
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
							</div>
						</div>
					</form>
					<hr>

					<div class="row">
						<div class="table-responsive">
							<div class="container">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<div class="container">
										<thead>
											<tr>
												<th>No</th>
												<th>User</th>
												<th>Bidang</th>
												<th>Tanggal</th>
												<th>Ket</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$nomor = 1;
											foreach ($data as $x) { ?>
												<tr>
													<td><?= $nomor++; ?></td>
													<td><?= $x->user; ?></td>
													<td><?= $x->nama_bidang; ?></td>
													<td><?= $x->tanggal; ?></td>
													<td><?= $x->ket; ?></td>
													<td align="center">
														<a href="<?= base_url('order/view_selesai/') . $x->id_peg ?>" class="btn btn-primary">View</a>
														<a href="<?= base_url('order/hapusorder/') . $x->id_peg ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
													</td>
												</tr>
											<?php } ?>
										</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
