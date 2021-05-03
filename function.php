<?php
$koneksi = mysqli_connect("localhost", "root", "", "ppkb");

function tambah($data){
  global $koneksi;

  $nama = htmlspecialchars($data["nama"]);
  $jeniskelamin  = htmlspecialchars($data["jeniskelamin"]);
  $noanggota = htmlspecialchars($data["noanggota"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $notelepon = htmlspecialchars($data["notelepon"]);
  $email = htmlspecialchars($data["email"]);
  $submit = htmlspecialchars($data["submit"]);

  $query = "INSERT INTO pendaftaran VALUES('', '$nama', '$jeniskelamin', '$noanggota', '$alamat', '$notelepon', '$email', '$submit')";
  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}

function query($data){
  global $koneksi;
  $hasil = mysqli_query($koneksi, $data);
  $rows = [];
  while ($row = mysqli_fetch_assoc($hasil)){
    $rows[] = $row;
  }

  return $rows;
}

function hapus($id){
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM pendaftaran where id = $id");

  return mysqli_affected_rows($koneksi);
}

function ubah($data){
  global $koneksi;

  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $jeniskelamin  = htmlspecialchars($data["jeniskelamin"]);
  $noanggota = htmlspecialchars($data["noanggota"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $notelepon = htmlspecialchars($data["notelepon"]);
  $email = htmlspecialchars($data["email"]);
  $submit = htmlspecialchars($data["submit"]);

  $query = "UPDATE pendaftaran SET nama = '$nama', jeniskelamin = '$jeniskelamin', noanggota = '$noanggota', alamatrumah = '$alamat', notelepon = '$notelepon', email = '$email', submit = '$submit' WHERE id = $id";

  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}
?>
