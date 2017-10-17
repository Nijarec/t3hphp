<?php
session_start();
$err="";
if(isset($_SESSION['fullname']))
{
	header("Location:quan_tri.php");	
}
if(isset($_SESSION["error"]))
{
	$err=$_SESSION["error"];
	$_SESSION["error"]="";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý Siêu thị mini | Đăng nhập</title>
<link rel="stylesheet" href="public/layout/resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="public/layout/resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="public/layout/resources/css/invalid.css" type="text/css" media="screen" />	
<script type="text/javascript" src="public/layout/resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="public/layout/resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="public/layout/resources/scripts/facebox.js"></script>
<script type="text/javascript" src="public/layout/resources/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="thu_vien/thu_vien.js"></script>
</head>
<body id="login">
		<div id="login-wrapper" >
			<div id="login-top">
                <h1 style="color:#F6C"> Hệ thống Quản lí Siêu thị mini</h1>
				<!-- Logo (221px width) -->
				<!--<img id="logo" src="public/layout/resources/images/Alphatek.png" alt="Nhà Hàng Admin logo" />-->
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
				<form action="quan_tri.php" method="post">
				
					<div class="notification information png_bg">
						<div>
							Đăng nhập hệ thống.(Thông tin tên và mật khẩu phải nhập)  
						</div>
					</div>
					
					<p>
						<label>Tên đăng nhập</label>
						<input class="text-input kiem_tra_rong" data-err="Tên đăng nhập không rỗng" type="text"  name="ten_dang_nhap" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Mật khẩu</label>
						<input class="text-input kiem_tra_rong" type="password" name="mat_khau" data-err="Mật khẩu không rỗng" />
					</p>
					<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" />Ghi nhớ
					</p>
					<div class="clear"></div>
					<p>
						<input class="button" onclick="return Kiem_tra_Du_lieu_Rong()" type="submit" value="Đăng nhập" name="login" id="login" />
					</p>
					<div class="clear"></div>
					<div notification error png_bg>
                    <a href="#" class="close"><img src="public/layout/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div><?php echo $err ?></div>
					</div>
				</form>
			</div> <!-- End #login-content -->
		</div> <!-- End #login-wrapper -->
  </body>
</html>
