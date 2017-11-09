<?php
    @session_start();
    class C_gio_hang{
        protected $smarty;
        function xem_gio_hang()
        {
			include_once('controllers/Smarty_sieu_thi.php');
			$smarty=new Smarty_sieu_thi();
			//$smarty->assign('title','Giỏ hàng');
            $gio_hang=$this->layGioHang();
            if($gio_hang) //Nếu có giỏ hàng
            {
                //$gio_hang_thuc_don=array();
                $gio_hang_san_pham=array();
                foreach($gio_hang as $key=>$value)
                {
                        $gio_hang_san_pham[$key]=$value;
                }
				
                if($gio_hang_san_pham) //Nếu có chọn sản phẩm
                {
                    $_SESSION['gio_hang_san_pham']=$gio_hang_san_pham;
                    //lay_thong_tin_sản_phẩm
                    $smarty->assign('ds_san_pham',$this->lay_thong_tin_san_pham($gio_hang_san_pham));
                }
            }
            
			$smarty->assign("view","views/gio_hang/v_gio_hang.tpl");
			$smarty->display("check_out/layout.tpl");
        }
        function layGioHang() {
            if(isset($_SESSION['gioHang']))
                return $_SESSION['gioHang'];
            else
                return false;
        }
		
		function lay_thong_tin_san_pham($product)
        {
            $ProductID=array();
            foreach($product as $key=>$value)
            {
                $ProductID[]=$key;
            }
            $ProductID=implode(",",$ProductID);
            include_once('models/m_products.php');
            $m_products=new M_products();
            $ds_san_pham=$m_products->lay_products_cho_gio_hang($ProductID);
            $ds_san_pham_gio_hang=array(); //Ðua số lượng vào $ds_san_pham
            foreach($ds_san_pham as $item)
            {
                $item->so_luong=$product[$item->ProductID];
                $ds_san_pham_gio_hang[]=$item;
            }
            return $ds_san_pham_gio_hang;
        }

        function themGioHang($maSP, $so_luong, $donGia) {
            if($so_luong>0) {
                
				if(isset($_SESSION['gioHang'][$maSP])) {
                    $_SESSION['thanh_tien'] -= @$_SESSION['gioHang'][$maSP]*$donGia;
                    $_SESSION['so_luong'] -= @$_SESSION['gioHang'][$maSP];      
                }
                
				$_SESSION['gioHang'][$maSP] = $so_luong;
				
                if(isset($_SESSION['thanh_tien']))
                {
                    $_SESSION['thanh_tien']= @$_SESSION['thanh_tien']+$so_luong*$donGia;
                    $_SESSION['so_luong'] = @$_SESSION['so_luong']+$so_luong;
                }
                else
                {
                    $_SESSION['thanh_tien'] = $so_luong*$donGia;
                    $_SESSION['so_luong'] = $so_luong;    
                }
            	
			}
			
            elseif($so_luong==0)
            {
                xoaMatHang($maSP, $donGia);
            }
        }
        function xoaMatHang($maSP, $donGia) {
            $gioHang = $this->layGioHang();
            $gioHangMoi = array();
    		foreach($gioHang as $key=>$value)
    		{
    			if($key!=$maSP)
    				$gioHangMoi[$key]=$value;
    			else
                {
                    $_SESSION['thanh_tien']-=$gioHang[$maSP]*$donGia;
                    $_SESSION['so_luong']-=$gioHang[$maSP];
                }	
    		}
    		if(!empty($gioHangMoi)) {
    			$_SESSION['gioHang']=$gioHangMoi;
            }
    		else {
    			$this->xoaGioHang();
            }
        }        
        function xoaGioHang() {
            unset($_SESSION['gioHang']);
            unset($_SESSION['thanh_tien']);
            unset($_SESSION['so_luong']);
        }
        function thanh_tien() {
            if(isset($_SESSION['thanh_tien']))
                return $_SESSION['thanh_tien'];
            else
                return 0;
        }
        function so_luong() {
            if(isset($_SESSION['so_luong']))
                return $_SESSION['so_luong'];
            else
                return 0;
        }
        function tongSoMatHang() {
            if(isset($_SESSION['so_luong']))
                return $_SESSION['so_luong'];
            else
                return 0;
        }
        
        function capNhatGioHang($maSP,$so_luong,$donGia) {
            if(!is_numeric($so_luong))
                return false;
            $so_luong = (int)$so_luong;
            if($so_luong>0) 
			{
                
				$_SESSION['thanh_tien']-=@$_SESSION['gioHang'][$maSP]*$donGia;
				$_SESSION['thanh_tien']+=$so_luong*$donGia;
    			
				$_SESSION['so_luong']-=@$_SESSION['gioHang'][$maSP];
				$_SESSION['so_luong'] +=$so_luong;
				
				$_SESSION['gioHang'][$maSP]=$so_luong;
                
    			return false;
            }
            if($so_luong ==0) 
                $this->xoaMatHang($maSP, $donGia);
            return false;
        }
    }
?>