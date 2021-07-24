@extends('admin.layouts.index')
@section('title')
<title>Quản lí xe</title>
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
    @include('admin.partials.content-header',['name'=>'Quản lí xe','key'=>'Danh sách'])
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
                            <th style="width: 200px;">Tên xe</th>
                            <th>Giá</th>
                            <th>Mô tả</th>
                            <th>Loại</th>
                            <th>hình ảnh</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                        <tr>
                            <td>{{$car->name}}</td>
                            <td>{{number_format($car->price)}} VND</td>
                            <td class="content"><div class="abc">{{$car->description}}</div ></td>
                            <td>{{optional($car->categorycar)->name}}</td>
                            <td>
                                <img class="product_image_150_100" src="{{$car->feature_image_path}}" alt="">
                            </td>
                            <td>
                                <a href="{{route('car.edit',['id'=>$car->id])}}" class="btn btn-primary">Sửa</a>
                                <a href=""
                                data-url="{{route('car.delete',['id'=>$car->id])}}"
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
   {{-- {{ $cars->links()}} --}}

</div>
@endsection