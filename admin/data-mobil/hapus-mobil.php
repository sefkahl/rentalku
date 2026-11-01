<?php
if (isset($_GET['id'])) {
    $id     = (int) $_GET['id'];
    $ambil  = mysqli_query($connect, "SELECT foto_mobil FROM tbl_mobil WHERE id='$id'");
    $data   = mysqli_fetch_assoc($ambil);
    $sql    = "DELETE FROM tbl_mobil WHERE id='$id'";

    if (mysqli_query($connect, $sql)) {
        if (!empty($data['foto_mobil'])) {
            $file = dirname(__DIR__, 2) . '/upload/mobil/' . $data['foto_mobil'];
            if (file_exists($file)) { unlink($file);
            }
        }
        echo "<script>
        Swal.fire({
            title: 'SUKSES!',
            text: 'Data Berhasil Di hapus...',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.replace('dashboard.php?page=data-mobil');
        });
        </script>";
        exit;

    } else {
        echo "<script>
        Swal.fire({
            title: 'Gagal!',
            text: 'Data satuan gagal dihapus.',
            icon: 'error'
        });
        </script>";
        exit;
    }
}
?>