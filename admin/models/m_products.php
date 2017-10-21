<?php
include_once("database.php");
class M_products extends database
{
		// Hàm hiển thị 4 sản phẩm thông dụng đưa vào slider trong banner
	public function Hien_thi_san_pham_slider()
	{
		//câu lệnh sql hiển thị sản phẩm thông dụng mới từ bảng product và new product
		$sql="SELECT * from products p INNER JOIN new_product n on p.ProductID=n.ProductID WHERE n.Priority=1";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
		//Hàm hiển thị sản phẩm khuyến mãi (theo promotion price) sort từ thấp lên cao
	public function Hien_thi_san_pham_theo_promotionprice()
	{
		$sql="SELECT * FROM promotion_price pp INNER JOIN products p on p.ProductID=pp.ProductID  
				ORDER BY pp.Priority  ASC";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	
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
	
	public function Hien_thi_san_pham()
	{
		$sql="Select * FROM products";
		$this->setQuery($sql);
		return $this->loadAllRows();
	
	}
	
	public function Them_san_pham( $ProductID,$CategoryID, $SupplierID, $ProductName, $ProductType, $Unit, $SubUnit, $UnitQuantity, $Description, $Image, $Price, $Discount, $LastUpdate, $Priority)
	{
		$sql="INSERT INTO  products (ProductID, CategoryID, SupplierID, ProductName, ProductType, Unit, SubUnit, UnitQuantity, Description, Image, Price, Discount, LastUpdate, Priority) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array($ProductID,$CategoryID, $SupplierID, $ProductName, $ProductType, $Unit, $SubUnit, $UnitQuantity, $Description, $Image, $Price, $Discount, $LastUpdate, $Priority);
		//echo"<pre>";
		
		return $this->execute($param);
		
	}
	
	public function Xoa_san_pham($ProductID)
	{
		$sql="DELETE FROM products WHERE ProductID=?";
		$this->setQuery($sql);
		$param=array($ProductID);
		return $this->execute($param);
	}
	
	public function Sua_san_pham($ProductID,$CategoryID, $SupplierID, $ProductName, $ProductType, $Unit, $SubUnit, $UnitQuantity, $Description, $Image, $Price, $Discount, $LastUpdate, $Priority,$id_product)
	{
		$sql="UPDATE products SET CategoryID=?,SupplierID=?,ProductName=?,ProductType=?,Unit=?,SubUnit=?,UnitQuantity=?,Description=?,Image=?,Price=?,Discount=?,LastUpdate=?,Priority=? WHERE ProductID=?";
		$this->setQuery($sql);
		return $this->execute(array($CategoryID, $SupplierID, $ProductName, $ProductType, $Unit, $SubUnit, $UnitQuantity, $Description, $Image, $Price, $Discount, $LastUpdate, $Priority,$id_product));
	}
	
	public function Lay_Unit()
	{
		$sql="select distinct Unit from products";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Lay_SubUnit()
	{
		$sql="select distinct SubUnit from products";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>