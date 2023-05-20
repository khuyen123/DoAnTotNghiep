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
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    
   
@endsection
