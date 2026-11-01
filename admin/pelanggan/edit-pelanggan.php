<?php
$id      = $_GET['id'];
$sql     = "SELECT * FROM tbl_pelanggan WHERE id = '$id'";
$query   = mysqli_query($connect, $sql);
$data    = mysqli_fetch_assoc($query);
?>

<div class="col-12 text-secondary">
   <div class="card">
      <div class="card-body">
         <form method="POST" action="dashboard.php?page=simpan-pelanggan" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $data['id']; ?>">

            <h2 class="primary mb-4">
               Edit Data Pelanggan
            </h2>

            <div class="form-row">

               <div class="form-group col-md-6">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama_lengkap"
                     value="<?= htmlspecialchars($data['nama_lengkap']); ?>" required>
               </div>

               <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email"
                     value="<?= htmlspecialchars($data['email']); ?>" required>
               </div>

               <div class="form-group col-md-6">
                  <label>Nomor HP / WhatsApp</label>
                  <input type="text" class="form-control" name="no_hp"
                     value="<?= htmlspecialchars($data['no_hp']); ?>" required>
               </div>

               <div class="form-group col-md-6">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password"
                     placeholder="Kosongkan jika tidak ingin mengganti password">
                  <small class="text-muted">Isi hanya jika ingin mengganti password pelanggan.</small>
               </div>

               <div class="form-group col-md-6">
                  <label>Foto Pelanggan</label>
                  <input type="file" class="form-control" name="foto" accept="image/jpeg,image/png">
                  <small class="text-muted">Format JPG, JPEG, PNG. Maksimal 2 MB.</small>

                  <div class="mt-2">
                     <?php if (!empty($data['foto'])) : ?>
                        <img src="upload/pelanggan/<?= htmlspecialchars($data['foto']); ?>"
                           width="100" height="70" style="object-fit: cover;">
                     <?php else : ?>
                        <span class="text-muted">Belum ada foto</span>
                     <?php endif; ?>
                  </div>
               </div>

               <div class="form-group col-md-6">
                  <label>Status Pelanggan</label>
                  <select name="status" class="form-control" required>
                     <option value="">-- Pilih Status --</option>
                     <option value="Aktif" <?= $data['status'] == 'Aktif' ? 'selected' : ''; ?>>Aktif</option>
                     <option value="Tidak Aktif" <?= $data['status'] == 'Tidak Aktif' ? 'selected' : ''; ?>>Tidak Aktif</option>
                  </select>
               </div>

            </div>

            <div class="form-row">
               <div class="form-group col-md-12">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" rows="3" required><?= htmlspecialchars($data['alamat']); ?></textarea>
               </div>
            </div>

            <div class="text-right mt-3">
               <button type="submit" name="update_data" class="btn btn-success">
                  <i class="fas fa-save"></i> Update
               </button>

               <a href="dashboard.php?page=data-pelanggan" class="btn btn-danger">
                  <i class="fas fa-arrow-left"></i> Kembali
               </a>
            </div>

         </form>
      </div>
   </div>
</div>