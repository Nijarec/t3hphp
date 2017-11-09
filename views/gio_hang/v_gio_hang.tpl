<section id="content">
  <div class="main" style="min-height:768px" id="th_giohang">
    <div class="container">
    
        <form action="gio_hang.php" method="post">
    {if isset($ds_san_pham)} 
    {assign var=tien_san_pham value=0}      
        <h3 align="center">Danh sách sản phẩm bạn đã chọn</h3>
        <div class="checkout-right">
					
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>Mã sản phẩm</th>	
							<th>Tên sản phẩm</th>
							<th>Số lượng</th>
							<th>Đơn giá</th>
						
							<th>Thành tiền</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
                    {foreach $ds_san_pham as $item}
                    <tr class="rem{$item->ProductID}">
						<td class="invert">{$item->ProductID}</td>
						<td class="invert">{$item->ProductName}</td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<input type="text" value="{$item->so_luong}" name="soluong{$item->ProductID}" style="width:70px; text-align:center"/>
                    				<input type="hidden" value="{$item->Price}" name="dongia{$item->ProductID}"/>	
								</div>
							</div>
						</td>
						<td class="invert" align="center">{number_format($item->Price)} đ</td>
						
						<td class="invert">{number_format($item->so_luong*$item->Price)} đ 
                    {$tien_san_pham=$tien_san_pham+$item->so_luong*$item->Price}</td>
						<td class="invert">
							<div class="rem">
								<!--<div class="close1"> </div>-->
                                <input type="checkbox" name="{{$item->ProductID}}" value="{$item->Price}"/>
							</div>

						</td>
					</tr>	
				{/foreach}
				</tbody>
                <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền hóa đơn:</td><td align="right">{number_format($tien_san_pham)} đ</td></tr>
                </table>
			</div>
       
            
        </table> 
      
    <p align="center">
    
    <input type="submit" name="btnCapnhat" value="Cập nhật" class="button-2" />
    
    <input type="button"  class="button-2"
						onclick="window.location.href = 'khach_hang.php?key=dat-hang'"
						value="Đặt hàng" class="art-button" />
                        
    <input type="button"  class="button-1" id="btnxoa"						
						value="Xóa giỏ hàng" class="art-button" />
    </p>
    </form>
    </div>
    {else}
        <h3 align="center">Bạn chưa chọn sản phẩm nào trong giỏ</h3> 
    {/if}
    </div>
  </div>
</section>