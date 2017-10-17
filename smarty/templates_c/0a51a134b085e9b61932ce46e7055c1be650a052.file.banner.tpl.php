<?php /* Smarty version Smarty-3.1.18, created on 2017-10-12 12:56:00
         compiled from "smarty\templates\banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1884359df5d9cd21d97-78825966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a51a134b085e9b61932ce46e7055c1be650a052' => 
    array (
      0 => 'smarty\\templates\\banner.tpl',
      1 => 1507632626,
      2 => 'file',
    ),
    '2a620d5116c5f6bf74198c17eda3c6b14d393e99' => 
    array (
      0 => 'smarty\\templates\\banner\\banner_left.tpl',
      1 => 1507812957,
      2 => 'file',
    ),
    '2fbb5bfeb89839314a8f017bb046caad55c5de65' => 
    array (
      0 => 'smarty\\templates\\banner\\banner_right.tpl',
      1 => 1507632627,
      2 => 'file',
    ),
    '4628d414226e6004937a1fdd647aaac6d9e45bca' => 
    array (
      0 => 'smarty\\templates\\banner\\banner_down.tpl',
      1 => 1507632627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1884359df5d9cd21d97-78825966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59df5d9cdcc8f9_83309022',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59df5d9cdcc8f9_83309022')) {function content_59df5d9cdcc8f9_83309022($_smarty_tpl) {?><!-- banner -->
	<div class="banner">
		 <?php /*  Call merged included template "banner/banner_left.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("banner/banner_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1884359df5d9cd21d97-78825966');
content_59df6660aa4f48_81349084($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "banner/banner_left.tpl" */?> 
		 <?php /*  Call merged included template "banner/banner_right.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("banner/banner_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1884359df5d9cd21d97-78825966');
content_59df6660afb933_00406659($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "banner/banner_right.tpl" */?> 
		<div class="clearfix"></div>
	</div>
<!-- banner -->
 <?php /*  Call merged included template "banner/banner_down.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("banner/banner_down.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1884359df5d9cd21d97-78825966');
content_59df6660b13115_07932224($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "banner/banner_down.tpl" */?> <?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-10-12 12:56:00
         compiled from "smarty\templates\banner\banner_left.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59df6660aa4f48_81349084')) {function content_59df6660aa4f48_81349084($_smarty_tpl) {?><div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Danh muc</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
               <?php  $_smarty_tpl->tpl_vars['catM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['catM']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dsCategoryMain']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['catM']->key => $_smarty_tpl->tpl_vars['catM']->value) {
$_smarty_tpl->tpl_vars['catM']->_loop = true;
?>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
                    <li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['catM']->value->CategoryName;?>
<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dsCategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                                    <ul>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['catM']->value->CategoryID==$_smarty_tpl->tpl_vars['cat']->value->CategoryParentID) {?>	
										<li><a href="san_pham.php?cat=<?php echo $_smarty_tpl->tpl_vars['cat']->value->CategoryID;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->CategoryName;?>
</a></li>
										
                                    <?php }?>
									</ul>
                                    <?php } ?>
								</div>                  
							</div>				
						</li>
						<!--<li><a href="../products.html">Branded Foods</a></li>
						<li><a href="../household.html">Households</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="../vegetables.html">Vegetables</a></li>
										<li><a href="../vegetables.html">Fruits</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="../kitchen.html">Kitchen</a></li>
						<li><a href="../short-codes.html">Short Codes</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="../drinks.html">Soft Drinks</a></li>
										<li><a href="../drinks.html">Juices</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="../pet.html">Pet Food</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="../frozen.html">Frozen Snacks</a></li>
										<li><a href="../frozen.html">Frozen Nonveg</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="../bread.html">Bread & Bakery</a></li>-->
					</ul>
				 </div><!-- /.navbar-collapse -->
                 <?php } ?>
			</nav>
		</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-10-12 12:56:00
         compiled from "smarty\templates\banner\banner_right.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59df6660afb933_00406659')) {function content_59df6660afb933_00406659($_smarty_tpl) {?><div class="w3l_banner_nav_right">
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
				<script defer src="./js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-10-12 12:56:00
         compiled from "smarty\templates\banner\banner_down.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59df6660b13115_07932224')) {function content_59df6660b13115_07932224($_smarty_tpl) {?><div class="banner_bottom">
			<div class="wthree_banner_bottom_left_grid_sub">
			</div>
			<div class="wthree_banner_bottom_left_grid_sub1">
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="../images/4.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_bottom_left_grid_pos">
							<h4>Discount Offer <span>25%</span></h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="../images/5.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_btm_pos">
							<h3>introducing <span>best store</span> for <i>groceries</i></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="../images/6.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_btm_pos1">
							<h3>Save <span>Upto</span> $10</h3>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
	</div><?php }} ?>
