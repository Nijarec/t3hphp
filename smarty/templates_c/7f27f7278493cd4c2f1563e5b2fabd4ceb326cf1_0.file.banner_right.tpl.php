<?php
/* Smarty version 3.1.30, created on 2017-10-17 10:20:23
  from "C:\xampp\htdocs\t3hphp\smarty\templates\banner\banner_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5bd4735c402_94202725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f27f7278493cd4c2f1563e5b2fabd4ceb326cf1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\t3hphp\\smarty\\templates\\banner\\banner_right.tpl',
      1 => 1507708652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e5bd4735c402_94202725 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
								<h3>Make your <span>food</span> with Spicy.</h3>
								<div class="more">
									<a href="../products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<h3>Make your <span>food</span> with Spicy.</h3>
								<div class="more">
									<a href="../products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<h3>upto <i>50%</i> off.</h3>
								<div class="more">
									<a href="../products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="./css/flexslider.css" type="text/css" media="screen" property="" />
				<?php echo '<script'; ?>
 defer src="./js/jquery.flexslider.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  <?php echo '</script'; ?>
>
			<!-- //flexSlider -->
		</div><?php }
}
