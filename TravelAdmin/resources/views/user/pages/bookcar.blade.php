@extends('user.layouts.index')
@section('content')
    <!-- /.container -->

    <div class="container marketing mb-5 text-dark mt-5">
    <h3 class="pb-4 mb-4 fst-italic border-bottom text-dark">
      THÔNG TIN ĐẶT XE
    </h3>
    <form class="row g-3">
      <div class="col-md-12">
        <label class="form-label">Tên xe</label>
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Giá xe:</label>
        <label class="form-label">2904202015442375</label>
      </div>
      <div class="form-group col-md-4 row">
            <label class="col-sm-4 col-form-label"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong></label>
            <div class="col-sm-8">
                <input type="text" id="timeCheckIn" class="form-control" />
            </div>
        </div>
            
        <div class="form-group col-md-4 row">
            <label class="col-sm-4 col-form-label"><i class="fas fa-calendar-alt"></i> <strong> Số
                    Ngày:</strong></label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="duration">
            </div>
        </div>
      <div class="col-12">
        <a href="HoaDon.html" class="btn btn-lg btn-primary">Đặt xe</a>
        <a href="index.html" class="btn btn-lg btn-primary">Hủy đặt xe</a>
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