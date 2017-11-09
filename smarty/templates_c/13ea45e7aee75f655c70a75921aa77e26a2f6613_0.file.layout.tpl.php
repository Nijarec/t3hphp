<?php
/* Smarty version 3.1.30, created on 2017-10-23 20:00:00
  from "C:\xampp\htdocs\t3hphp\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ee2e200ba5f0_35619093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13ea45e7aee75f655c70a75921aa77e26a2f6613' => 
    array (
      0 => 'C:\\xampp\\htdocs\\t3hphp\\smarty\\templates\\layout.tpl',
      1 => 1508780405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:banner.tpl' => 1,
    'file:content.tpl' => 1,
    'file:top_brands.tpl' => 1,
    'file:news_letter.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:javascript.tpl' => 1,
  ),
),false)) {
function content_59ee2e200ba5f0_35619093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191686911859ee2e200ab030_73210579', "head");
?>

<body>
<!-- header -->
<!-- script-for sticky-nav -->
<!-- //script-for sticky-nav -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179281470759ee2e200acb88_16267098', "header");
?>


<!-- //header -->
<!-- banner -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25103057459ee2e200ae083_78695153', "banner");
?>

<!--// banner -->
<!-- products - Hiển thị sản phẩm -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144627664859ee2e200af553_20674529', "content");
?>


<!-- //products - Hiển thị sản phẩm --> 	
<!-- top-brands -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151780327059ee2e200b1a16_52771272', "top_brands");
?>
	
<!-- //top-brands -->
<!-- fresh-vegetables -->	
<!-- //fresh-vegetables -->

<!-- newsletter -->
<!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130375738859ee2e200b3e58_60494897', "news_letter");
?>
-->	
<!-- //newsletter -->

<!-- footer -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61047089859ee2e200b7c93_21312630', "footer");
?>

<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1096767659ee2e200b9cf3_41459343', "javascript");
?>

</body>
</html>
<?php }
/* {block "head"} */
class Block_191686911859ee2e200ab030_73210579 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "head"} */
/* {block "header"} */
class Block_179281470759ee2e200acb88_16267098 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "header"} */
/* {block "banner"} */
class Block_25103057459ee2e200ae083_78695153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "banner"} */
/* {block "content"} */
class Block_144627664859ee2e200af553_20674529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "content"} */
/* {block "top_brands"} */
class Block_151780327059ee2e200b1a16_52771272 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:top_brands.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "top_brands"} */
/* {block "news_letter"} */
class Block_130375738859ee2e200b3e58_60494897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:news_letter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "news_letter"} */
/* {block "footer"} */
class Block_61047089859ee2e200b7c93_21312630 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "footer"} */
/* {block "javascript"} */
class Block_1096767659ee2e200b9cf3_41459343 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "javascript"} */
}
