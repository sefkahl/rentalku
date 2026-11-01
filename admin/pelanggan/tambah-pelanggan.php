<div class="col-12 text-secondary">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="dashboard.php?page=simpan-pelanggan" enctype="multipart/form-data">

                <h2 class="primary mb-4">
                    Tambah Data Pelanggan
                </h2>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Email Aktif</label>
                        <input type="email" class="form-control" name="email" placeholder="@email anda" required>
                        <!-- <small class="text-muted">Gunakan email aktif yang bisa dibuka melalui HP.</small> -->
                    </div>

                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" minlength="8" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Konfirmasi Password</label>
                        <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password" placeholder="Ulangi Password" minlength="8" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nomor HP / WhatsApp</label>
                        <input type="tel" class="form-control" name="no_hp" placeholder="Hp/Wa" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Foto Pelanggan</label>
                        <input type="file" class="form-control" name="foto" accept="image/jpeg,image/png">
                        <small class="text-muted">Format JPG, JPEG, PNG. Maksimal 2 MB.</small>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Status Pelanggan</label>
                        <select name="status" class="form-control" required>
                            <option value="">Pilih Status</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Alamat Lengkap</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat Lengkap" required></textarea>
                    </div>

                </div>

                <div class="text-right mt-3">
                    <button type="submit" name="simpan_data" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>

                    <button type="reset" class="btn btn-danger">
                        <i class="fas fa-sync"></i> Reset
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>