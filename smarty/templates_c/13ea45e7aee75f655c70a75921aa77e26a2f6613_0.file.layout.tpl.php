<?php
/* Smarty version 3.1.30, created on 2017-10-17 10:23:55
  from "C:\xampp\htdocs\t3hphp\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5be1b60b380_72473212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13ea45e7aee75f655c70a75921aa77e26a2f6613' => 
    array (
      0 => 'C:\\xampp\\htdocs\\t3hphp\\smarty\\templates\\layout.tpl',
      1 => 1508228628,
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
    'file:fresh_vegetables.tpl' => 1,
    'file:news_letter.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:javascript.tpl' => 1,
  ),
),false)) {
function content_59e5be1b60b380_72473212 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47272781759e5be1b5ff490_78354610', "head");
?>

<body>
<!-- header -->
<!-- script-for sticky-nav -->
<!-- //script-for sticky-nav -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171855327959e5be1b6017b8_68916487', "header");
?>


<!-- //header -->
<!-- banner -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73527191559e5be1b602ca7_34197621', "banner");
?>

<!--// banner -->
<!-- products - Hiển thị sản phẩm -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75886679059e5be1b604334_38553315', "content");
?>


<!-- //products - Hiển thị sản phẩm --> 	
<!-- top-brands -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63737841559e5be1b605a47_34021313', "top_brands");
?>
	
<!-- //top-brands -->
<!-- fresh-vegetables -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200417585059e5be1b606ec9_31000369', "fresh_vegetables");
?>
		
<!-- //fresh-vegetables -->

<!-- newsletter -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30497132659e5be1b608539_84095156', "news_letter");
?>
	
<!-- //newsletter -->

<!-- footer -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142605201959e5be1b609981_25529328', "footer");
?>

<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39946600259e5be1b60add7_47618202', "javascript");
?>

</body>
</html>
<?php }
/* {block "head"} */
class Block_47272781759e5be1b5ff490_78354610 extends Smarty_Internal_Block
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
class Block_171855327959e5be1b6017b8_68916487 extends Smarty_Internal_Block
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
class Block_73527191559e5be1b602ca7_34197621 extends Smarty_Internal_Block
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
class Block_75886679059e5be1b604334_38553315 extends Smarty_Internal_Block
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
class Block_63737841559e5be1b605a47_34021313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:top_brands.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "top_brands"} */
/* {block "fresh_vegetables"} */
class Block_200417585059e5be1b606ec9_31000369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:fresh_vegetables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "fresh_vegetables"} */
/* {block "news_letter"} */
class Block_30497132659e5be1b608539_84095156 extends Smarty_Internal_Block
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
class Block_142605201959e5be1b609981_25529328 extends Smarty_Internal_Block
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
class Block_39946600259e5be1b60add7_47618202 extends Smarty_Internal_Block
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
