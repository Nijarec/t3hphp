<?php
@session_start();
include "controllers/c_gio_hang.php";
$c_gio_hang=new c_gio_hang();
$c_gio_hang->xoaGioHang();
?>

