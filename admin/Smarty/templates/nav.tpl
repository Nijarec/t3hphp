<script>
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
