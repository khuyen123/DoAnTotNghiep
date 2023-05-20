<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Thông tin đặt vé</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
  /**
   * Google webfonts. Recommended to include the .woff version for cross-client compatibility.
   */
  @media screen {
    @font-face {
      font-family: 'Source Sans Pro';
      font-style: normal;
      font-weight: 400;
      src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format('woff');
    }
    @font-face {
      font-family: 'Source Sans Pro';
      font-style: normal;
      font-weight: 700;
      src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format('woff');
    }
  }
  /**
   * Avoid browser level font resizing.
   * 1. Windows Mobile
   * 2. iOS / OSX
   */
  body,
  table,
  td,
  a {
    -ms-text-size-adjust: 100%; /* 1 */
    -webkit-text-size-adjust: 100%; /* 2 */
  }
  /**
   * Remove extra space added to tables and cells in Outlook.
   */
  table,
  td {
    mso-table-rspace: 0pt;
    mso-table-lspace: 0pt;
  }
  /**
   * Better fluid images in Internet Explorer.
   */
  img {
    -ms-interpolation-mode: bicubic;
  }
  /**
   * Remove blue links for iOS devices.
   */
  a[x-apple-data-detectors] {
    font-family: inherit !important;
    font-size: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
    color: inherit !important;
    text-decoration: none !important;
  }
  /**
   * Fix centering issues in Android 4.4.
   */
  div[style*="margin: 16px 0;"] {
    margin: 0 !important;
  }
  body {
    width: 100% !important;
    height: 100% !important;
    padding: 0 !important;
    margin: 0 !important;
  }
  /**
   * Collapse table borders to avoid space between cells.
   */
  table {
    border-collapse: collapse !important;
  }
  a {
    color: #1a82e2;
  }
  img {
    height: auto;
    line-height: 100%;
    text-decoration: none;
    border: 0;
    outline: none;
  }
  </style>

</head>
<body style="background-color: #e9ecef;">

  <!-- start preheader -->
  <div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
    A preheader is the short summary text that follows the subject line when an email is viewed in the inbox.
  </div>
  <!-- end preheader -->

  <!-- start body -->
  <table border="0" cellpadding="0" cellspacing="0" width="100%">

    <!-- start logo -->
    <tr>
      <td align="center" bgcolor="#e9ecef">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
            <td align="center" valign="top" style="padding: 36px 24px;">
              <a href="https://www.blogdesire.com" target="_blank" style="display: inline-block;">
              </a>
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end logo -->

    <!-- start hero -->
    <tr>
      <td align="center" bgcolor="#e9ecef">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
              <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Thông tin đặt vé: {{$new_titket->event_detail->event->tenSukien.' '.$new_titket->event_detail->wards->district->province->tentinhthanh}}</h1>
            </td>
          </tr>
        </table>
        
      </td>
    </tr>
    <!-- end hero -->

    <!-- start copy block -->
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
            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
              <p style="margin: 0;">Xin chào {{$new_titket->ten_nguoidat}}, Cảm ơn bạn đã Đặt vé tại hệ thống Sự kiện số. Sau đây là thông tin đặt vé của bạn</p>
            </td>
          </tr>
          <!-- end copy -->

          <!-- start button -->
          <tr>
            <td align="left" bgcolor="#ffffff">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center" bgcolor="#ffffff" style="padding: 12px;">
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
            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
              <p style="margin: 0;">Hãy đưa mã đặt vé cho nhân viên soát vé để Check-in hoặc in vé!</p>
            </td>
          </tr>
          <!-- end copy -->

          <!-- start copy -->
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
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
      <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

          <!-- start permission -->
          <tr>
            <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
            </td>
          </tr>
          <!-- end permission -->

          <!-- start unsubscribe -->
          <tr>
            <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
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