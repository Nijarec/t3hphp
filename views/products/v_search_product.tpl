{block name="banner_right"}{/block}

<!--<div class="w3l_search" align="center">
       
			<form action="#" method="post">
				<input type="text" name="Product" value="Tìm kiếm sản phẩm" onfocus="this.value ='';" onblur="if (this.value == '') {
				this.value = 'Tìm kiếm sản phẩm';}" required="">
				<input type="submit" value=" " name="Tim_san_pham" onclick="window.location='search.php'"  onkeyup="XL_Tim_san_pham(this.value)">
           
			</form>
		</div>
<div id="hienthi"></div>-->
<div class="container" >
        <table align="center" width="600px" border="0" cellpadding="15px" bgcolor="#FEF3CB">
        <tr>
            <td align="center">
                <label >Nhập sản phẩm: </label>
                <!--<input type="text" name="keyword" value="" onkeyup="XL_Tim_mon_an(this.value)" style="width:300px;height:20px; text-align:left" autofocus="autofocus" />-->
            <form onsubmit="$('#keyword').blur();return false;" class="pure-form">
            <input id="keyword" autofocus type="text" name="q" placeholder="Tìm Tên sản phẩm ..." style="width:100%;max-width:400px;outline:0;text-align:left" onkeyup="XL_Tim_san_pham(this.value)"  >
            </form>
                                     
            </td>
        </tr>
        </table>
        <div id="hienthi"></div>
    </div>
</div>
<script>
  
		function XL_Tim_san_pham(gtTim)
{
	/*if(gtTim=="")
	{
		document.getElementById("hienthi").innerHTML=""
		return false;	
	}*/
	
	// Ajax
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","XL_tim_san_pham.php",false);
	
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
}
</script>
				
				