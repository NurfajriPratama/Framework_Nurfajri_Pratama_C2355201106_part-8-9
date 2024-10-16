<div class="container">
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Form Ubah Data Dosen
        </div>
        <div class="card-body">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?=$dosen['id']; ?>">
            <div class="form-group">
              <label for="nip">NIP</label>
              <input type="text" class="form-control" value="<?=$dosen['id']; ?>" id="nip" name="nip">
              <small class="form-text text-danger "><?= form_error('nip') ?></small>
            </div>
            <div class="form-group">
              <label for="namadosen">NAMA DOSEN</label>
              <input type="text" class="form-control" value="<?=$dosen['namadosen']; ?>" id="namadosen"
                name="namadosen">
              <small class="form-text text-danger "><?= form_error('namadosen') ?></small>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <button type="submit" name="ubah" class="btn btn-primary float">Ubah</button>
                <a href="<?= base_url(); ?>dosen" class="btn btn-secondary ml-2">Kembali</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>