<?php
include_once("database.php");
class M_home extends database
{
	// Hàm hiển thị 4 sản phẩm thông dụng đưa vào slider trong banner
	public function Hien_thi_san_pham_slider()
	{
		//câu lệnh sql hiển thị sản phẩm thông dụng mới từ bảng product và newproduct
		$sql="SELECT * from products p INNER JOIN new_product n on p.ProductID=n.ProductID WHERE n.Priority=1";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	//Hàm hiển thị 8 danh mục sản phẩm chính
	public function Hien_thi_main_Category()
	{
		$sql="SELECT CategoryName FROM category WHERE CategoryParentID is NULL ORDER BY Priority ASC ";
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
	
}
?>