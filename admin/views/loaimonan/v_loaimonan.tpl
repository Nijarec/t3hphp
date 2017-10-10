<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã Loại</th>
          <th>Tên loại</th>
          <th width="300px">Mô tả</th>
          
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> [1][2][3] </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        {foreach $loai_mon_ans as $loai}
        <tr>
          <td><input type="checkbox" /></td>
          <td>{$loai->ma_loai}</td>
          <td><a href="sualoaimonan.php?ma_loai={$loai->ma_loai}" title="Edit">{$loai->ten_loai}</a></td>
          <td>{$loai->mo_ta}</td>
          <td><!-- Icons --> 
            <a href="sualoaimonan.php?ma_loai={$loai->ma_loai}" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:Xoa_loai_mon_an({$loai->ma_loai})" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
   
  </div>
  
</div>
