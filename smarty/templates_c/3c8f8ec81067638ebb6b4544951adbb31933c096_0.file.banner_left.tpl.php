<?php
/* Smarty version 3.1.30, created on 2017-10-23 20:00:00
  from "C:\xampp\htdocs\t3hphp\smarty\templates\banner\banner_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ee2e201685d6_71522198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c8f8ec81067638ebb6b4544951adbb31933c096' => 
    array (
      0 => 'C:\\xampp\\htdocs\\t3hphp\\smarty\\templates\\banner\\banner_left.tpl',
      1 => 1508753577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ee2e201685d6_71522198 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="w3l_banner_nav_left">
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
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dsCategoryMain']->value, 'catM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['catM']->value) {
?>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
                    <li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['catM']->value->CategoryName;?>
<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dsCategory']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                                    <ul>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['catM']->value->CategoryID == $_smarty_tpl->tpl_vars['cat']->value->CategoryParentID) {?>	
										<li><a href="products.php?cat=<?php echo $_smarty_tpl->tpl_vars['cat']->value->CategoryID;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->CategoryName;?>
</a></li>
										
                                    <?php }?>
									</ul>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</nav>
		</div><?php }
}
