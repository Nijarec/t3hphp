<?php
/* Smarty version 3.1.30, created on 2017-11-09 14:55:38
  from "C:\wamp64\www\do_an_cuoi_ki\views\gio_hang\v_gio_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a046c6aace2e5_97078714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf3b8cbb46431607dc2d488afbfb9993792bd421' => 
    array (
      0 => 'C:\\wamp64\\www\\do_an_cuoi_ki\\views\\gio_hang\\v_gio_hang.tpl',
      1 => 1510239334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a046c6aace2e5_97078714 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content">
  <div class="main" style="min-height:768px" id="th_giohang">
    <div class="container">
    
        <form action="gio_hang.php" method="post">
    <?php if (isset($_smarty_tpl->tpl_vars['ds_san_pham']->value)) {?> 
    <?php $_smarty_tpl->_assignInScope('tien_san_pham', 0);
?>      
        <h3 align="center">Danh sách sản phẩm bạn đã chọn</h3>
        <div class="checkout-right">
					
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>Mã sản phẩm</th>	
							<th>Tên sản phẩm</th>
							<th>Số lượng</th>
							<th>Đơn giá</th>
						
							<th>Thành tiền</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_san_pham']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr class="rem<?php echo $_smarty_tpl->tpl_vars['item']->value->ProductID;?>
">
						<td class="invert"><?php echo $_smarty_tpl->tpl_vars['item']->value->ProductID;?>
</td>
						<td class="invert"><?php echo $_smarty_tpl->tpl_vars['item']->value->ProductName;?>
</td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->so_luong;?>
" name="soluong<?php echo $_smarty_tpl->tpl_vars['item']->value->ProductID;?>
" style="width:70px; text-align:center"/>
                    				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->Price;?>
" name="dongia<?php echo $_smarty_tpl->tpl_vars['item']->value->ProductID;?>
"/>	
								</div>
							</div>
						</td>
						<td class="invert" align="center"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value->Price);?>
 đ</td>
						
						<td class="invert"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->Price);?>
 đ 
                    <?php $_smarty_tpl->_assignInScope('tien_san_pham', $_smarty_tpl->tpl_vars['tien_san_pham']->value+$_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->Price);
?></td>
						<td class="invert">
							<div class="rem">
								<!--<div class="close1"> </div>-->
                                <input type="checkbox" name="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->ProductID;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->Price;?>
"/>
							</div>

						</td>
					</tr>	
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</tbody>
                <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền hóa đơn:</td><td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['tien_san_pham']->value);?>
 đ</td></tr>
                </table>
			</div>
       
            
        </table> 
      
    <p align="center">
    
    <input type="submit" name="btnCapnhat" value="Cập nhật" class="button-2" />
    
    <input type="button"  class="button-2"
						onclick="window.location.href = 'khach_hang.php?key=dat-hang'"
						value="Đặt hàng" class="art-button" />
                        
    <input type="button"  class="button-1" id="btnxoa"						
						value="Xóa giỏ hàng" class="art-button" />
    </p>
    </form>
    </div>
    <?php } else { ?>
        <h3 align="center">Bạn chưa chọn sản phẩm nào trong giỏ</h3> 
    <?php }?>
    </div>
  </div>
</section><?php }
}
