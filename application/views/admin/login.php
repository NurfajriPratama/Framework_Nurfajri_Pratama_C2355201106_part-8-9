			<!-- /.login-logo -->
			<div class="container d-flex justify-content-center mt-5">
			  <div class="card shadow-lg" style="width: 24rem;">
			    <div class="card-body login-card-body p-4">
			      <h4 class="text-center mb-4">Sign In</h4>
			      <?= $this->session->flashdata('message') ?>
			      <form action="<?= base_url('login/proses_login') ?>" method="post">
			        <div class="input-group mb-3">
			          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
			          <div class="input-group-append">
			            <div class="input-group-text">
			              <span class="fas fa-envelope"></span>
			            </div>
			          </div>
			        </div>
			        <div class="input-group mb-3">
			          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			          <div class="input-group-append">
			            <div class="input-group-text">
			              <span class="fas fa-lock"></span>
			            </div>
			          </div>
			        </div>

			        <div class="row">
			          <div class="col-8">

			          </div>
			          <!-- /.col -->
			          <div class="row">
			            <div class="col-12">
			              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
			            </div>
			          </div>
			          <!-- /.col -->
			        </div>
			      </form>
			      <p class="mb-0">
			        <a href="<?= base_url('registrasi') ?>" class="text-center">Register a new member</a>
			      </p>
			    </div>
			    <!-- /.login-card-body -->
			  </div>
			</div>
			<!-- /.login-box -->

			<!-- css -->
			<style>
/* edit tombol sig in */


/* edit tombol sig in */

/* Mengatur warna ikon di dalam kotak input menjadi biru (#007bff) untuk menyamakan gaya dengan keseluruhan tema halaman. */
.input-group-text span {
  color: #007bff;
}

/* Mengatur warna ikon di dalam kotak input menjadi biru (#007bff) untuk menyamakan gaya dengan keseluruhan tema halaman. */
			</style>