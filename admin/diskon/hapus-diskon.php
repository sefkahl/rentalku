<?php
if (isset($_GET['id'])) {
   $id = (int) $_GET['id'];

   $sql = "DELETE FROM tbl_diskon WHERE id='$id'";

   if (mysqli_query($connect, $sql)) {
      echo "
      <script>
         Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Data diskon berhasil dihapus.',
            confirmButtonText: 'OK'
         }).then(() => {
            window.location='dashboard.php?page=diskon';
         });
      </script>";
   } else {
      echo "
      <script>
         Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Data diskon gagal dihapus.',
            confirmButtonText: 'OK'
         });
      </script>";
   }
}
?>