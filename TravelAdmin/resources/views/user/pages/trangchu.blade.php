@extends('user.layouts.index')
@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="border-radius: 50%; height: 10px; width: 10px;"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" style="border-radius: 50%; height: 10px; width: 10px;"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" style="border-radius: 50%; height: 10px; width: 10px;"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="d-block w-100">
        <div class="container" >
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/99-thuyen_hoa.jpg" class="d-block w-100">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/1590739634.jpg" class="d-block w-100">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
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
              <img src="img/2-1543169855.jpg" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</h5>
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
              <img src="img/2-1543169855.jpg" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</h5>
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
              <img src="img/2-1543169855.jpg" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</h5>
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
              <img src="img/2-1543169855.jpg" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</h5>
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
              <img src="img/2-1543169855.jpg" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</h5>
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
              <img src="img/2-1543169855.jpg" class="rounded-start" style="width: 100%; height: 100%;" >
            </div>
            <div class="col-md-6">
              <div class="card-body text-dark book">
                <h5 class="card-title">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</h5>
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
        <div class="border border-warning p-1 border-2">
          <h3 class="bg-warning text-dark p-1" style="width: 100%;">TÌM KIẾM</h3>
          <h5 class="text-white mt-2">MÃ TOUR</h5>
          <input class="form-control" placeholder="Nhập từ khóa">
          <h5 class="text-white mt-2">GIÁ</h5>
          <select class="form-select" aria-label="Default select example">
            <option selected>Tất cả</option>
            <option value="1">Từ 0 đến 500k</option>
            <option value="2">Từ 500k đến 1triệu</option>
            <option value="3">Từ 1triệu đến 3triệu</option>
          </select>
          <h5 class="text-white mt-2">LOẠI TOUR</h5>
          <select class="form-select" aria-label="Default select example">
            <option selected>Tất cả</option>
            <option value="1">Loại 1</option>
            <option value="2">Loại 2</option>
            <option value="3">Loại 3</option>
          </select>
          <h5 class="text-white mt-2">NƠI KHỞI HÀNH</h5>
          <input class="form-control" placeholder="Nhập từ khóa">
          <h5 class="text-white mt-2">NGÀY ĐI</h5>
          <input class="form-control" placeholder="Nhập ngày đi">
          <button type="button" class="btn btn-outline-warning mt-2"><i class="fas fa-search"></i> <strong>Tìm kiếm</strong></button>
        </div>
        <div class="mt-5 row">
          <h3 class="text-warning col-7">TIN TỨC</h3>
          <a href="#" class="col-5 text-warning mt-2"> Xem thêm >>></a>
          <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
            <div class="row g-0 col-12">
              <div class="col-md-4">
                <a href="#"><img src="img/2-1543169855.jpg" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
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
                <a href="#"><img src="img/2-1543169855.jpg" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
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
                <a href="#"><img src="img/2-1543169855.jpg" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
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
                <a href="#"><img src="img/2-1543169855.jpg" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
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
                <a href="#"><img src="img/2-1543169855.jpg" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
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
                <a href="#"><img src="img/2-1543169855.jpg" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
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
                <a href="#"><img src="img/2-1543169855.jpg" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
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
                <a href="#"><img src="img/2-1543169855.jpg" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="#" class="text-decoration-none text-dark"><h5 class="card-title">Ngắm Loạt Thành Tích Đáng Ngưỡng Mộ Của An Na</h5></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
@endsection