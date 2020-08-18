<style>
    .table-condensed{
  font-size: 15px;
}


</style>
<div class="card ">
  <div class="card-header">
        <div class="text-info d-flex p-2 bd-highlight">Mahasiswa</div>
  </div>
  <div class="card-body">
  
        <div class="row justify-content-center  ">

            <table class="table table-condensed table-responsive table-bordered table-dark text-center">
                <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                </thead>
                <tbody> 
                        <?php $nomor=1; ?>
                        <?php $ambil = $koneksi->query("SELECT * FROM mahasiswa")or die($koneksi->error); ?>
                        <?php while($pecah = $ambil->fetch_assoc()){ ?>
                        <tr>
                            
                            <td><?php echo $nomor;?></td>
                            <td><?php echo $pecah['nim'];?> </td>
                            <td><?php echo $pecah['nama'];?></td>
                            <td><?php echo $pecah['kelas'];?></td>
                            <td><?php echo $pecah['alamat'];?></td>
                            <td>
                                <a href="index.php?halaman=hapusmahasiswa&id=<?php echo $pecah['nim'];?>"
                                 class="btn btn-danger">hapus</a>
                                <a href="index.php?halaman=ubahmahasiswa&id=<?php echo $pecah['nim'];?>" class="btn btn-warning">ubah</a>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                        <?php } ?>
                        
                </tbody>
            </table>
            <a href="index.php?halaman=tambahmahasiswa" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
  </div>



</div>
