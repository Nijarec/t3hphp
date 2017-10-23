<?php
$gtTim=$_POST["gtTim"];
if($gtTim=="")
{
	die();	
}
include("models/m_products.php");
$m_san_pham=new M_products();
$san_phams=$m_san_pham->Tim_kiem_san_pham($gtTim);
?>
<table width="940px" border="0">
  <tr class="tieude">
    <td>Tên sản phẩm</td>
    <td width="500px">Loại sản phẩm</td>
    <td>Mô tả</td>
    <td>Đơn giá</td>
  </tr>
  <?php
 
  foreach($san_phams as $sp)
  {
  ?>
  <tr class="dong">
    <td><a href="chi_tiet_products.php?ProductID=<?php echo $sp->ProductID?>"><?php echo  $sp->ProductName ?></a></td>
    <td><?php echo  $sp->ProductType ?></td>
    <td>
    <img src="public/images/<?php echo  $sp->Description ?>" class="HinhTim"  /></td>
    <td><?php echo  number_format($sp->Price,0,",",".") ?> đ</td>
  </tr>
  <?php
  }
  ?>
  
</table>