<?php /* Smarty version Smarty-3.1.14, created on 2017-10-23 04:00:21
         compiled from "Smarty\templates\pageHead.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2431359e56de9118de3-55745177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684f851d2c2c08d0c4d768caa03615f245c68f59' => 
    array (
      0 => 'Smarty\\templates\\pageHead.tpl',
      1 => 1508597915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2431359e56de9118de3-55745177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59e56de911ce67_09505968',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e56de911ce67_09505968')) {function content_59e56de911ce67_09505968($_smarty_tpl) {?> <h2>Hệ thống quản lí siêu thị mini</h2>
			<p id="page-intro">Chào <?php echo $_SESSION['fullname'];?>
</p>
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="them_san_pham.php"><span>
					<img src="public/layout/resources/images/icons/pencil_48.png" alt="icon" /><br />
					Thêm Sản phẩm
				</span></a></li>
				
				<!--<li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					New Page
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/image_add_48.png" alt="icon" /><br />
					Upload an Image
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/clock_48.png" alt="icon" /><br />
					Add an Event
				</span></a></li>-->
				
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="public/layout/resources/images/icons/comment_48.png" alt="icon" /><br />
					Open Modal
				</span></a></li>
				
			</ul>
			
			<?php }} ?>