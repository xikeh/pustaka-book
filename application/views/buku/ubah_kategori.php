<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9">
      <?= validation_errors(); ?>
      <?= $id_kategori ?>
      <?= form_open_multipart('buku/ubahkategori/'. $id_kategori); ?>
        <?php foreach ($kategori as $k) { ?>
          <input type="text" hidden name="id" value="<?= $k['id_kategori'] ?>">
          <div class="form-group">
            <i class="fas fa-book"></i>
            <label for="kategori">Ubah Kategori</label>
            <div class="form-isi">
              <input type="text" class="form-control" id="kategori" name="nama_kategori" value="<?= $k['nama_kategori'] ?>">
              <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        <?php 
        } ?>
        <div class="form-group row">
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