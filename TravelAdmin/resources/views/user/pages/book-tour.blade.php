@extends('user.layouts.index')
@section('content')
  <!-- /.container -->

  <div class="container marketing mb-5 mt-5 text-dark">
    <h3 class="pb-4 mb-4 fst-italic border-bottom ">
      THÔNG TIN ĐẶT TOUR
    </h3>
    <form class="row g-3">
      <div class="col-md-12">
        <label class="form-label">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</label>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong></label>
        <label class="form-label">T-2904202015442375</label>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong></label>
        <label class="form-label">T-2904202015442375</label>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong></label>
        <label class="form-label">T-2904202015442375</label>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong></label>
        <label class="form-label">T-2904202015442375</label>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong></label>
        <label class="form-label">T-2904202015442375</label>
      </div>
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Số người lớn</label>
        <input type="number" name="quantity" min="1" max="5">
      </div>
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Số trẻ em</label>
        <input type="number" name="quantity" min="1" max="5">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Chọn loại xe</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>Loại 0</option>
          <option value="1">Loại 1</option>
          <option value="2">Loại 2</option>
          <option value="3">Loại 3</option>
        </select>
      </div>
      <div class="col-12">
        <a href="HoaDon.html" class="btn btn-lg btn-primary">Đặt tour</a>
        <a href="index.html" class="btn btn-lg btn-primary">Hủy đặt tour</a>
      </div>
    </form>
  </div>
  @endsection