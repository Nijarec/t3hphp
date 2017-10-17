<?php
/* Smarty version 3.1.30, created on 2017-10-17 10:20:23
  from "C:\xampp\htdocs\t3hphp\smarty\templates\banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5bd4731b1c4_43861610',
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
function content_59e5bd4731b1c4_43861610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- banner -->
	<div class="banner">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73734101059e5bd47317a95_86071558', "banner_left");
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103326205259e5bd47319818_33002746', "banner_right");
?>

		<div class="clearfix"></div>
	</div>
<!-- banner -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185156142859e5bd4731ae71_85827571', "banner_down");
}
/* {block "banner_left"} */
class Block_73734101059e5bd47317a95_86071558 extends Smarty_Internal_Block
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
class Block_103326205259e5bd47319818_33002746 extends Smarty_Internal_Block
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
class Block_185156142859e5bd4731ae71_85827571 extends Smarty_Internal_Block
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
