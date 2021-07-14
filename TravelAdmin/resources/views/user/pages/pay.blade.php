@extends('user.layouts.index')
@section('content')
  <div class="container marketing mb-5 mt-5 text-dark">
    <h3 class="pb-4 mb-4 fst-italic border-bottom text-dark">
      HÓA ĐƠN
    </h3>
    <form class="row g-3">
      <div class="col-md-12">
        <label class="form-label">Tên khách hàng: </label>
        <label class="form-label">Nguyễn Minh Trung</label>
      </div>
      <div class="col-md-12">
        <label class="form-label">Email: </label>
        <label class="form-label">nguyenminhtrung@gmail.com</label>
      </div>
      <div class="col-md-12">
        <label class="form-label">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</label>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Mã tour:</label>
        <label class="form-label">T-2904202015442375</label>
      </div>
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Số người lớn</label>
        <label for="inputPassword4" class="form-label">2</label>
      </div>
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Số trẻ em</label>
        <label for="inputPassword4" class="form-label">1</label>
      </div>
      <div class="col-6">
        <label for="inputAddress" class="form-label">Chọn loại xe</label>
        <label for="inputPassword4" class="form-label">Loại 0</label>
      </div>
      <div class="col-6">
        <label for="inputAddress" class="form-label">Giá</label>
        <label for="inputPassword4" class="form-label">150000 đồng</label>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Chúng tôi đã gửi hóa đơn tới email của quý khách, nếu có vấn đề gì xin liên hệ với chúng tôi </label> <br>
        <label for="inputAddress" class="form-label">Rất vui vì được phục vụ quý khách xin cảm ơn</label>
      </div>
      <div class="col-12">
        <a href="index.html" class="btn btn-lg btn-primary">Thoát</a>
      </div>
    </form>
  </div>
  @endsection