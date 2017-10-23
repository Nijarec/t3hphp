<?php
/* Smarty version 3.1.30, created on 2017-10-23 13:57:39
  from "C:\wamp64\www\do_an_cuoi_ki\smarty\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59edf553ed2c37_09998265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30bbbc4fc3bd434aba6cc9ef31f07a0ad40eb7fd' => 
    array (
      0 => 'C:\\wamp64\\www\\do_an_cuoi_ki\\smarty\\templates\\login.tpl',
      1 => 1508557651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59edf553ed2c37_09998265 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>ĐĂNG NHẬP</h2>
					<form action="#" method="post">
					  <input type="text" name="Username" placeholder="Username" required>
					  <input type="password" name="Password" placeholder="Password" required>
					  <input type="submit" value="Login" name="btnLogin">
					</form>
				  </div>
				  <div class="form">
					<h2>ĐĂNG KÝ MỚI</h2>
					<form action="#" method="post">
					  <input type="text" name="Username" placeholder="Username" required>
					  <input type="password" name="Password" placeholder="Password" required>
					  <input type="email" name="Email" placeholder="Email Address" required>
					  <input type="text" name="Phone_number" placeholder="Phone Number" required>
					  <input type="submit" value="Register" name="btnRegister">
					</form>
				  </div>
				  <div class="cta"><a href="#">QUÊN MẬT KHẨU
				    <input type="text" name="Phone_number" placeholder="Phone Number" required>
				  </a></div>
				</div>
			</div>
			<?php echo '<script'; ?>
>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			<?php echo '</script'; ?>
>
		</div><?php }
}
