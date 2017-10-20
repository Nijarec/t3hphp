<?php
include_once("database.php");
class M_Supllier extends database
{
	//Hàm hiển thị nhà cung cấp
	public function Hien_thi_nha_cung_cap()
	{
		// câu lệnh sql lấy nhà cung cấp theo SupplierID
		$sql="SELECT SupplierID, SupplierName FROM supplier)";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	//Hiển thị SupplierName
	public function Lay_name_Supplier()
	{
		$sql="select distinct SupplierID, SupplierName from supplier";
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