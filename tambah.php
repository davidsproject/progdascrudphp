<?php
date_default_timezone_set("Asia/Bangkok");
require 'function.php';
if ( isset($_POST["submit"]) ){
  // cek apakah data berhasil di tambahkan atau tidak
  if (tambah($_POST) > 0){
    echo "
    <script>
    alert('Data berhasil ditambahkan!');
    document.location.href = 'index.php?index=true';
    </script>
    ";
  }
  else{
    echo "
    <script>
    alert('Data gagal ditambahkan!');
    document.location.href = 'index.php?index=true';
    </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulir Pendaftaran Seminar PPKB</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <nav>
      <div class="left">
        <a href="index.html">Beranda</a>
        <a href="index.php?index=true">List Data</a>
        <a class = "on" href="tambah.php">Form Daftar</a>
      </div>
      <div class="right">
        <a href="index.html"><img src="logo.jpeg" alt=""></a>
      </div>
    </nav>
    <div class = "tambah">
      <h1>Formulir Pendaftaran Seminar PPKB</h1>
      <form class="" action="tambah.php" method="POST">
        <ul>
          <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" autocomplete = "off">
          </li>
          <li>
            <label for="jk">Jenis Kelamin : </label>
            <input type="radio" name="jeniskelamin" id="jk" value = "Pria"> Pria
            <input type="radio" name="jeniskelamin" id="jk" value = "Wanita"> Wanita
          </li>
          <li>
            <label for="noanggota">No. Anggota : </label>
            <input type="text" id = "noanggota" name="noanggota" autocomplete = "off">
          </li>
          <li>
            <label for="alamat">Alamat Rumah : </label>
            <input type = "text" name="alamat" id="alamat" autocomplete = "off">
          </li>
          <li>
            <label for="notelepon">Nomor Telepon : </label>
            <input type="text" name="notelepon" id="notelepon" autocomplete = "off">
          </li>
          <li>
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" autocomplete = "off">
          </li>
          <li>
            <button type="submit" name="submit" value = " <?php echo date("h:i:s a"); ?> ">Konfirmasi</button>
          </li>
        </ul>
      </form>
    </div>
  </body>
</html>
