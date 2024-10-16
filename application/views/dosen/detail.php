<div class="container">
  <div class="row mt-5">
    <div class="col-md-10">
      <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header bg-primary text-white text-">
          <h4>Detail Data Dosen</h4>
        </div>
        <div class="card-body">
          <label>ID</label>
          <h5 class="form-control card-title text-"> <?= $dosen['id']; ?></h5>
          <label>Dosen</label>
          <p type="text" class="form-control card-text  text- font-weight-bold"><?= $dosen['namadosen']; ?></p>
          <div class="text- mt-4">
            <a href="<?= base_url(); ?>dosen" class="btn btn-outline-primary  ml-2">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>