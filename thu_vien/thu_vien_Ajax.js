function XL_Tim_san_pham(gtTim)
{
	/*if(gtTim=="")
	{
		document.getElementById("hienthi").innerHTML=""
		return false;	
	}*/
	
	// Ajax
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","XL_tim_san_pham.php",true);
	
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			//var gtTrave=xmlhttp.responseText
			//console.log(gtTrave)
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText
			
		}		
	}
	var data=new FormData()
	data.append("gtTim",gtTim)
	xmlhttp.send(data)
	return false;
}// JavaScript Document
function XL_Mon_an_theo_mua()
{
	var mua="";
	var r=document.getElementsByName("mua");
	for(i=0;i<r.length;i++)
	{
		if(r.item(i).checked)
		{
			mua=r.item(i).value;
			break;	
		}	
	}
	
	if(mua=="")
	{
		alert("Xin vui lòng chọn mùa");
		return false;	
	}
	// ajax
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // Hoàn thành và tìm thấy trang
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	
	/* sử dụng POST */
	xmlhttp.open("POST","XL_Mon_an_theo_mua.php",true);
	var data = new FormData();
	data.append('mua',mua);
	xmlhttp.send(data);
	
}




function XL_Tin_tuc(ma_tin_tuc)
{
	// Ajax
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","XL_Tin_tuc.php",true);
	
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			//var gtTrave=xmlhttp.responseText
			//console.log(gtTrave)
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText
			
		}		
	}
	var data=new FormData()
	data.append("ma_tin_tuc",ma_tin_tuc)
	xmlhttp.send(data)
	return false;
}