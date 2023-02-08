<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PENGADUAN</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">PELAPORAN MASYARAKAT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </div>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Pengaduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
    </div>
</nav>

<div class="grid gap-0 row-gap-3">
  <div class="p-5 g-col-9">
<div class="container text-center">
<div class="row">
    <div class="col-0">
    <div class="text-center">
              <img src="https://png.pngtree.com/png-vector/20190726/ourmid/pngtree-human-character-logo-sign-png-image_1602831.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
    <h5 class="card-title">Hai, Your Name</h5>
    <p class="card-text p-5 g-col-9">Kepedulian sosial bukanlah untuk mencampuri urusan orang lain, tetapi lebih pada membantu menyelesaikan permasalahan yang di hadapi orang lain dengan tujuan kebaikan dan perdamaian. </p>
    <a href="tampil_login.php" class="btn btn-danger">Logout</a>
    </div>
</div>
</div>
</div>
    
<form action="konfirmasi.php" method="post">
<div class="position-relative p-5 ">
      <h4 id="scrollspyHeading1">FORM PENGADUAN</h4>
    <tr>
    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Id Pengaduan</label>
    <div class="col-sm-10">
        <td><div class="mb-3"><input type="text" class="form-control" placeholder="Id Pengaduan" name="ID_PENGADUAN"></td></div>
    </tr>
</div></div>
    <tr>
    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Pengaduan</label>
    <div class="col-sm-10">
        <td><div class="mb-3"><input type="date" class="form-control" placeholder="Tanggal Pengaduan" name="TANGGAL_PENGADUAN"></td></div>
    </tr>
</div></div>
    <tr>
    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nik</label>
    <div class="col-sm-10">
        <td><div class="mb-3"><input type="text" class="form-control" placeholder="Nik" name="NIK"></td></div>
    </tr>
</div></div>
    <tr>
    <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ISI_LAPORAN"></textarea>
    </tr>
    <tr>
    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-15">
        <td><div class="mb-3"><input type="file" name="foto" class="form-label" accept=".jpg, .jpeg, .png, .gif," class="form-control" name="FOTO"></td></div>
    </tr>
</div></div>
    <tr>
    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
        <td><div class="mb-3"><input type="text" class="form-control" placeholder="Proses" name="STATUS"></td></div>
    </tr>
</div></div>
    <tr>
        <td></td>
        <td><div class="text-center"><input type="submit" class="btn btn-dark px-5 mb-5 w-100" value="Ajukan Laporan" name="proses"></td></div>
    </tr>
</div>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into pengaduan set
    id_pengaduan = '$_POST[ID_PENGADUAN]',
    tgl_pengaduan = '$_POST[TANGGAL_PENGADUAN]',
    nik = '$_POST[NIK]',
    isi_laporan = '$_POST[ISI_LAPORAN]',
    foto = '$_POST[FOTO]'
    status = '$_POST[STATUS]'");

    echo "Data telah tersimpan";
}
?>