<?php
/* Smarty version 3.1.30, created on 2017-10-21 04:43:49
  from "C:\xampp\htdocs\t3hphp\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59eab465868e57_64881147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13ea45e7aee75f655c70a75921aa77e26a2f6613' => 
    array (
      0 => 'C:\\xampp\\htdocs\\t3hphp\\smarty\\templates\\layout.tpl',
      1 => 1508343437,
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
function content_59eab465868e57_64881147 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211186767759eab46585c381_61671918', "head");
?>

<body>
<!-- header -->
<!-- script-for sticky-nav -->
<!-- //script-for sticky-nav -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135484514959eab46585e639_33978135', "header");
?>


<!-- //header -->
<!-- banner -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96275670459eab46585fa50_56003490', "banner");
?>

<!--// banner -->
<!-- products - Hiển thị sản phẩm -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120212609059eab465860e13_32815820', "content");
?>


<!-- //products - Hiển thị sản phẩm --> 	
<!-- top-brands -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35697156559eab465862479_75230134', "top_brands");
?>
	
<!-- //top-brands -->
<!-- fresh-vegetables -->	
<!-- //fresh-vegetables -->

<!-- newsletter -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190319236859eab465863838_70871007', "news_letter");
?>
	
<!-- //newsletter -->

<!-- footer -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34309121459eab465865257_99399231', "footer");
?>

<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67712799859eab465866826_20248971', "javascript");
?>

</body>
</html>
<?php }
/* {block "head"} */
class Block_211186767759eab46585c381_61671918 extends Smarty_Internal_Block
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
class Block_135484514959eab46585e639_33978135 extends Smarty_Internal_Block
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
class Block_96275670459eab46585fa50_56003490 extends Smarty_Internal_Block
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
class Block_120212609059eab465860e13_32815820 extends Smarty_Internal_Block
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
class Block_35697156559eab465862479_75230134 extends Smarty_Internal_Block
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
class Block_190319236859eab465863838_70871007 extends Smarty_Internal_Block
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
class Block_34309121459eab465865257_99399231 extends Smarty_Internal_Block
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
class Block_67712799859eab465866826_20248971 extends Smarty_Internal_Block
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
