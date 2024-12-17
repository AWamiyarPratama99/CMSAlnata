<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mt 1 mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
			Tambah Konten
		</button>

		<!-- Modal -->
		<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalCenterTitle">Tambah konten</h5>
							<button type="button" class="btn-sm btn-close" data-bs-dismiss="modal"
								aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Judul</label>
									<input type="text" id="nameWithTitle" class="form-control" placeholder="Judul"
										name="judul" required />
								</div>
							</div>

							<div class="row">
								<div class="col mb-3">
									<label class="form-label">kategori</label>
									<select name="id_kategori" class="form-control">
										<?php foreach($kategori as $aa) { ?>
										<option value="<?=$aa['id_kategori']?>"><?= $aa['nama_kategori']?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Keterangan</label>
									<textarea name="keterangan" class="form-control"></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Deskripsi</label>
									<textarea name="deskripsi" class="form-control"></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col mb-3">
									<label class="form-label">foto</label>
									<input type="file" name="foto" class="form-control"
										accept="image/png, image/jpg, image/gif, image/jpeg">
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
										Close
									</button>
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							</div>
						</div>
					</div>
			 </div>
			</form>
		</div>
	</div>
</div>
</div>
<div class="card">
	<h5 class="card-header">Kategori Konten</h5>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Kategori Konten</th>
					<th>Tanggal</th>
					<th>Kreator</th>
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				<?php $no=1; foreach($konten as $aa) { ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $aa['judul'] ?></td>
					<td><?= $aa['nama_kategori'] ?></td>
					<td><?= $aa['tanggal'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td>
						<a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
							<span class="tf-icon bx bx-search"></span> Lihat Foto
						</a>
					</td>
					<td>
						<a href="<?php echo site_url('admin/konten/delete_data/'. $aa['foto']);?>"
							class="btn btn-sm btn-danger"
							onClick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><span
								class="tf-icon bx bx-trash-alt"></span></a>
						<button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
							data-bs-target="#edit<?= $no ?>"><span class="tf-icons bx bx-edit"></span>
						</button>
							<!-- Modal -->
							<div class="modal fade" id="edit<?= $no ?>" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog modal-md" role="document">
									<form action="<?= base_url('admin/konten/update') ?>" method="post"
										enctype='multipart/form-data'>
										<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Judul</label>
														<input type="text" id="nameWithTitle" class="form-control"
															value="<?= $aa['judul'] ?>" placeholder="Judul"
															name="judul" />
													</div>
												</div>

												<div class="row">
													<div class="col mb-3">
														<label class="form-label">kategori</label>
														<select name="id_kategori" class="form-control">
															<?php foreach($kategori as $uu) { ?>
															<option
																<?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected"; }?>
																value="<?= $uu['nama_kategori'] ?>">
																<?= $uu['nama_kategori'] ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Keterangan</label>
														<textarea name="keterangan"
															class="form-control"><?= $aa['keterangan'] ?></textarea>
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Deskripsi</label>
														<textarea name="deskripsi"
															class="form-control"><?= $aa['deskripsi'] ?></textarea>
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">foto</label>
														<input type="file" name="foto" class="form-control"
															accept="image/png, image/jpg, image/gif, image/jpeg">
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-outline-secondary"
															data-bs-dismiss="modal">
															Close
														</button>
														<button type="submit" class="btn btn-primary">Simpan</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
					</td>
				</tr>
			</tbody>
	</div>
	<?php $no++;} ?>
	</table>
</div>
</div>
