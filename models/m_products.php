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
}
?>