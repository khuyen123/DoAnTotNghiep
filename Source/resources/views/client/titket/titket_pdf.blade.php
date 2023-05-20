<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Thông tin đặt vé {{$new_titket->event_detail->event->tenSukien}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body style="background-color: #e9ecef;font-family:Dejavu Sans">
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>  
      <td align="center" bgcolor="#e9ecef">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

          <!-- start copy -->
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 10px; font-family: 'Dejavu Sans', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
              <p style="margin: 0;">Xin chào {{$new_titket->ten_nguoidat}}, Cảm ơn bạn đã Đặt vé tại hệ thống Sự kiện số. Sau đây là thông tin đặt vé của bạn</p>
            </td>
          </tr>
          <!-- end copy -->

          <!-- start button -->
          <tr>
            <td align="left" bgcolor="#ffffff">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center" bgcolor="#ffffff" style="padding: 0px;">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="center"  style="border-radius: 5px;">
                                <h4>Mã đặt vé: </h4>
                            </td>  
                            <td align="center"  style="border-radius: 5px;">
                                <h3 style="color:red;font-weight:bold"> {{$new_titket->id_ve}} </h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="center"  style="border-radius: 5px;">
                                <h4>Số điện thoại đặt: </h4>
                            </td>  
                            <td align="center"  style="border-radius: 5px;">
                                <h4> {{$new_titket->sdt_nguoidat}} </h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="center"  style="border-radius: 5px;">
                                <h4>Tên sự kiện: </h4>
                            </td>  
                            <td align="center"  style="border-radius: 5px;">
                                <h4> {{$new_titket->event_detail->event->tenSukien.' '.$new_titket->event_detail->wards->district->province->tentinhthanh}} </h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="center"  style="border-radius: 5px;">
                                <h4>Địa chỉ: </h4>
                            </td>  
                            <td align="center"  style="border-radius: 5px;">
                                <h4> {{$new_titket->event_detail->diachi.' '.$new_titket->event_detail->wards->tenxaphuong.' '.$new_titket->event_detail->wards->district->tenquanhuyen
                                    .' '.$new_titket->event_detail->wards->district->province->tentinhthanh}} </h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="center"  style="border-radius: 5px;">
                                <h4>Thời gian diễn ra: </h4>
                            </td>  
                            <td align="center"  style="border-radius: 5px;">
                                <h4> {{$new_titket->event_detail->ketthuc}} </h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="center"  style="border-radius: 5px;">
                                <h4>Hình thức vé: </h4>
                            </td>  
                            <td align="center"  style="border-radius: 5px;">
                                <h4> {{$new_titket->event_detail->titkettype->tenhinhthuc}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="center"  style="border-radius: 5px;">
                                <h4>Số chỗ ngồi: </h4>
                            </td>  
                            <td align="center"  style="border-radius: 5px;">
                                <h4> {{$new_titket->soCho}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="center"  style="border-radius: 5px;">
                                <h4>Số ghế: </h4>
                            </td>  
                            <td align="center"  style="border-radius: 5px;">
                                <h4> {{$new_titket->soGhe}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="center"  style="border-radius: 5px;">
                                <h4>Tổng tiền: </h4>
                            </td>  
                            <td align="center"  style="border-radius: 5px;">
                                <h4> {{$new_titket->tongtien}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="center"  style="border-radius: 5px;">
                                <h4>Thanh toán: </h4>
                            </td>  
                            <td align="center"  style="border-radius: 5px;">
                                <h4> {{$new_titket->thanhtoan == 0 ? 'Chưa thanh toán':'Đã Thanh toán'}}</h4>
                            </td>
                        </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <!-- end button -->

          <!-- start copy -->
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 0px; font-family: 'Dejavu Sans', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
              <p style="margin: 0;">Hãy đưa mã đặt vé cho nhân viên soát vé để Check-in hoặc in vé!</p>
            </td>
          </tr>
          <!-- end copy -->

          <!-- start copy -->
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 0px; font-family: 'Dejavu Sans', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
              <p style="margin: 0;">Trân Trọng,<br> Sự kiện số</p>
            </td>
          </tr>
          <!-- end copy -->

        </table>
      </td>
    </tr>
    <!-- end copy block -->

    <!-- start footer -->
    <tr>
      <td align="center" bgcolor="#e9ecef" style="padding: 0px;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
            <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Dejavu Sans', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
              <p style="margin: 0;">Đà Nẵng, Việt Nam</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <!-- end footer -->
  </table>
  <!-- end body -->
</body>
</html>