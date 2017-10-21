<?php
/* Smarty version 3.1.30, created on 2017-10-21 04:43:49
  from "C:\xampp\htdocs\t3hphp\smarty\templates\javascript.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59eab4659eed72_59494653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada663c0d0faf5320e2a7594ae16e5370269dc32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\t3hphp\\smarty\\templates\\javascript.tpl',
      1 => 1507708652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59eab4659eed72_59494653 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
<?php echo '</script'; ?>
>
<!-- here stars scrolling icon -->
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	<?php echo '</script'; ?>
>
<!-- //here ends scrolling icon -->
<?php echo '<script'; ?>
 src="js/minicart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	<?php echo '</script'; ?>
><?php }
}
