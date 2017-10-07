<?php
include_once("database.php");
class M_products extends database
{
	//Hàm hiển thị sản phẩm theo CategoryID
	public function Hien_thi_san_pham_theo_CategoryID($CategoryID)
	{
		// câu lệnh sql lấy sản phẩm theo CategoryID có CategoryParentID = $CategoryID chính
		$sql="SELECT * FROM products p WHERE p.CategoryID IN (
SELECT c.CategoryID FROM category c WHERE c.CategoryParentID=$CategoryID)";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	//Hàm hiển thị sản phẩm theo product ID, Chi tiết sản phẩm
	public function Hien_thi_san_pham_theo_ProductID($ProductID)
	{
		$sql="SELECT * FROM products WHERE ProductID=$ProductID";
		$this->setQuery($sql);
		return $this->loadRow();
	}
	
	public function Hien_thi_san_pham_theo_SupplierID($SupplierID)
	{
		$sql="SELECT * FROM products WHERE SupplierID=$SupplierID";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Them_san_pham( $CategoryID, $SupplierID, $ProductName, $ProductType, $Unit, $SubUnit, $UnitQuantity, $Description, $Image, $Price, $Discount, $LastUpdate, $Priority)
	{
		$sql="INSERT INTO  products (ProductID, CategoryID, SupplierID, ProductName, ProductType, Unit, SubUnit, UnitQuantity, Description, Image, Price, Discount, LastUpdate, Priority) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array($CategoryID, $SupplierID, $ProductName, $ProductType, $Unit, $SubUnit, $UnitQuantity, $Description, $Image, $Price, $Discount, $LastUpdate, $Priority);
		$kq=$this->execute($param);
		return $kq;
	}
	
	public function Xoa_san_pham($ProductID,$ProductName)
	{
		$sql="DELETE FROM products WHERE ProductID=?or ProductName=?";
		$this->setQuery($sql);
		$param=array($ProductID,$ProductName);
		$kq=$this->execute($param);
		return $kq;
	}
	
	public function Sua_san_pham()
	{
	}
}
?>