<?php
require 'function.php';
$statistik = query("SELECT * FROM pendaftaran");

if ( !isset($_GET["index"]) ){
  header('Location: index.html');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List Peserta Seminar PPKB</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <style media="screen">
    table, .container h1{
      font-family: sans-serif;
    }
    table tr td{
			background: #f4fbff;
		}
    table tr:nth-child(odd) td {
			background: #ffffff;
		}
    table a{
      color: blue;
      text-decoration: none;
    }
    table a:hover{
      text-decoration: underline;
    }
  </style>
  <body>
    <nav>
      <div class="left">
        <a href="index.html">Beranda</a>
        <a class = "on" href="index.php?index=true">List Data</a>
        <a href="tambah.php">Form Daftar</a>
      </div>
      <div class="right">
        <a href="index.html"><img src="logo.jpeg" alt=""></a>
      </div>
    </nav>
    <div class = "container">
      <h1>List Data</h1>
      <table border = 1 cellspacing = 0>
        <tr>
          <th>Nomor</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>No. Anggota</th>
          <th>Alamat Rumah</th>
          <th>No. Telepon</th>
          <th>Email</th>
          <th>Waktu Submit</th>
          <th colspan = 2>Tindakan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($statistik as $data) : ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $data["nama"]; ?></td>
          <td><?php echo $data["jeniskelamin"]; ?></td>
          <td><?php echo $data["noanggota"]; ?></td>
          <td><?php echo $data["alamatrumah"]; ?></td>
          <td><?php echo $data["notelepon"]; ?></td>
          <td><?php echo $data["email"]; ?></td>
          <td><?php echo $data["submit"]; ?></td>
          <td> <a href="ubah.php?id=<?php echo $data["id"]; ?>">Ubah</a> </td>
          <td> <a href="hapus.php?id=<?php echo $data["id"]; ?>" onclick = "return confirm('Yakin?');">Hapus</a> </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
      </table>
      <p>Total Data => <?php echo ($i - 1); ?> <br> <br> Klik "Form Daftar" untuk menambahkan data</p>
    </div>
  </body>
</html>
