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
	function Doc_user_theo_Email_pass($email,$mk)
	{
		$sql="select * from auth_access where Email=? and Password=?";
		$this->setQuery($sql);
		return $this->loadRow(array($email,md5($mk)));	
	}	
}
?>