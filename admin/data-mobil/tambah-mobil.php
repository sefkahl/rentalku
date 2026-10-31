<div class="col-12 text-secondary">
    <div class="card">
        <!-- <div class="card-header">
            <a href="dashboard.php?page=mobil" class="btn btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div> -->

        <div class="card-body">
            <form method="POST" action="dashboard.php?page=simpan-mobil" enctype="multipart/form-data">
                <h2 class="primary mb-4">
                    <i class="fas fa-car"></i> Tambah Data mobil
                </h2>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama Mobil</label>
                        <input type="text" class="form-control" name="nama_mobil"
                            placeholder="Nama Mobil" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Merk Mobil</label>
                        <select name="id_merk" class="form-control" required>
                            <option value="">-- Pilih Merk --</option>
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
                        <input type="text" class="form-control" name="no_plat"
                            placeholder="No Plat Kendaraan" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Harga Sewa / Hari</label>
                        <input type="number" class="form-control" name="harga_sewa"
                            placeholder="Harga Sewa" min="0" required>
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
                        <input type="number" class="form-control" name="penumpang"
                            placeholder="Kapasitas Penumpang" min="1" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Foto Mobil</label>
                        <input type="file" class="form-control" name="foto_mobil"
                            accept="image/*" >
                        <small class="text-muted">Format JPG, JPEG, PNG. Maksimal 2 MB.</small>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Status Mobil</label>
                        <select name="status" class="form-control" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Disewa">Disewa</option>
                            <option value="Services">Services</option>
                        </select>

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