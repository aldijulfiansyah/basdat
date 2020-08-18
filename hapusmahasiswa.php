<?php
    $koneksi->query ("DELETE FROM mahasiswa WHERE nim='$_GET[id]'");
    echo "<script>alert('Data terhapus');</script>";
    echo "<script>location='index.php?halaman=mahasiswa';</script>";
?>