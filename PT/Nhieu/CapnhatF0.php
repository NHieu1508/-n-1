<?php

include ("./class/classPTUD.php");
$p = new tmdt();
$layid=0;
if(isset($_REQUEST['MaF0']))
{
	$layid=$_REQUEST['MaF0'];

} 

?>
<?php

session_start();


if (isset($_SESSION['username'])){

    $username=$_SESSION['username'];
}
else{
	 header('Location:Login_PTUD.php');
} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Website F0</title>
<!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>

<style type="text/css">
body{
	   
        position: relative;
	}
#txtSearch
{
margin:  auto;
  width: 300px;
  height: 40px;
}
 *{
    padding: 0px;
    margin: 0px;
    font-family: sans-serif;
    box-sizing: border-box;
}
.container{
    width: 100%;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}
.col-6{
    float: left;
    width: 50%;
}
.margin_b{
    margin-bottom: 7.5px;
}
.clear{
    clear: both;
}
header{
    
    min-height: 70px;
    padding: 15px;
}
main{
    background-color: #dddddd;
    min-height: 300px;
    padding: 7.5px 15px;
}
footer{
    background-color: #cccccc;
    min-height: 70px;
    padding: 15px;
}
h1{
    color: #009999;
    font-size: 20px;
    margin-bottom: 30px;
}

.register-form{
    width: 100%;
    max-width: 400px;
    margin: 20px auto;
    background-color: #ffffff;
    padding: 15px;
    border: 2px dotted #cccccc;
    border-radius: 10px;
}

.input-box{
    margin-bottom: 10px;
}
.input-box input[type='text'],
.input-box input[type='password'],
.input-box input[type='date']{
    padding: 7.5px 15px;
    width: 100%;
    border: 1px solid #cccccc;
    outline: none;
    font-size: 16px;
    display: inline-block;
    height: 40px;
    color: #666666;
}
.input-box select{
    padding: 7.5px 15px;
    width: 100%;
    border: 1px solid #cccccc;
    outline: none;
    font-size: 16px;
    display: inline-block;
    height: 40px;
    color: #666666;
}
.input-box option{
    font-size: 16px;
}
.input-box input[type='checkbox']{
    height: 1.5em;
    width: 1.5em;
    vertical-align: middle;
    line-height: 2em;
}
.input-box textarea{
    padding: 7.5px 15px;
    width: 100%;
    border: 1px solid #cccccc;
    outline: none;
    font-size: 16px;
    min-height: 120px;
    color: #666666;
}
.btn-box{
    text-align: right;
    margin-top: 30px;
}
.btn-box button{
    padding: 7.5px 15px;
    border-radius: 2px;
    background-color: #009999;
    color: #ffffff;
    border: none;
    outline: none;
}
#main_menu>li{ float: left; text-align:center; margin-left:20px; }
#main_menu>li:last-child{ border-right: none;}
#main_menu li{ position: relative;}
#main_menu>li a{display: block; text-transform: none; padding: 40px;}
#main_menu>li>a{ text-transform: uppercase;}
#main_menu>li>a{ display: block; padding: 20px;}

#main_menu li .sub_menu{ position: absolute; display: none;
width: 300px;
background: #f5f5f5;


left: 100%;
}
#main_menu li:hover>.sub_menu { display: block;}
#main_menu>li>.sub_menu{top: 55px;position: absolute;
left: 0px;}
#main_menu li:hover{ color:#FFFFFF;}

#search input[type='text']{width: 139px;

padding: 5px;
outline: none;
background: #2fa535;
background: url(../images/search.png) no-repeat 106px 2px;
border: none;
background-size: 28px;}


/*this is style main_content*/
#main_content { min-height: 450px;}
#main_content .info_page p{ text-align: center; text-transform: uppercase; }
#main_content .info_page p:first-child{
color: #f00;

}
#main_content .info_page p:last-child{ color: #E48585;}
#main_menu{
    text-align: center;
}
</style>

</head>


<body class="main-layout">
 <div class="wrapper">
        <!-- end loader -->

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="head-top">
                    <div class="container">

                        <div  class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="email">
                                    <a href="#"><img src="images/mail_icon.png" /> Email : boyte@gmail.com</a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logoo.png" /></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="contact_nu">
                                    <a href="#"> <img src="images/phone_icon.png" /> Contact : +04. 62732160</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="bg">
                <div class="container">
                <nav class="navigation navbar-expand-md  navbar-dark ">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExample04">

   
        <ul id="main_menu">
        <li class="nav-item active">

<a class="nav-link" href="../Nhieu/Index_admin.php"><svg style="margin:0 0 0 40px" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg>Trang chủ <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    
    <a class="nav-link"><svg style="margin:0 0 0 50px" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg>Bệnh nhân</a>
<ul class="sub_menu">
    <li><a href="../QuocPhi/giayyeucauchuyen.php">Chuyển bệnh nhân</a></li>
    <li><a href="../Nhieu/CapnhatF0.php">Cập nhật thông tin F0</a>
    <li><a href="../QuocPhi/danhsachF0.php">Danh Sách Đăng kí khám</a>
    <li><a href="../Sang/TiepnhanF0.php">Tiếp nhận bệnh nhân</a>
           
</ul>
</li>


    
   
        <li class="nav-item">
<a class="nav-link"><svg style="margin:0 0 0 40px" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-clipboard2-data" viewBox="0 0 16 16">
<path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
<path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
<path d="M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1Z"/>
</svg>Thống kê<svg style="margin:0 0 0 3px; padding-top:5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></a>
<ul class="sub_menu">
<li>
<a  href="../Thi/thongkef0.php">Thống kê F0</a>
</li>
<li>
<a  href="../Thi/QLf0benhvien.php">Quản lý F0</a>
</li>
</ul>

</li>
<li class="nav-item"><a class="nav-link" href="../tr/taikhoanbv.php"><svg style="margin:0 0 0 40px" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg>tài khoản</a>
</li>
       
     
        <li><a href=""><img src="images/anhdaidien.png" width="25" height="40" class="avatar__image"   /></a>
     <ul class="sub_menu">
    
            <li>
            <?php 
    $p->loadten("select username from taikhoanbenhvien where username = '$username'");
    ?>
            </li>
            
            
            
           
        </ul></li>
   
</ul>
</li>

</ul>


</div>

</nav>
                  </div>
                </div>
                <!-- end header inner -->
            </header>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br />      
<div align="center">
<form id="form1" name="form1" method="post" action="CapnhatF0.php">
  <table width="613" border="1" align="center" cellpadding="3" cellspacing="5">
  <tr>
    <td><table width="613" border="1" align="center" cellpadding="0" cellspacing="5">
      <tr>
        <td height="49" colspan="2"bgcolor="#99CC99" align="center"><h3><strong>CẬP NHẬT THÔNG TIN F0</strong></h3></td>
      </tr>
       <tr>
        <td><strong>Mã F0</strong></td>
        <td>
        <label for="txtMaF0"></label>
          <input style="background-color:#CCC" readonly="readonly" type="text" name="txtMaF0" id="txtMaF0" value="<?php echo $layid; ?>" /></td>
        </td>
      </tr>
      <tr>
        <td width="203"><strong>Họ tên</strong>
         </td>
        <td width="389"><input  type="text"  placeholder="Nguyen Van A"  id="txtTen" name="txtTen" value="<?php echo $p->laycot("select TenF0 from f0 where MaF0='$layid' limit 1") ?>" />
         
      </tr>
      <tr>
        <td><strong>Năm sinh</strong></td>
        <td><input  type="text" name="txtNamSinh" id="txtNamSinh" value="<?php echo $p->laycot("select TuoiF0 from f0 where MaF0='$layid' limit 1") ?>" /></td>
      </tr>
      <tr>
        
      </tr>
      
      <tr>
        <td><strong>Địa chỉ</strong></td>
        <td><input  value="<?php echo $p->laycot("select Diachi from f0 where MaF0='$layid' limit 1") ?>" name="txtDiachi" placeholder="Tên đường,Số nhà..." type="text" id="txtDiachi" size="50" maxlength="100" /></td>
      </tr>
      <tr>
        <td><strong>Số điện thoại</strong> </td>
        <td><input style="background-color:#CCC" readonly="readonly" name="txtSdt" placeholder="09/03/07-1234-5678" type="text" id="txtSdt" maxlength="10" value="<?php echo $p->laycot("select SDT from f0 where MaF0='$layid' limit 1") ?>" />
     </td>
      </tr>
      <tr>
        <td><strong>CMND</strong></td>
        <td><input style="background-color:#ccc" readonly="readonly" value="<?php echo $p->laycot("select CMND from f0 where MaF0='$layid' limit 1") ?>" name="txtCMND"  placeholder="123456789" type="text" id="txtCMND" maxlength="9" />
          </td>
      </tr>
      <tr>
        <td><strong>Số tầng</strong></td>
        <td><input type="text" style="background-color:#ccc" readonly id="txtTang" name="txtTang" value="<?php echo $p->laycot("select 	Sotanghientai from f0 where MaF0='$layid' limit 1") ?>" /></td>
      </tr>
      <tr>
        <td><strong>Trạng Thái</strong></td>
        
        <td>
        <?php $p->loadTrangThai('select MaF0,Tinhtrang from f0 order by MaF0 asc'); ?>
</td>
      </tr>
      <tr>
        <td height="50px" colspan="2" align="center" valign="middle" bgcolor="#99CC99">
          <button value="Xóa" name="btn" type="submit" class="btn btn-danger">Xóa</button>
          <button value="Sửa" name="btn"  type="submit" class="btn btn-primary">Sửa</button></td>
      </tr>
    </table></td>
  </tr>
  </table>
  
 <div align="center" > 
<?php
switch ($_POST['btn'])
	{
		case 'Xóa':
		{
			$MaF0Xoa=$_REQUEST['txtMaF0'];
			if($MaF0Xoa>0)
			{
				if($p->themxoasua("delete from f0 where MaF0 ='$MaF0Xoa' limit 1")==1)
				{
					echo ' <p style="color:green; font-size:1.6rem;"><strong>Xóa Thành Công</strong></p>';
				}
				else
				{
					echo'<p style="color:red; font-size:1.6rem;"><strong>Xóa không thành công</strong></p>';
				}
			}
			else
			{
				echo '<p style="color:blue; font-size:1.6rem;"><strong>Chọn F0 cần xóa thông tin</strong></p>';
			}
			break;
		}
			case 'Sửa':
		{
            
			$MaF0sua=$_REQUEST['txtMaF0'];
			$HoTen=$_REQUEST['txtTen'];
			$NamSinh=$_REQUEST['txtNamSinh'];
			$Provincial=$_REQUEST['Provincial'];
			$District=$_REQUEST['District'];
			$Ward=$_REQUEST['Ward'];
			$DiaChi=$_REQUEST['txtDiachi'];
			$SDT=$_REQUEST['txtSdt'];
			$CMND=$_REQUEST['txtCMND'];
			$Tang=$_REQUEST['txtTang'];
			$TT=$_REQUEST['txtTT'];
            
			if($MaF0sua>0)
			{
				if($p->themxoasua("UPDATE f0 SET
TenF0 ='$HoTen',
TuoiF0 = '$NamSinh',

Diachi = '$DiaChi',
SDT = '$SDT',
CMND = '$CMND',
Sotanghientai = '$Tang',
Tinhtrang = '$TT' WHERE MaF0 = '$MaF0sua' LIMIT 1")==1)
				{
					echo '<p style="color:green; font-size:1.6rem;"><strong>Sửa thành công</strong></p>'; 
				}
				else
				{
					echo '<p style="color:red; font-size:1.6rem;"><strong>Sửa không thành công</strong></p>';
				}
			}
			else
			{
				echo'<p style="color:blue; font-size:1.6rem;"><strong>Chọn F0 cần sửa thông tin</strong></p>';
			}
			break;
		}
		
	}
?>
</div>
<div style="margin-top:20px" align="center"> <h3><strong>TÌM KIẾM THÔNG TIN F0</strong></h3></div>
  <div id="txtSearch" class="input-group">
  
   <input placeholder="Nhập CMND" name="txtSearch" type="search"  class="form-control" />
  
  <button  name="btnSearch" value="search" type="submit" class="btn btn-primary">Search</button>
  </div>
<div align="center">
  <?php
  if(isset($_REQUEST['btnSearch']))
  {
	  $search = $_REQUEST['txtSearch'];
		$p->timkiem($search); 	 
  }
  ?>
  </div>
  <div style="margin-top:20px" align="center"><h3><strong>DANH SÁCH F0</strong></h3>
  <?php
  $p->load_ds("select * from f0 order by MaF0 desc");
  ?>
  </div>  
</form>
</div>
 </div>
                       </div>
                      
                       </div>
                       <br>
                       <br>
                       <br>
                       <br>
                       <br>
                       <br>
                       <div class="footer">
                        <div class="copyright">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <p>© 12 NguyenVanBao Phường 4 Quận Gò Vấp hân hạnh được đón tiếp bệnh nhân
                                            <br>Điện thoại: (028) 39 23 46 29
                                           <br>Người chịu trách nhiệm:Team Gì Cũng Được
                                           <br><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Đường 1234 Phan Văn Trị<br />
                                            Quận Gò Vấp,Thành Phố Hồ Chí Minh<br>
                                            <i class="fa fa-envelope" aria-hidden="true"></i> <span>boyte@gmail.com</span>
                                            <br><i class="fa fa-phone-square" aria-hidden="true"></i> <span>012-345-6789</span>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <ul class="social_icon" style="padding-left: 470px;">
                                                    <li> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></li>
                                                    <li> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></li>
                                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></li>
                                                </ul>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
   
    <!-- end google map js -->

</body>
 <tbody>

                </tbody>


</html>