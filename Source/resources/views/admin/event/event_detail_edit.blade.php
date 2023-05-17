@extends('admin.main')

@section('head')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
        <div class="form-group">
                <label for="name">Số điện thoại liên hệ </label>
                <input readonly class="form-control" type="text" id="contact_phone_detail" value="{{$event_detail->sdt_lienhe}}" name="contact_phone_detail">
            </div>
            <div class="form-group">
                <label for="name">Email liên hệ </label>
                <input class="form-control" type="text" value="{{$event_detail->email_lienhe}}" id="contact_email_detail" name="contact_email_detail">
            </div>
            <div class="form-group">
                <label for="name">Tên người liên hệ </label>
                <input class="form-control" type="text" value="{{$event_detail->ten_lienhe}}" id="contact_name_detail" name="contact_name_detail">
            </div>
            <div class="form-group">
                <label for="name">Thời gian bắt đầu</label>
                <input  style="width:300px"  class="form-control" type="datetime-local" value="{{$event_detail->batdau}}" id="start_time_detail" name="start_time_detail">
            </div>
            <div class="form-group">
                <label for="name">Thời gian kết thúc</label>
                <input  style="width:300px"  class="form-control" type="datetime-local" value="{{$event_detail->ketthuc}}" id="end_time_detail" name="end_time_detail">
            </div>
            <div class="form-group" style="display:flex">
                <label for="name" style="width:100px">Địa điểm:</label>
                <label for="name" style="width:100px">Tỉnh thành:</label>
                
                <select onchange="finddistrict()" class="form-control" style="width:200px" id="detail_province" name="detail_province">
                    <option value="{{$event_detail->wards->district->id_tinhthanh}}" selected >{{$event_detail->wards->district->province->tentinhthanh}}</option>
                    @foreach($provinces as $province)
                        <option  value="{{$province->id}}" >{{$province->tentinhthanh}}</option>
                    @endforeach
                </select>
                <label for="name" style="width:100px; margin-left:10px">Quận huyện:</label>
                <select onchange="findward()" class="form-control" style="width:200px" id="detail_district" name="detail_district">   
                    <option value="{{$event_detail->wards->id_quanhuyen}}">{{$event_detail->wards->district->tenquanhuyen}}</option>
                </select>
                <label for="name" style="width:100px;margin-left:10px" >Xã phường:</label>
                <select class="form-control" style="width:200px" id="detail_wards" name="detail_wards">   
                    <option value="{{$event_detail->id_xaphuong}}">{{$event_detail->wards->tenxaphuong}}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Địa chỉ chi tiết</label>
                <input value="{{$event_detail->diachi}}" class="form-control" type="text" id="detail_address" name="detail_address">
            </div>
            <div class="form-group">
                <label for="name">Khu vực</label>
                <input value="{{$event_detail->khuvuc}}" class="form-control" type="text" id="detail_locate" name="detail_locate">
            </div>
       
            <div class="form-group">
                <label for="name">Số vé tối đa</label>
                <input value="{{$event_detail->sovetoida}}" class="form-control" type="number" id="detail_maxtitket" name="detail_maxtitket">
            </div>
            
            <div class="form-group">
                <label>Hoạt động</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value=1 type="radio" id="detail_status_active" name="detail_status" {{$event_detail->trangthai == 1 ? 'checked=""' : ''}}>
                    <label for="detail_status_active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value=0 type="radio" id="detail_status_noactive" name="detail_status" {{$event_detail->trangthai == 0 ? 'checked=""' : ''}}>
                    <label for="no_detail_status_noactiveactive" class="custom-control-label">Không</label>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Giá vé </label>
                <input value="{{$event_detail->giave}}" class="form-control" type="text" id="detail_prince" name="detail_prince">
            </div>
            
            <div class="form-group">
                <label for="name">Độ tuổi cho phép </label>
                <input value="{{$event_detail->dotuoichophep}}" class="form-control" type="number" id="detail_yearold" name="detail_yearold">
            </div>
            <div class="form-group">
                <label for="detail_description">Mô tả: </label>
                <textarea id="content" name="detail_description" class="form-control">{{$event_detail->mota}}</textarea>
            </div>
            

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'content' );
    </script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'contentDetail' );
    </script>
    <script>
        
        
        function finddistrict(){
            var id= '';
            id = $('#detail_province').val();
            $("#detail_district").empty();
            district(id);
        }
        function district(province_id){
            var data = [];
            $.ajax({
                type: "GET",
                dataType: "JSON",
                url: '/getdistrict/'+province_id,
                success: function(response){
                    data = response.districts;
                    
                    data.forEach(key =>{
                        var x = document.getElementById("detail_district");
                        var option = document.createElement("option");
                        option.text = key.tenquanhuyen;
                        option.value = key.id;
                        x.add(option);
            });
                
                },
                error: function(){
                    console.log(23);
                }
            })
            
        }
        function findward(){
            var id= '';
            id = $('#detail_district').val();
            $("#detail_wards").empty();
            wards(id);
        }
        function wards(district_id){
            var data = [];
            $.ajax({
                type: "GET",
                dataType: "JSON",
                url: '/getwards/'+district_id,
                success: function(response){
                    data = response.wards;
                    data.forEach(key =>{
                        var x = document.getElementById("detail_wards");
                        var option = document.createElement("option");
                        option.text = key.tenxaphuong;
                        option.value = key.id;
                        x.add(option);
            });
                
                },
                error: function(){
                    console.log(23);
                }
            })
        }
    </script>
@endsection
