<?php
if (isset($_GET['id'])) {
    $id     = (int) $_GET['id'];
    $ambil  = mysqli_query($connect, "SELECT foto FROM tbl_pelanggan WHERE id='$id'");
    $data   = mysqli_fetch_assoc($ambil);
    $sql    = "DELETE FROM tbl_pelanggan WHERE id='$id'";

    if (mysqli_query($connect, $sql)) {
        if (!empty($data['foto'])) {
            $file = dirname(__DIR__, 2) . '/upload/pelanggan/' . $data['foto'];
            if (file_exists($file)) {
                unlink($file);
            }
        }

        echo "<script>
        Swal.fire({
            title: 'SUKSES!',
            text: 'Data Pelanggan Berhasil Dihapus...',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.replace('dashboard.php?page=data-pelanggan');
        });
        </script>";
        exit;

    } else {
        echo "<script>
        Swal.fire({
            title: 'Gagal!',
            text: 'Data pelanggan gagal dihapus.',
            icon: 'error'
        });
        </script>";
        exit;
    }
}
?>