<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
{block name="head"} {include file="head.tpl"} {/block}
<body>
<!-- header -->
<!-- script-for sticky-nav -->
<!-- //script-for sticky-nav -->
{block name="header"} {include file="header.tpl"} {/block}

<!-- //header -->
<!-- banner -->
{block name="banner"} {include file="banner.tpl"} {/block}
<!--// banner -->
<!-- products - Hiển thị sản phẩm -->
{block name="content"} {include file="content.tpl"} {/block}
{*block name="product"} {include file="product.tpl"} {/block*}
<!-- //products - Hiển thị sản phẩm --> 	
<!-- top-brands -->
{block name="top_brands"} {include file="top_brands.tpl"} {/block}	
<!-- //top-brands -->
<!-- fresh-vegetables -->	
<!-- //fresh-vegetables -->

<!-- newsletter -->
<!--{block name="news_letter"} {include file="news_letter.tpl"} {/block}-->	
<!-- //newsletter -->

<!-- footer -->
{block name="footer"} {include file="footer.tpl"} {/block}
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
{block name="javascript"} {include file="javascript.tpl"} {/block}
</body>
</html>
