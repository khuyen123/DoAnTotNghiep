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
    <link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/style.css')}}" type="text/css">
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
            $html_logined = '';
            if (isset(Auth::user()->id)){
                $html_logined = '<a href="/client/infor/'.Auth::user()->id.'" class="bk-btn">';
            }
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
                            if (isset(Auth::user()->id)){
                                $html_logined = '<a href="/client/infor/'.Auth::user()->id.'" class="bk-btn">';
                            }
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
                                <img style="width:90px;height:90px" src="{{asset('client/img/logo.png')}}" alt="">
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
                        <h2>{{$event_detail->event->tenSukien}}</h2>
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
                    <div id="detail_slide" class="hero-slider owl-carousel" >
                        @foreach($images as $image)
                            <img class="hs-item set-bg" src="{{asset('client/'.$image->noidung)}}">
                        @endforeach
                    </div>
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>{{$event_detail->event->tenSukien.'-'.$event_detail->wards->district->province->tentinhthanh}}</h3>
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
                            <h2>{{number_format($event_detail->giave,0,',','.')}} VNĐ<span>/Vé</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974;">Người liên hệ:</td>
                                        <td>{{$event_detail->ten_lienhe}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Email liên hệ:</td>
                                        <td>{{$event_detail->email_lienhe}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Số điện thoại :</td>
                                        <td>{{$event_detail->sdt_lienhe}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Hình thức vé:</td>
                                        <td>{{$event_detail->titkettype->tenhinhthuc}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Độ tuổi:</td>
                                        <td>Lớn hơn {{$event_detail->dotuoichophep}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Tình trạng Vé:</td>
                                        <td>{{$event_detail->sovedaban >= $event_detail->sovetoida ? "Hết vé":"Còn Vé"}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Hoạt động:</td>
                                        <td><span style="font-size:15px" class="badge badge-warning">{{$event_detail->trangthai == 0 ? "Đã kết thúc":"Đang hoạt động"}}</span></td>
                                        <td>
                                            <?php 
                                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                $today = date("y-m-d  G:i:s");
                                                $check_availble =  strtotime($event_detail->ketthuc)-strtotime($today); 
                                                if ($check_availble<= 25700){
                                                    echo '<span style="font-size:15px" class="badge badge-danger">Hết thời gian đặt vé</span>';
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td class="r-o" style="color:#dfa974; font-size:23px">Mô tả sự kiện:</td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                            <p class="f-para">{{trim(trim($event_detail->mota,'<p>'),'</p>')}}</p>
                            
                        </div>
                    </div>
                    <div class="rd-reviews">
                        <h4>Bình luận</h4>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="{{asset('client/img/room/avatar/avatar-1.jpg')}}" alt="">
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
                                <img src="{{asset('client/img/room/avatar/avatar-1.jpg')}}" alt="">
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
                        <form method="post" action="{{$event_detail->id}}/titket/index">
                            <div class="check-date">
                                <label for="client_titket_name"> Họ tên:</label>
                                <input  value="<?php if (isset(Auth::user()->hoten)) echo Auth::user()->hoten; ?>" style=" font-size:15px" type="text"  id="client_titket_name" name="client_titket_name"/>
                            </div>
                            <div class="check-date">
                                <label for="client_titket_num"> Số điện thoại</label>
                                <input  value="<?php if (isset(Auth::user()->hoten)) echo Auth::user()->sdt; ?>" style=" font-size:15px" type="text"  id="client_titket_num" name="client_titket_num"/>
                            </div>
                            <div class="check-date">
                                <label for="client_titket_email"> Email</label>
                                <input  value="<?php if (isset(Auth::user()->email)) echo Auth::user()->email; ?>" style=" font-size:15px" type="text"  id="client_titket_email" name="client_titket_email"/>
                            </div>
                          
                            <div class="cnt_full">
                                <div class="cnt_min">
                                <input checked type="radio" id="tienmat" name="card"/><img src="{{asset('client\Image\tienmat.png')}}" alt="Select payment method" class="selected_img" >
                                    <label for="tienmat">Thanh toán tiền mặt</label>
                            </div>
                                <div class="cnt_min">
                                <input type="radio" id="momo" name="card"/><img src="{{asset('client\Image\momo.jpg')}}" alt="Select payment method"  class="selected_img" >
                                                <label for="momo">Thanh toán bằng ví MOMO</label>
                            </div>
                                <div class="cnt_min">
                                <input type="radio" id="airpay" name="card"/><img src="{{asset('client\Image\air-pay.jpg')}}" alt="Select payment method"  class="selected_img">
                                                <label for="airpay">Thanh toán bằng ví Airpay</label>
                            </div>
                            </div>
                            <table>
                                <tr>
                                    <td>
                                        Sân khấu
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                </tr>
                            </table>
                            
                            
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
                                    <img style="width:90px;height:90px" src="{{asset('client/img/logo.png')}}" alt="">
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
    <script src="{{asset('client/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('client/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('client/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('client/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('client/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('client/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('client/js/main.js')}}"></script>
    <script>
        $(document).on('click','#submit_titket',function(){
            // localStorage.setItem('titket_name',)
             localStorage.setItem('client_titket_name',$("#client_titket_name").val());
             localStorage.setItem('client_titket_num',$("#client_titket_num").val());
             localStorage.setItem('client_titket_email',$("#client_titket_email").val());
        })
        
    </script>
</body>

</html>