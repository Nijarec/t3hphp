<?php
/* Smarty version 3.1.30, created on 2017-10-23 02:12:53
  from "C:\wamp64\www\do_an_cuoi_ki\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ed502519f981_12373997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa959e539ecdb1a199cfc89f7adef587a5e6a49a' => 
    array (
      0 => 'C:\\wamp64\\www\\do_an_cuoi_ki\\smarty\\templates\\layout.tpl',
      1 => 1508487847,
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
function content_59ed502519f981_12373997 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2824159ed5025097788_18845961', "head");
?>

<body>
<!-- header -->
<!-- script-for sticky-nav -->
<!-- //script-for sticky-nav -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2219859ed50250a7ff8_64703439', "header");
?>


<!-- //header -->
<!-- banner -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_402359ed50250b8176_48017556', "banner");
?>

<!--// banner -->
<!-- products - Hiển thị sản phẩm -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_899659ed50250c3129_15988699', "content");
?>


<!-- //products - Hiển thị sản phẩm --> 	
<!-- top-brands -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_782159ed502516a439_45387836', "top_brands");
?>
	
<!-- //top-brands -->
<!-- fresh-vegetables -->	
<!-- //fresh-vegetables -->

<!-- newsletter -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1030659ed5025179aa3_62183828', "news_letter");
?>
	
<!-- //newsletter -->

<!-- footer -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2875559ed50251853e9_76726716', "footer");
?>

<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1985659ed502519a1e6_90009412', "javascript");
?>

</body>
</html>
<?php }
/* {block "head"} */
class Block_2824159ed5025097788_18845961 extends Smarty_Internal_Block
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
class Block_2219859ed50250a7ff8_64703439 extends Smarty_Internal_Block
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
class Block_402359ed50250b8176_48017556 extends Smarty_Internal_Block
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
class Block_899659ed50250c3129_15988699 extends Smarty_Internal_Block
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
class Block_782159ed502516a439_45387836 extends Smarty_Internal_Block
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
class Block_1030659ed5025179aa3_62183828 extends Smarty_Internal_Block
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
class Block_2875559ed50251853e9_76726716 extends Smarty_Internal_Block
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
class Block_1985659ed502519a1e6_90009412 extends Smarty_Internal_Block
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
