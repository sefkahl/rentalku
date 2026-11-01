<?php
if (isset($_POST['simpan_data'])) {
    $username  = $_POST['username'];
    $role      = $_POST['role'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $copasword = $_POST['copasword'];

    if ($password != $copasword) {
        echo "
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Password Tidak Cocok!',
                text: 'Konfirmasi password harus sama.'
            }).then(() => {
                history.back();
            });
        </script>";
        exit;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO tbl_user (username, role, email, password)
            VALUES ('$username', '$role', '$email', '$password')";

    if (mysqli_query($connect, $sql)) {
        echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data user berhasil disimpan.',
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
                text: 'Data user gagal disimpan.'
            });
        </script>";
    }
}
