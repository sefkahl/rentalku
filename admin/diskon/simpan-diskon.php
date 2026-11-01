<?php
if (isset($_POST['simpan_data'])) {
   $nama_diskon  = $_POST['nama_diskon'];
   $persentase   = $_POST['persentase'];
   $minimal_hari = $_POST['minimal_hari'];
   $status       = $_POST['status'];

   $sql = "INSERT INTO tbl_diskon (nama_diskon, persentase, minimal_hari, status)
           VALUES ('$nama_diskon', '$persentase', '$minimal_hari', '$status')";

   if (mysqli_query($connect, $sql)) {
      echo "
      <script>
         Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Data diskon berhasil disimpan.',
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
            text: 'Data diskon gagal disimpan.',
            confirmButtonText: 'OK'
         });
      </script>";
   }
}

if (isset($_POST['update_data'])) {
   $id           = $_POST['id'];
   $nama_diskon  = $_POST['nama_diskon'];
   $persentase   = $_POST['persentase'];
   $minimal_hari = $_POST['minimal_hari'];
   $status       = $_POST['status'];

   $sql = "UPDATE tbl_diskon SET
        nama_diskon  = '$nama_diskon',
        persentase   = '$persentase',
        minimal_hari = '$minimal_hari',
        status       = '$status'
        WHERE id     = '$id'";

   if (mysqli_query($connect, $sql)) {
      echo "
      <script>
         Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Data diskon berhasil diperbarui.',
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
            text: 'Data diskon gagal diperbarui.',
            confirmButtonText: 'OK'
         });
      </script>";
   }
}
?>