<?php
include_once("database.php");
// `ma_lien_he`, `ho_ten`, `email`, `noi_dung`,`ngay_lien_he`, `trang_thai`
class M_login extends database
{
	function Kiem_tra_dang_nhap($username,$password)
	{
		$sql="select * from users where username=? and password=?";
		$this->setQuery($sql);
		return $this->loadRow(array($username,$password));	
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