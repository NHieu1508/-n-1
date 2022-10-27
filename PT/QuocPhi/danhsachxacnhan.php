<?php 
include("Php/php.php");
$p= new ptud();
session_start();


if (isset($_SESSION['username'])){

    $mabv=$_SESSION['username'];
}
else{
	 header('Location:../Nhieu/Login_PTUD.php');
} 



?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Danh sách lịch khám yêu cầu</title>
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
        <script src="../js/jquery-3.6.0.min.js"></script>
    	<script src="../js/bootstrap.js"></script>
        <script>
    var today = new Date();
    document.getElementById("txtnyc").innerHTML = today;
 </script>
      	 <script>
              $(document).ready(function()
               { 
                var tht=$("#txttht");
                var tyc=$("#txttyc option:selected").val();
                var sotyc=tyc.substr(0,1);
                var edt=$("#edt");
                if(tht>=sotyc)
                {
                    edt.html("yeu cau chon benh vien phu hop")
                }
                else
                {

                }
                
                return true;

              })
          </script>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
         
         
    </head>
<body class="main-layout">
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

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
                <?php $p->loadtk("select Tenbenhvien from  benhvien where Mabenhvien='$mabv'")?>
            </li>
            
            
            
           
        </ul></li>
   
</ul>
</li>

</ul>
<form id="search">
                        <input type="text" name="TenF0" placeholder="Nhập tên F0">
                    </form>
</div>

</nav>
                    </div>
                </div>
                <!-- end header inner -->
            </header>
            <!-- end header -->
              <!-- start slider section -->
              
            <div id="about" class="about top_layer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 pppp">
                            <div class="about_box">
                                <div class="about_box_text">
                                    <div class="title">
                                       
                                       	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p></p><p>&nbsp;</p></p><p>&nbsp;</p>
                                       
<h1 align="center"><strong>Danh Sách Lịch Khám </strong></h1>                                        <p>
                                          <?php  
										  $tenf0=$_REQUEST['TenF0'];
										  if(isset($_REQUEST['TenF0'])){
											  $p->load_xacnhanlichkham("select * from lichkham where TenF0 LIKE '%$tenf0%' order by TenF0 asc ");
											  }
											  else{
										  $p->load_xacnhanlichkham("SELECT *
FROM lichkham order by Tinhtrangsuckhoe asc  ");}?>
                                        </p>
                                        <p>&nbsp;</p>
                                    </div>
                                   
                                     
                                            
                                </div>
                            </div>
                        </div>
                </div>
            </div>
           
            
                                           
           

            <p>&nbsp;</p>
         
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            

            
            <!-- footer -->
            
       <footer>
        <div class="footer">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <p>© 12 NguyenVanBao Phường 4 Quận Gò Vấp hân hạnh được đón tiếp bệnh nhân
                                <br>Điện thoại: (028) 39 23 46 29
                               <br>Nhom chịu trách nhiệm:Team Gì Cũng Được
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
 var today = new Date();
 var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
 var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
 document.getElementById("hvn").innerHTML = date;
</script>
    </footer>

    
     <!-- Javascript files-->
     <script src="js/jquery.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
 
     <script src="js/jquery-3.0.0.min.js"></script>
     <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
 
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
 
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
     </script>
 
     <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
             var map = new google.maps.Map(document.getElementById('map'), {
                 zoom: 11,
                 center: {
                     lat: 40.645037,
                     lng: -73.880224
                 },
             });
 
             var image = 'images/maps-and-flags.png';
             var beachMarker = new google.maps.Marker({
                 position: {
                     lat: 40.645037,
                     lng: -73.880224
                 },
                 map: map,
                 icon: image
             });
         }
     </script>
     <!-- google map js -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
     <!-- end google map js -->
</body>
</html>
