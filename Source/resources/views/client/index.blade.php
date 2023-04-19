
@extends('client.main')
@section('content')
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
        <div class="hs-item set-bg" data-setbg="client/img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="client/img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="client/img/hero/hero-3.jpg"></div>
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
                                <img src="client/img/about/about-1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="client/img/about/about-1.jpg" alt="">
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
                        <div class="hp-room-item set-bg" data-setbg="client/img/room/room-b1.jpg">
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
                        <div class="hp-room-item set-bg" data-setbg="client/img/room/room-b2.jpg">
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
                        <div class="hp-room-item set-bg" data-setbg="client/img/room/room-b1.jpg">
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
                        <div class="hp-room-item set-bg" data-setbg="client/img/room/room-b2.jpg">
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
  @endsection