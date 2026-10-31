<?php
if (isset($_GET['page'])) { $page = $_GET['page']; switch ($page) {
    
                        // ROUTERS DATA MOBIL
case 'data-mobil'       :include "admin/mobil/index.php"; break;
case 'edit-mobil'       :include "admin/mobil/edit-mobil.php"; break;
case 'hapus-mobil'      :include "admin/mobil/hapus-mobil.php"; break;
case 'tambah-mobil'     :include "admin/mobil/tambah-mobil.php"; break;
case 'simpan-mobil'     :include "admin/mobil/simpan-mobil.php"; break;

                        // ROUTERS DATA MOTOR
case 'data-motor'       :include "admin/motor/index.php"; break;
case 'edit-motor'       :include "admin/motor/edit-motor.php"; break;
case 'hapus-motor'      :include "admin/motor/hapus-motor.php"; break;
case 'tambah-motor'     :include "admin/motor/tambah-motor.php"; break;
case 'simpan-motor'     :include "admin/motor/simpan-motor.php"; break;

                        // ROUTERS DATA USER
case 'user'             :include "admin/user/index.php"; break;
case 'edit-user'        :include "admin/user/edit-user.php"; break;
case 'hapus-user'       :include "admin/user/hapus-user.php"; break;
case 'simpan-user'      :include "admin/user/simpan-user.php"; break;
case 'tambah-user'      :include "admin/user/tambah-user.php"; break;

                        // ROUTERS DATA DASHBOARD
case 'beranda'          :include "admin/beranda/index.php"; break;
default                 :include "admin/beranda/index.php"; break;
                        }} else { include "admin/beranda/index.php"; }
?>