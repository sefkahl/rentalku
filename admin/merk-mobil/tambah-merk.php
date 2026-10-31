   <div class="col-6 text-secondary">
      <div class="card">
         <div class="card-header">
            <a href="dashboard.php?page=merk-mobil" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
            <form method="POST" action="dashboard.php?page=simpan-merk" enctype="multipart/form-data">
               <div class="form-row mt-3">
                  <div class="form-group col-md-6">
                     <label for="nama_merk">Merk Mobil</label>
                     <input type="text" class="form-control" name="nama_merk" id="nama_merk" placeholder="Masukan Nama satuan" required>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="status">Status</label>
                     <select class="form-control" name="status" id="status" required>
                        <option value="" selected disabled>"Pilih Status"</option>
                        <option value="1">Aktif </option>
                        <option value="0">Nonaktif</option>
                     </select>
                  </div>
               </div>
         </div>
         <div class="mt-3 mb-3 text-right text-right pr-3">
            <button type="submit" name="simpan_data" class="btn btn-success">
               <i class="fas fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-danger">
               <i class="fas fa-sync fa-spin"></i> Reset</button>
         </div>
         </form>
      </div>
   </div>
   </div>