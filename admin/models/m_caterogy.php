<?php
include_once("database.php");
class M_Caterogy extends database
{	
		//Hàm hiển thị 8 danh mục sản phẩm chính
	public function Hien_thi_main_Category()
	{
		$sql="SELECT CategoryName FROM category WHERE CategoryParentID is NULL ORDER BY Priority ASC ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	//Hàm hiển thị danh mục sản phẩm theo Ca 
	public function Hien_thi_Category_theo_CategoryParentID($CaterogyID)
	{
		$sql="SELECT CategoryName FROM category WHERE CategoryParentID=? ";
		$this->setQuery($sql);
		return $this->loadAllRows(array($CaterogyID));
	}
	
	public function Them_Caterogy($CategoryParentID ,  $CategoryName ,  $Description ,  $Priority ,  $Quotation ,  $Link , $SEO)
	{
		$sql="INSERT INTO category( CategoryID ,  CategoryParentID ,  CategoryName ,  Description ,  Priority ,  Quotation ,  Link ,  SEO ) VALUES (?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array("NULL",  $CategoryParentID ,  $CategoryName ,  $Description ,  $Priority ,  $Quotation ,  $Link , $SEO);
		$kq=$this->execute($param);
		return $kq;
	}
	
	public function Xoa_Caterogy($CategoryID,$CategoryName)
	{
		$sql="DELETE FROM category WHERE CaterogyID = ? or CategoryName = ?";
		$this->setQuery($sql);
		$param=array($CategoryID,$CategoryName);
		$kq=$this->execute($param);
	}
	
	public function Sua_Caterogy($CategoryID,$CategoryParentID ,  $CategoryName ,  $Description ,  $Priority ,  $Quotation ,  $Link , $SEO)
	{
		$sql="UPDATE  category  SET CategoryParentID =?, CategoryName =?, Description =?, Priority =?, Quotation =?, Link =?, SEO =? WHERE CategoryID=$CategoryID";
		$this->setQuery($sql);
		$param=array("$CategoryParentID ,  $CategoryName ,  $Description ,  $Priority ,  $Quotation ,  $Link , $SEO");
		$kq=$this->execute($param);
		return $kq;
	}
	
}
?>