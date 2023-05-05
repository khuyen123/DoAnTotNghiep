<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sự kiện số | Sự kiện</title>

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
        <div class="search-icon search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
           
        <?php

use Illuminate\Support\Facades\Auth;

$html = '<a href="/client/login" class="bk-btn">Đăng nhập</a>';
$html .='<a href="/client/register" class="bkj-btn">Đăng ký</a>';
$html_logined = '<a href="/client/infor/'.Auth::user()->id.'" class="bk-btn">';
if(isset(Auth::user()->hoten)) {
    $html_logined .= Auth::user()->hoten;
}
$html_logined .= '</a>';
$html_logined .='<a href="/client/logout" class="bkj-btn">Đăng xuất</a>';
if (Auth::check()) {
    echo $html_logined;
} else {
    echo $html;
}
?>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                    <li class="active"><a href="{{route('client_events')}}">Sự kiện</a></li>
                    <li><a href="{{route('admin_index')}}">Ban tổ chức</a></li>
                    <li><a href="{{route('aboutus')}}">Về chúng tôi</a>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (+84) 336 482 917</li>
            <li><i class="fa fa-envelope"></i> khuyenphamno0@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                        <li><i class="fa fa-phone"></i> (+84) 336 482 917</li>
            <li><i class="fa fa-envelope"></i> khuyenphamno0@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                           
                        <?php   
                            $html = '<a href="/client/login" class="bk-btn">Đăng nhập</a>';
                            $html .='<a href="/client/register" class="bkj-btn">Đăng ký</a>';
                            $html_logined = '<a href="/client/infor/'.Auth::user()->id.'" class="bk-btn">';
                            if(isset(Auth::user()->hoten)) {
                                $html_logined .= Auth::user()->hoten;
                            }
                            $html_logined .= '</a>';
                            $html_logined .='<a href="/client/logout" class="bkj-btn">Đăng xuất</a>';
                            if (Auth::check()) {
                                echo $html_logined;
                            } else {
                                echo $html;
                            }
                        ?>
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
                                <li ><a href="/">Trang chủ</a></li>
                                    <li class="active"><a href="{{route('client_events')}}">Sự kiện</a></li>
                                    <li><a href="{{route('admin_index')}}">Ban tổ chức</a></li>
                                    <li><a href="{{route('aboutus')}}">Về chúng tôi</a>
                                    
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

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Sự kiện</h2>
                        <div class="bt-option">
                            <a href="/">Trang chủ</a>
                            <span>Sự kiện</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img style=" height:233px" src="img/room/room-b2.jpg" alt="">
                        <div class="ri-text">
                            <h4>Mây Lang Thang</h4>
                            <h3>150.000 VNĐ<span>/Vé</span></h3>
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
                            <a href="{{Route('event_detail')}}" class="primary-btn">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img style=" height:233px" src="img/room/room-b2.jpg" alt="">
                        <div class="ri-text">
                            <h4>Mây Lang Thang</h4>
                            <h3>150.000 VNĐ<span>/Vé</span></h3>
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
                            <a href="{{Route('event_detail')}}" class="primary-btn">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img style=" height:233px" src="img/room/room-b2.jpg" alt="">
                        <div class="ri-text">
                            <h4>Mây Lang Thang</h4>
                            <h3>150.000 VNĐ<span>/Vé</span></h3>
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
                            <a href="{{Route('event_detail')}}" class="primary-btn">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img style=" height:233px" src="img/room/room-b2.jpg" alt="">
                        <div class="ri-text">
                            <h4>Mây Lang Thang</h4>
                            <h3>150.000 VNĐ<span>/Vé</span></h3>
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
                            <a href="{{Route('event_detail')}}" class="primary-btn">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img style=" height:233px" src="img/room/room-b2.jpg" alt="">
                        <div class="ri-text">
                            <h4>Mây Lang Thang</h4>
                            <h3>150.000 VNĐ<span>/Vé</span></h3>
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
                            <a href="{{Route('event_detail')}}" class="primary-btn">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img style=" height:233px" src="img/room/room-b2.jpg" alt="">
                        <div class="ri-text">
                            <h4>Mây Lang Thang</h4>
                            <h3>150.000 VNĐ<span>/Vé</span></h3>
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
                            <a href="{{Route('event_detail')}}" class="primary-btn">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="room-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

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