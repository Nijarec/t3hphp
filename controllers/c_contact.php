<?php
include("thu_vien/thu_vien.php");
include("models/m_contact.php");
class C_contact
{
	public function Hien_thi_lien_he()
	{	
		// Model
		// `ma_lien_he`, `ho_ten`, `email`, `noi_dung`,`ngay_lien_he`, `trang_thai`
		if(isset($_POST["btnGui"]))
		{
			$ho_ten=$_POST["ho_ten"];
			$email=$_POST["email"];
			$sdt=$_POST["sdt"];
			$noi_dung=$_POST["noi_dung"];
			$m_lien_he=new M_lien_he();
			$kq=$m_lien_he->Them_lien_he($ho_ten,$email,$sdt,$noi_dung);
			if($kq)
			{
				//Gửi mail
				$tieu_de="Liên hệ";
				$noi_dung_mail = "<b>Từ: </b>$ho_ten<p/><b>Email:</b> $email<p/>$noi_dung";
				$kq = thu_vien::Gui_mail_lien_he($tieu_de, $noi_dung_mail);
				if($kq) {
					echo "<script type=\"text/javascript\">alert('Gửi liên hệ thành công!')</script>";
				}
				else {
					echo "<script type=\"text/javascript\">alert('Lỗi gửi liên hệ!')</script>";
				}
			}
		}
		// view
		include("controllers/Smarty_sieu_thi.php");
		$smarty=new Smarty_sieu_thi();
		//$smarty->assign("title","Liên hệ | Thu Trân");
		//$view="views/contact/v_contact.tpl";
		//$smarty->assign("view",$view);
		$smarty->display("contact/layout.tpl");
	}	
}
?>