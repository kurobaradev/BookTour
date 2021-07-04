@extends('admin.layouts.index')
@section('title')
<title>Quản lí loại tuor</title>
@endsection
@section('js')

<script src="{{asset('vendors/sweetAlert2/sweetalert2@10.js')}}"></script>
<script src="{{asset('vendors/action/delete.js')}}"></script>

@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí loại tuor','key'=>'Danh sách'])
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tiên loại tour</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categoriestour as $categoriestour)
                        <tr>
                            <td>{{$categoriestour->name}}</td>
                            <td>
                                <a href="{{route('categoriestour.edit',['id'=>$categoriestour->id])}}" class="btn btn-primary">Sửa</a>
                                <a href=""
                                data-url="{{route('categoriestour.delete',['id'=>$categoriestour->id])}}"
                                class="btn btn-danger action_delete">Xóa</a>
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