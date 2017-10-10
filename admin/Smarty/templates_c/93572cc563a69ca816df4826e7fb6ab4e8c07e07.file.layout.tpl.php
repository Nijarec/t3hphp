<?php /* Smarty version Smarty-3.1.14, created on 2017-10-09 03:12:29
         compiled from "Smarty\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:578759dae0fb852355-48778203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93572cc563a69ca816df4826e7fb6ab4e8c07e07' => 
    array (
      0 => 'Smarty\\templates\\layout.tpl',
      1 => 1507518722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '578759dae0fb852355-48778203',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59dae0fb8cf375_77611141',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dae0fb8cf375_77611141')) {function content_59dae0fb8cf375_77611141($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="body-wrapper">
<!-- Wrapper for the radial gradient background -->
<div id="sidebar">
  <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu --> 
    <?php echo $_smarty_tpl->getSubTemplate ("logo_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
			
    <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </div>
</div>
<!-- End #sidebar -->
<div id="main-content">
<!-- Main Content Section with everything -->
 
<!-- Page Head --> 
<?php echo $_smarty_tpl->getSubTemplate ("pageHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="clear"></div> <!-- End .clear --> 
<!-- End Page Head --> 
<!-- Content --> 
<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 
<!-- end Content -->
<div class="clear"></div>
<!-- Start Notifications --> 
 
<!-- End Notifications --> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>