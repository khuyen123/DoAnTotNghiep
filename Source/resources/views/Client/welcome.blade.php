<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sự kiện số | Trang chủ</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
          
            <a href="{{Route('login')}}" class="bk-btn">Đăng nhập</a>
                            <a href="{{Route('sigup')}}" class="bkj-btn">Đăng ký</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
            <li class="active"><a href="{{route('home')}}">Trang chủ</a></li>
                                    <li><a href="{{route('client_events')}}">Sự kiện</a></li>
                                    <li><a href="{{route('creator')}}">Ban tổ chức</a></li>
                                    <li><a href="{{route('aboutus')}}">Về chúng tôi</a>
                
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
       
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (+84) 336482917</li>
            <li><i class="fa fa-email"></i> khuyenphamno0@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                        <li><i class="fa fa-phone"></i> (+84) 336482917</li>
            <li><i class="fa fa-envelope"></i> khuyenphamno0@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                        <a href="{{Route('login')}}" class="bk-btn">Đăng nhập</a>
                            <a href="{{Route('sigup')}}" class="bkj-btn">Đăng ký</a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="/">
                                <img style="width:90px;height:90px" src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="/">Trang chủ</a></li>
                                    <li><a href="{{route('client_events')}}">Sự kiện</a></li>
                                    <li><a href="{{route('creator')}}">Ban tổ chức</a></li>
                                    <li><a href="{{route('aboutus')}}">Về chúng tôi</a>
                                        
                                    </li>
                                    
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Sự kiện số</h1>
                        <p>Đây là trang web giúp bạn có thể mua vé tham gia sự kiện một cách nhanh chóng và thuận tiện.</p>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Sự kiện phù hợp</h3>
                        <form action="#">
                            <div class="check-date">
                                <label for="cus_yearold">Độ tuổi của bạn:</label>
                                <input type="text" class="search-input" id="cus_yearold">
                            </div>
                            <!-- <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class="icon_calendar"></i>
                            </div> -->
                            
                            <div class="check-date">
                                <label for="number_cus">Số người đi cùng bạn:</label>
                                <input type="number" class="search-input" id="number_cus">
                            </div>
                            <div class="select-option">
                                <label for="cus_cate">Hình thức sự kiện mà bạn muốn:</label>
                                <select id="cus_cate">
                                    <option value="">Lễ hội âm nhạc</option>
                                    <option value="">Đấu giá từ thiện</option>
                                    <option value="">Cắm trại dã ngoại</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="cus_provice">Chọn thành phố mà bạn sống:</label>
                                <select id="cus_provice">
                                    <option value="">Đà Nẵng</option>
                                    <option value="">Quảng Nam</option>
                                </select>
                            </div>
                            <button type="submit">Kiểm tra</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>Về chúng tôi</span>
                            <h2>Sự kiện số <br />Nơi tạo ra những ký ức tươi đẹp</h2>
                        </div>
                        <p class="f-para">Sự Kiện Số là trang web được tạo ra
                                    với hy vọng là nơi có thể giúp các Nhà tổ chức 
                                    có thể quản lý và phát triển sự kiện của mình 
                                    một cách dễ dàng và có khoa học hơn. </p>
                        <p class="s-para">Mỗi ngày, chúng ta đều có rất nhiều sự kiện diễn ra như 
Show ca nhạc, cắm trại, dã ngoại, từ thiện,... 
mà việc mua vé và đăng ký tham gia vẫn chủ yếu 
được thực hiện bằng giấy tờ. 
Vì vậy, trang web này được tạo ra để việc đó trở nên dễ dàng hơn.</p>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="img/about/about-1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="img/about/about-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Sự kiện nổibật</span>
                        <h2>Sự kiện nổi bật đang diễn ra</h2>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b1.jpg">
                            <div class="hr-text">
                                <h3>Cắm trại</h3>
                                <h2>150.000 VNĐ<span>/Vé</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Địa điểm:</td>
                                            <td>Đà Nẵng</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Hình thức vé:</td>
                                            <td>Vé vào cổng</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Độ tuổi:</td>
                                            <td>Lớn hơn 15</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Tình trạng:</td>
                                            <td>Còn vé</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Hoạt động:</td>
                                            <td>Còn hoạt động</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">Đặt vé ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b2.jpg">
                            <div class="hr-text">
                                <h3>Đêm nhạc hội</h3>
                                <h2>170.000 VNĐ<span>/Vé</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Địa điểm:</td>
                                            <td>Đà Lạt</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Hình thức vé:</td>
                                            <td>Vé ghế ngồi</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Độ tuổi:</td>
                                            <td>Lớn hơn 7</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Tình trạng:</td>
                                            <td>Còn vé</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Hoạt động:</td>
                                            <td>Còn hoạt động</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">Đặt vé ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b1.jpg">
                            <div class="hr-text">
                                <h3>Cắm trại</h3>
                                <h2>150.000 VNĐ<span>/Vé</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Địa điểm:</td>
                                            <td>Đà Nẵng</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Hình thức vé:</td>
                                            <td>Vé vào cổng</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Độ tuổi:</td>
                                            <td>Lớn hơn 15</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Tình trạng:</td>
                                            <td>Còn vé</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Hoạt động:</td>
                                            <td>Còn hoạt động</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">Đặt vé ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b2.jpg">
                            <div class="hr-text">
                                <h3>Đêm nhạc hội</h3>
                                <h2>170.000 VNĐ<span>/Vé</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Địa điểm:</td>
                                            <td>Đà Lạt</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Hình thức vé:</td>
                                            <td>Vé ghế ngồi</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Độ tuổi:</td>
                                            <td>Lớn hơn 7</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Tình trạng:</td>
                                            <td>Còn vé</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Hoạt động:</td>
                                            <td>Còn hoạt động</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">Đặt vé ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

   
    <!-- Blog Section Begin -->
    
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img style="width:90px;height:90px" src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>Chúng tôi tạo ra trang web để bạn được chill<br /> Đồ án tốt nghiệp</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Liên hệ chúng tôi</h6>
                            <ul>
                                <li><i class="fa fa-phone"></i> (+84) 336 482 917</li>
                                <li><i class="fa fa-envelope"></i> khuyenphamno0@gmail.com</li>
                                <li><i class="fa fa-location-arrow"></i> 3/75 Nguyễn Khuyến</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>Gửi phản hồi của bạn</h6>
                            <form action="#" class="fn-form">
                               
                                <input type="text" placeholder="Phản hổi của bạn">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>