
	<div class="agileinfo_single">
			
				<h5>{$product->ProductName}</h5>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="./images/{$product->Image}" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>{$product->ProductName}</h4>
						<p>nội dung tóm tắt</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4>{$product->Price} <span>$25.00</span></h4>
											<!--<input type="hidden" id="dongia{$product->Price}" value="{number_format($pd->Price)}" />
											<input type="text" size="2" value="1" id="soluong{$product->ProductID}" />-->
											<a class="button-1" href="javascript:void(0)" id="{$product->ProductID}">Mua</a>
						</div>
						<!--<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="pulao basmati rice" />
									<input type="hidden" name="amount" value="21.00" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>-->
					</div>
				</div>
				<div class="clearfix"> </div>
				
			</div>
