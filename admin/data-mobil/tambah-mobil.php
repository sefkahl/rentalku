<div class="col-12 text-secondary">
    <div class="card">
        <!-- <div class="card-header">
            <a href="dashboard.php?page=mobil" class="btn btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div> -->

        <div class="card-body">
            <form method="POST" action="dashboard.php?page=simpan-mobil" enctype="multipart/form-data">

                <h2 class="primary mb-3">
                    <i class="fas fa-car"></i> Informasi Kendaraan
                </h2>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama Mobil</label>
                        <input type="text" class="form-control" name="nama_mobil"
                            placeholder="Contoh: Avanza Veloz" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Merk Mobil</label>
                        <input type="text" class="form-control" name="merk_mobil"
                            placeholder="Contoh: Toyota" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Nomor Polisi</label>
                        <input type="text" class="form-control" name="no_polisi"
                            placeholder="Contoh: BK 1234 ABC" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Harga Sewa / Hari</label>
                        <input type="number" class="form-control" name="harga_sewa"
                            placeholder="Contoh: 350000" min="0" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Transmisi</label>
                        <select class="form-control" name="transmisi" required>
                            <option value="">-- Pilih Transmisi --</option>
                            <option value="Manual">Manual</option>
                            <option value="Matic">Matic</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Kapasitas Penumpang</label>
                        <input type="number" class="form-control" name="kapasitas_penumpang"
                            placeholder="Contoh: 7" min="1" required>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Foto Mobil</label>
                        <input type="file" class="form-control" name="foto_mobil"
                            accept="image/*" required>
                        <small class="text-muted">Format JPG, JPEG, PNG. Maksimal 2 MB.</small>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Deskripsi Mobil</label>
                        <textarea id="summernote" name="deskripsi"
                            class="form-control"></textarea>
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