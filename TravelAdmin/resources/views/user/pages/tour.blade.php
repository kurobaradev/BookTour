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
        <img src="{{ asset('vendors/use/img/99-thuyen_hoa.jpg') }}" class="d-block w-100">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('vendors/use/img/1590739634.jpg') }}" class="d-block w-100">
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

  <div class="container-fluid" style="margin-top:20px;">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Tour nổi bật
      </h3>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 ">
            <div class="row container-fluid" style="margin-left: -5px;">
              <div class="col-3">
                <div class="card bg-light" style="width: 18rem;">
                  <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body text-dark">
                    <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
                    <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                    <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                    <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
                    <a href="#" class="btn btn-primary">Đặt tour</a>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card bg-light" style="width: 18rem;">
                  <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body text-dark">
                    <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
                    <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                    <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                    <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
                    <a href="#" class="btn btn-primary">Đặt tour</a>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card bg-light" style="width: 18rem;">
                  <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body text-dark">
                    <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
                    <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                    <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                    <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
                    <a href="#" class="btn btn-primary">Đặt tour</a>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card bg-light" style="width: 18rem;">
                  <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body text-dark">
                    <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
                    <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                    <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                    <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
                    <a href="#" class="btn btn-primary">Đặt tour</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 ">
            <div class="row container-fluid" style="margin-left: -5px;">
              <div class="col-3">
                <div class="card bg-light" style="width: 18rem;">
                  <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body text-dark">
                    <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
                    <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                    <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                    <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
                    <a href="#" class="btn btn-primary">Đặt tour</a>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card bg-light" style="width: 18rem;">
                  <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body text-dark">
                    <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
                    <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                    <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                    <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
                    <a href="#" class="btn btn-primary">Đặt tour</a>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card bg-light" style="width: 18rem;">
                  <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body text-dark">
                    <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
                    <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                    <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                    <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
                    <a href="#" class="btn btn-primary">Đặt tour</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 ">
            <div class="row container-fluid" style="margin-left: -5px;">
              <div class="col-3">
                <div class="card bg-light" style="width: 18rem;">
                  <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body text-dark">
                    <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
                    <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                    <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                    <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
                    <a href="#" class="btn btn-primary">Đặt tour</a>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card bg-light" style="width: 18rem;">
                  <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body text-dark">
                    <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
                    <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
                    <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                    <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
                    <a href="#" class="btn btn-primary">Đặt tour</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev position-absolute top-50 start-0 translate-middle-y rounded-circle" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="width: 40px; height:40px; background: #1B4A7A;">
        <span class="carousel-control-prev-icon text-warning" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next position-absolute top-50 end-0 translate-middle-y rounded-circle" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="width: 40px; height:40px; background: #1B4A7A;">
        <span class="carousel-control-next-icon " aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- -------------------------- -->

  <div class="container-fluid">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
      Loại tour 1
    </h3>
    <div class="row row-cols-1 row-cols-md-2 g-4 text-dark">
      <div class="col">
        <div class="card">
          <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
            <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
            <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
            <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
            <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
            <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
            <a href="#" class="btn btn-primary">Đặt tour</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
            <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
            <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
            <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
            <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
            <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
            <a href="#" class="btn btn-primary">Đặt tour</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
            <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
            <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
            <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
            <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
            <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
            <a href="#" class="btn btn-primary">Đặt tour</a>
          </div>
        </div>
      </div>
      <div class="col">
       <div class="card">
          <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Tour Du Lịch Đà Lạt 1 Ngày Giá Rẻ - Tour Tham Quan - Trải Nghiệm Sở Thú Zoodoo Đà Lạt</a></h5>
            <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong> T-2904202015442375</p>
            <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong> Hằng Ngày</p>
            <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
            <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> Liên Hệ</p>
            <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> 3</p>
            <a href="#" class="btn btn-primary">Đặt tour</a>
          </div>
        </div>
      </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-1">
      <a href="">Xem thêm >>></a>
    </div>
  </div>
@endsection