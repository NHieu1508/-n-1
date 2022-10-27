
<?php
include('class/ttn.php');
	$p= new tmdt();
?>
<?php

session_start();

//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (isset($_SESSION['CCCD'])){

    $email=$_SESSION['CCCD'];
} else{
	 header('Location:dangnhap.php');
}
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sign up</title>
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
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- awesome fontfamily -->
    </head>
    <style>
        .avatar {
                        /* Rounded border */
                        border-radius: 50%;
                        height: 32px;
                        width: 32px;
                    }

                    .avatar__image {
                        /* Rounded border */
                        border-radius: 50%;

                        /* Take full size */
                        height: 100%;
                        width: 100%;
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
    <body>
        <body class="main-layout">
    <!-- loader  -->
    

    <div class="wrapper">
        <!-- end loader -->

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="head-top">
                    <div class="container">

                        <div class="row">
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

<a class="nav-link" href="../nhung/trangchu.php"><svg style="margin:0 0 0 40px" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg>Trang chủ <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    
    <a class="nav-link" href='../tr/dkylichkham.php'><svg style="margin:0 0 0 50px" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg>Đăng kí lịch khám</a>

</li>


    
   
        <li class="nav-item">
<a class="nav-link" href='../nhung/khaibaoyte.php'><svg style="margin:0 0 0 40px" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-clipboard2-data" viewBox="0 0 16 16">
<path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
<path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
<path d="M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1Z"/>
</svg>Khai báo y tế<svg style="margin:0 0 0 3px; padding-top:5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></a>

</ul>

</li>
<li class="nav-item"><a class="nav-link" href="../Sang/i.php"><svg style="margin:0 0 0 40px" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg>In lịch khám</a>
</li>
       
     
        
   
</ul>
</li>







<li>        <div class="avatar">
                                            <!-- Avatar image -->
                                            <img class="avatar__image" src="images/anhdaidien.png" />
                                         
                                            </div>
                                            </a>
                                        
                                      
                                       
                                            
                                                                              </li>
                                                                              <li>

               
<?php 
    $p->loadten("select Ten from tokhaiyte where CCCD='$email'");
    ?> 
</li>
</ul>

    
</div>

</nav>
                    </div>
                </div>
                <!-- end header inner -->
            </header>
            <!-- end header -->
            <!-- start slider section -->
            <div class="slider_section banner_main">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="first-slide" src="images/ha.jpg" he alt="First slide">
                            <div class="container">
                                <div class="carousel-caption relative">
                                  
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="second-slide" src="images/ha.jpg" alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption relative">
                                    
                                   
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="third-slide" src="images/ha.jpg" alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption relative">
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- end slider section -->

            <!-- six_box-->
            <div id="about" class="about top_layer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pppp">
                            <div class="about_box">
                                <div class="about_box_text">
                                    <div class="title">
                                        <h2>Thông <strong class="black"> tin</strong></h2>
                                    </div>
                                    <p>Hệ thống ứng dụng hỗ trợ quy trình tiếp nhận, điều trị bệnh nhân Covid 19 với những chức năng cơ bản, hỗ trợ nhiều lớp người dùng. Phần mềm được doanh nghiệp ứng dụng vào khâu điều trị bệnh nhân, tiếp nhận bệnh nhân, nó giúp kiểm soát được tất cả hoạt động điều trị của bệnh nhân một cách nhanh chóng và chính xác. Những tính năng ưu việt này của hệ thống được tin tưởng và sử dụng. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 pppp">

                            <div class="about_box_img">
                                <figure><img src="images/POSTER-01.jpg" alt="#" /></figure>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end six_box-->

            <!-- We Do Yogas -->
            <div id="yoga" class="weyoga">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Tin tức <strong class="black">hôm nay </strong></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="yogo_three_box">
                                <figure><img src="images/5_ntsn.png" alt="#" /></figure>
                                <h3 ><a href="#">Covid 19</a></h3>
                                <p>Các bác sĩ, điều dưỡng của chúng tôi luôn luôn cố gắng hết sức để điều trị cho bệnh nhân covid 19</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="yogo_three_box">
                                <figure><img src="images/images.jpg" alt="#" /></figure>
                                <h3><a href="#">Kiệt sức</a></h3>
                                <p>Dù kiệt sức nhưng chúng tôi luôn luôn cố gắng
                                    <br>Để hoàn thành nhiệm vụ bảo vệ đất nước</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="yogo_three_box">
                                <figure><img src="images/anh.jpg" alt="#" /></figure>
                                <h3><a href="#">Tiêu diệt covid 19</a></h3>
                                <p>Hãy hành động vì hôm nay
                                    <br>Chúng tôi cần bạn </p>
                            </div>
                        </div>
                        <a class="readmore" href="#">Đọc thêm</a>
                    </div>
                </div>
            </div>
            <!-- end We Do Yogas -->
            <!-- your life yoga -->
            <div class="yourlifeyoga">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="yogatitle">
                                <h2>Tiếp nhận điều trị covid 19</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="yoga_img">
                                <figure><img src="images/anh.jpeg" alt="#" /></figure>
                                <p>Trong quá trình thăm khám nhẹ thì có thể điều trị tại nhà còn nặng thì sẽ nhập viện để điều trị theo yêu cầu của bác sĩ ở mức độ nặng nhẹ các tầng khác nhau trong hệ thống. Sau khi điều trị xong thì hệ thống sẽ cấp cho bệnh nhân giấy đã hết bệnh. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end your life yoga -->
            <!-- our pricing -->
            
            <!-- end our pricing -->

            <div id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Liên hệ  Nhân viên </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding">

                        <form class="main_form" method="post">
                            <div class="row">
 
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <input class="form-control" onclick="tuong()" type="text" placeholder="Nhập tên" id="txtten" name="txtUsername">
                                  <span id="tbHoTen" class="text-danger font-italic">*</span>
                           
                                </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                   
                                    <input onclick="linh()" class="form-control" type="text" placeholder="Nhập sđt" id="txtsdt" name="txtPassword">
                                                        <span id="tbSoDienThoai" class="text-danger font-italic">*</span>
                                                   
                                    
             </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input onclick="an()" class="form-control" type="text" id="txtEmail" name="txtEmail" placeholder="Nhập email của bạn" autocomplete="off"  class="form-control">
                                    <span id="tbEmail" class="text-danger font-italic">*</span>
                                 
                                </div>
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea onclick="hoa()" class="textarea" id="txtnd"  id="txtnd" placeholder="Noidung" type="text" name="txtFullname"></textarea>
                                    <span id="tbnd" class="text-danger font-italic">*</span>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send" onclick="nhung()" name="nut" value="Đăng ký">Gửi
                                    </button>
                                </div>
                               <br>
                               <br>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                  <marquee style="color:cornflowerblue">Hãy liên hệ với chúng tôi để chúng tôi hỗ trợ nhé ✿ </marquee>
                                  <?php
			switch($_POST['nut'])
			{
				case'Đăng ký':
				{
       
    //Khai báo utf-8 để hiển thị được tiếng việt
   // header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = $_POST['txtUsername'];
    $password   = $_POST['txtPassword'];
    $email      = $_POST['txtEmail'];
    $fullname   = $_POST['txtFullname'];
 
            if (!$username || !$password || !$email || !$fullname )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
	}
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
  
        // Mã khóa mật khẩu
     
          
	 //Kiểm tra user đã có người dùng chưa
    
 
    //Lưu thông tin thành viên vào bảng
    $addmember = $p->themxoasua("INSERT INTO lienhe (
            hoten,
            sodienthoai,
            email,
            noidung
           )
			
        VALUES (
            '$username',
            '$password',
            '$email',
            '$fullname'
          
              ) ");
                          
    //Thông báo quá trình lưu
    if ($addmember)
	{
        echo "Qúa trình liên hệ cho nhân viên thành công.Chờ tin nhắn của nhân viên qua email nhé";
	}
    else{
        echo "Có lỗi xảy ra trong quá trình liên hệ. <a href='trangchu.php'>Thử lại</a>";
         
				}
				}
				
				break;	
			}
			
			?>
                                </div>
                                
                            </div>                         
                  
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padddd">
                        <div class="map_section">
                            <img src="images/thap5tang.jpg" >
                            </div>
                        </div>
                                  
           
            
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer>
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
    </footer>
    <!-- end footer -->
    </div>
    </div>
  

</body>

</html>