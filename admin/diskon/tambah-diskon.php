<div class="col-12 text-secondary">
   <div class="card">
      <div class="card-body">
         <form method="POST" action="dashboard.php?page=simpan-diskon">
            <h2 class="primary mb-4"><i class="fas fa-tags"></i> Tambah Data Diskon </h2>
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label>Nama Diskon</label>
                  <input type="text" class="form-control" name="nama_diskon" placeholder="Nama Diskon" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Persentase Diskon (%)</label>
                  <input type="number" class="form-control" name="persentase" placeholder="Persentase Diskon" min="1" max="100" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Minimal Hari Sewa</label>
                  <input type="number" class="form-control" name="minimal_hari" placeholder="Minimal Hari Sewa" min="1" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Status Diskon</label>
                  <select name="status" class="form-control" required>
                     <option value="">Pilih Status Diskon</option>
                     <option value="Aktif">Aktif</option>
                     <option value="Tidak Aktif">Tidak Aktif</option>
                  </select>
               </div>
            </div>
            <div class="text-right mt-3">
               <button type="submit" name="simpan_data" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
               <button type="reset" class="btn btn-danger"><i class="fas fa-sync"></i> Reset</button>
            </div>
         </form>
      </div>
   </div>
</div>