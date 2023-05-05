@extends('admin.main')

@section('head')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
    <form action="create/store" method="POST">
        <div class="card-body">
        <div class="form-group">
                <label for="name">Số điện thoại liên hệ </label>
                <input  class="form-control" type="text" id="contact_phone_detail" name="contact_phone_detail">
            </div>
            <div class="form-group">
                <label for="name">Email liên hệ </label>
                <input class="form-control" type="text"  id="contact_email_detail" name="contact_email_detail">
            </div>
            <div class="form-group">
                <label for="name">Tên người liên hệ </label>
                <input class="form-control" type="text"  id="contact_name_detail" name="contact_name_detail">
            </div>
            <div class="form-group">
                <label for="name">Thời gian bắt đầu</label>
                <input  style="width:300px" class="form-control" type="datetime-local"  id="start_time_detail" name="start_time_detail">
            </div>
            <div class="form-group">
                <label for="name">Thời gian kết thúc</label>
                <input style="width:300px" class="form-control" type="datetime-local"  id="end_time_detail" name="end_time_detail">
            </div>
            <div class="form-group" style="display:flex">
                <label for="name" style="width:100px">Địa điểm:</label>
                <label for="name" style="width:100px">Tỉnh thành:</label>
                <select onchange="finddistrict()" class="form-control" style="width:200px" id="detail_province" name="detail_province">
                    @foreach($provinces as $province)
                        <option  value="{{$province->id}}" >{{$province->tentinhthanh}}</option>
                    @endforeach
                </select>
                <label for="name" style="width:100px; margin-left:10px">Quận huyện:</label>
                <select onchange="findward()" class="form-control" style="width:200px" id="detail_district" name="detail_district">   
                    
                </select>
                <label for="name" style="width:100px;margin-left:10px" >Xã phường:</label>
                <select class="form-control" style="width:200px" id="detail_wards" name="detail_wards">   
                   
                </select>
            </div>
            <div class="form-group">
                <label for="name">Địa chỉ chi tiết</label>
                <input  class="form-control" type="text" id="detail_address" name="detail_address">
            </div>
            <div class="form-group">
                <label for="name">Khu vực</label>
                <input  class="form-control" type="text" id="detail_locate" name="detail_locate">
            </div>
       
            <div class="form-group">
                <label for="name">Số vé tối đa</label>
                <input  class="form-control" type="number" id="detail_maxtitket" name="detail_maxtitket">
            </div>
           
            <div class="form-group">
                <label for="name">Giá vé </label>
                <input  class="form-control" type="decimal" id="detail_prince" name="detail_prince">
            </div>
            
            <div class="form-group">
                <label for="name">Độ tuổi cho phép </label>
                <input  class="form-control" type="number" id="detail_yearold" name="detail_yearold">
            </div>
            <div class="form-group">
                <label for="detail_description">Mô tả: </label>
                <textarea id="content" name="detail_description" class="form-control"></textarea>
            </div>
            

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
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
