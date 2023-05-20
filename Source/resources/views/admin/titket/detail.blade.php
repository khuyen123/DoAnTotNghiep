@extends('admin.main')

@section('head')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name" style="font-size:25px ; color:tomato">Nhập vào mã số đặt vé</label>
                <input style="width:200px;text-transform: uppercase;" class="form-control" type="text" id="titket_id" name="titket_id">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" id="submit_edit_detail" class="btn btn-primary">Tìm kiếm</button>
            <input type="hidden" value="{{$new_titket->id_ve}}" id="id_ve" >
        </div>
        @csrf
    </form>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="left" bgcolor="#ffffff" style="padding: 12px;">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Mã đặt vé: </h4>
                                
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h3 style="color:red;font-weight:bold;margin-left:10px"> {{$new_titket->id_ve}} </h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Tên người đặt: </h4>
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h4 style="margin-left:10px"> {{$new_titket->ten_nguoidat}} </h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Số điện thoại đặt: </h4>
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h4 style="margin-left:10px"> {{$new_titket->sdt_nguoidat}} </h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Tên sự kiện: </h4>
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h4 style="margin-left:10px"> {{$new_titket->event_detail->event->tenSukien.' '.$new_titket->event_detail->wards->district->province->tentinhthanh}} </h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Địa chỉ: </h4>
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h4 style="margin-left:10px"> {{$new_titket->event_detail->diachi.' '.$new_titket->event_detail->wards->tenxaphuong.' '.$new_titket->event_detail->wards->district->tenquanhuyen
                                    .' '.$new_titket->event_detail->wards->district->province->tentinhthanh}} </h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Thời gian diễn ra: </h4>
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h4 style="margin-left:10px"> {{$new_titket->event_detail->ketthuc}} </h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Hình thức vé: </h4>
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h4 style="margin-left:10px"> {{$new_titket->event_detail->titkettype->tenhinhthuc}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Số chỗ ngồi: </h4>
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h4 style="margin-left:10px"> {{$new_titket->soCho}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Số ghế: </h4>
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h4 style="margin-left:10px"> {{$new_titket->soGhe}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Tổng tiền: </h4>
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h4 style="margin-left:10px"> {{number_format($new_titket->tongtien,0,',','.')}}&nbsp; VNĐ</h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Thanh toán: </h4>
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h4 style="margin-left:10px"    > {{$new_titket->thanhtoan == 0 ? 'Chưa thanh toán':'Đã Thanh toán'}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  style="border-radius: 5px;">
                                <h4>Trạng thái: </h4>
                            </td>  
                            <td align="left"  style="border-radius: 5px;">
                                <h4 style="margin-left:10px"><?php if($new_titket->kiemtra == 0) echo '<span class ="badge badge-danger" >Chưa Check-in</span>'; else
                                    echo '<span class ="badge badge-success" >Đã Check-in</span>'
                                ?>
                            </h4>
                            </td>
                        </tr>
                        <tr>
                            <td><button onclick="checkin()" @if($new_titket->kiemtra == 1) disabled @endif style="width:100px" class="btn btn-success" >Check-in</button></td>
                            <td align="left"><button style="width:100px; margin-left:10px" class="btn btn-primary" >In vé</button></td>
                        </tr>
                    </table>
                  </td>
                </tr>
                
              </table>
             
@endsection

@section('footer')
<script>
    function checkin(){
        var titket_id = $('#id_ve').val()
        
        Swal.fire({
            title: 'Check-in Vé',
            text: "Bạn có muốn Check-in cho vé này không?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xác nhận!'
        }).then((result)=>{
            if (result.isConfirmed){
                var data = {
                    'kiemtra': 1
                }
                $.ajax({
                    data: data,
                    dataType:"JSON",
                    type: "POST",
                    url : 'checkin/'+titket_id,
                    success: function(response){
                        Swal.fire(
                            'Thành công',
                            'Check-in vé thành công',
                            'success'
                        ).then(function(){
                            location.reload()
                        })
                    }
                })
            }
        })
    }    
</script>    
   
@endsection
