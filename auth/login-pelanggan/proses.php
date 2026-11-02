<?php
session_start();

include "../../connect.php";

if (isset($_POST['proses_login'])) {
    $email    = mysqli_real_escape_string($connect, $_POST['email']);
    $password = $_POST['password'];
    $sql      = "SELECT * FROM tbl_user WHERE email = '$email' LIMIT 1";
    $query    = mysqli_query($connect, $sql);
    $data     = mysqli_fetch_assoc($query);

    if ($data && password_verify($password, $data['password'])) {
        session_regenerate_id(true);

        $_SESSION['login']    = true;
        $_SESSION['id_user']  = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['email']    = $data['email'];
        $_SESSION['role']     = $data['role'];

        header("Location: ../../dashboard.php");
        exit;

    } else {
        echo '
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
        window.onload = function() {
            Swal.fire({
                icon: "error",
                title: "Login Gagal!",
                text: "Email atau password salah.",
                confirmButtonText: "OK"
            }).then(function() {
                window.location.replace("login.php");
            });
        };
        </script>
        ';
        exit;
    }
}
?>