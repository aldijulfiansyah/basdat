
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">NIM</label>
        <input type="number" class="form-control" name="nim" >
    </div>

    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama">
    </div>

    <div class="form-group">
        <label for="">Kelas</label>
        <input type="text" class="form-control" name="kelas">
    </div>

    <div class="form-group">
        <label for="">Alamat</label>
        <textarea class="form-control" name="alamat" rows="10" > </textarea>
    </div>


    <button class="btn btn-primary" name="save">Simpan</button>

</form>
<?php
    if (isset($_POST['save'])) {
        $koneksi->query("INSERT INTO mahasiswa
        (nim,nama,kelas,alamat)
        VALUES('$_POST[nim]','$_POST[nama]','$_POST[kelas]','$_POST[alamat]')");

        echo "<div class='alert alert-info'>Data Tersimpan</div>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=mahasiswa'>" ;
    }
?>

