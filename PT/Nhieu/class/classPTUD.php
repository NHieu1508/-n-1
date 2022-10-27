<?php
class tmdt 
{ 
	private function connect()
	{
		$con=mysql_connect ("localhost","nhom9","123456");
		if(!$con)
		{
			echo 'Khong ket noi csdl';
			exit(); 
			}
			else
			{
				mysql_select_db("covid"); 
				mysql_query("SET NAME UTF8");
				return $con;
				}
		}
		public function mylogin ($user,$pass)
		{
			$pass = md5($pass);
			$link = $this->connect();
			$sql = "select * from taikhoanbenhvien where username = '$user' and password = '$pass' limit 1";
			$ketqua = mysql_query($sql,$link);
			$i = mysql_num_rows($ketqua);
			if($i==1)
			{
			    while ($row=mysql_fetch_array ($ketqua))
				{
				    $id = $row['id'];
					$username = $row['username'];
					$password = $row['password'];
					$phanquyen = $row['phanquyen'];
					session_start ();
					$_SESSION['id'] = $id;
					$_SESSION['user'] = $username;
					$_SESSION['pass'] = $password;
					$_SESSION['phanquyen'] = $phanquyen;
					
				}
				return 1;
			}
			else
			{
			    return 0;
			}
		}
		public function confirmlogin($id,$user,$pass,$phanquyen)
		{
			$link = $this->connect();
			$sql = "select id from taikhoanbenhvien where id='$id' and username='$user' and password ='$pass' and phanquyen ='$phanquyen' limit 1 ";
			$ketqua = mysql_query ($sql,$link);
			$i = mysql_num_rows ($ketqua);
			if($i!=1)
			{
				
				header('Location:Login_PTUD.php');
			}
		}

		public function loadten($sql)
		{
			$link=$this->connect();
			$ketqua= mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
			{
			   
				while ($row=mysql_fetch_array($ketqua))
				{
					 
				   $username= $row['username'];
				   $Tenbv=$row['Tenbenhvien'];
				   
				   echo '  <li  class="nav-item">
			 <a    style="margin:8px 0 0 0" class="nav-link" href="Index_admin.php">';
			 echo substr($Tenbv,10);
			 echo '</a>
			  </li>';
				   }
				}
				else{
					echo 'Đăng nhập để có tài khoản';
				}
		}	
		public function layusername($username)
			{
				$link=$this->connect();
				$sql="select username from taikhoanbenhvien where username = '$username'";
				$ketqua=mysql_query($sql,$link);
				mysql_close($link);
			    $i=mysql_num_rows($ketqua);
				if($i!='')
				{
					return 1;
				}
				else
				{
					return 0;
				}

			}
			public function timkiemlichkham($search)
	{
				
				if(empty($search))
				{
					echo '<p style="color:red"> Vui lòng nhập thời gian để tìm kiếm!!!</p>';
				}
				else
				{
                	$query = "select * from lichkham where thoigian  like '%$search%'";
					$link= $this->connect();
					$sql= mysql_query($query);
					$num = mysql_num_rows($sql);
					if ($num > 0 && $search != "") 
					{
						  
						echo '<table  width="623" border="1" align="center" cellpadding="2" cellspacing="4">
    <tr height="40" bgcolor="whitẻ">
      <td style="color:#0F6"  width="222" align="center"><strong>TÊN BỆNH NHÂN</strong></td>
      <td style="color:#0F6" width="165" align="center"><strong>THỜI GIAN</strong></td>
      <td  style="color:#0F6"width="200" align="center"><strong>ĐỊA ĐIỂM</strong></td>
    </tr>';
						while ($row = mysql_fetch_array($sql)) 
						{
						 $MaLich=$row['Malich'];
					$TenBenhNhan=$row['TenF0'];
					$ThoiGian=$row['thoigian'];
					
					echo '<tr style="text-align:center" height="40">
      <td style="color:#0F6"><strong>'.$TenBenhNhan.'</strong></td>
      <td style="color:#0F6"><strong>'.$ThoiGian.'</strong></td>
      <td style="color:#0F6"><strong>'.$DiaDiem.'</strong></td>
    </tr>';
						}
						echo '</table>';
							
					}
					else
					{
						echo '<p style="color:red"> Không tìm thấy kết quả!!!</p>';
					}
				}
	}
		public function loadTrangThai($sql)
		{
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i= mysql_num_rows($ketqua);
			if($i>0)
			{
				echo ' <select name="txtTT" id="txtTT">
                        ';
				while ($row=mysql_fetch_array($ketqua))
				{
				    $MaF0=$row['MaF0'];
					$TT=$row['Tinhtrang'];
					echo ' <option value="'.$TT.'">'.$TT.'</option>';
				}
					
				}
				echo '</select>';
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
				$i = mysql_num_rows ($ketqua);
				if($i>0)
				{
					echo'<table   width="1485" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr bgcolor="#99FF66">
    <td width="41" height="55" align="center"><strong>STT</strong></td>
    <td width="132" align="center"><strong>Họ Tên</strong></td>
    <td width="87" align="center"><strong>Năm Sinh</strong></td>
    
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
						$HoTen=$row['TenF0'];
						$NamSinh=$row['TuoiF0'];
						$Provincial=$row['Quan/Huyen'];
						$District=$row['Phuong/Xa'];
						$Ward=$row['Ward'];
						$DiaChi=$row['Diachi'];
						$SDT=$row['SDT'];
						$CMND=$row['CMND'];
						$Tang=$row['Sotanghientai'];
						$TT=$row['Tinhtrang'];
	echo '<tr>
    <td height="44">'.$dem.'</td>
    <td><a href="?MaF0='.$MaF0.'">'.$HoTen.'</a></td>
    <td>'.$NamSinh.'</td>
   
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
			public function laycot($sql)
			{
				$link=$this->connect();
				$ketqua=mysql_query($sql,$link);
				mysql_close($link);
			    $i=mysql_num_rows($ketqua);
				$kq='';
				if($i>0)
				{
					while ($row=mysql_fetch_array($ketqua))
					{
						$MaF0=$row['0'];
						$kq=$MaF0;
					}
				}
				return $kq;
			}
		public function timkiem($search)
	{
				
				if(empty($search))
				{
					echo 'Vui lòng nhập số CMND để tìm kiếm!!!';
				}
				else
				{
                	$query = "select * from f0 where CMND  like '%$search%'";
					$link= $this->connect();
					$sql= mysql_query($query);
					$num = mysql_num_rows($sql);
					if ($num > 0 && $search != "") 
					{
						  
						echo'<table width="1485" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr bgcolor="#99CC99">
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
						while ($row = mysql_fetch_array($sql)) 
						{
						$MaF0=$row['MaF0'];
						$HoTen=$row['HoTen'];
						$NamSinh=$row['NamSinh'];
						$Provincial=$row['Provincial'];
						$District=$row['District'];
						$Ward=$row['Ward'];
						$DiaChi=$row['DiaChi'];
						$SDT=$row['SDT'];
						$CMND=$row['CMND'];
						$Tang=$row['SoTang'];
						$TT=$row['TrangThai'];
							echo '<tr>
    <td height="44">'.$dem.'</td>
    <td><a href="?MaF0='.$MaF0.'">'.$HoTen.'</a></td>
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
						echo 'Không tìm thấy kết quả!!!';
					}
				}
	}
}

?>