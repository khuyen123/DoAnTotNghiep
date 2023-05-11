@extends('admin.main')

@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">
{{--            <div class="form-group">--}}
{{--                <label for="name">Tên sản phẩm</label>--}}
{{--                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">--}}
{{--            </div>--}}

            <div class="form-group">
                <label for="category">Tên Sự kiệns</label>
                <select class="form-control" name="product_id">
                    {{--                    <option value="0">Danh mục cha</option>--}}
                    @foreach($event_details as $event_detail)
                        <option value="{{$event_detail->id}}">{{$event_detail->event->tenSukien.'-'.$event_detail->wards->district->province->tentinhthanh}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Ảnh sự kiện</label>
                <input type="file" class="form-control" accept="image/*" id="event_image" name="event_image">
                <div id="image_show">

                </div>
                <input type="hidden" name="event_image" id="event_image">
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm ảnh</button>
        </div>
        @csrf
    </form>
@endsection
