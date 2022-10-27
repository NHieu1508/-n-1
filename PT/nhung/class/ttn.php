<?php
class tmdt
{
	public function connect()
	{
    $conn = mysql_connect('localhost','nhom9','123456');
        if (!$conn){
	       echo 'khong the ket noi';
	       exit();
            }
        else
         {
            mysql_select_db('covid');
           mysql_query ("SET NAMES UTF8");
		
		   return $conn;
           }
	}
	public function themxoasua($sql)
	{
	    $link = $this->connect();
		if(mysql_query($sql,$link))
		{
			return 1;
		}
		else 
		{
			return 0;
		}
		
	}
	public function layuserpass($email,$password)
	{
		//$password = md5($password);
	    $link = $this->connect();
		$sql = "select CCCD, SDT from tokhaiyte where CCCD='$email' and SDT='$password'" ;
	    $ketqua= mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($ketqua);
		if($i==1)
		{
			while ($row=mysql_fetch_array($ketqua))
			{
		     $email= $row['CCCD'];
		     $password= $row['SDT'];
			 session_start();
			 $_SESSION['CCCD']=$email;
		     $_SESSION['SDT']=$password;
			}
			return 1;
		}
		else 
		{
			return 0;
		}
	}
	public function luachon($sql)
		{
			$link=$this->connect();
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
					$link=$this->connect();
					$ketqua=mysql_query($sql,$link);
					mysql_close($link);
					$i=mysql_num_rows($ketqua);
					if($i>0)
					{	echo'<select name="Tenquan" id="Tenquan">';
						while($row=mysql_fetch_array($ketqua))
						{
							$id=$row['Tenquan'];
							
							
							echo'<option value="'.$id.'">'.$id.'</option>';
							
							
						}
							echo' </select>';
							
					}
				}
				public function diachi($sql)
				{
					$link=$this->connect();
					$ketqua=mysql_query($sql,$link);
					mysql_close($link);
					$i=mysql_num_rows($ketqua);
					if($i>0)
					{	echo'<select name="dc" id="dc">';
						while($row=mysql_fetch_array($ketqua))
						{
							$id=$row['diachi'];
							
							
							echo'<option value="'.$id.'">'.$id.'</option>';
							
							
						}
							echo' </select>';
							
					}
				}
				public function load_BV($sql)
				{
					$link=$this->connect();
					$ketqua=mysql_query($sql,$link);
					mysql_close($link);
					$i=mysql_num_rows($ketqua);
					if($i>0)
					{	echo'<select name="BV" id="BV" style="width:200px;">';
						while($row=mysql_fetch_array($ketqua))
						{
							$id=$row['Tenphuong'];
							
							
							echo'<option value="'.$id.'">'.$id.'</option>';
							
							
						}
							echo' </select>';
							
					}
				}
				public function loadcombo_congty1($sql)
				{
					$link=$this->connect();
					$ketqua=mysql_query($sql,$link);
					mysql_close($link);
					$i=mysql_num_rows($ketqua);
					if($i>0)
					{	echo'<select name="BV" id="BV">';
						while($row=mysql_fetch_array($ketqua))
						{
							$id=$row['Tenphuong'];
							
							
							echo'<option value="'.$id.'">'.$id.'</option>';
							
							
						}
							echo' </select>';
							
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
		   	  
			   $name= $row['Ten'];
			 echo '  <li class="nav-item">
			 <a class="nav-link" href="bt1.php">'.$name.'</a>';
			   echo '</li>';
			   }
			}
			else{
				echo 'Đăng nhập để có tài khoản';
			}
	}	
	 public function loademail($email)
	{
		//$pass = md5('password');
	    $link = $this->connect();
		$sql = "select CCCD from tokhaiyte where CCCD='$email'" ;
	    $ketqua= mysql_query($sql,$link);
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
	
}
?>