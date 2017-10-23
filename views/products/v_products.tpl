<div class="w3ls_w3l_banner_nav_right_grid">
				<h3>DANH SÁCH SẢN PHẨM</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>food</h6>
					{foreach $dsproducts as $pd}
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="./images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
									
										<div class="snipcart-thumb">
											<a href="chi_tiet_products.php?ProductID={$pd->ProductID}"><img src="./images/{$pd->Image}" alt=" " class="img-responsive" /></a>
											<a href="chi_tiet_products.php?ProductID={$pd->ProductID}"> <p>{$pd->ProductName}</p></a>
											
											<h4>{number_format($pd->Price)} <span>$5.00</span></h4>
											<p style="text-align:center">
											<input type="hidden" id="dongia{$pd->Price}" value="{$pd->Price}" />
											<input type="text"  value="1" id="soluong{$pd->ProductID}" />&nbsp;
											<a class="button-1" href="javascript:void(0)" id="{$pd->ProductID}">Mua</a>
 											</p>
											
										<!--	<a class="button" href="javascript:void(0)" id="{$mon->ma_mon}">Mua</a>-->
											
										</div>
										<!--<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="{$pd->ProductName}" />
													<input type="hidden" name="amount" value="{$pd->Price}" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="VND" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>-->
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					{/foreach}
					<div class="clearfix"> </div>
				</div>
				</div>