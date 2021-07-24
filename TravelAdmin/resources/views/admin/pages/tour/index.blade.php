@extends('admin.layouts.index')
@section('title')
<title>Quản lí tour</title>
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
    @include('admin.partials.content-header',['name'=>'Quản lí tour','key'=>'Danh sách'])
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
                            <th style="width: 250px;">Tên tour</th>
                            <th style="width: 140px;">Giá</th>
                            <th style="width: 150px;">Mô tả</th>
                            <th style="width: 100px;">Loại</th>
                            <th >Ngày khởi hành</th>
                            <th style="width: 60px;">Thời gian tour</th>
                            <th style="width: 150px;">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tours as $tour)
                        <tr>
                            <td>{{$tour->name}}</td>
                            <td>{{number_format($tour->price)}} VND</td>
                            <td class="content"><div class="abc"> <?php echo "$tour->description"?></div></td>
                            <td>{{optional($tour->categorytour)->name}}</td>
                            <td><?php               
                                $t = $tour->departed;
                                echo date('d-m-Y \L\ú\c H:i', strtotime($t))
                                 ?></td>
                            <td>{{$tour->duration}}</td>
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