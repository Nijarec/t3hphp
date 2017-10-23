<?php
		
class C_products
{
	public function Hien_thi_tim_kiem()
	{
		
		//Model
		include("models/m_category.php");
		include("models/m_products.php");
		$m_products= new M_products();
		$m_category= new M_category();
		//$dsproducts=$m_products->Hien_thi_san_pham_theo_CategoryID($catID);
		$dsCategoryMain=$m_category->Hien_thi_main_Category();
		$dsCategory=$m_category->Hien_thi_Category();
		//View
		include("controllers/Smarty_sieu_thi.php");
		$smarty=new Smarty_sieu_thi();	
		$view="views/products/v_search_product.tpl";
		$smarty->assign("view",$view);
		//$smarty->assign("dsproducts",$dsproducts);
		$smarty->assign("dsCategoryMain",$dsCategoryMain);
		$smarty->assign("dsCategory",$dsCategory);
			
		$smarty->display("products/layout.tpl");
		
	}
	public function Hien_thi_tat_ca_san_pham()
	{
		
			
		//Model
		$catID=$_GET["cat"];
		
		include("models/m_category.php");
		include("models/m_products.php");
		$m_products= new M_products();
		$m_category= new M_category();
		$dsproducts=$m_products->Hien_thi_san_pham_theo_CategoryID($catID);
		$dsCategoryMain=$m_category->Hien_thi_main_Category();
		$dsCategory=$m_category->Hien_thi_Category();

		//View
		include("controllers/Smarty_sieu_thi.php");
		$smarty=new Smarty_sieu_thi();	
		$view="views/products/v_products.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("dsproducts",$dsproducts);
		$smarty->assign("dsCategoryMain",$dsCategoryMain);
		$smarty->assign("dsCategory",$dsCategory);
		$smarty->display("products/layout.tpl");	
	}
		public function Hien_thi_chi_tiet_san_pham()
	{
		// Model
		include("models/m_category.php");
		include("models/m_products.php");
		$product='';
		$ProductID=$_GET["ProductID"];
		
		//include("models/m_products.php");
		$m_products=new M_products();
		$m_category= new M_category();
		$product=$m_products->Hien_thi_san_pham_theo_ProductID($ProductID);
		$dsCategoryMain=$m_category->Hien_thi_main_Category();
		$dsCategory=$m_category->Hien_thi_Category();
		
		// View
		include("controllers/Smarty_sieu_thi.php");
		$smarty=new Smarty_sieu_thi();
		$view="views/products/v_chi_tiet_products.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("product",$product);
		$smarty->assign("dsCategoryMain",$dsCategoryMain);
		$smarty->assign("dsCategory",$dsCategory);
		$smarty->display("products/layout.tpl");
	}
}
?>