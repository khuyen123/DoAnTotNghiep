@extends('admin.main')

@section('head')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Họ tên</label>
                <input readonly type="text" value="{{$user->hoten}}" class="form-control" name="user_name" id="user_name" >
            </div>
            <div class="form-group">
                <label for="name">Ngày sinh</label>
                <input readonly type="date" value="{{$user->ngaySinh}}" class="form-control" name="NgaySinh" id="NgaySinh" >
            </div>
            <div class="form-group">
                <label for="name">Địa chỉ</label>
                <input readonly type="text" value="{{$user->diachi.' '.$user->wards->tenxaphuong. ' '.$user->wards->district->tenquanhuyen.' '.$user->wards->district->province->tentinhthanh}}" class="form-control" name="DiaChi" id="diachi" placeholder="Nhập nội dung">
            </div>
           
            <div class="form-group">
                <label for="name">Số điện thoại</label>
                <input readonly type="text" value="{{$user->sdt}}" class="form-control" name="SDT" id="SDT" placeholder="Nhập nội dung">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input readonly type="text" value="{{$user->email}}" class="form-control" name="email" id="email" placeholder="Nhập nội dung">
            </div>
            <div class="form-group" style="display:flex">
                <label for="name">Trạng Thái: &nbsp;</label>
                <?php
                    $html = '';
                    if ($user->trangthai == 1){
                        $html = '<span style="font-size:15px;padding-top:10px" class="badge badge-success ">Đang hoạt động</span>';
                        $html .='<a style="margin-left:10px" class="btn btn-danger" onClick="lockuser('.$user->id.')"><i class="fa fa-ban" ></i>&nbsp;Khoá</a>';
                        echo $html;
                    } else {
                        $html = '<span style="font-size:15px;padding-top:10px" class="badge badge-danger ">Đang bị khoá</span>';
                        $html .='<a style="margin-left:10px" class="btn btn-success" onClick="unlockuser('.$user->id.')"><i class="fa fa-unlock" ></i>&nbsp;Mở Khoá</a>';
                        echo $html;
                    }
                ?>
                
            </div>
            <div class="form-group">
                <label for="name">Quyền truy cập</label>
               <select id="user_role" onchange="changerole({{$user->id}})" class="form-control" style="width:300px">
                    <option value="1" >Khách hàng</option>
                    <option value="2" >Ban tổ chức</option>
                    <option selected value="{{$user->quyentruycap}}" >{{$user->roles->tenquyentruycap}}</option>
               </select>
        </div>
        <!-- /.card-body -->
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
        function lockuser(id){
            var data = {
                'trangthai':0
            }
            Swal.fire(
                'Khoá người dùng?',
                'Bạn có chắc chắn muốn khoá người dùng này không?',
                'warning'
            ).then(function(){
                $.ajax({
                    type:"POST",
                    url:'lock_user/'+id,
                    data:data,
                    dataType: "JSON",
                    success: function(response){
                        Swal.fire(
                            'Thành Công!',
                            'Khoá người dùng thành công!',
                            'success'
                        ).then(function(){
                            location.reload();
                        })
                    }
                })
            })
        }
        function unlockuser(id){
            var data = {
                'trangthai':1
            }
            Swal.fire(
                'Mở Khoá người dùng?',
                'Bạn có chắc chắn muốn mở khoá người dùng này không?',
                'warning'
            ).then(function(){
                $.ajax({
                    type:"POST",
                    url:'unlock_user/'+id,
                    data:data,
                    dataType: "JSON",
                    success: function(response){
                        Swal.fire(
                            'Thành Công!',
                            'Mở Khoá người dùng thành công!',
                            'success'
                        ).then(function(){
                            location.reload();
                        })
                    }
                })
            })
        }
        function changerole(id){ 
            var data = {
                'quyentruycap':$('#user_role').val()
            }
            Swal.fire(
                'Đổi quyền truy cập',
                'Bạn có muốn đổi quyền truy cập cho người dùng này không?',
                'warning'
            ).then(function(){
                $.ajax({
                    type:"POST",
                    url:'changerole/'+id,
                    dataType: "JSON",
                    data: data,
                    success: function(response){
                        Swal.fire(
                            'Thành công',
                            'Thay đổi quyền truy cập thành công!',
                            'success'
                        ).then(function(){
                            location.reload();
                        })
                    }
                })
            })
        }
        
    </script>

@endsection
