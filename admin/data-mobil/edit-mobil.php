<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_mobil WHERE id = '$id'";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($query);
?>

<div class="col-12 text-secondary">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="dashboard.php?page=simpan-mobil" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $data['id']; ?>">

                <h2 class="primary mb-4">
                    <i class="fas fa-car"></i> Edit Data Mobil
                </h2>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama Mobil</label>
                        <input type="text" class="form-control" name="nama_mobil"
                            value="<?= $data['nama_mobil']; ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Merk Mobil</label>
                        <select name="id_merk" class="form-control" required>
                            <option value="">-- Pilih Merk --</option>
                            <?php
                            $query_merk = mysqli_query($connect, "SELECT * FROM tbl_merk");
                            while ($merk = mysqli_fetch_assoc($query_merk)) :
                            ?>
                                <option value="<?= $merk['id']; ?>"
                                    <?= $data['id_merk'] == $merk['id'] ? 'selected' : ''; ?>>
                                    <?= $merk['nama_merk']; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Nomor Polisi</label>
                        <input type="text" class="form-control" name="no_plat"
                            value="<?= $data['no_plat']; ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Harga Sewa / Hari</label>
                        <input type="number" class="form-control" name="harga_sewa"
                            value="<?= $data['harga_sewa']; ?>" min="0" required>
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
                        <label>Kapasitas Penumpang</label>
                        <input type="number" class="form-control" name="penumpang"
                            value="<?= $data['penumpang']; ?>" min="1" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Foto Mobil</label>
                        <input type="file" class="form-control" name="foto_mobil" accept="image/jpeg,image/png">
                        <small class="text-muted">Format JPG, JPEG, PNG. Maksimal 2 MB.</small>

                        <div class="mt-2">
                            <img src="upload/mobil/<?= $data['foto_mobil']; ?>"
                                width="100" height="70" style="object-fit: cover;">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Status Mobil</label>
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
                        <label>Deskripsi Mobil</label>
                        <textarea id="summernote" name="deskripsi" class="form-control"><?= $data['deskripsi']; ?></textarea>
                    </div>
                </div>

                <div class="text-right mt-3">
                    <button type="submit" name="update_data" class="btn btn-success">
                        <i class="fas fa-save"></i> Update
                    </button>

                    <a href="dashboard.php?page=data-mobil" class="btn btn-danger">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>