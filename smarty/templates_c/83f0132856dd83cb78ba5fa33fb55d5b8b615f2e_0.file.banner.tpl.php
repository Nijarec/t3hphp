<?php
/* Smarty version 3.1.30, created on 2017-10-21 04:43:49
  from "C:\xampp\htdocs\t3hphp\smarty\templates\banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59eab4658ebca2_78933113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83f0132856dd83cb78ba5fa33fb55d5b8b615f2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\t3hphp\\smarty\\templates\\banner.tpl',
      1 => 1507708652,
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
function content_59eab4658ebca2_78933113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- banner -->
	<div class="banner">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94348829459eab4658e4ed8_86038563', "banner_left");
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76335149859eab4658e8755_58330184', "banner_right");
?>

		<div class="clearfix"></div>
	</div>
<!-- banner -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186351132859eab4658eb297_43127558', "banner_down");
}
/* {block "banner_left"} */
class Block_94348829459eab4658e4ed8_86038563 extends Smarty_Internal_Block
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
class Block_76335149859eab4658e8755_58330184 extends Smarty_Internal_Block
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
class Block_186351132859eab4658eb297_43127558 extends Smarty_Internal_Block
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
