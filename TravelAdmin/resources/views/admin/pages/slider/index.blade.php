@extends('admin.layouts.index')
@section('title')
<title>Quản lí slider</title>
@endsection
@section('js')

<script src="{{asset('vendors/sweetAlert2/sweetalert2@10.js')}}"></script>
{{-- <script src="{{asset('vendors/action/delete.js')}}"></script> --}}

@endsection
@section('css')
<link href="{{asset('vendors/admin/product/index/list.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí slider','key'=>'Chỉnh sửa'])
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
    <div class="col-12 row">
        <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data" class=" col-12">
            @csrf
            <div class="form-group row">
                <input  type="file" 
                class="form-control-file col-5"
                name="image_path"
                >
                <button type="submit" class="btn btn-primary">Lưu ảnh</button>
            </div>
        </form>
        <div class="col-7 row">
            @foreach ($slider as $slider)
                <div style="width: 12rem; height:180px; margin-top:0;">
                    <div class="card" >
                        <img class="card-img-top" src="{{$slider->image_path}}" alt="Card image cap">
                        <a href="{{route('slider.delete',['id'=>$slider->id])}}" class="btn btn-danger">Xóa</a>
                    </div>
                </div>
             @endforeach
           
        </div>
        <div id="carouselExampleControls" class="carousel slide col-5" data-ride="carousel">
            <div class="carousel-inner">
             @foreach ($sliders as $sliders)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img class="d-block w-100" src="{{$sliders->image_path}}" alt="">
                  </div>
             @endforeach
             
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
       
    </div>
 
      

</div>
@endsection