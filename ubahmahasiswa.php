<?php $ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE nim='$_GET[id]'"); 
      $pecah = $ambil->fetch_assoc();

      
?>


<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">NIM</label>
        <input type="number" class="form-control" name="nim" value="<?php echo $pecah['nim'];?>">
    </div>

    


    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama'];?>">
    </div>

    
    <div class="form-group">
        <label for="">Kelas</label>
        <input type="text" class="form-control" name="kelas" value="<?php echo $pecah['kelas'];?>">
    </div>

    <div class="form-group">
        <label for="">Alamat</label>
        <textarea class="form-control" name="alamat" rows="10" > <?php echo $pecah['alamat'];?></textarea>
    </div>

  

    <button class="btn btn-primary" name="ubah">Ubah</button>

</form>
<?php
    if (isset($_POST['ubah'])) 
    {
        $koneksi->query("UPDATE mahasiswa SET nim='$_POST[nim]',nama='$_POST[nama]',
        kelas='$_POST[kelas]',alamat='$_POST[alamat]'
        WHERE nim='$_GET[id]'");
        echo "<script>alert('Data Telah diubah');</script>";
        echo "<script>location='index.php?halaman=mahasiswa';</script>";
    }
    
?>