
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">NIP</label>
        <input type="number" class="form-control" name="nip" >
    </div>

    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama_dosen">
    </div>


    <button class="btn btn-primary" name="save">Simpan</button>

</form>
<?php
    if (isset($_POST['save'])) {
        $koneksi->query("INSERT INTO dosen
        (nip,nama_dosen)
        VALUES('$_POST[nip]','$_POST[nama_dosen]')");

        echo "<div class='alert alert-info'>Data Tersimpan</div>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=dosen'>" ;
    }
?>

