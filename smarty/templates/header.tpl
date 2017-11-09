<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="index.php">Trang chủ</a>
		</div>
		<div class="w3l_search" style="text-transform:uppercase">
        <a href="search.php">Tìm kiếm</a>
			<!--<form action="#" method="post">
				<input type="text" name="Product" value="Tìm kiếm sản phẩm" onfocus="this.value ='';" onblur="if (this.value == '') {
				this.value = 'Tìm kiếm sản phẩm';}" required="">
				<input type="submit" value=" " name="Tim_san_pham" onclick="window.location='search.php'"  onkeyup="XL_Tim_san_pham(this.value)">
           
			</form>-->
		</div>
       
        

		<div class="product_list_header">  
        <a href="gio_hang.php">
                    <input type="submit" name="submit" value="View your cart" class="button" />
                    </a>
			<!--<form action="#" method="post" class="last">
                <fieldset>
                    
                    
                    
                </fieldset>
            </form>-->
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.php">Login</a></li> 
								<li><a href="login.php">Sign Up</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="contact.php">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php"><span>Siêu thị</span> Mini</a></h1>
			</div>
			<!--<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="events.html">Events</a><i>/</i></li>
					<li><a href="about.html">About Us</a><i>/</i></li>
					<li><a href="products.html">Best Deals</a><i>/</i></li>
					<li><a href="services.html">Services</a></li>
				</ul>
			</div>-->
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>0903195698</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="contact.php">Mail us</a></li>
                    <li><a href="search.php">Tìm kiếm</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->