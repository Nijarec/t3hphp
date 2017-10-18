<?php
ini_set("display_errors",1);
error_reporting(-1);
include_once("controllers/c_products.php");
$c_products=new C_products();
$c_products->Hien_thi_chi_tiet_san_pham();
?>