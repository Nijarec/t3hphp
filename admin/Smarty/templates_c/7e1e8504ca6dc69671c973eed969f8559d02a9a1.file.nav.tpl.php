<?php /* Smarty version Smarty-3.1.14, created on 2017-10-18 01:42:17
         compiled from "Smarty\templates\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185959e56de8ec0a35-86441267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1e8504ca6dc69671c973eed969f8559d02a9a1' => 
    array (
      0 => 'Smarty\\templates\\nav.tpl',
      1 => 1508208408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185959e56de8ec0a35-86441267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59e56de8ecc3c1_42092414',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e56de8ecc3c1_42092414')) {function content_59e56de8ecc3c1_42092414($_smarty_tpl) {?><script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 var id=null;
	 if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		  {
			var title = $(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");	
		  }
		  
     })
		
	$(id).click();
	
});

</script> 
<ul id="main-nav">
  <!-- Accordion Menu -->
  <li> 
  <a href="quantri.php" class="nav-top-item no-submenu"> 
  <!-- Add the class "no-submenu" to menu items with no sub menu  -->
  Danh mục 
  </a> 
  </li>
  <li>
  <a href="#" class="nav-top-item" id="sanpham"> Sản phẩm </a>
    <ul>
      <li><a href="san_pham.php" title="sanpham">Danh sách sản phẩm</a></li>
      <li><a href="them_san_pham.php" title="sanpham">Thêm sản phẩm</a></li>
      <li><a href="sua_san_pham.php" title="sanpham">Cập nhật sản phẩm</a></li>
      <li><a href="xoa_san_pham.php" title="sanpham">Xóa sản phẩm</a></li>
    </ul>
  </li>
  </ul>
<!-- End #main-nav -->
  <!--<li>--> 
  <!--<a href="#" class="nav-top-item" id="loaimon"> Loại món ăn </a>
    <ul>
      <li><a href="loaimonan.php" title="loaimon">Danh sách loại món ăn</a></li>
      <li><a href="themloaimonan.php" title="loaimon" >Thêm loại món ăn</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="monan"> Món ăn </a>
    <ul>
      <li><a href="monan.php" title="monan">Danh sách món ăn</a></li>
      <li><a href="themmonan.php" title="monan">Thêm món ăn</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="user"> User </a>
    <ul>
      <li><a href="user.php" title="user">Danh sách user</a></li>
      <li><a href="themuser.php" title="user">Thêm User</a></li>
    </ul>
  </li>
   <li>
  <a href="#" class="nav-top-item" id="thucdon"> Thực đơn </a>
    <ul>
      <li><a href="#" title="thucdon">Danh sách Thực đơn</a></li>
      <li><a href="#" title="thucdon">Thêm Thực đơn</a></li>
    </ul>
  </li>-->
<?php }} ?>