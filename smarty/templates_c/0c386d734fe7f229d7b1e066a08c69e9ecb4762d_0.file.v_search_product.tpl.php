<?php
/* Smarty version 3.1.30, created on 2017-10-23 15:04:09
  from "C:\wamp64\www\do_an_cuoi_ki\views\products\v_search_product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ee04e9bced06_59697876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c386d734fe7f229d7b1e066a08c69e9ecb4762d' => 
    array (
      0 => 'C:\\wamp64\\www\\do_an_cuoi_ki\\views\\products\\v_search_product.tpl',
      1 => 1508771045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ee04e9bced06_59697876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131559ee04e9bbee08_32669183', "banner_righr");
?>


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
<?php echo '<script'; ?>
>
  
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
<?php echo '</script'; ?>
>
				
				<?php }
/* {block "banner_righr"} */
class Block_131559ee04e9bbee08_32669183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "banner_righr"} */
}
