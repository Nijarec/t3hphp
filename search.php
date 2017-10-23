<?php
ini_set("display_errors",1);
include "controllers/c_products.php";
$c_search=new C_products();
$c_search->Hien_thi_tim_kiem();
?>

