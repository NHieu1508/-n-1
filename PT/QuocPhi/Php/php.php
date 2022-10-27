<?php


class ptud 
{
		private function ketnoi()
		{
			$ket=mysql_connect("localhost","nhom9","123456");
			if(!$ket)
			{
				echo 'khong the ket noi den csdl';
				exit();	
			}
			else
			{
				
			 mysql_select_db("covid");
			 mysql_query("SET NAMES UTF8");
			 return $ket; 	
			}
			
		}
		public function themxoasua($sql)
		{
			$link=$this->ketnoi(); 
			if(mysql_query($sql,$link))
			{
				return 1;
			}	
			else
			{
				return 0;	
			}
		}
		public function ktradong($sql)
	
	{
		$link=$this->ketnoi();
		$ketqua = mysql_query($sql,$link);
		mysql_close($link);
		$i = mysql_num_rows($ketqua);
		if($i>0)
		{
			return 0;	
		}
		else{
			return 1;	
		}
		
	}
		public function loadtintuc($sql)
	
	{
		$link=$this->ketnoi();
		$ketqua = mysql_query($sql,$link);
		mysql_close($link);
		$i = mysql_num_rows($ketqua);
		if($i>0)
		{
			echo '<table width="1045" height="216" class="table-striped" align="center">
                                         
                                          <tr>
                                            <th align="center" valign="middle" width="100"><div align="center">Mã F0</div></th>
                                            <th align="center" valign="middle" width="400"><div align="center">Họ và tên F0</div></th>
                                            <th align="center" valign="middle" width="150"><div align="center">Tuổi</div></th>
                                            <th align="center" valign="middle" width="300"><div align="center">Địa chỉ</div></th>
											<th align="center" valign="middle" width="300"><div align="center">Số CMND</div></th>
											<th align="center" valign="middle" width="300"><div align="center">Tình trạng</div></th>
                                            
                                            
											
											<th align="center" valign="middle" width="300"></th>
                                            
                                          </tr>';
										   $dem=1;
										 
			while($row = mysql_fetch_array($ketqua))
			{
				$MaF0 = $row['MaF0'];
				$TenF0 = $row['TenF0'];
				$TuoiF0 = $row['TuoiF0'];
				$SDT=$row['SDT'];
				$CMND = $row['CMND'];
				$Diachi=$row ['Diachi'];
				$Tang=$row ['Sotanghientai'];
				$Benhvien = $row['Tenbenhvien'];
				$Tinhtrang = $row['Tinhtrang'];
				echo '
            <tr>
                                           <td><div align="center">'.$dem.'</div></td>
                                           <td><div align="center">'.$TenF0.'</div></td>
                                           <td><div align="center">'.$TuoiF0.'</div></td>
										   <td><div align="center">'.$Diachi.'</div></td>
										   <td><div align="center">'.$CMND.'</div></td>
										   <td><div align="center">'.$Tinhtrang.'</td>
                                          	
                                          
										   <td>
										  
                                          <a href="giayyeucauchuyen.php?MaF0='.$MaF0.'"><h6 style="color:#73BE55;width:100px ">chuyển bệnh nhân</h6>
										  
										  
                                        </td>
										   
                                           
                                          </tr>';  
										  $dem++;                            
			}
			echo '</table>';
		}
		else
		{
			echo'khong co du lieu ket noi';
		}
	}
	public function loadphieu($sql)
	
	{
		$link=$this->ketnoi();
		$ketqua = mysql_query($sql,$link);
		mysql_close($link);
		$i = mysql_num_rows($ketqua);
		if($i>0)
		{
			echo '<table width="1045" height="216" class="table-striped" align="center">
                                         
                                          <tr>
                                            <th align="center" valign="middle" width="100"><div align="center">Mã Phiếu</div></th>
											<th align="center" valign="middle" width="100"><div align="center">Mã F0</div></th>
                                            <th align="center" valign="middle" width="400"><div align="center">Tên F0</div></th>
                                            <th align="center" valign="middle" width="150"><div align="center">Tuổi F0</div></th>
											<th align="center" valign="middle" width="100"><div align="center">CMND</div></th>
                                            <th align="center" valign="middle" width="400"><div align="center">Tâng yêu cầu</div></th>
                                            <th align="center" valign="middle" width="300"><div align="center">Bênh viện yêu cầu</div></th>
											<th align="center" valign="middle" width="300"><div align="center">Ngày yêu cầu</div></th>
											<th align="center" valign="middle" width="300"><div align="center">Tâng tiếp nhận</div></th>
                                            <th align="center" valign="middle" width="400"><div align="center">Bệnh viện tiếp nhận</div></th>
                                          
											
											<th align="center" valign="middle" width="100"></th>
                                            
                                          </tr>';
										   $dem=1;
			while($row = mysql_fetch_array($ketqua))
			{
				$Maphieu=$row['Maphieu'];
				$MaF0 = $row['MaF0'];
				$TenF0 = $row['tenF0'];
				$TuoiF0 = $row['TuoiF0'];
				$CMND = $row['CMND'];
				
				$Tang=$row ['Sotanghientai'];
				$Benhvien = $row['Benhvienhientai'];
				$Tantng=$row ['Sotangtiepnhan'];
				$Benhvientn = $row['benhvientiepnhan'];
				$TG = $row['thoigian'];
				echo '
            <tr>
											 <td><div align="center">'.$dem.'</div></td>
                                           <td><div align="center">'.$MaF0.'</div></td>
                                           <td><div align="center">'.$TenF0.'</div></td>
                                           <td><div align="center">'.$TuoiF0.'</div></td>
                                           <td><div align="center">'.$CMND.'</div></td>
										   <td><div align="center">'.$Tang.'</div></td>
										   <td><div align="center">'.$Benhvien.'</div></td>
										   <td><div align="center">'.$TG.'</td>
                                           <td><div align="center">'.$Tantng.'</div></td>
                                           <td><div align="center">'.$Benhvientn.'</td>
										   <td>
										  
                                          <a href="giayyeucauchuyen.php?MaF0='.$MaF0.'"><h6 style="color:#73BE55;width:100px ">&nbsp;&nbsp;&nbsp;&nbsp;  Tiếp nhận   .</h6>
										  
										  
                                        </td>
										   
                                           
                                          </tr>'; 
										  $dem++;                             
			}
			echo '</table>';
		}
		else
		{
			echo'khong co du lieu ket noi';
		}
	}
	public function Loaddanhsachyeucau($sql)
	
	{
		$link=$this->ketnoi();
		$ketqua = mysql_query($sql,$link);
		mysql_close($link);
		$i = mysql_num_rows($ketqua);
		if($i>0)
		{
			echo '<table width="1045" height="216" class="table-striped" align="center">
                                         
                                          <tr>
                                            <th align="center" valign="middle" width="100"><div align="center">STT</div></th>
											<th align="center" valign="middle" width="100"><div align="center">Mã F0</div></th>
                                           
                                            <th align="center" valign="middle" width="400"><div align="center">Tâng yêu cầu</div></th>
                                            <th align="center" valign="middle" width="300"><div align="center">Bênh viện yêu cầu</div></th>
											<th align="center" valign="middle" width="300"><div align="center">Ngày yêu cầu</div></th>
											
                                          
											
											<th align="center" valign="middle" width="100"></th>
                                            
                                          </tr>';
										   $dem=1;
			while($row = mysql_fetch_array($ketqua))
			{
				$Maphieu=$row['Maphieu'];
				$MaF0 = $row['MaF0'];
				$TenF0 = $row['tenF0'];
				$TuoiF0 = $row['TuoiF0'];
				$CMND = $row['CMND'];
				
				$Tang=$row ['Sotanghientai'];
				$Benhvien = $row['Benhvienhientai'];
				$Tantng=$row ['Sotangtiepnhan'];
				$Benhvientn = $row['benhvientiepnhan'];
				$TG = $row['thoigian'];
				echo '
            <tr>
											 <td><div align="center">'.$dem.'</div></td>
                                           <td><div align="center">'.$MaF0.'</div></td>
                                           
                                           
										   <td><div align="center">'.$Tang.'</div></td>
										   <td><div align="center">'.$Benhvien.'</div></td>
										   <td><div align="center">'.$TG.'</td>
                                           
										   <td>
										  
                                          <a href="giayyeucauchuyen.php?MaF0='.$MaF0.'"><h6 style="color:#73BE55;width:100px ">&nbsp;&nbsp;&nbsp;&nbsp;  Tiếp nhận   .</h6>
										  
										  
                                        </td>
										   
                                           
                                          </tr>'; 
										  $dem++;                             
			}
			echo '</table>';
		}
		else
		{
			echo'khong co du lieu ket noi';
		}
	}
	
				
		public function luachon($sql)
		{
			$link=$this->ketnoi();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			$kq='';
			if($i>0)
			{
				while($row=mysql_fetch_array($ketqua))
				{
					$id=$row[0];
					$kq=$id;
					}
				}
				return $kq;
			}	
			public function loadcombo_congty($sql)
				{
					$link=$this->ketnoi();
					$ketqua=mysql_query($sql,$link);
					mysql_close($link);
					$i=mysql_num_rows($ketqua);
					if($i>0)
					{	echo'<select name="tang" id="tang">';
						while($row=mysql_fetch_array($ketqua))
						{
							$id=$row['Sotang'];
							
							
							echo'<option value="'.$id.'">'.$id.'</option>';
							
							
						}
							echo' </select>';
							
					}
				}
				public function trangthai($sql)
				{
					$link=$this->ketnoi();
					$ketqua=mysql_query($sql,$link);
					mysql_close($link);
					$i=mysql_num_rows($ketqua);
					if($i>0)
					{	echo'<select name="tt" id="tt">';
						while($row=mysql_fetch_array($ketqua))
						{
							$id=$row['trangthai'];
							
							
							echo'<option value="'.$id.'">'.$id.'</option>';
							
							
						}
							echo' </select>';
							
					}
				}
				public function load_BV($sql)
				{
					$link=$this->ketnoi();
					$ketqua=mysql_query($sql,$link);
					mysql_close($link);
					$i=mysql_num_rows($ketqua);
					if($i>0)
					{	echo'<select name="BV" id="BV" style="width:200px;">';
						while($row=mysql_fetch_array($ketqua))
						{
							$id=$row['Tenbenhvien'];
							
							
							echo'<option value="'.$id.'">'.$id.'</option>';
							
							
						}
							echo' </select>';
							
					}
				}
				public function loadcombo_congty1($sql)
				{
					$link=$this->ketnoi();
					$ketqua=mysql_query($sql,$link);
					mysql_close($link);
					$i=mysql_num_rows($ketqua);
					if($i>0)
					{	echo'<select name="BV" id="BV">';
						while($row=mysql_fetch_array($ketqua))
						{
							$id=$row['Tenbenhvien'];
							
							
							echo'<option value="'.$id.'">'.$id.'</option>';
							
							
						}
							echo' </select>';
							
					}
				}
		public function themcty($sql,$idcty)
		{
			$link=$this->ketnoi();
			$ketqua= mysql_query($sql,$link);
			mysql_close($link);
			$i = mysql_num_rows($ketqua);
			if($i>0)
			{
				echo ' <select name="tt" id="tt">
        		<option>Chọn trạng thái</option>';
				while ($row=mysql_fetch_array($ketqua))	
				{
					$id=$row['Idtt'];
					$tencty=$row['trangthai'];
					
					if($id==$idcty)
					{
						
						echo'<option value="'.$id.'" selected="selected">'.$tencty.'</option>';
					}
					else
					{
						echo'<option value="'.$id.'">'.$tencty.'</option>';
					}
					
				}
				echo '</select>';
			}	
		
		}
		public function loadtk($sql)
	{
		$link=$this->ketnoi();
		$kq= mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($kq);
		if($i>0)
		{
		   
			while ($row=mysql_fetch_array($kq))
			{
		   	  
			   $username= $row['Tenbenhvien'];
			 echo '  <li >
			 <a   class="nav-link" href="Index_admin.php">';
			 echo substr($username,5);
			 echo '</a>
			  </li>';
			   }
			}
			else{
				echo 'Đăng nhập để có tài khoản';
			}	
		}
		
		public function load_xacnhanlichkham($sql)
	
		{
		$link=$this->ketnoi();
		$ketqua = mysql_query($sql,$link);
		mysql_close($link);
		$i = mysql_num_rows($ketqua);
		if($i>0)
		{
			echo '<table width="1045" height="106" class="table-striped" align="center">
                                         
                                          <tr>
                                            <th align="center" width="100"><div align="center">Mã lịch xác nhận </div></th>
                                            <th align="center"  width="400"><div align="center">Mã F0</div></th>
                                            <th align="center"  width="200"><div align="center">TenF0</div></th>
											
                                            <th align="center" width="400"><div align="center">Thời gian khám</div></th>
                                            
											<th align="center" width="150"><div align="center">Tình Trạng</div></th>
											
											
											<th align="center" width="300"></th>
                                            
                                          </tr>'; $dem=1;
			while($row = mysql_fetch_array($ketqua))
			{
				$Maxacnhan = $row['Maxacnhan'];
				$MaF0 = $row['MaF0'];
				$TenF0 = $row['TenF0'];
				$thoigian=$row['thoigian'];
				$tenbenhvien = $row['tenbenhvien'];
				$Tinhtrang = $row['Tinhtrangsuckhoe'];
				if($Tinhtrang==1)
				{
					$Tinhtrang='Đang chờ duyệt';
				}
				else if($Tinhtrang==2)
				{
					$Tinhtrang='Đã duyệt';
				}
				else{
					$Tinhtrang='Hủy';
				}
				
				
				echo '
            <tr>
                                           <td height="50"><div align="center">'.$dem.'</div></td>
                                           <td><div align="center">'.$MaF0.'</div></td>
                                           <td><div align="center">'.$TenF0.'</div></td>
                                           <td><div align="center">'.$thoigian.'</div></td>
										 
										   <td><div align="center">'.$Tinhtrang.'</div></td>
										   
										  <td>
										  
                                          <a align="center" href="phieuxacnhan.php?MaF0='.$MaF0.'"><h6 align="center" style="color:#73BE55;width:100px;">Xác nhận lịch</h6>
										  
										  
                                        </td>
										   
                                           
                                          </tr>'; 
										  $dem++;                             
			}
			echo '</table>';
		}
		else
		{
			echo'khong co du lieu ket noi';
		}
	}
	
			
}

?>