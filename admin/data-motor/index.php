<div class="col-lg-12 ">
   <div class="card">
      <div class="card-header">
         <a href="dashboard.php?page=tambah-motor" class="btn btn-success "><i class="fas fa-plus-circle"></i> Tambah </a>
      </div>
      <div class="card-body">
         <table id="example1" class="table table-bordered table-hover">
            <thead>
               <tr class="text-justify">
                  <th width="5%" class="text-center">No</th>
                  <th>Nama Motor</th>
                  <th>Merk Motor</th>
                  <th width="10%">No Plat</th>
                  <th>Harga Sewa</th>
                  <th>Transmisi</th>
                  <th>Kapasitas Mesin</th>
                  <th>Tahun</th>
                  <th>Warna</th>
                  <th>Foto</th>
                  <th>Deskripsi</th>
                  <td>Status</td>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $no          = 1;
               $sql         = "SELECT tbl_motor.*, tbl_merk.nama_merk FROM tbl_motor LEFT JOIN tbl_merk ON tbl_motor.id_merk = tbl_merk.id ORDER BY tbl_motor.id DESC";
               $query       = mysqli_query($connect, $sql);
               while ($data = mysqli_fetch_assoc($query)) :
               ?>
                  <tr>
                     <td><?= $no++; ?></td>
                     <td><?= $data['nama_motor'] ?></td>
                     <td><?= $data['nama_merk'] ?></td>
                     <td><?= $data['no_plat'] ?></td>
                     <td>Rp<?= number_format($data['harga_sewa'], 0, ',', '.'); ?></td>
                     <td><?= $data['transmisi'] ?></td>
                     <td><?= $data['kapasitas_mesin'] ?></td>
                     <td><?= $data['tahun'] ?></td>
                     <td><?= $data['warna'] ?></td>
                     <td class="text-center">
                        <?php if (!empty($data['foto_motor'])) : ?>
                           <img src="upload/motor/<?= $data['foto_motor']; ?>" width="60" height="50" style="object-fit: cover;">
                        <?php else : ?>
                           <span class="text-muted">Tidak ada foto</span>
                        <?php endif; ?>
                     </td>
                     <td><?= $data['deskripsi'] ?></td>
                     <td><?= $data['status'] ?></td>
                     <td class="text-center">
                        <a href="dashboard.php?page=edit-motor&id=<?= $data['id']; ?>" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i></a>
                        <a href="dashboard.php?page=hapus-motor&id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" data-nama="<?= $data['nama_motor']; ?>" data-plat="<?= $data['no_plat']; ?>" onclick="return konfirmasiHapus(this, event);"><i class="fas fa-trash"></i></a>
                     </td>
                  </tr>
               <?php endwhile; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
</div>
<script>
   function konfirmasiHapus(link, event) {
      event.preventDefault();

      Swal.fire({
         title: "Yakin ingin menghapus?",
         text: "Motor " + link.dataset.nama + " " + link.dataset.plat + "?",
         icon: "warning",
         showCancelButton: true,
         confirmButtonText: "Ya, hapus!",
         cancelButtonText: "Batal"
      }).then(function(result) {
         if (result.isConfirmed) {
            window.location.href = link.href;
         }
      });
   }
</script>