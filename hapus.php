<?php
require 'function.php';
$id = $_GET["id"];
if ( hapus($id) > 0){
    echo "
    <script>
    alert('Data berhasil dihapus');
    document.location.href = 'index.php?index=true';
    </script>
    ";
} else{
      echo "
      <script>
      alert('Data tidak berhasil dihapus');
      document.location.href = 'index.php?index=true';
      </script>
      ";
}
?>
