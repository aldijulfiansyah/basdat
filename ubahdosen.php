<?php $ambil = $koneksi->query("SELECT * FROM dosen WHERE nip='$_GET[id]'"); 
      $pecah = $ambil->fetch_assoc();

      
?>


<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">NIP</label>
        <input type="number" class="form-control" name="nip" value="<?php echo $pecah['nip'];?>">
    </div>

    


    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama_dosen" value="<?php echo $pecah['nama_dosen'];?>">
    </div>

    
  

    <button class="btn btn-primary" name="ubah">Ubah</button>

</form>
<?php
    if (isset($_POST['ubah'])) 
    {
        $koneksi->query("UPDATE dosen SET nip='$_POST[nip]',nama_dosen='$_POST[nama_dosen]'
        WHERE nip='$_GET[id]'");
        echo "<script>alert('Data Telah diubah');</script>";
        echo "<script>location='index.php?halaman=dosen';</script>";
    }
    
?>