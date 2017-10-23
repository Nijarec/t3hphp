<?php
/* Smarty version 3.1.30, created on 2017-10-23 14:46:12
  from "C:\wamp64\www\do_an_cuoi_ki\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ee00b4494d13_22473049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa959e539ecdb1a199cfc89f7adef587a5e6a49a' => 
    array (
      0 => 'C:\\wamp64\\www\\do_an_cuoi_ki\\smarty\\templates\\layout.tpl',
      1 => 1508769970,
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
function content_59ee00b4494d13_22473049 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_314359ee00b443e117_41034385', "head");
?>

<body>
<!-- header -->
<!-- script-for sticky-nav -->
<!-- //script-for sticky-nav -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_318859ee00b4449662_33425027', "header");
?>


<!-- //header -->
<!-- banner -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2191759ee00b44541d4_41055338', "banner");
?>

<!--// banner -->
<!-- products - Hiển thị sản phẩm -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3125059ee00b445f1f0_74311147', "content");
?>


<!-- //products - Hiển thị sản phẩm --> 	
<!-- top-brands -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_969959ee00b446e886_08369045', "top_brands");
?>
	
<!-- //top-brands -->
<!-- fresh-vegetables -->	
<!-- //fresh-vegetables -->

<!-- newsletter -->
<!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3171259ee00b447c309_82981972', "news_letter");
?>
-->	
<!-- //newsletter -->

<!-- footer -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1192959ee00b4486ed1_07856257', "footer");
?>

<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_956659ee00b4491ce6_18406859', "javascript");
?>

</body>
</html>
<?php }
/* {block "head"} */
class Block_314359ee00b443e117_41034385 extends Smarty_Internal_Block
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
class Block_318859ee00b4449662_33425027 extends Smarty_Internal_Block
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
class Block_2191759ee00b44541d4_41055338 extends Smarty_Internal_Block
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
class Block_3125059ee00b445f1f0_74311147 extends Smarty_Internal_Block
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
class Block_969959ee00b446e886_08369045 extends Smarty_Internal_Block
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
class Block_3171259ee00b447c309_82981972 extends Smarty_Internal_Block
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
class Block_1192959ee00b4486ed1_07856257 extends Smarty_Internal_Block
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
class Block_956659ee00b4491ce6_18406859 extends Smarty_Internal_Block
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
