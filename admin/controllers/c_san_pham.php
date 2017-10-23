<?php
session_start();
include "Smarty_quan_tri.php";
include "models/m_products.php";
include "models/m_category.php";
include "models/m_supplier.php";
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
		
		$m_category=new M_Caterogy();
		$category=$m_category->Lay_name_Category();
		
		$m_supplier=new M_Supllier();
		$sup=$m_supplier->Lay_name_Supplier();
		
		$m_san_pham=new M_products();
		$san_pham=$m_san_pham->Lay_Unit();
		$san_pham1=$m_san_pham->Lay_SubUnit();
		$hople=true;
		$err="";
			// Models
			//ProductID, CategoryID, SupplierID, ProductName, ProductType, Unit, SubUnit, UnitQuantity, Description, Image, Price, Discount, LastUpdate, Priority
		if(isset($_POST["btnCapnhat"]))
		{
			if($_POST["ProductName"]=="")
			{
				$err="Không được trống!!";
				$hople=false;
			}elseif($_POST["ProductType"]=="")
			{
				$err="Không được trống";
				$hople=false;
			}
			elseif($_POST["UnitQuantity"]=="")
			{
				$err="Không được trống!!";
				$hople=false;
			}elseif($_POST["Description"]=="")
			{
				$err="Không được trống!!";
				$hople=false;
			}elseif($_POST["Price"]=="")
			{
				$err="Không được trống!!";
				$hople=false;
			}elseif($_POST["Discount"]=="")
			{
				$err="Không được trống!!";
				$hople=false;
			}
			if($hople)
			{
				if(isset($_POST["btnCapnhat"]))
				{
					$ProductID=NULL; 
					$CategoryID=$_POST["CategoryID"];
					$SupplierID=$_POST["SupplierID"];
					$ProductName=$_POST["ProductName"];
					$ProductType=$_POST["ProductType"];
					 
					$Unit=$_POST["Unit"];
					$SubUnit=$_POST["SubUnit"];
					$UnitQuantity=$_POST["UnitQuantity"];
					$Description=$_POST["Description"];
					$Image=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:"";
					$Price=$_POST["Price"];
					$Discount=$_POST["Discount"];
					
					$LastUpdate=date("Y-m-d H:i:s");
					$Priority=NULL;
					
					
					
					$m_san_pham=new M_products();
					$kq=$m_san_pham->Them_san_pham($ProductID, $CategoryID, $SupplierID, $ProductName,$ProductType, $Unit, $SubUnit, $UnitQuantity, $Description, $Image, $Price, $Discount, $LastUpdate, $Priority);
					if($kq)
					{
						if($Image!="")
						{
							move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/images/$Image");
							echo "<script> alert ('Thêm thành công')</script>";
						}
						header("Location:san_pham.php");	
					}
					
				}
			}
		}
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Siêu thị mimi");
			$smarty->assign("tieude","Thêm Sản phẩm");
			$smarty->assign("category",$category);
			$smarty->assign("san_pham",$san_pham);
			$smarty->assign("san_pham1",$san_pham1);
			$smarty->assign("sup",$sup);
			$smarty->assign("err",$err);
			$smarty->assign("view","views/san_pham/v_them_san_pham.tpl");
			$smarty->display("layout.tpl");	
			
	}
	function Sua_tin_tuc()
	{
			// Models
			if(isset($_GET["ProductID"]))
			{
				$ma_san_pham=$_GET["ProductID"];
				$m_san_pham=new M_san_pham();
				$tin_tuc=$m_tin_tuc->Doc_tin_tuc_theo_ma_tin($ma_tin_tuc);
				// Cập nhật tin tức
				if(isset($_POST["btnCapnhat"]))
				{
					$tieu_de=$_POST["tieu_de"];
					$tom_tat=$_POST["tom_tat"];
					$chi_tiet=$_POST["chi_tiet"];
					$hinh=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:$tin_tuc->hinh; 
					$tac_gia=$_POST["tac_gia"];
					$ngay_dang=$_POST["ngay_dang"];
					$ngay_gui=$_POST["ngay_gui"];
					$so_luot_xem=$_POST["so_luot_xem"];
					
					$kq=$m_tin_tuc->Sua_tin_tuc($tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem,$ma_tin_tuc);
					if($kq)
					{
						if($_FILES["f_hinh"]["error"]==0)
						{
							move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/images/tin_tuc/$hinh");
						}
						header("Location:tintuc.php");	
					}
					
				}
				// End Cập nhật tin tức
				
			
			
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Nhà Hàng");
			$smarty->assign("tieude","Sửa tin tức");
			$smarty->assign("tin_tuc",$tin_tuc);
			$smarty->assign("view","views/tintuc/v_Suatintuc.tpl");
			$smarty->display("layout.tpl");	
			}
		}
		
function Sua_san_pham()
	{
		if(isset($_GET["ProductID"]))
		{
		$id_product=$_GET["ProductID"];
		// lay name category	
		$m_category=new M_Caterogy();
		$category=$m_category->Lay_name_Category();
		//lay name supplier
		$m_supplier=new M_Supllier();
		$sup=$m_supplier->Lay_name_Supplier();
		// lay unit, subunit cho select form, lay san pham theo id
		$m_san_pham=new M_products();
		$san_pham=$m_san_pham->Lay_Unit();
		$san_pham1=$m_san_pham->Lay_SubUnit();		
		$san_pham_doc_theo_id=$m_san_pham->Hien_thi_san_pham_theo_ProductID($id_product);
		/*echo "<pre>";
		print_r($san_pham_doc_theo_id);
		echo "</pre>"*/;
		
			// Models
			//ProductID, CategoryID, SupplierID, ProductName, ProductType, Unit, SubUnit, UnitQuantity, Description, Image, Price, Discount, LastUpdate, Priority, id_product
			if(isset($_POST["btnCapnhat"]))
			{
				$ProductID=NULL; 
				$CategoryID=$_POST["CategoryID"];
				$SupplierID=$_POST["SupplierID"];
				$ProductName=$_POST["ProductName"];
				$ProductType=$_POST["ProductType"];				 
				$Unit=$_POST["Unit"];
				$SubUnit=$_POST["SubUnit"];
				$UnitQuantity=$_POST["UnitQuantity"];
				$Description=$_POST["Description"];
				$Image=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:"";
				$Price=$_POST["Price"];
				$Discount=$_POST["Discount"];
				
				$LastUpdate=date("Y-m-d H:i:s");
				$Priority=NULL;
				
				
				
				$m_san_pham=new M_products();
				$kq=$m_san_pham->Sua_san_pham($ProductID, $CategoryID, $SupplierID, $ProductName,$ProductType, $Unit, $SubUnit, $UnitQuantity, $Description, $Image, $Price, $Discount, $LastUpdate, $Priority,$id_product);
				if($kq)
				{
					if($Image!="")
					{
						move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/images/$Image");
						echo "<script> alert ('Sua thành công')</script>";
					}
					header("Location:san_pham.php");	
				}
				
			}
			
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Siêu thị mimi");
			$smarty->assign("tieude","Sửa Sản phẩm");
			$smarty->assign("san_pham_doc_theo_id",$san_pham_doc_theo_id);
			$smarty->assign("category",$category);//Category
			$smarty->assign("san_pham",$san_pham);//Unit
			$smarty->assign("san_pham1",$san_pham1);//SubUnit
			$smarty->assign("sup",$sup);//supplier
			
			$smarty->assign("view","views/san_pham/v_sua_san_pham.tpl");
			$smarty->display("layout.tpl");	
		}
	}
	function Xoa_san_pham()
	{
		// Models
		if(isset($_GET["ProductID"]))
		{
			$id_product=$_GET["ProductID"];
			$m_san_pham=new M_products();
			
			$kq=$m_san_pham->Xoa_san_pham($id_product);
			if($kq)
			{
				header("Location:san_pham.php");	
			}
			
		}
		
			
	}
}

	
	
?>