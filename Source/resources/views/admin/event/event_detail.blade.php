@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
       
            <th>Tên sự kiện</th>
            <th>Tên người liên hệ</th>
            <th>Danh mục sự kiện</th>
            <th>Địa chỉ</th>
            <th>Khu Vực</th>
            <th>Giá vé</th>
            <th>Trạng Thái</th>
            <th style="width: 150px">Thao tác</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::event($events) !!}
        </tbody>
    </table>
    
@endsection
