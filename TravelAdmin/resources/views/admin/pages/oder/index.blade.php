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
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="max-width: 100px;">Tên Khách hàng</th>
                            <th>Tên tour</th>
                            <th>Số điện thoại</th>
                            <th style="max-width: 70px;">Số người lớn</th>
                            <th style="max-width: 70px;">Số trẻ em</th>
                            <th>Giá</th>
                            <th style="max-width: 50px;">Hành động</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        @foreach ($oders as $oder)
                        <tr>
                            <td>{{$oder->id}}</td>
                            <td style="max-width: 50px;">{{$oder->user_name}}</td>
                            <td style="max-width: 200px;">{{$oder->tour_name}}</td>
                            <td>{{$oder->phone}}</td>
                            <td style="max-width: 10px;">{{$oder->Nguoilon}}</td>
                            <td style="max-width: 10px;">{{$oder->treem}}</td>
                            <td>{{$oder->price}}</td>
                            <td style="max-width: 50px;">
                                @if($oder->status==0)
                                    tour chưa được xác nhận
                                @else
                                    Tour đã được xác nhận
                                @endif
                                
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Xem</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Chi tiết đặt tour</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body row text-dark">
                                            <p class=" col-12">Tên tour: {{$oder->tour_name}}</p>
                                            <p class="col-6">Tên khách hàng: {{$oder->user_name}}</p>
                                            <p class="col-6">Số điện thoại: {{$oder->phone}}</p>
                                            <p class=" col-12">Email: {{$oder->user_mail}}</p>
                                            <p class="col-6">Số người lớn : {{$oder->Nguoilon}}</p>
                                            <p class="col-6">Số trẻ em : {{$oder->treem}}</p>
                                            <p class=" col-12">Thời gian : {{$oder->departed}}</p>
                                            <p class=" col-12">Số ngày : {{$oder->duration}}</p>
                                            <p class=" col-12"><strong>Tổng giá: </strong>{{$oder->price}}</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <a href="{{route('confirmoder.index',['id'=> $oder->id])}}" type="button" class="btn btn-primary">Xác nhận tour và gửi mail</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
@include('admin.pages.oder.detailoder')

@endsection