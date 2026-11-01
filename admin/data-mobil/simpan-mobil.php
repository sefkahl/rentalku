<?php
if (isset($_POST['simpan_data'])) {
   $nama_mobil = $_POST['nama_mobil'];
   $id_merk    = $_POST['id_merk'];
   $no_plat    = $_POST['no_plat'];
   $harga_sewa = $_POST['harga_sewa'];
   $transmisi  = $_POST['transmisi'];
   $penumpang  = $_POST['penumpang'];
   $status     = $_POST['status'];
   $deskripsi  = $_POST['deskripsi'];
   $foto_mobil = '';

   $cek = mysqli_query($connect, "SELECT id FROM tbl_mobil WHERE no_plat = '$no_plat'");
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

      if (!empty($_FILES['foto_mobil']['name'])) {
         $folder = 'upload/mobil/';
         if (!is_dir($folder)) { mkdir($folder, 0777, true);}
         $foto_mobil = time() . '_' . basename($_FILES['foto_mobil']['name']);
         move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $folder . $foto_mobil);
      }
      $sql = "INSERT INTO tbl_mobil (nama_mobil, id_merk, no_plat, harga_sewa, transmisi, penumpang, foto_mobil, status, deskripsi)
              VALUES ('$nama_mobil', '$id_merk', '$no_plat', '$harga_sewa', '$transmisi', '$penumpang', '$foto_mobil', '$status', '$deskripsi')";

      if (mysqli_query($connect, $sql)) {echo 
      "<script>
         Swal.fire({
         icon: 'success',
         title: 'Berhasil!',
         text: 'Data berhasil disimpan.',
         confirmButtonText: 'OK'
         }).then(() => {
         window.location='dashboard.php?page=data-mobil';
         });
         </script>";
      } else { echo 
      "<script>
         Swal.fire({
         icon: 'error',
         title: 'Gagal!',
         text: 'Data gagal disimpan.'
         });
         </script>";}}}
if (isset($_POST['update_data'])) {
   $id         = $_POST['id'];
   $nama_mobil = $_POST['nama_mobil'];
   $id_merk    = $_POST['id_merk'];
   $no_plat    = $_POST['no_plat'];
   $harga_sewa = $_POST['harga_sewa'];
   $transmisi  = $_POST['transmisi'];
   $penumpang  = $_POST['penumpang'];
   $status     = $_POST['status'];
   $deskripsi  = $_POST['deskripsi'];

   // Ambil Foto Lama
   $query      = mysqli_query($connect, "SELECT foto_mobil FROM tbl_mobil WHERE id = '$id'");
   $data       = mysqli_fetch_assoc($query);
   $foto_mobil = $data['foto_mobil'];

   if (!empty($_FILES['foto_mobil']['name'])) {
      $folder     = 'upload/mobil/';
      $foto_mobil = time() . '_' . basename($_FILES['foto_mobil']['name']);
      move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $folder . $foto_mobil);

      if (!empty($data['foto_mobil']) && file_exists($folder . $data['foto_mobil'])) {
         unlink($folder . $data['foto_mobil']);
      }
   }
   $sql = "UPDATE tbl_mobil SET
        nama_mobil  = '$nama_mobil',
        id_merk     = '$id_merk',
        no_plat     = '$no_plat',
        harga_sewa  = '$harga_sewa',
        transmisi   = '$transmisi',
        penumpang   = '$penumpang',
        foto_mobil  = '$foto_mobil',
        status      = '$status',
        deskripsi   = '$deskripsi'
        WHERE id    = '$id'";

   if (mysqli_query($connect, $sql)) {
      echo
      "<script>
         Swal.fire({
         icon: 'success',
         title: 'Berhasil!',
         text: 'Data berhasil diperbarui.',
         confirmButtonText: 'OK'
         }).then(() => {
         window.location='dashboard.php?page=data-mobil';
         });
         </script>";
   } else {
      echo
      "<script>
         Swal.fire({
         icon: 'error',
         title: 'Gagal!',
         text: 'Data gagal diperbarui.',
         confirmButtonText: 'OK'
         });
         </script>";
   }
}
