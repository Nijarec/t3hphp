<?php
class C_home
{
	public function Hien_thi()
	{
		//Model
		include("models/m_home.php");
		$m_home= new M_home();
		$san_pham_slider=$m_home->Hien_thi_san_pham_slider();
		$category=$m_home->Hien_thi_main_Category();
		$khuyen_mai=$m_home->Hien_thi_san_pham_theo_promotionprice();
		
		//View
		include("controllers/Smarty_sieu_thi.php");
		$smarty=new Smarty_sieu_thi();
		$smarty->display("layout.tpl");	
	}
}
?>