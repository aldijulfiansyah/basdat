<style>
    .table-condensed{
  font-size: 15px;
}


</style>
<div class="card ">
  <div class="card-header">
        <div class="text-info d-flex p-2 bd-highlight">Dosen</div>
  </div>
  <div class="card-body">
  
        <div class="row justify-content-center  ">

            <table class="table table-condensed table-responsive table-bordered table-dark text-center">
                <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                </thead>
                <tbody> 
                        <?php $nomor=1; ?>
                        <?php $ambil = $koneksi->query("SELECT * FROM dosen")or die($koneksi->error); ?>
                        <?php while($pecah = $ambil->fetch_assoc()){ ?>
                        <tr>
                            
                            <td><?php echo $nomor;?></td>
                            <td><?php echo $pecah['nip'];?> </td>
                            <td><?php echo $pecah['nama_dosen'];?></td>
                            <td>
                                <a href="index.php?halaman=hapusdosen&id=<?php echo $pecah['nip'];?>"
                                 class="btn btn-danger">hapus</a>
                                <a href="index.php?halaman=ubahdosen&id=<?php echo $pecah['nip'];?>" class="btn btn-warning">ubah</a>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                        <?php } ?>
                        
                </tbody>
            </table>
            <a href="index.php?halaman=tambahdosen" class="btn btn-primary">Tambah Dosen</a>
        </div>
  </div>



</div>
