<div class="col-12">
   <div class="card">
      <div class="card-header">
         <a href="dashboard.php?page=tambah-user" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Tambah
         </a>
      </div>

      <div class="card-body">
         <table id="example1" class="table table-bordered table-hover">
            <thead>
               <tr>
                  <th width="5%" class="text-center">No</th>
                  <th>Nama</th>
                  <th width="40%">Email</th>
                  <th>Role</th>
                  <th width="10%" class="text-center">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $no = 1;
               $sql = "SELECT * FROM tbl_user ORDER BY id DESC";
               $query = mysqli_query($connect, $sql);

               while ($data = mysqli_fetch_assoc($query)) {
               ?>
                  <tr>
                     <td class="text-center"><?= $no++; ?></td>
                     <td><?= $data['username']; ?></td>
                     <td><?= $data['email']; ?></td>
                     <td><?= $data['role']; ?></td>
                     <td class="text-center">
                        <a href="dashboard.php?page=edit-user&id=<?= $data['id']; ?>"
                           class="btn btn-warning btn-sm">
                           <i class="fas fa-edit"></i>
                        </a>

                        <a href="dashboard.php?page=hapus-user&id=<?= $data['id']; ?>"
                           class="btn btn-danger btn-sm"
                           data-nama="<?= htmlspecialchars($data['username'], ENT_QUOTES); ?>"
                           data-email="<?= htmlspecialchars($data['email'], ENT_QUOTES); ?>"
                           onclick="return hapusUser(this, event);">
                           <i class="fas fa-trash"></i>
                        </a>
                     </td>
                  </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</div>

<script>
   function hapusUser(link, event) {
      event.preventDefault();

      Swal.fire({
         title: "Yakin ingin menghapus?",
         text: "User " + link.dataset.nama + " -- " + link.dataset.email + "?",
         icon: "warning",
         iconColor: "#d33",
         showCancelButton: true,
         confirmButtonColor: "#508a0d",
         cancelButtonColor: "#d33",
         confirmButtonText: "Ya, hapus!",
         cancelButtonText: "Batal"
      }).then((result) => {
         if (result.isConfirmed) {
            window.location.href = link.href;
         }
      });
   }
</script>