<?php
/* Smarty version 3.1.30, created on 2017-10-23 02:12:53
  from "C:\wamp64\www\do_an_cuoi_ki\smarty\templates\banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ed5025b147c6_42310600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '369544f4f23759e60b8664a2c672905babf15575' => 
    array (
      0 => 'C:\\wamp64\\www\\do_an_cuoi_ki\\smarty\\templates\\banner.tpl',
      1 => 1507632626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:banner/banner_left.tpl' => 1,
    'file:banner/banner_right.tpl' => 1,
    'file:banner/banner_down.tpl' => 1,
  ),
),false)) {
function content_59ed5025b147c6_42310600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- banner -->
	<div class="banner">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1298859ed5025aef488_54026892', "banner_left");
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_467759ed5025b01ec0_84942757', "banner_right");
?>

		<div class="clearfix"></div>
	</div>
<!-- banner -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3215459ed5025b11c62_78680076', "banner_down");
}
/* {block "banner_left"} */
class Block_1298859ed5025aef488_54026892 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:banner/banner_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "banner_left"} */
/* {block "banner_right"} */
class Block_467759ed5025b01ec0_84942757 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:banner/banner_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "banner_right"} */
/* {block "banner_down"} */
class Block_3215459ed5025b11c62_78680076 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:banner/banner_down.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "banner_down"} */
}
