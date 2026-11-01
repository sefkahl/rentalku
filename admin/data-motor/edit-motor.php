<?php
$id      = $_GET['id'];
$sql     = "SELECT * FROM tbl_motor WHERE id = '$id'";
$query   = mysqli_query($connect, $sql);
$data    = mysqli_fetch_assoc($query);
?>
<div class="col-12 text-secondary">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="dashboard.php?page=simpan-motor" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <h2 class="primary mb-4"> Edit Data Motor</h2>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama Motor</label>
                        <input type="text" class="form-control" name="nama_motor" value="<?= $data['nama_motor']; ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Merk Motor</label>
                        <select name="id_merk" class="form-control" required>
                            <option value="">-- Pilih Merk --</option>
                            <?php
                            $query_merk = mysqli_query($connect, "SELECT * FROM tbl_merk");
                            while ($merk = mysqli_fetch_assoc($query_merk)) :
                            ?>
                                <option value="<?= $merk['id']; ?>" <?= $data['id_merk'] == $merk['id'] ? 'selected' : ''; ?>><?= $merk['nama_merk']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nomor Polisi</label>
                        <input type="text" class="form-control text-uppercase" name="no_plat" value="<?= $data['no_plat']; ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Harga Sewa / Hari</label>
                        <input type="number" class="form-control" name="harga_sewa" value="<?= $data['harga_sewa']; ?>" min="0" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Transmisi</label>
                        <select class="form-control" name="transmisi" required>
                            <option value="">-- Pilih Transmisi --</option>
                            <option value="Matic" <?= $data['transmisi'] == 'Matic' ? 'selected' : ''; ?>>Matic</option>
                            <option value="Manual" <?= $data['transmisi'] == 'Manual' ? 'selected' : ''; ?>>Manual</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Kapasitas Mesin</label>
                        <input type="text" class="form-control" name="kapasitas_mesin" value="<?= $data['kapasitas_mesin']; ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Tahun Motor</label>
                        <input type="number" class="form-control" name="tahun" value="<?= $data['tahun']; ?>" min="1900" max="2100" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Warna Motor</label>
                        <input type="text" class="form-control" name="warna" value="<?= $data['warna']; ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Foto Motor</label>
                        <input type="file" class="form-control" name="foto_motor" accept="image/jpeg,image/png">
                        <small class="text-muted">Format JPG, JPEG, PNG. Maksimal 2 MB.</small>
                        <div class="mt-2">
                            <?php if (!empty($data['foto_motor'])) : ?>
                                <img src="upload/motor/<?= htmlspecialchars($data['foto_motor']); ?>" width="100" height="70" style="object-fit: cover;">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Status Motor</label>
                        <select name="status" class="form-control" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="Tersedia" <?= $data['status'] == 'Tersedia' ? 'selected' : ''; ?>>Tersedia</option>
                            <option value="Disewa" <?= $data['status'] == 'Disewa' ? 'selected' : ''; ?>>Disewa</option>
                            <option value="Services" <?= $data['status'] == 'Services' ? 'selected' : ''; ?>>Services</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Deskripsi Motor</label>
                        <textarea id="summernote" name="deskripsi" class="form-control"><?= htmlspecialchars($data['deskripsi']); ?></textarea>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <button type="submit" name="update_data" class="btn btn-success"><i class="fas fa-save"></i> Update</button>
                    <a href="dashboard.php?page=data-motor" class="btn btn-danger"> <i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>