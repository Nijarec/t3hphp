<?php
class C_san_pham
{
	public function Hien_thi_san_pham_theo_Cat()
	{
		//$Cat=$_GET["Cat"];
		//Model
		include("models/m_products.php");
		$m_sanpham= new M_products();
		$dsSanpham=$m_sanpham->Hien_thi_san_pham_theo_CategoryID(1);
		
		//View
		include("controllers/Smarty_sieu_thi.php");
		$smarty=new Smarty_sieu_thi();
		
		$view="view/san_pham/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("dsSanpham",$dsSanpham);
		$smarty->display("san_pham/layout.tpl");	
	}
}
?>