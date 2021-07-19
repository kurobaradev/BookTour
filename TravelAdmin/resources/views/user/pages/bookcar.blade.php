@extends('user.layouts.index')
@section('content')
    <!-- /.container -->

    <div class="container marketing mb-5 text-dark mt-5">
    <h3 class="pb-4 mb-4 fst-italic border-bottom text-dark">
      THÔNG TIN ĐẶT XE
    </h3>
    <form class="row g-3" action="{{ route('thanhtoanxe.index') }}" method="POST">
        @csrf
        <div class="form-group col-md-12 row">
            {{-- <label class="col-sm-3 col-form-label"><i class="fas fa-barcode"></i></label> --}}
            <div class="form-group col-md-6 row">
                <label class="col-sm-3 col-form-label"> <strong>Tên xe:</strong></label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" name="car_name" value="{{ $cars->name }}">
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label class="col-sm-3 col-form-label"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong></label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" name="price"
                        value="{{ $cars->price }}">
                </div>
            </div>
        </div>
        <div class="col-6">
            <label >Ngày Nhận xe</label>
            <input type="datetime-local" class="form-control" name="departed">
        </div>
        <div class="col-6">
            <label >Số ngày thuê</label>
            <input type="number" class="form-control" name="duration">
        </div>
        <div class="col-6">
            <label >Số điện thoại</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="col-6">
            <label >Email</label>
            <input type="mail" class="form-control" name="user_mail" value="{{ $cars->user_mail }}">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-lg btn-primary">Đặt xe</button>
            <a href="{{ route('trangchu.index') }}" class="btn btn-lg btn-primary">Hủy đặt xe</a>
        </div>

    </form>
  </div>



    
@endsection
@section('js')
    <script src="{{ asset('vendors/use/css/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/use/css/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/use/css/bootstrap-datepicker.js') }}"></script>
    <script>
        $(function () {
            'use strict';
            var nowTemp = new Date();
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

            var checkin = $('#timeCheckIn').datepicker({
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                }
            }).on('changeDate', function (ev) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkout.setValue(newDate);
                }
                checkin.hide();
                $('#timeCheckOut')[0].focus();
            }).data('datepicker');
            var checkout = $('#timeCheckOut').datepicker({
                onRender: function (date) {
                    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                }
            }).on('changeDate', function (ev) {
                checkout.hide();
            }).data('datepicker');
        });
    </script>
@endsection