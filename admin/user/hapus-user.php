<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_user WHERE id='$id'";

    if (mysqli_query($connect, $sql)) {
        echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data user berhasil dihapus.',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location='dashboard.php?page=user';
            });
        </script>";
    } else {
        echo "
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Data user gagal dihapus.'
            });
        </script>";
    }
}
?>