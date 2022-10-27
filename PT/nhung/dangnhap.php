<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Log in</title>
            <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>flexed</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    
<style>
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


</style>
<body>
     <div class="container">
                <div class="login-form" align="center" >
                    <form action="" method="post">
                        <br>
                        <h1 style="text-align: center;">ĐĂNG NHẬP</h1>
                        <div class="input-box">
                            <i ></i>
                            <div class="col-8" style="text-align: left;"><b>Username:</b>
                            <input type="text" placeholder="Nhập cccd/cmnd" required="required" name='txtUsername' >
                        </div>
                        </div>
                        <br>
                        <div class="input-box">
                            <i ></i>
                            <div class="col-8"style="text-align: left;"><b>Password:</b>
                            <input type="password" placeholder="Nhập số điện thoai" required="required" name='txtPassword'>
                        </div>
                        </div>
                      
                    
                        <div class="btn-box" style="padding-right: 30px;;">
                           
                            <button type="submit" class="btn btn-dark" name="nut" value='Đăng nhập' >
                                Đăng nhập
                            </button>
                        
                        </div>
                        <br>
                        <br>
                   <p style="text-align: center;">Lưu ý: Trước khi đăng nhập phải <a href="bttt.php">Khai báo y tế</a></p>
       
                <?php
			switch($_POST['nut'])
			{
				case'Đăng nhập':
				{
				
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

    //Kết nối tới database
    include('class/ttn.php');
	$p= new tmdt();
     
    //Lấy dữ liệu nhập vào
    $email = ($_REQUEST['txtUsername']);
    $password = ($_REQUEST['txtPassword']);
//

     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if ($email!='' && $password !='') {
      if ($p->layuserpass($email,$password)==1)
	     {
            $_SESSION['CCCD'] = $email;
            echo "Xin chào " . $email . ". Bạn đã đăng nhập thành công.";
			header('location:trangchu.php');
			  $p->themxoasua("INSERT INTO taikhoan (
            
                username,
                password)
             
                
            VALUES (
                '$email',
                '$password')
             ");
         }
	 else
		 {
              echo "Tên đăng nhập hoặc password không tồn tại. Vui lòng kiểm tra lại";
		 }
	}
	else
	{	
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu";
    }
				
				break;	
				}
			}
			
			?>
              
                        
              
              
              
              
         </form>
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
                                                    <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                    <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </body>
</html>