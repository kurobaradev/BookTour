@extends('user.layouts.index')
@section('content')
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/99-thuyen_hoa.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/1590739634.jpg" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

  <!-- Search -->
    <div class="container position-relative p-0" style="height: 300px; margin-top: -50px;">
      <img src="{{ asset('vendors/use/img/thanhhuong.jpg') }}" alt="..." style="height: 100%; width: 100%;">
      <div class="position-absolute top-50 start-50 translate-middle bg-dark" style="width: 100%; height: 100%; opacity: 0.5;">    </div>
      <div class="position-absolute top-50 start-50 translate-middle text-white row g-3">
        <div class="col-md-6">
          <label class="form-label">Địa điểm</label>
          <input class="form-control">
        </div>
        <div class="col-md-6">
          <label class="form-label">Ngày khởi hành</label>
          <input type="text" id="timeCheckIn" class="form-control" />
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-warning text-dark">Tìm kiếm</button>
        </div>
      </div>
    </div>

    <!-- Three columns of text below the carousel -->
    <div class="row ">
      <div class="col-lg-4">
        <i class="fab fa-7x fa-salesforce text-warning" ></i>
        <h2 class="text-dark">RẺ HƠN GIÁ RẺ NHẤT, NGẠI GÌ KHÔNG ĐẶT?</h2>
        <p class="text-dark">Ở đâu giá rẻ hơn, thông báo ngay với Vntrip.vn để được mua giá rẻ hơn giá rẻ nhất</p>
        <p class="text-dark"><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <i class="fab fa-7x fa-cc-amazon-pay text-warning"></i>
        <h2 class="text-dark">THANH TOÁN LINH HOẠT AN TOÀN</h2>
        <p class="text-dark">Chấp nhận mọi hình thức thanh toán, không cần thẻ tín dụng. Bảo mật thông tin tuyệt đối.</p>
        <p class="text-dark"><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <i class="fas fa-7x fa-phone-square-alt text-warning"></i>
        <h2 class="text-dark">HỖ TRỢ 24/7</h2>
        <p class="text-dark">Gọi ngay 0963 266 688 kể cả 2h sáng để được hỗ trợ</p>
        <p class="text-dark"><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    

    <!-- START THE FEATURETTES -->

    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom text-warning">
          Tour nổi bật
        </h3>
        <div class="card mb-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>                
                <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
              </div>
              <button type="button" class="btn btn-info btn-outline-primary book-tour text-white">Đặt tour</button>
            </div>
          </div>
        </div>
        <div class="card mb-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>                
                <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
              </div>
              <button type="button" class="btn btn-info btn-outline-primary book-tour text-white">Đặt tour</button>
            </div>
          </div>
        </div>

        <div class="card mb-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>                <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
              </div>
              <button type="button" class="btn btn-info btn-outline-primary book-tour text-white">Đặt tour</button>
            </div>
          </div>
        </div>

        <div class="card mb-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>                <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
              </div>
              <button type="button" class="btn btn-info btn-outline-primary book-tour text-white">Đặt tour</button>
            </div>
          </div>
        </div>

        <div class="card mb-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>                <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
              </div>
              <button type="button" class="btn btn-info btn-outline-primary book-tour text-white">Đặt tour</button>
            </div>
          </div>
        </div>

        <div class="card mb-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>                <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
              </div>
              <button type="button" class="btn btn-info btn-outline-primary book-tour text-white">Đặt tour</button>
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-4">
        <div class="row">
        <h3 class="pb-4 mb-4 fst-italic border-bottom text-warning">
          Tin tức
        </h3>
          <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
            <div class="row g-0 col-12">
              <div class="col-md-4">
                <a href="#"><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="#" class="text-decoration-none text-dark"><h5 class="">Ngắm Loạt Thành Tích Đáng Ngưỡng Mộ Của An Na</h5></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
            <div class="row g-0 col-12">
              <div class="col-md-4">
                <a href="#"><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="#" class="text-decoration-none text-dark"><h5 class="card-title">Ngắm Loạt Thành Tích Đáng Ngưỡng Mộ Của An Na</h5></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
            <div class="row g-0 col-12">
              <div class="col-md-4">
                <a href="#"><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="#" class="text-decoration-none text-dark"><h5 class="card-title">Ngắm Loạt Thành Tích Đáng Ngưỡng Mộ Của An Na</h5></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
            <div class="row g-0 col-12">
              <div class="col-md-4">
                <a href="#"><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="#" class="text-decoration-none text-dark"><h5 class="card-title">Ngắm Loạt Thành Tích Đáng Ngưỡng Mộ Của An Na</h5></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
            <div class="row g-0 col-12">
              <div class="col-md-4">
                <a href="#"><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="#" class="text-decoration-none text-dark"><h5 class="card-title">Ngắm Loạt Thành Tích Đáng Ngưỡng Mộ Của An Na</h5></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
            <div class="row g-0 col-12">
              <div class="col-md-4">
                <a href="#"><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="#" class="text-decoration-none text-dark"><h5 class="card-title">Ngắm Loạt Thành Tích Đáng Ngưỡng Mộ Của An Na</h5></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
            <div class="row g-0 col-12">
              <div class="col-md-4">
                <a href="#"><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="#" class="text-decoration-none text-dark"><h5 class="card-title">Ngắm Loạt Thành Tích Đáng Ngưỡng Mộ Của An Na</h5></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
            <div class="row g-0 col-12">
              <div class="col-md-4">
                <a href="#"><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="#" class="text-decoration-none text-dark"><h5 class="card-title">Ngắm Loạt Thành Tích Đáng Ngưỡng Mộ Của An Na</h5></a>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="col-5 text-warning mt-2"> Xem thêm >>></a>
        </div>
      </div>
    </div>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

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

