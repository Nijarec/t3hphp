<?php
include("thu_vien/thu_vien.php");
include("models/m_login.php");
class C_login
{
	public function Hien_thi_login()
	{	
		// Model
		// `ma_lien_he`, `ho_ten`, `email`, `noi_dung`,`ngay_lien_he`, `trang_thai`
		if(isset($_POST["btnLogin"]))
		{
			$Username=$_POST["Username"];
			$Password=$_POST["Password"];
			$m_login=new M_login();
			$kq=$m_login->Kiem_tra_dang_nhap($Username,$Password);
			if($kq)
			{
				//Gửi mail
			/*	$tieu_de="Liên hệ";
				$noi_dung_mail = "<b>Từ: </b>$ho_ten<p/><b>Email:</b> $email<p/>$noi_dung";
				$kq = thu_vien::Gui_mail_lien_he($tieu_de, $noi_dung_mail);*/
				if($kq) {
					echo "Dang nhap thanh cong";
				}
				else {
					echo "Dang nhap that bai";
				}
			}
		}
		// view
		include("controllers/Smarty_sieu_thi.php");
		$smarty=new Smarty_sieu_thi();
		//$smarty->assign("title","Liên hệ | Thu Trân");
		//$view="views/contact/v_contact.tpl";
		//$smarty->assign("view",$view);
		$smarty->display("login/layout.tpl");
	}	
}
?>