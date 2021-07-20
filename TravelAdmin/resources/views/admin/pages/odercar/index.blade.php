@extends('admin.layouts.index')
@section('title')
<title>Quản lí oder</title>
@endsection
@section('js')

<script src="{{asset('vendors/sweetAlert2/sweetalert2@10.js')}}"></script>
<script src="{{asset('vendors/action/delete.js')}}"></script>

@endsection
@section('css')
<link href="{{asset('vendors/admin/product/index/list.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí oder','key'=>'Danh sách'])
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->has('fail'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session()->get('fail') }}
        </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="max-width: 100px;">Tên Khách hàng</th>
                            <th>Tên xe</th>
                            <th>Số điện thoại</th>
                            <th style="max-width: 70px;">Email</th>
                            <th>Giá</th>
                            <th style="max-width: 50px;">Hành động</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        @foreach ($cars as $car)
                        <tr>
                            <td>{{$car->id}}</td>
                            <td style="max-width: 50px;">{{$car->user_name}}</td>
                            <td style="max-width: 200px;">{{$car->car_name}}</td>
                            <td>{{$car->phone}}</td>
                            <td>{{$car->user_mail}}</td>
                            <td>{{$car->price}}</td>
                            <td style="max-width: 140px;">
                                @if($car->status==0)
                                <a class="btn btn-primary" href="{{route('confirmodercar.index',['id'=>$car->id])}}">Xác nhận đơn</a>
                                @else
                                    Tour đã được xác nhận<br/>
                                    <a href="{{route('pdfcar.pdf',['id'=>$car->id]) }}" class="">Xuất PDF</a>
                                @endif
                                
                            </td>
                            <td>
                                <a href=""
                                data-url=""
                                class="btn btn-danger action_delete">hủy</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection