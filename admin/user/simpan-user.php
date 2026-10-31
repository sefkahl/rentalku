<?php
if (isset($_POST['simpan_data'])) {
    $username       = $_POST['username'];
    $email          = $_POST['email'];
    $role           = $_POST['role'];
    $password       = $_POST['password'];
    $copasword      = $_POST['copasword'];
   if ($password != $copasword) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Konfirmasi password salah!',
                confirmButtonText: 'OK'
            }).then(() => {
                window.history.back();
            });
        </script>";
        exit;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO tbl_user (
                username,
                email,
                role,
                password
            ) VALUES (
                '$username',
                '$email',
                '$role',
                '$password'
            )";

    if (mysqli_query($connect, $sql)) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data berhasil disimpan.',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location='dashboard.php?page=user';
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Data gagal disimpan.',
                confirmButtonText: 'OK'
            });
        </script>";
    }
}
