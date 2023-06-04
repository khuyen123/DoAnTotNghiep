@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
          
            <th style="width:250px">Tên sự kiện</th>
            <th>Tỉnh thành</th>
            <th>Số vé bán được</th>
            <th>Tổng tiền bán vé</th>
            <th>Thao tác</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
            <tr>
                <td>
                    {{$event->event->tenSukien}}
                </td>
                <td>
                    {{$event->wards->district->province->tentinhthanh}}
                </td>
                <td>
                    {{$event->sovedaban}}
                </td>
                <td>
                    {{number_format($event->sovedaban*$event->giave,0,',','.')}} VNĐ
                </td>
                <td>
                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-info-circle"></i>&nbsp;Xem chi tiết</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
 
@endsection
