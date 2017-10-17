<?php
session_start();
include "Smarty_quan_tri.php";
include "models/m_products.php";
class C_san_pham
{
	function Hien_thi_danh_sach_san_pham()
	{
		//Model
		$m_san_pham=new M_products();
		$san_pham=$m_san_pham->Hien_thi_san_pham();
		/*echo "<h3 style='text-align:center'>";
		echo "<pre>";
		print_r($san_pham);
		echo "</pre>";
		echo "</h3>";*/
		
		//View
		$smarty=new Smarty_quan_tri();
		$smarty->assign("title","Quản lý Siêu thị mini");
		$smarty->assign("tieude","Danh sách sản phẩm");
		$smarty->assign("san_pham",$san_pham);
		$smarty->assign("view","views/san_pham/v_san_pham.tpl");
		$smarty->display("layout.tpl");	
		
	}
	
	function Them_san_pham()
	{
			// Models
			//ProductID, CategoryID, SupplierID, ProductName, ProductType, Unit, SubUnit, UnitQuantity, Description, Image, Price, Discount, LastUpdate, Priority
			if(isset($_POST["btnCapnhat"]))
			{
				$ProductID=NULL; 
				$CategoryID=$_POST["tieu_de"];
				$SupplierID=$_POST["tom_tat"];
				$ProductName=$_POST["chi_tiet"];
				$hinh=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:""; 
				$tac_gia=$_POST["tac_gia"];
				$ngay_dang=$_POST["ngay_dang"];
				$ngay_gui=$_POST["ngay_gui"];
				$so_luot_xem=$_POST["so_luot_xem"];
				$m_san_pham=new M_san_pham();
				$kq=$m_san_pham->Them_san_pham($ma_san_pham, $tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem);
				if($kq)
				{
					if($hinh!="")
					{
						move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/images/ san_pham/$hinh");
					}
					header("Location:tintuc.php");	
				}
				
			}
			
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Nhà Hàng");
			$smarty->assign("tieude","Thêm tin tức");
			$smarty->assign("view","views/tintuc/v_Themtintuc.tpl");
			$smarty->display("layout.tpl");	
	
	}
}
?>