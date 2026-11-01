<?php
if (isset($_POST['simpan_data'])) {
  $nama_merk = $_POST['nama_merk'];
  $status    = $_POST['status'];
  $cek       = mysqli_query($connect, "SELECT * FROM tbl_merk WHERE nama_merk = '$nama_merk'");
  if (mysqli_num_rows($cek) > 0) { echo 
    "<script>
        Swal.fire({
        icon: 'warning',
        title: 'WARNING!',
        text: 'Merk mobil sudah terdaftar!',
        confirmButtonText: 'OK'
        }).then(() => {
        window.location.replace('dashboard.php?page=tambah-merk');
        });
        </script>";
        exit;
  } else {
    $sql = "INSERT INTO tbl_merk (nama_merk,status) VALUES ('$nama_merk','$status')";
    if (mysqli_query($connect, $sql)) { echo 
    "<script>
        Swal.fire({
        icon: 'success',
        title: 'SUCCESS!',
        text: 'Data saved successfully..',
        confirmButtonText: 'OK'
        }).then(() => {
        window.location.replace('dashboard.php?page=merk-mobil');
        });
        </script>";
        exit;
    } else { echo 
    "<script>
        Swal.fire({
        icon: 'error',
        title: 'FAIL!',
        text: 'Data failed to save..',
        confirmButtonText: 'OK'
        });
        </script>";
        exit;
        } } }
  
if (isset($_POST['edit_data'])) {
  $id            = $_POST['id'];
  $nama_merk     = $_POST['nama_merk'];
  $status        = $_POST['status'];
  $sql           = "UPDATE tbl_satuan SET
  nama_merk      = '$nama_merk',
  status         = '$status'
  WHERE id       = '$id'";

  if (mysqli_query($koneksi, $sql)) { echo
    "<script>
         Swal.fire({
         icon: 'success',
         title: 'SUCCESS!',
         text: 'Data successfully updated..',
         confirmButtonText: 'OK'
         }).then(() => {   
         window.location='dashboard.php?page=merk-mobil'; });
         </script>";
         exit;
  } else { echo
    "<script>
         Swal.fire({
         icon: 'error',
         title: 'Gagal!',
         text: 'Data gagal diubah.',
         confirmButtonText: 'OK' });
         </script>";
        } } exit; 
?>