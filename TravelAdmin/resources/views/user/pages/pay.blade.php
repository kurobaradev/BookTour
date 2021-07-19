@extends('user.layouts.index')
@section('content')
    <div class="container marketing mb-5 mt-5 text-dark">
        <h3 class="pb-4 mb-4 fst-italic border-bottom text-dark">
            HÓA ĐƠN
        </h3>
        <form class="form-inline row g-3" action="{{ route('payconfirm.index') }}" method="POST">
            @csrf
            {{-- @php
      dd($dataOderCreate["user_name"])
      @endphp --}}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tên khách hàng:</label>
                <div class="col-sm-10">
                    <input name="user_name" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCreate['user_name'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input name="user_mail" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCreate['user_mail'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tên tour</label>
                <div class="col-sm-10">
                    <input name="tour_name" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCreate['tour_name'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mã tour:</label>
                <div class="col-sm-10">
                    <input name="tour_id" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCreate['tour_id'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ngày khởi hành:</label>
                <div class="col-sm-10">
                    <input name="departed" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCreate['departed'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Số ngày:</label>
                <div class="col-sm-10">
                    <input name="duration" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCreate['duration'] }}">
                </div>
            </div>
            <div class="form-group row col-md-2">
                <label class="col-sm-8 col-form-label">Số người lớn:</label>
                <div class="col-sm-4">
                    <input name="Nguoilon" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCreate['Nguoilon'] }}">
                </div>
            </div>
            <div class="form-group row col-md-6">
                <label class="col-sm-2 col-form-label">Số trẻ em:</label>
                <div class="col-sm-10">
                    <input name="treem" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCreate['treem'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"> Số điện thoại</label>
                <div class="col-sm-10">
                    <input name="phone" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCreate['phone'] }}">
                </div>
            </div>
            {{-- <div class="form-group row">
                <label class="col-sm-2 col-form-label"> Xe thuê đi kèm:</label>
                <div class="col-sm-10">
                    <input name="price_car" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCreate['price_car'] }}">
                </div>
            </div> --}}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"> <strong>Tổng giá:</strong></label>
                <div class="col-sm-10">
                    <input name="price" type="text" readonly class="form-control-plaintext"
                        value="{{ $dataOderCreate['price'] }}">
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Xác nhận đặt tour</button>
        </form>
    </div>
@endsection
