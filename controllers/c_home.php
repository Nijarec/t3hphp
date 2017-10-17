<?php
class C_home
{
	public function Hien_thi()
	{
		//Model
		include("models/m_category.php");
		include("models/m_products.php");
		$m_category= new M_category();
		$m_sanpham= new M_products();
		$san_pham_slider=$m_sanpham->Hien_thi_san_pham_slider();
		$dsCategoryMain=$m_category->Hien_thi_main_Category();
		$dsCategory=$m_category->Hien_thi_Category();
		
		/*echo "<pre>";
		print_r($dsCategory);
		echo"</pre>";*/
		
		$khuyen_mai=$m_sanpham->Hien_thi_san_pham_theo_promotionprice();
		
		//View
		include("controllers/Smarty_sieu_thi.php");
		$smarty=new Smarty_sieu_thi();
		$smarty->assign("dsCategoryMain",$dsCategoryMain);
		$smarty->assign("dsCategory",$dsCategory);
		$smarty->display("layout.tpl");	
	}
}
?>