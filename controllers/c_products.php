<?php
class C_products
{
	public function Hien_thi_tat_ca_san_pham()
	{
		//Model
		include("models/m_products.php");
		$m_products= new M_products();
		$dsproducts=$m_products->Hien_thi_tat_ca_san_pham();
		//View
		include("controllers/Smarty_sieu_thi.php");
		$smarty=new Smarty_sieu_thi();	
		$view="views/products/v_products.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("dsproducts",$dsproducts);
		$smarty->display("products/layout.tpl");	
	}
}
?>