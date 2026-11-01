<?php
if (isset($_GET['id'])) {

    $id     = $_GET['id'];
    $query  = mysqli_query($connect, "SELECT foto_merk FROM tbl_merk WHERE id='$id'");
    $data   = mysqli_fetch_assoc($query);
    $folder = 'upload/mobil/';

    if (!empty($data['foto_merk']) && file_exists($folder . $data['foto_merk'])) {
        unlink($folder . $data['foto_merk']);
    }

    $sql = "DELETE FROM tbl_merk WHERE id='$id'";

    if (mysqli_query($connect, $sql)) {
        echo "<script>
        Swal.fire({
        title: 'SUKSES!',
        text: 'Data Berhasil Di hapus...',
        icon: 'success',
        confirmButtonText: 'OK'
        }).then(() => {
        window.location.replace('dashboard.php?page=merk-mobil');
        });
        </script>";
        exit;
    } else {
        echo
        "<script>
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