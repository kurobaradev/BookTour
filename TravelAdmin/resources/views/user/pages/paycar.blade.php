@extends('user.layouts.index')
@section('content')
    <div class="container marketing mb-5 mt-5 text-dark">
        <h3 class="pb-4 mb-4 fst-italic border-bottom text-dark">
            HÓA ĐƠN
        </h3>
        <form class="form-inline row g-3" action="{{ route('payconfirmcar.index') }}" method="POST">
            @csrf
            {{-- @php
      dd($dataOderCarCreate["user_name"])
      @endphp --}}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tên khách hàng:</label>
                <div class="col-sm-10">
                    <input name="user_name" type="text" readonly class="form-control-plaintext"value="{{ $dataOderCarCreate['user_name'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input name="user_mail" type="text" readonly class="form-control-plaintext"value="{{ $dataOderCarCreate['user_mail'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tên xe</label>
                <div class="col-sm-10">
                    <input name="car_name" type="text" readonly class="form-control-plaintext"value="{{ $dataOderCarCreate['car_name'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ngày khởi hành:</label>
                <div class="col-sm-10">
                    <input name="departed" type="text" readonly class="form-control-plaintext" value="{{ $dataOderCarCreate['departed'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Số ngày:</label>
                <div class="col-sm-10">
                    <input name="duration" type="text" readonly class="form-control-plaintext" value="{{ $dataOderCarCreate['duration'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"> Số điện thoại</label>
                <div class="col-sm-10">
                    <input name="phone" type="text" readonly class="form-control-plaintext" value="{{ $dataOderCarCreate['phone'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"> <strong>Tổng giá:</strong></label>
                <div class="col-sm-10">
                    <input name="price" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCarCreate['price'] }}">
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Xác nhận đặt tour</button>
        </form>
    </div>
@endsection
