<div class="col-12 text-secondary">
   <div class="card">
      <div class="card-body">
         <form method="POST" action="dashboard.php?page=simpan-motor" enctype="multipart/form-data">
            <h2 class="primary mb-4"> Tambah Data Motor </h2>
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label>Nama Motor</label>
                  <input type="text" class="form-control" name="nama_motor" placeholder="Nama Motor" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Merk Motor</label>
                  <select name="id_merk" class="form-control" required>
                     <option value="">Pilih Merk Motor</option>
                     <?php
                     $query = mysqli_query($connect, "SELECT * FROM tbl_merk");
                     while ($data = mysqli_fetch_assoc($query)) :
                     ?>
                        <option value="<?= $data['id']; ?>"><?= $data['nama_merk']; ?></option>
                     <?php endwhile; ?>
                  </select>
               </div>
               <div class="form-group col-md-6">
                  <label>Nomor Polisi</label>
                  <input type="text" class="form-control text-uppercase" name="no_plat" placeholder="No Plat Kendaraan" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Harga Sewa / Hari</label>
                  <input type="number" class="form-control" name="harga_sewa" placeholder="Harga Sewa" min="0" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Transmisi</label>
                  <select class="form-control" name="transmisi" required>
                     <option value="">Pilih Transmisi</option>
                     <option value="Manual">Manual</option>
                     <option value="Matic">Matic</option>
                  </select>
               </div>
               <div class="form-group col-md-6">
                  <label>Kapasitas Mesin</label>
                  <input type="text" class="form-control" name="kapasitas_mesin" placeholder="Kapasitas Mesin" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Tahun Motor</label>
                  <input type="number" class="form-control" name="tahun" placeholder="Tahun Motor" min="1900" max="2100" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Warna Motor</label>
                  <input type="text" class="form-control" name="warna" placeholder="Warna Motor" required>
               </div>
               <div class="form-group col-md-6">
                  <label>Foto Motor</label>
                  <input type="file" class="form-control" name="foto_motor" accept="image/*">
                  <small class="text-muted">Format JPG, JPEG, PNG. Maksimal 2 MB.</small>
               </div>
               <div class="form-group col-md-6">
                  <label>Status Motor</label>
                  <select name="status" class="form-control" required>
                     <option value="">Pilih Status</option>
                     <option value="Tersedia">Tersedia</option>
                     <option value="Disewa">Disewa</option>
                     <option value="Services">Services</option>
                  </select>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-12">
                  <label>Deskripsi Motor</label>
                  <textarea id="summernote" name="deskripsi" class="form-control"></textarea>
               </div>
            </div>
            <div class="text-right mt-3">
               <button type="submit" name="simpan_data" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
               <button type="reset" class="btn btn-danger"> <i class="fas fa-sync"></i> Reset </button>
            </div>
         </form>
      </div>
   </div>
</div>