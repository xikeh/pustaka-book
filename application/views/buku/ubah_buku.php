<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<?= form_open_multipart(`buku/ubahBuku/$id`); ?>
			<?php foreach ($buku as $b) { ?>
				<input type="text" class="form-control" hidden name="id" name="judul_buku" value="<?= $b['id']; ?>">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<i class="fas fa-book"></i>
							<label for="judul">Judul</label>
							<div class="form-isi">
								<input type="text" class="form-control" id="judul" name="judul_buku"value="<?= $b['judul_buku'] ?>">
								<?= form_error('judul_buku', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<i class="fas fa-book"></i>
							<label for="id_kategori">Id Kategori</label>
							<div class="form-isi">
								<input type="text" class="form-control" id="id_kategori" name="id_kategori" value="<?= $b['id_kategori'] ?>">
								<?= form_error('id_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<i class="fas fa-pen"></i>
							<label for="pengarang">Pengarang</label>
							<div class="form-isi">
								<input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $b['pengarang'] ?>">
								<?= form_error('pengarang', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
						<div class="form-group">
							<i class="fas fa-user-tag"></i>
							<label for="penerbit">Penerbit</label>
							<div class="form-isi">
								<input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $b['penerbit'] ?>">
								<?= form_error('penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<i class="fas fa-calendar"></i>
							<label for="tahun">Tahun</label>
							<div class="form-isi">
								<input type="text" class="form-control" id="tahun" name="tahun" value="<?= $b['tahun_terbit'] ?>">
								<?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<i class="fas fa-address-book"></i>
							<label for="isbn">ISBN</label>
							<div class="form-isi">
								<input type="text" class="form-control" id="isbn" name="isbn" value="<?= $b['isbn'] ?>">
								<?= form_error('isbn', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<i class="fas fa-book-open"></i>
							<label for="stok">stok</label>
							<div class="form-isi">
								<input type="text" class="form-control" id="stok" name="stok" value="<?= $b['stok'] ?>">
								<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<picture>
						<source srcset="" type="image/svg+xml">
						<img src="<?= base_url('assets/img/upload/') . $b['image']; ?>" class="img-fluid img-thumbnail" style="max-width: 35%;" alt="...">
					</picture>
					<div class="col-sm-9">
						<div class="custom-file">
							<input type="text" hidden name="old_image" value="<?= $b['image']; ?>">
							<input type="file" class="custom-file-input" id="image" name="image" value="<?= $b['image']; ?>">
							<label class="custom-file-label" for="image">Pilih file</label>
						</div>
					</div>
				</div>
				<?php 
			} ?>
			<div class="form-group row justify-content-end">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Ubah</button>
					<button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->