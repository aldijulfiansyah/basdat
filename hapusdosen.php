<?php
    $koneksi->query ("DELETE FROM dosen WHERE nip='$_GET[id]'");
    echo "<script>alert('Data terhapus');</script>";
    echo "<script>location='index.php?halaman=dosen';</script>";
?>