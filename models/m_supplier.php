<?php
include_once("database.php");
class M_products extends database
{
	//Hàm hiển thị nhà cung cấp
	public function Hien_thi_nha_cung_cap()
	{
		// câu lệnh sql lấy nhà cung cấp theo SupplierID
		$sql="SELECT * FROM supplier)";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	
	public function Them_nha_cung_cap()
	{
	}
	
	public function Xoa_nha_cung_cap()
	{
	}
	
	public function Sua_nha_cung_cap()
	{
	}
}
?>