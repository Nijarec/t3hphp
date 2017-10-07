<?php
include_once("database.php");
class M_Caterogy extends database
{	
	//Hàm hiển thị danh mục sản phẩm 
	public function Hien_thi_Category()
	{
		$sql="SELECT CategoryName FROM category WHERE CategoryParentID is not NULL ORDER BY Priority ASC ";
		$this->setQuery($sql);
		return $this->loadAllRows();
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