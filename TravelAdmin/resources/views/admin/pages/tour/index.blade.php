@extends('admin.layouts.index')
@section('title')
<title>Quản lí tuor</title>
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
    @include('admin.partials.content-header',['name'=>'Quản lí tuor','key'=>'Danh sách'])
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên tour</th>
                            <th>Giá</th>
                            <th>Nội dung</th>
                            <th>Loại</th>
                            <th>hình ảnh</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tours as $tour)
                        <tr>
                            <td>{{$tour->name}}</td>
                            <td>{{$tour->price}}</td>
                            <td>{{$tour->content}}</td>
                            <td>Miền trung</td>
                            <td>
                                <img class="product_image_150_100" src="{{$tour->feature_image_path}}" alt="">
                            </td>
                            <td>
                                <a href="{{route('tour.edit',['id'=>$tour->id])}}" class="btn btn-primary">Sửa</a>
                                <a href=""
                                data-url="{{route('tour.delete',['id'=>$tour->id])}}"
                                class="btn btn-danger action_delete">Xóa</a>
                            </td>
                        </tr>
                        @endforeach 
                        {{-- @foreach ($categoriestour as $categoriestour)
                        <tr>
                            <td>{{$categoriestour->name}}</td>
                            <td>
                                <a href="{{route('categoriestour.edit',['id'=>$categoriestour->id])}}" class="btn btn-primary">Sửa</a>
                                <a href=""
                                data-url="{{route('categoriestour.delete',['id'=>$categoriestour->id])}}"
                                class="btn btn-danger action_delete">Xóa</a>
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection