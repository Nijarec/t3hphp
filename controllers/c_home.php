<?php
class C_home
{
	public function Hien_thi()
	{
		include("controllers/Smarty_sieu_thi.php");
		$smarty=new Smarty_sieu_thi();
		//$smarty->assign("title","Nhà hàng Thu Trân");
		$smarty->display("layout.tpl");	
	}
}
?>