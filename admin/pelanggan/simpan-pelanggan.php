<?php
if (isset($_POST['simpan_data'])) {
   $nama_lengkap        = $_POST['nama_lengkap'];
   $email               = $_POST['email'];
   $no_hp               = $_POST['no_hp'];
   $alamat              = $_POST['alamat'];
   $status              = $_POST['status'];
   $foto                = '';
   $password            = $_POST['password'];
   $konfirmasi_password = $_POST['konfirmasi_password'];

if ($password !== $konfirmasi_password) {
    echo "<script>
        Swal.fire({
            icon: 'warning',
            title: 'Password Tidak Sama!',
            text: 'Silakan periksa kembali konfirmasi password.'
        }).then(function() {
            history.back();
        });
    </script>";
    exit;
}

$password = password_hash($password, PASSWORD_DEFAULT);

   $cek = mysqli_query($connect, "SELECT id FROM tbl_pelanggan WHERE email = '$email'");

   if (mysqli_num_rows($cek) > 0) {
      echo "<script>
         Swal.fire({
            icon: 'warning',
            title: 'Email Sudah Terdaftar!',
            text: 'Silakan gunakan email yang berbeda.'
         }).then(function() {history.back();});
      </script>";
      exit;

   } else {

      if (!empty($_FILES['foto']['name'])) {
         $folder = 'upload/pelanggan/';
         if (!is_dir($folder)) { mkdir($folder, 0777, true); }

         $foto = time() . '_' . basename($_FILES['foto']['name']);
         move_uploaded_file($_FILES['foto']['tmp_name'], $folder . $foto);
      }

      $sql = "INSERT INTO tbl_pelanggan (nama_lengkap, email, password, no_hp, alamat, foto, status)
              VALUES ('$nama_lengkap', '$email', '$password', '$no_hp', '$alamat', '$foto', '$status')";

      if (mysqli_query($connect, $sql)) {
         echo "
         <script>
            Swal.fire({
               icon: 'success',
               title: 'Berhasil!',
               text: 'Data pelanggan berhasil disimpan.',
               confirmButtonText: 'OK'
            }).then(() => {
               window.location='dashboard.php?page=pelanggan';
            });
         </script>";
      } else {
         echo "
         <script>
            Swal.fire({
               icon: 'error',
               title: 'Gagal!',
               text: 'Data pelanggan gagal disimpan.'
            });
         </script>";
      }
   }
}


if (isset($_POST['update_data'])) {
   $id           = $_POST['id'];
   $nama_lengkap = $_POST['nama_lengkap'];
   $email        = $_POST['email'];
   $no_hp        = $_POST['no_hp'];
   $alamat       = $_POST['alamat'];
   $status       = $_POST['status'];

   $query = mysqli_query($connect, "SELECT foto, password FROM tbl_pelanggan WHERE id = '$id'");
   $data  = mysqli_fetch_assoc($query);

   $foto     = $data['foto'];
   $password = $data['password'];

   $cek = mysqli_query($connect, "SELECT id FROM tbl_pelanggan WHERE email = '$email' AND id != '$id'");

   if (mysqli_num_rows($cek) > 0) {
      echo "<script>
         Swal.fire({
            icon: 'warning',
            title: 'Email Sudah Terdaftar!',
            text: 'Silakan gunakan email yang berbeda.'
         }).then(function() {history.back();});
      </script>";
      exit;
   }

   if (!empty($_POST['password'])) {
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
   }

   // Upload Foto Baru
   if (!empty($_FILES['foto']['name'])) {
      $folder   = 'upload/pelanggan/';
      if (!is_dir($folder)) { mkdir($folder, 0777, true); }

      $foto_baru = time() . '_' . basename($_FILES['foto']['name']);

      if (move_uploaded_file($_FILES['foto']['tmp_name'], $folder . $foto_baru)) {
         if (!empty($data['foto']) && file_exists($folder . $data['foto'])) {
            unlink($folder . $data['foto']);
         }

         $foto = $foto_baru;
      }
   }

   $sql = "UPDATE tbl_pelanggan SET
        nama_lengkap = '$nama_lengkap',
        email        = '$email',
        password     = '$password',
        no_hp        = '$no_hp',
        alamat       = '$alamat',
        foto         = '$foto',
        status       = '$status'
        WHERE id     = '$id'";

   if (mysqli_query($connect, $sql)) {
      echo "
      <script>
         Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Data pelanggan berhasil diperbarui.',
            confirmButtonText: 'OK'
         }).then(() => {
            window.location='dashboard.php?page=pelanggan';
         });
      </script>";
      exit;
   } else {
      echo "
      <script>
         Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Data pelanggan gagal diperbarui.',
            confirmButtonText: 'OK'
         });
      </script>";
      exit; 
   }
}
?>