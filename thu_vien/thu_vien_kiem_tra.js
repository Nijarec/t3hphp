// JavaScript Document
function Kiem_tra_Lien_he()
{
	var ho_ten=document.getElementById("ho_ten");
	if(ho_ten.value=="")
	{
		alert('Nhập họ tên của bạn');
		ho_ten.focus();
		return false;	
	}
	
	return true	
}