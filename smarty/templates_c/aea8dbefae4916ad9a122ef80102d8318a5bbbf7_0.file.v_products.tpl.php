<?php
/* Smarty version 3.1.30, created on 2017-10-23 02:18:32
  from "C:\wamp64\www\do_an_cuoi_ki\views\products\v_products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ed51782238d6_21751724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aea8dbefae4916ad9a122ef80102d8318a5bbbf7' => 
    array (
      0 => 'C:\\wamp64\\www\\do_an_cuoi_ki\\views\\products\\v_products.tpl',
      1 => 1508566038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ed51782238d6_21751724 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="w3ls_w3l_banner_nav_right_grid">
				<h3>DANH SÁCH SẢN PHẨM</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dsproducts']->value, 'pd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pd']->value) {
?>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="./images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
									
										<div class="snipcart-thumb">
											<a href="chi_tiet_products.php?ProductID=<?php echo $_smarty_tpl->tpl_vars['pd']->value->ProductID;?>
"><img src="./images/<?php echo $_smarty_tpl->tpl_vars['pd']->value->Image;?>
" alt=" " class="img-responsive" /></a>
                                            <a href="chi_tiet_products.php?ProductID=<?php echo $_smarty_tpl->tpl_vars['pd']->value->ProductID;?>
">
											<p><?php echo $_smarty_tpl->tpl_vars['pd']->value->ProductName;?>
</p>
                                            </a>
                                            
											<h4><?php echo number_format($_smarty_tpl->tpl_vars['pd']->value->Price);?>
 vnd</h4>
											<p style="text-align:center">
											<input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['pd']->value->Price;?>
" value="<?php echo $_smarty_tpl->tpl_vars['pd']->value->Price;?>
" />
											<input type="text"  value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['pd']->value->ProductID;?>
" />&nbsp;
											<a class="button-1" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['pd']->value->ProductID;?>
">Mua</a>
 											</p>
											
										<!--	<a class="button" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['mon']->value->ma_mon;?>
">Mua</a>-->
											
										</div>
										<!--<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="<?php echo $_smarty_tpl->tpl_vars['pd']->value->ProductName;?>
" />
													<input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['pd']->value->Price;?>
" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="VND" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>-->
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<div class="clearfix"> </div>
				</div>
				</div><?php }
}
