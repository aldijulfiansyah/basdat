



<style>
    .table-condensed{
  font-size: 15px;
}
</style>
<div class="card ">
  <div class="card-body">
  
        <div class="row justify-content-center  ">

            <table class="table table-condensed table-responsive table-bordered table-dark text-center">
                <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM Mahasiswa</th>
                            <th scope="col">Nama Mahasiswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">NIP Dosen</th>
                            <th scope="col">Nama Dosen</th>
                            <th scope="col">Nama Mata Kuliah</th>
                            <th scope="col">Kode Mata Kuliah</th>
                            <th scope="col">nilai</th>
                        </tr>
                </thead>
                <tbody> 
                        <?php $nomor=1; ?>
                        <?php $ambil = $koneksi->query("SELECT * FROM perkuliahan JOIN mahasiswa ON perkuliahan.nim=mahasiswa.nim
                            JOIN mata_kuliah ON perkuliahan.kode_mk=mata_kuliah.kode_mk
                            JOIN dosen ON perkuliahan.nip=dosen.nip
                            WHERE perkuliahan.id_perkuliahan='$_GET[id]' "); ?>
                        <?php while($pecah = $ambil->fetch_assoc()){ ?>
                        <tr>
                            
                            <td><?php echo $nomor;?></td>
                            <td><?php echo $pecah['nim'];?> </td>
                            <td><?php echo $pecah['nama'];?> </td>
                            <td><?php echo $pecah['kelas'];?></td>
                            <td><?php echo $pecah['nip'];?> </td>
                            <td><?php echo $pecah['nama_dosen'];?> </td>
                            <td><?php echo $pecah['nama_mk'];?> </td>
                            <td><?php echo $pecah['kode_mk'];?> </td>
                            <td><?php echo $pecah['nilai'];?></td>
                        </tr>
                        <?php $nomor++; ?>
                        <?php } ?>
                        
                </tbody>
            </table>
        </div>
  </div>



</div>