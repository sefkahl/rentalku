<?php
if (isset($_GET['id'])) {
    $id     = (int) $_GET['id'];
    $ambil  = mysqli_query($connect, "SELECT foto_motor FROM tbl_motor WHERE id='$id'");
    $data   = mysqli_fetch_assoc($ambil);
    $sql    = "DELETE FROM tbl_motor WHERE id='$id'";

    if (mysqli_query($connect, $sql)) {
        if (!empty($data['foto_motor'])) {
            $file = dirname(__DIR__, 2) . '/upload/motor/' . $data['foto_motor'];
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
            window.location.replace('dashboard.php?page=data-motor');
        });
        </script>";
        exit;

    } else {
        echo "<script>
        Swal.fire({
            title: 'Gagal!',
            text: 'Data motor gagal dihapus.',
            icon: 'error'
        });
        </script>";
        exit;
    }
}
?>