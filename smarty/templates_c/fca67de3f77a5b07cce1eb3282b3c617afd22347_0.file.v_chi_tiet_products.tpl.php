<?php
/* Smarty version 3.1.30, created on 2017-10-23 02:14:39
  from "C:\wamp64\www\do_an_cuoi_ki\views\products\v_chi_tiet_products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ed508fabcb01_89882966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fca67de3f77a5b07cce1eb3282b3c617afd22347' => 
    array (
      0 => 'C:\\wamp64\\www\\do_an_cuoi_ki\\views\\products\\v_chi_tiet_products.tpl',
      1 => 1508724850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ed508fabcb01_89882966 (Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="agileinfo_single">
			
				<h5><?php echo $_smarty_tpl->tpl_vars['product']->value->ProductName;?>
</h5>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="./images/<?php echo $_smarty_tpl->tpl_vars['product']->value->Image;?>
" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4><?php echo $_smarty_tpl->tpl_vars['product']->value->ProductName;?>
</h4>
						<p>nội dung tóm tắt</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4><?php echo $_smarty_tpl->tpl_vars['product']->value->Price;?>
 <span>$25.00</span></h4>
											<!--<input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['product']->value->Price;?>
" value="<?php echo number_format($_smarty_tpl->tpl_vars['pd']->value->Price);?>
" />
											<input type="text" size="2" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['product']->value->ProductID;?>
" />-->
											<a class="button-1" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['product']->value->ProductID;?>
">Mua</a>
						</div>
						<!--<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="pulao basmati rice" />
									<input type="hidden" name="amount" value="21.00" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>-->
					</div>
				</div>
				<div class="clearfix"> </div>
				
			</div>
<?php }
}
