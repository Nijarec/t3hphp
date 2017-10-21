// JavaScript Document
function Xoa_san_pham(ProducID)
{
	if(confirm('Bạn xóa sản phẩm?'))
	{
		window.location='xoa_san_pham.php?ProductID=' + ProductID;	
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