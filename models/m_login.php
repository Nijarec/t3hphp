<?php
include_once("database.php");
// `ma_lien_he`, `ho_ten`, `email`, `noi_dung`,`ngay_lien_he`, `trang_thai`
class M_login extends database
{
	public function Kiem_tra_dang_nhap($Username,$Password)
	{
		$sql="SELECT * FROM user WHERE username =? and password=?";
		$this->setQuery($sql);
		$param=array($Username,$Password);
		return $this->execute($param);	
	}
	
	public function Them_user($username,$password,$email,$phone_number)
	{
		$sql="INSERT INTO users VALUES(?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array(NULL,$username,$password,$email,$phone_number);
		return $this->execute($param);	
	}
	

}

?>