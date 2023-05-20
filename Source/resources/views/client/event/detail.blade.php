<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                            <input type="hidden" readonly value="{{$event_detail->id}}" id="id_chitietsukien">
                            <input type="hidden" readonly value="{{$event_detail->id_hinhthucve}}" id="titket_type">
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
                            <input type="hidden" id="giave" value="{{$event_detail->giave}}" >
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
                                        <?php $veconlai = $event_detail->sovetoida - $event_detail->sovedaban ?>
                                        <td>{{$event_detail->sovedaban >= $event_detail->sovetoida ? 'Hết vé':'Còn Vé: '.$veconlai}}
                                            <input type="hidden" value="{{$veconlai}}" id="veconlai">
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="r-o" style="color:#dfa974">Hoạt động:</td>
                                        <td><span style="font-size:15px" class="badge badge-warning">{{$event_detail->trangthai == 0 ? "Đã kết thúc":"Đang hoạt động"}}</span></td>
                                        <td>
                                            <?php 
                                                $check = true;
                                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                $today = date("y-m-d  G:i:s");
                                                $check_availble =  strtotime($event_detail->ketthuc)-strtotime($today); 
                                                if ($check_availble<= 25700){
                                                    $check = false;
                                                    echo '<span style="font-size:15px" class="badge badge-danger">Hết thời gian đặt vé</span>';
                                                }
                                                if ($veconlai <=0) {
                                                    $check = false;
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
                        <form action="">
                            <div class="check-date">
                                <label for="client_titket_name"> Họ tên:</label>
                                <input  value="<?php if (isset(Auth::user()->hoten)) echo Auth::user()->hoten; ?>" style=" font-size:15px" type="text"  id="client_titket_name" name="client_titket_name"/>
                                <input  value="<?php if (isset(Auth::user()->id)) echo Auth::user()->id; ?>" type="hidden"  id="client_id" name="client_id"/>
                            </div>
                            <div class="check-date">
                                <label for="client_titket_phone"> Số điện thoại</label>
                                <input  value="<?php if (isset(Auth::user()->hoten)) echo Auth::user()->sdt; ?>" style=" font-size:15px" type="text"  id="client_titket_phone" name="client_titket_num"/>
                            </div>
                            <div class="check-date">
                                <label for="client_titket_email"> Email</label>
                                <input  value="<?php if (isset(Auth::user()->email)) echo Auth::user()->email; ?>" style=" font-size:15px" type="text"  id="client_titket_email" name="client_titket_email"/>
                            </div>
                            <div class="check-date">
                                <label for="client_titket_num">Số vé muốn đặt</label>
                                <input onchange="check_num()" @if($event_detail->id_hinhthucve == 1) readonly @endif type="number" style=" font-size:15px" type="text"  id="client_titket_num" name="client_titket_num"/>
                                <p class="text-danger" id="alert_seat" ></p>
                            </div>
                            <div class="check-date">
                                <label for="client_titket_seat">Ghế đã chọn</label>
                                <input readonly  value="" style=" font-size:15px" type="text"  id="client_titket_seat" name="client_titket_seat"/>
                            </div>
                            <div class="check-date">
                                <label for="client_titket_seat">Tổng tiền: </label>
                                <input readonly  value="" style=" font-size:15px" type="text"  id="client_titket_prince" name="client_titket_prince"/>
                            </div>
                            @if($check)
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
                            <table class="seat_picker">
                                <tr colspan="{{$event_detail->soghemoihang}}">
                                    <td align="center">
                                        @if ($event_detail->id_hinhthucve == 1)<h4 style="margin-left: 130px ; font-weight:bold;color:red">Sân khấu</h4>@endif
                                    </td>
                                </tr>
                                <?php 
                                    $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

                                ?>
                                @for($i = 0; $i<$event_detail->sohangghe;$i++)
                                    <tr class="seats">
                                        @for($j = 1; $j<=$event_detail->soghemoihang;$j++)
                                                <?php $seat =  $alphabet[$i].$j;?>
                                            <td class="seat">
                                                <input @if(in_array($seat,$seats)) disabled @endif onclick="selectseat({{$i}},{{$j}},{{$veconlai}})" type="checkbox" id="{{$seat}}" value="{{$seat}}">
                                                <label for="{{$seat}}" >{{$seat}}</label>
                                            </td>
                                        @endfor
                                    </tr>
                                @endfor
                            </table>
                            
                            <button type="button" id="submit_booking_titket" class="primary-btn" style="justify-content:center">Đặt ngay</button>
                            @endif
                            @csrf
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="loading" style="position: fixed;top:0; left:0; bottom:0; right:0; z-index:990; display:flex; justify-content:center; align-items: center; background:rgba(0,0,0,0.9); opacity:0; pointer-events:none;" ><img src="{{asset('client/Image/loading.svg')}}"</div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        var selected_seat = []
        //selected seat lastLoad:
        var a = localStorage.getItem('seat');
        if(a!=null){
        var current=a.split(',');
        $.each(current, function(key,item){
            selected_seat.push(item);
        })
        }
        $(document).ready(function(){
            selected_seat.forEach(key => {
                document.getElementById(key).checked = true
            })
            document.getElementById('client_titket_num').value = selected_seat.length
            document.getElementById('client_titket_seat').value = selected_seat.toString()
            document.getElementById('client_titket_prince').value = selected_seat.length*parseInt($('#giave').val())+ " VNĐ"
            if (selected_seat.length == 0) {
                document.getElementById('submit_booking_titket').disabled = true
            }
        })
        const alphabet = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",];
        function selectseat(seat_row,seat_number,max_titket){
            var seat_id = alphabet[seat_row]+seat_number
            var check = document.getElementById(seat_id).checked
            if(check){
                selected_seat.push(seat_id)
                localStorage.setItem('seat',selected_seat)
                document.getElementById('client_titket_seat').value = selected_seat.toString()
                document.getElementById('client_titket_num').value = selected_seat.length
                document.getElementById('client_titket_prince').value = selected_seat.length*parseInt($('#giave').val())+ "VNĐ"
                if (selected_seat.length>max_titket) {
                    document.getElementById('alert_seat').innerText = "Số vé muốn đặt đã vượt quá số vé còn lại"
                    document.getElementById('submit_booking_titket').disabled = true
                }
                if (selected_seat.length<=0){
                    document.getElementById('alert_seat').innerText = "Số vé đặt phải lớn hơn 0"
                    document.getElementById('submit_booking_titket').disabled = true
                } else {
                    document.getElementById('alert_seat').innerText = ""
                    document.getElementById('submit_booking_titket').disabled = false
                }
            } else {
                selected_seat.splice(selected_seat.indexOf(seat_id),1);
                localStorage.setItem('seat',selected_seat)
                document.getElementById('client_titket_seat').value = selected_seat.toString()
                document.getElementById('client_titket_num').value = selected_seat.length
                document.getElementById('client_titket_prince').value = selected_seat.length*parseInt($('#giave').val())+ "VNĐ"
                if (selected_seat.length<=max_titket) {
                    document.getElementById('alert_seat').innerText = ""
                    document.getElementById('submit_booking_titket').disabled = false
                }
                if (selected_seat.length<=0){
                    document.getElementById('alert_seat').innerText = "Số vé đặt phải lớn hơn 0"
                    document.getElementById('submit_booking_titket').disabled = true
                    localStorage.removeItem('seat')
                } else {
                    document.getElementById('alert_seat').innerText = ""
                    document.getElementById('submit_booking_titket').disabled = false
                }
            }
        }
        $(document).on('keyup','#client_titket_num',function(){                
            if (parseInt($('#client_titket_num').val())<=0){
                document.getElementById('alert_seat').innerText = "Số vé đặt phải lớn hơn 0"
                document.getElementById('submit_booking_titket').disabled = true
            } else {
                if (parseInt($('#client_titket_num').val())>parseInt($('#veconlai').val())){
                    document.getElementById('alert_seat').innerText = "Số vé đặt đã vượt quá số vé còn lại"
                    document.getElementById('submit_booking_titket').disabled = true
                } else {
                    document.getElementById('alert_seat').innerText = ""
                    document.getElementById('client_titket_prince').value = parseInt($('#client_titket_num').val())*parseInt($('#giave').val())
                    document.getElementById('submit_booking_titket').disabled = false
                }
            }
        })
        function check_num(){
            if (parseInt($('#client_titket_num').val())<=0){
                document.getElementById('alert_seat').innerText = "Số vé đặt phải lớn hơn 0"
                document.getElementById('submit_booking_titket').disabled = true
            } else {
                if (parseInt($('#client_titket_num').val())>parseInt($('#veconlai').val())){
                    document.getElementById('alert_seat').innerText = "Số vé đặt đã vượt quá số vé còn lại"
                    document.getElementById('submit_booking_titket').disabled = true
                } else {
                    document.getElementById('alert_seat').innerText = ""
                    document.getElementById('client_titket_prince').value = parseInt($('#client_titket_num').val())*parseInt($('#giave').val())
                    document.getElementById('submit_booking_titket').disabled = false
                }
            }
        }
        var event_id = $('#id_chitietsukien').val()
        var titket_type = $('#titket_type').val()
        var user_id = $('#client_id').val()
        $(document).on('click','#submit_booking_titket',function(){
                if (document.getElementById('tienmat').checked = true){
                    Swal.fire({
                        title: 'Thông tin chính xác?',
                        text: "Bạn chắc chắn rằng thông tin đặt vé đã chính xác?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Xác nhận!'
                    }).then((result)=>{
                        if (result.isConfirmed) {
                            var data = {
                                'tinhtrang' : 1,
                                'id_ve' : generate_string(6),
                                'soCho' : parseInt($('#client_titket_num').val()),
                                'soGhe' : selected_seat.toString(),
                                'thanhtoan' : 0,
                                'kiemtra' : 0,
                                'tongtien': parseInt($('#client_titket_prince').val()),
                                'id_nguoidung' : user_id,
                                'id_chitietsukien' : event_id,
                                'ten_nguoidat': $('#client_titket_name').val(),
                                'sdt_nguoidat':$('#client_titket_phone').val(),
                                'email_nguoidat':$('#client_titket_email').val()
                            }
                            $('#loading').css('opacity','1');
                            $.ajax({
                                type: "POST",
                                dataType: "JSON",
                                data: data,
                                url: '/titket/create',
                                success: function(response){
                                    $('#loading').css('opacity','0');
                                    Swal.fire({
                                        title: 'Thành công! Vé của bạn đã được gửi qua Email!',
                                        text: "Bạn có thể bấm xác nhận để kiểm tra lịch sử đặt vé của mình",
                                        icon: 'success',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Xác nhận!'
                                    }).then((result_2)=>{
                                        if (result_2.isConfirmed) {
                                            location.href = ''

                                        }
                                    })
                                    localStorage.removeItem('seat')
                                },
                                error: function(response){
                                    Swal.fire(
                                        'Thất Bại!',
                                        'Đặt vé thất bại',
                                        'error'
                                    ).then(function(){
                                        $('#loading').css('opacity','0');
                                    })
                                }
                            })
                        }
                    })
                } else {
                    if (document.getElementById('momo').checked = true) {
                        console.log('MOMO')
                    } else {
                        if (document.getElementById('airpay').checked = true) {
                            console.log('airpay')
                        }
                    }
                }
        })

    function generate_string(n) {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    for (var i = 0; i < n; i++){
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    return text;
    }
    </script>
</body>

</html>