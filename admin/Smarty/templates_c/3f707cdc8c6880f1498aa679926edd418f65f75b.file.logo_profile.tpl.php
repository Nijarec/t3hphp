<?php /* Smarty version Smarty-3.1.14, created on 2017-10-10 03:18:52
         compiled from "Smarty\templates\logo_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:667359dae0fb8f6470-09175384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f707cdc8c6880f1498aa679926edd418f65f75b' => 
    array (
      0 => 'Smarty\\templates\\logo_profile.tpl',
      1 => 1507605528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '667359dae0fb8f6470-09175384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59dae0fb909d06_26943178',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dae0fb909d06_26943178')) {function content_59dae0fb909d06_26943178($_smarty_tpl) {?><a href="quantri.php"><img id="logo" src="public/layout/resources/images/alphatek.png" alt="Nhà hàng" /></a> 
<!-- Sidebar Profile links -->
<div id="profile-links"> Chào, <a href="#" title="Edit your profile">
<?php echo $_SESSION['fullname'];?>

</a><br />
  <br />
  <a href="#" title="View the Site">Quyền:<?php echo $_SESSION['role'];?>
</a> | 
  <a href="quantri.php?func=exit" title="Sign Out">Thoát</a> </div>
<?php }} ?>