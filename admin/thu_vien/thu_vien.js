// JavaScript Document
function Xoa_loai_mon_an(ma_loai)
{
	if(confirm('Bạn xóa loại món ăn?'))
	{
		window.location='xoaloaimonan.php?ma_loai=' + ma_loai;	
	}	
}

function Kiem_tra_Du_lieu_Rong()
{
	
	var Hop_le=true
	var ctr=document.getElementsByClassName("kiem_tra_rong")
	for(var i=0;i<ctr.length;i++)
	{
		if(ctr.item(i).value=="")
		{
			var thong_bao=ctr.item(i).getAttribute("data-err");
			alert(thong_bao);
			ctr.item(i).focus();
			Hop_le=false;
			break;	
		}	
	}
	return Hop_le;	
}