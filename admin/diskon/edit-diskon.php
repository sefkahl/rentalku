<?php
$id = (int) $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM tbl_diskon WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
   echo "<script>window.location='dashboard.php?page=data-diskon';</script>";
   exit;
}
?>

<div class="col-12 text-secondary">
   <div class="card">
      <div class="card-body">
         <form method="POST" action="dashboard.php?page=simpan-diskon">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">

            <h2 class="primary mb-4"><i class="fas fa-tags"></i> Edit Data Diskon</h2>
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label>Nama Diskon</label>
                  <input type="text" class="form-control" name="nama_diskon" placeholder="Nama Diskon" value="<?= htmlspecialchars($data['nama_diskon']); ?>" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Persentase Diskon (%)</label>
                  <input type="number" class="form-control" name="persentase" placeholder="Persentase Diskon" min="1" max="100" value="<?= $data['persentase']; ?>" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Minimal Hari Sewa</label>
                  <input type="number" class="form-control" name="minimal_hari" placeholder="Minimal Hari Sewa" min="1" value="<?= $data['minimal_hari']; ?>" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Status Diskon</label>
                  <select name="status" class="form-control" required>
                     <option value="">Pilih Status Diskon</option>
                     <option value="Aktif" <?= $data['status'] == 'Aktif' ? 'selected' : ''; ?>>Aktif</option>
                     <option value="Tidak Aktif" <?= $data['status'] == 'Tidak Aktif' ? 'selected' : ''; ?>>Tidak Aktif</option>
                  </select>
               </div>
            </div>
            <div class="text-right mt-3">
               <button type="submit" name="update_data" class="btn btn-success"><i class="fas fa-save"></i> Update</button>
               <a href="dashboard.php?page=data-diskon" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
         </form>
      </div>
   </div>
</div>