<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title><?php echo$judul ?></title>
</head>
<nav class="navbar navbar-fixed-top navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="Beranda">
      <h4>Penjadwalan</h4>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Dosen">Dosen</a>
          <div class="d-flex">
            <a class="btn-outline-light" href="<?= base_url() ?>login/logout">Log out</a>
          </div>
        </li>
        <li class="nav-item">

      </ul>
    </div>
  </div>
</nav>