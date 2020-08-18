<style>
    .table-condensed{
  font-size: 15px;
}
</style>
<div class="card ">
  <div class="card-header">
        <div class="text-info d-flex p-2 bd-highlight"> Data Perkuliahan</div>
  </div>
  <div class="card-body">
  
        <div class="row justify-content-center  ">

            <table class="table table-condensed table-responsive table-bordered table-dark text-center">
                <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Kd mk</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Aksi</th>
                        </tr>
                </thead>
                <tbody> 
                        <?php $nomor=1; ?>
                        <?php $ambil = $koneksi->query("SELECT * FROM perkuliahan JOIN mahasiswa ON perkuliahan.nim=mahasiswa.nim
                        JOIN dosen ON perkuliahan.nip=dosen.nip
                        JOIN mata_kuliah ON perkuliahan.kode_mk=mata_kuliah.kode_mk
                        
                        
                        "); ?>
                        <?php while($pecah = $ambil->fetch_assoc()){ ?>
                        <tr>
                            
                            <td><?php echo $nomor;?></td>
                            <td><?php echo $pecah['nim'];?></td>
                            <td><?php echo $pecah['nip'];?></td>
                            <td><?php echo $pecah['kode_mk'];?></td>
                            <td><?php echo $pecah['nilai'];?></td>
                            <td>
                                <a href="index.php?halaman=detail&id=<?php echo $pecah['id_perkuliahan']; ?>" class="btn btn-info">detail</a>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                        <?php } ?>
                        
                </tbody>
            </table>
        </div>
  </div>



</div>
