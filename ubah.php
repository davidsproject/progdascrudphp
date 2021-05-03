<?php
date_default_timezone_set("Asia/Bangkok");
require 'function.php';
// ambil data di url
$id = $_GET['id'];
$data = query("SELECT * FROM pendaftaran WHERE id = $id")[0];

if ( isset($_POST["submit"]) ){
  // cek apakah data berhasil di ubah atau tidak
  if (ubah($_POST) > 0){
    echo "
    <script>
    alert('Data berhasil diubah!');
    document.location.href = 'index.php?index=true';
    </script>
    ";
  }
  else{
    echo "
    <script>
    alert('Data gagal diubah!');
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
    <title>Mengubah Data</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <nav>
      <div class="left">
        <a href="index.php?index=true">Kembali</a>
        <a class = "on" href="ubah.php?id=<?php echo ($_GET["id"]); ?>">Ubah</a>
      </div>
      <div class="right">
        <a href="index.html"><img src="logo.jpeg" alt=""></a>
      </div>
    </nav>
    <div class = "tambah">
      <h1>Mengubah Data</h1>
      <form class="" action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
        <ul>
          <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" autocomplete = "off" value="<?php echo $data['nama']; ?>">
          </li>
          <li>
            <label for="jk">Jenis Kelamin : </label>
            <input type="radio" name="jeniskelamin" id="jk" value = "Pria" <?php if ($data["jeniskelamin"] == 'Pria') echo 'checked="checked"'; ?>> Pria
            <input type="radio" name="jeniskelamin" id="jk" value = "Wanita" <?php if ($data["jeniskelamin"] == 'Wanita') echo 'checked="checked"'; ?>> Wanita
          </li>
          <li>
            <label for="noanggota">No. Anggota : </label>
            <input type="text" id = "noanggota" name="noanggota" autocomplete = "off" value="<?php echo $data['noanggota']; ?>">
          </li>
          <li>
            <label for="alamat">Alamat Rumah : </label>
            <input type = "text" name="alamat" id="alamat" autocomplete = "off" value="<?php echo $data['alamatrumah']; ?>">
          </li>
          <li>
            <label for="notelepon">Nomor Telepon : </label>
            <input type="text" name="notelepon" id="notelepon" autocomplete = "off" value="<?php echo $data['notelepon']; ?>">
          </li>
          <li>
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" autocomplete = "off" value="<?php echo $data['email']; ?>">
          </li>
          <li>
            <button type="submit" name="submit" value = " <?php echo date("h:i:s a"); ?> ">Konfirmasi</button>
          </li>
        </ul>
      </form>
    </div>
  </body>
</html>
