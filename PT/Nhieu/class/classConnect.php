<?php
class PTUD 
{ 
	private function connect()
	{
		$con=mysql_connect ("localhost","PTUD","123456");
		if(!$con)
		{
			echo 'Khong ket noi csdl';
			exit(); 
			}
			else
			{
				mysql_select_db("ptud"); 
				mysql_query("SET NAME UTF8");
				return $con;
				}
		}
		public function themxoasua($sql)
			{
				$link=$this ->connect ();
				if(mysql_query($sql,$link)) 
				{
					return 1;
				}
				else
				{
				    return 0;	
				}
			}
			public function load_ds($sql)
			{
				$link=$this ->connect ();
				$ketqua = mysql_query($sql,$link);
				mysql_close($link);
				$i = mysql_num_rows($ketqua);
				if($i>0)
				{
					echo'<table width="1485" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td width="41" height="55" align="center"><strong>STT</strong></td>
    <td width="132" align="center"><strong>Họ Tên</strong></td>
    <td width="87" align="center"><strong>Năm Sinh</strong></td>
    <td width="122" align="center"><strong>Tỉnh/Thành Phố</strong></td>
    <td width="97" align="center"><strong>Quận/Huyện</strong></td>
    <td width="94" align="center"><strong>Phường/Xã</strong></td>
    <td width="256" align="center"><strong>Địa Chỉ</strong></td>
    <td width="134" align="center"><strong>SĐT</strong></td>
    <td width="149" align="center"><strong>CMND</strong></td>
    <td width="81" align="center"><strong>Số Tầng</strong></td>
    <td width="222" align="center"><strong>Trạng Thái</strong></td>
  </tr>';
  $dem =1;
					
					while($row =mysql_fetch_array($ketqua))
					{
						$MaF0=$row['MaF0'];
						$HoTen=$row['HoTen'];
						$NamSinh=$row['NamSinh'];
						$Provincial=$row['Tinh/TP'];
						$District=$row['Quan/Huyen'];
						$Ward=$row['Phuong/Xa'];
						$DiaChi=$row['DiaChi'];
						$SDT=$row['SDT'];
						$CMND=$row['CMND'];
						$Tang=$row['SoTang'];
						$TT=$row['TrangThai'];
						echo '<tr>
    <td height="44">'.$dem.'</td>
    <td>'.$HoTen.'</td>
    <td>'.$NamSinh.'</td>
    <td>'.$Provincial.'</td>
    <td>'.$District.'</td>
    <td>'.$Ward.'</td>
    <td>'.$DiaChi.'</td>
    <td>'.$SDT.'</td>
    <td>'.$CMND.'</td>
    <td>'.$Tang.'</td>
    <td>'.$TT.'</td>
  </tr>';
  $dem++;
							
					}
					echo '</table>';
				}
				else
				{
					echo 'Không có dữ liệu';
				}
			}
		
}

?>