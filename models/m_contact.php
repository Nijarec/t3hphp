<?php
include_once("database.php");
// `ma_lien_he`, `ho_ten`, `email`, `noi_dung`,`ngay_lien_he`, `trang_thai`
class M_lien_he extends database
{
	public function Them_lien_he($ho_ten,$sdt,$email,$noi_dung)
	{
		$sql="INSERT INTO lien_he VALUES(?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array(NULL,$ho_ten,$sdt,$email,$noi_dung,date('Y-m-d'),0);
		return $this->execute($param);	
	}
	public function Cap_nhat_trang_thai($ma_lien_he,$trang_thai)
	{
		$sql="UPDATE lien_he SET trang_thai=? WHERE ma_trang_thai=?";
		$this->setQuery($sql);
		$param=array($trang_thai,$ma_lien_he);
		return $this->execute($param);	
	}
}

?>