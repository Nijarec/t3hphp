<div class="content-box"><!-- Start Content Box -->
{if isset($view)}
{include file="$view"}
{else}
<div id="container" style="width:100%; height:400px;"></div>
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
</script>
{/if}  
</div><!-- End .content-box -->
