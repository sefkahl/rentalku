<?php
if (isset($_POST['simpan_data'])) {
   $nama_motor     = $_POST['nama_motor'];
   $id_merk        = $_POST['id_merk'];
   $no_plat        = strtoupper($_POST['no_plat']);
   $harga_sewa     = $_POST['harga_sewa'];
   $transmisi      = $_POST['transmisi'];
   $kapasitas_mesin = $_POST['kapasitas_mesin'];
   $tahun          = $_POST['tahun'];
   $warna          = $_POST['warna'];
   $status         = $_POST['status'];
   $deskripsi      = $_POST['deskripsi'];
   $foto_motor     = '';

   $cek = mysqli_query($connect, "SELECT id FROM tbl_motor WHERE no_plat = '$no_plat'");

   if (mysqli_num_rows($cek) > 0) {
      echo "<script>
         Swal.fire({
            icon: 'warning',
            title: 'Nomor Plat Sudah Ada!',
            text: 'Silakan gunakan nomor plat yang berbeda.'
         }).then(function() {history.back();});
      </script>";
      exit;
   } else {
      if (!empty($_FILES['foto_motor']['name'])) {
         $folder = 'upload/motor/';
         if (!is_dir($folder)) { mkdir($folder, 0777, true); }
         $foto_motor = time() . '_' . basename($_FILES['foto_motor']['name']);
         move_uploaded_file($_FILES['foto_motor']['tmp_name'], $folder . $foto_motor);
      }

      $sql = "INSERT INTO tbl_motor (nama_motor, id_merk, no_plat, harga_sewa, transmisi, kapasitas_mesin, tahun, warna, foto_motor, status, deskripsi)
              VALUES ('$nama_motor', '$id_merk', '$no_plat', '$harga_sewa', '$transmisi', '$kapasitas_mesin', '$tahun', '$warna', '$foto_motor', '$status', '$deskripsi')";

      if (mysqli_query($connect, $sql)) {
         echo "
         <script>
            Swal.fire({
               icon: 'success',
               title: 'Berhasil!',
               text: 'Data motor berhasil disimpan.',
               confirmButtonText: 'OK'
            }).then(() => {
               window.location='dashboard.php?page=data-motor';
            });
         </script>";
      } else {
         echo "
         <script>
            Swal.fire({
               icon: 'error',
               title: 'Gagal!',
               text: 'Data motor gagal disimpan.'
            });
         </script>";
      }
   }
}

if (isset($_POST['update_data'])) {
   $id              = $_POST['id'];
   $nama_motor      = $_POST['nama_motor'];
   $id_merk         = $_POST['id_merk'];
   $no_plat         = strtoupper($_POST['no_plat']);
   $harga_sewa      = $_POST['harga_sewa'];
   $transmisi       = $_POST['transmisi'];
   $kapasitas_mesin = $_POST['kapasitas_mesin'];
   $tahun           = $_POST['tahun'];
   $warna           = $_POST['warna'];
   $status          = $_POST['status'];
   $deskripsi       = $_POST['deskripsi'];

   // Cek Nomor Plat Duplikat
   $cek = mysqli_query($connect, "SELECT id FROM tbl_motor WHERE no_plat = '$no_plat' AND id != '$id'");

   if (mysqli_num_rows($cek) > 0) {
      echo "<script>
         Swal.fire({
            icon: 'warning',
            title: 'Nomor Plat Sudah Ada!',
            text: 'Silakan gunakan nomor plat yang berbeda.'
         }).then(function() {history.back();});
      </script>";
      exit;
   }

   // Ambil Foto Lama
   $query      = mysqli_query($connect, "SELECT foto_motor FROM tbl_motor WHERE id = '$id'");
   $data       = mysqli_fetch_assoc($query);
   $foto_motor = $data['foto_motor'];

   // Upload Foto Baru
   if (!empty($_FILES['foto_motor']['name'])) {
      $folder     = 'upload/motor/';
      if (!is_dir($folder)) { mkdir($folder, 0777, true); }
      $foto_baru  = time() . '_' . basename($_FILES['foto_motor']['name']);

      if (move_uploaded_file($_FILES['foto_motor']['tmp_name'], $folder . $foto_baru)) {
         if (!empty($data['foto_motor']) && file_exists($folder . $data['foto_motor'])) {
            unlink($folder . $data['foto_motor']);
         }
         $foto_motor = $foto_baru;
      }
   }

   $sql = "UPDATE tbl_motor SET
        nama_motor      = '$nama_motor',
        id_merk         = '$id_merk',
        no_plat         = '$no_plat',
        harga_sewa      = '$harga_sewa',
        transmisi       = '$transmisi',
        kapasitas_mesin = '$kapasitas_mesin',
        tahun           = '$tahun',
        warna           = '$warna',
        foto_motor      = '$foto_motor',
        status          = '$status',
        deskripsi       = '$deskripsi'
        WHERE id        = '$id'";

   if (mysqli_query($connect, $sql)) {
      echo "
      <script>
         Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Data motor berhasil diperbarui.',
            confirmButtonText: 'OK'
         }).then(() => {
            window.location='dashboard.php?page=data-motor';
         });
      </script>";
   } else {
      echo "
      <script>
         Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Data motor gagal diperbarui.',
            confirmButtonText: 'OK'
         });
      </script>";
   }
}
?>