<?php
if (isset($_GET['page'])) { $page = $_GET['page']; switch ($page) {
    
                        // ROUTERS DATA DISKON
case 'diskon'           :include "admin/diskon/index.php"; break;
case 'edit-diskon'      :include "admin/diskon/edit-diskon.php"; break;
case 'hapus-diskon'     :include "admin/diskon/hapus-diskon.php"; break;
case 'tambah-diskon'    :include "admin/diskon/tambah-diskon.php"; break;
case 'simpan-diskon'    :include "admin/diskon/simpan-diskon.php"; break;
    
                        // ROUTERS DATA PELANGGAN
case 'pelanggan'        :include "admin/pelanggan/index.php"; break;
case 'edit-pelanggan'   :include "admin/pelanggan/edit-pelanggan.php"; break;
case 'hapus-pelanggan'  :include "admin/pelanggan/hapus-pelanggan.php"; break;
case 'tambah-pelanggan' :include "admin/pelanggan/tambah-pelanggan.php"; break;
case 'simpan-pelanggan' :include "admin/pelanggan/simpan-pelanggan.php"; break;
                
                        // ROUTERS MERK MOBIL
case 'merk-mobil'       :include "admin/merk-mobil/index.php"; break;
case 'edit-merk'        :include "admin/merk-mobil/edit-merk.php"; break;
case 'hapus-merk'       :include "admin/merk-mobil/hapus-merk.php"; break;
case 'tambah-merk'      :include "admin/merk-mobil/tambah-merk.php"; break;
case 'simpan-merk'      :include "admin/merk-mobil/simpan-merk.php"; break;

                        // ROUTERS DATA MOBIL
case 'data-mobil'       :include "admin/data-mobil/index.php"; break;
case 'edit-mobil'       :include "admin/data-mobil/edit-mobil.php"; break;
case 'hapus-mobil'      :include "admin/data-mobil/hapus-mobil.php"; break;
case 'tambah-mobil'     :include "admin/data-mobil/tambah-mobil.php"; break;
case 'simpan-mobil'     :include "admin/data-mobil/simpan-mobil.php"; break;

                        // ROUTERS DATA MOTOR
case 'data-motor'       :include "admin/data-motor/index.php"; break;
case 'edit-motor'       :include "admin/data-motor/edit-motor.php"; break;
case 'hapus-motor'      :include "admin/data-motor/hapus-motor.php"; break;
case 'tambah-motor'     :include "admin/data-motor/tambah-motor.php"; break;
case 'simpan-motor'     :include "admin/data-motor/simpan-motor.php"; break;

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