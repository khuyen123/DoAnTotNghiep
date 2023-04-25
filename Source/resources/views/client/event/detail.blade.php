<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sự kiện số | Chi tiết sự kiện</title>

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
            $html_logined = '<a href="/client/infor" class="bk-btn">';
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
                            $html_logined = '<a href="/client/infor" class="bk-btn">';
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

    <!-- Rooms Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Mây lang thang</h2>
                        <div class="bt-option">
                            <a href="{{Route('client_events')}}">Sự kiện</a>
                            <span>chi tiết sự kiện</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="img/room/room-b2.jpg" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>Đêm nhạc Mây lang thang</h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    
                                </div>
                            </div>
                            <h2>150.000 VNĐ<span>/Vé</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974;">Người liên hệ:</td>
                                        <td>Phạm Khuyến</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Email liên hệ:</td>
                                        <td>khuyenphamno0@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Số điện thoại :</td>
                                        <td>0336482917</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Hình thức vé:</td>
                                        <td>Vé vào cổng</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Độ tuổi:</td>
                                        <td>Lớn hơn 7</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Tình trạng:</td>
                                        <td>Còn vé</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Hoạt động:</td>
                                        <td>Đang hoạt động</td>
                                    </tr>
                                    <tr >
                                        <td class="r-o" style="color:#dfa974; font-size:23px">Mô tả sự kiện:</td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                            <p class="f-para">Đêm nhạc Mây Lang Thang được tổ chức bởi Khuyến Phạm Studio, nơi hội tụ những giọng ca tuyệt vời 
                                và nổi tiếng như Tăng Phúc, Noo Phước Thịnh,... Hứa hẹn sẽ đem lại cho các bạn những giây phút thư giãn tuyệt vời 
                                cũng như những tiết mục đặc sắc. Sự kiện diễn ra liên tục hằng tuần tại mỗi tỉnh thành và sẽ kết thúc khi nào kết thúc.</p>
                            
                        </div>
                    </div>
                    <div class="rd-reviews">
                        <h4>Bình luận</h4>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-1.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27/08/2022</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Nguyễn Duyên</h5>
                                <p>Mình rất thích sự kiện</p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-1.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27/08/2022</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Nguyễn Duyên</h5>
                                <p>Mình rất thích sự kiện</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-add">
                        <h4>Đăng bình luận:</h4>
                        <form action="#" class="ra-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Họ tên">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email*">
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <h5>Đánh giá:</h5>
                                        <div class="rating">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt"></i>
                                        </div>
                                    </div>
                                    <textarea placeholder="Bình luận"></textarea>
                                    <button type="submit">Đăng</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>Đặt vé Ngay</h3>
                        <form action="#">
                            <div class="check-date">
                                <label for="client_titket_num"> Họ tên:</label>
                                <input value="Phạm Khuyến" style=" font-size:15px" type="text"  id="client_titket_num" name="client_titket_num"/>
                            </div>
                            <div class="check-date">
                                <label for="client_titket_num"> Số điện thoại</label>
                                <input value="0336482917" style=" font-size:15px" type="text"  id="client_titket_num" name="client_titket_num"/>
                            </div>
                            <div class="check-date">
                                <label for="client_titket_num"> Nhập số vé</label>
                                <input style=" font-size:15px" type="number"  id="client_titket_num" name="client_titket_num"/>
                            </div>
                            
                            <div class="select-option">
                                <label for="cus_cate">Chọn dãy ghế Vé 1:</label>
                                <select id="cus_cate">
                                    <option value="">Dãy A</option>
                                    <option value="">Dãy B</option>
                                    <option value="">Dãy C</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="cus_cate">Chọn Số ghế Vé 1:</label>
                                <select id="cus_cate">
                                    <option value="">Ghế 1</option>
                                    <option value="">Ghế 2</option>
                                    <option value="">Ghế 3</option>
                                </select>
                            </div>
                            <button type="submit">Đặt ngay</button>
                        </form>
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