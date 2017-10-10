<?php /* Smarty version Smarty-3.1.14, created on 2017-10-10 03:55:26
         compiled from "Smarty\templates\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1799759dae0fb950214-70677853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d56455e1c870e35aed51a78bc894ced5b4eace' => 
    array (
      0 => 'Smarty\\templates\\content.tpl',
      1 => 1507607723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1799759dae0fb950214-70677853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59dae0fb977314_10306368',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dae0fb977314_10306368')) {function content_59dae0fb977314_10306368($_smarty_tpl) {?><div class="content-box"><!-- Start Content Box -->
<?php if (isset($_smarty_tpl->tpl_vars['view']->value)){?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
<div id="container" style="width:100%; height:400px;"></div>
<?php }?>  
</div><!-- End .content-box -->
<script>
$(function () { 
    var myChart = Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Doanh Thu Năm '
        },
        xAxis: {
            categories: ['01/2017', '02/2017', '03/2017']
        },
        yAxis: {
            title: {
                text: 'Tiền '
            }
        },
        series:[{
            data: [700000, 60000, 95000]
        }]
        
    });
});
</script><?php }} ?>