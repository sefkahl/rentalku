<?php
include 'connect.php';

$mobil = mysqli_query($connect, "SELECT id, nama_mobil, harga_sewa FROM tbl_mobil WHERE status='Tersedia'");

$hasil    = null;
$pesan    = '';
$nama     = '';
$durasi   = 'hari';
$id_mobil = 0;
$jumlah   = 1;

// Pesan setelah berhasil menyimpan (tanpa JavaScript)
if (isset($_GET['sukses'])) {
    $pesan = '<div class="alert alert-success">Sewa berhasil disimpan.</div>';
}

// ===== HITUNG atau SIMPAN =====
if (isset($_POST['hitung']) || isset($_POST['simpan'])) {
    $id_mobil = (int) $_POST['id_mobil'];
    $nama     = mysqli_real_escape_string($connect, $_POST['nama_pelanggan']);
    $durasi   = mysqli_real_escape_string($connect, $_POST['durasi']);
    $jumlah   = (int) $_POST['jumlah_hari'];

    $q = mysqli_query($connect, "SELECT harga_sewa FROM tbl_mobil WHERE id='$id_mobil'");
    $m = mysqli_fetch_assoc($q);
    $hargaPerHari = (float) $m['harga_sewa'];

    if ($durasi === 'setengah') {
        $jumlah   = 0.5;
        $subtotal = $hargaPerHari * 0.5;
        $diskon   = 0;
    } else {
        if ($jumlah < 1) $jumlah = 1;
        $subtotal = $hargaPerHari * $jumlah;
        $diskon   = ($jumlah > 2) ? $subtotal * 0.10 : 0;
    }
    $total = $subtotal - $diskon;

    $hasil = [
        'subtotal' => $subtotal,
        'diskon'   => $diskon,
        'total'    => $total
    ];

    // ===== SIMPAN =====
    if (isset($_POST['simpan'])) {
        mysqli_query($connect, "INSERT INTO tbl_sewa (id_mobil, nama_pelanggan, durasi, jumlah_hari, total)
                                VALUES ('$id_mobil', '$nama', '$durasi', '$jumlah', '$total')");
        header("Location: sewa.php?sukses=1");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sewa Mobil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-4">
    <h4 class="mb-3">Sewa Mobil</h4>

    <?= $pesan; ?>

    <div class="row">
        <!-- Kiri: Form -->
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" name="nama_pelanggan" class="form-control"
                                   value="<?= htmlspecialchars($nama); ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Pilih Mobil</label>
                            <select name="id_mobil" class="form-control" required>
                                <option value="">-- Pilih mobil --</option>
                                <?php while ($m = mysqli_fetch_assoc($mobil)) : ?>
                                    <option value="<?= $m['id']; ?>" <?= $m['id'] == $id_mobil ? 'selected' : ''; ?>>
                                        <?= $m['nama_mobil']; ?> - Rp <?= number_format($m['harga_sewa'], 0, ',', '.'); ?>/hari
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Durasi</label>
                            <select name="durasi" class="form-control">
                                <option value="hari" <?= $durasi !== 'setengah' ? 'selected' : ''; ?>>Per hari</option>
                                <option value="setengah" <?= $durasi === 'setengah' ? 'selected' : ''; ?>>Setengah hari</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jumlah Hari <small class="text-muted">(diabaikan jika setengah hari)</small></label>
                            <input type="number" name="jumlah_hari" class="form-control" min="1"
                                   value="<?= (int) $jumlah; ?>">
                        </div>

                        <button type="submit" name="hitung" class="btn btn-secondary btn-block">Hitung</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Kanan: Total -->
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="mb-3">Rincian Harga</h5>

                    <?php if ($hasil) : ?>
                        <table class="table table-sm mb-3">
                            <tr>
                                <td>Subtotal</td>
                                <td class="text-right">Rp <?= number_format($hasil['subtotal'], 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                                <td>Diskon</td>
                                <td class="text-right">Rp <?= number_format($hasil['diskon'], 0, ',', '.'); ?></td>
                            </tr>
                            <tr class="font-weight-bold">
                                <td>Total</td>
                                <td class="text-right">Rp <?= number_format($hasil['total'], 0, ',', '.'); ?></td>
                            </tr>
                        </table>

                        <form method="POST">
                            <input type="hidden" name="nama_pelanggan" value="<?= htmlspecialchars($nama); ?>">
                            <input type="hidden" name="id_mobil" value="<?= $id_mobil; ?>">
                            <input type="hidden" name="durasi" value="<?= htmlspecialchars($durasi); ?>">
                            <input type="hidden" name="jumlah_hari" value="<?= (int) $jumlah; ?>">
                            <button type="submit" name="simpan" class="btn btn-primary btn-block">Sewa Sekarang</button>
                        </form>
                    <?php else : ?>
                        <p class="text-muted mb-0">Isi form lalu klik <b>Hitung</b> untuk melihat total harga.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>