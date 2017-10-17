<?php
include "database.php";
Class M_user extends database
{
	function Doc_user()
	{
		$sql="select * from user";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_Table()
	{
		$sql="SHOW TABLES FROM db_sieu_thi_mini";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_user_theo_tenDn_pass($ten,$mk)
	{
		$sql="select * from user where username=? and password=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ten,$mk));	
	}	
}
?>