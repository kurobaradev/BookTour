@extends('user.layouts.index')
@section('content')
  <div class="container position-relative mt-4 mb-2 p-0" style="height: 300px;">
    <img src="{{ asset('vendors/use/img/thanhhuong.jpg') }}" alt="..." style="height: 100%; width: 100%;">
    <div class="position-absolute top-50 start-50 translate-middle bg-dark" style="width: 100%; height: 100%; opacity: 0.5;">    </div>
    <h1 class="position-absolute top-50 start-50 translate-middle text-white">Tin tức</h1>
  </div>


  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


    <!-- START THE FEATURETTES -->

    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom text-warning">
          Lạc Lối Trong “Dream Garden” Tại Gia Nghĩa
        </h3>
        <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" style="width: 100%;">
        <p>Tour du lịch Đà Lạt- Nha Trang 4n3đ 2020 là hành trình giá tốt. Bạn sẽ khám phá thành phố sương mù Đà Lạt và thành phố biển Nha Trang. Thiên Nhân travel tổ chức hành trình 4 ngày đưa quý khách đến tìm hiểu văn hóa cồng chiêng Tây Nguyên, khám phá Vườn hoa thành phố,.... Hay hiểu hơn về quy trình nuôi yến ở Làng Yến Mai Sinh Nha Trang. Cùng khám phá chuyến du lịch Đà Lạt- Nha Trang 4n3đ để hiểu hơn về hai thành phố du lịch xinh đẹp này nhé! Thời gian: 4N3ĐGía tham khảo: 2.988.000 vnđ/ khách Khởi hành: 2020Mã tour: TN15
        Lịch trình chi tiết tour du lịch Đà Lạt- Nha Trang 4n3đ:
        Ngày 1: ĐÓN SÂN BAY THAM QUAN ĐÀ LẠT  ( Ăn: trưa, tối )
        Sáng: Xe và HDV Đón khách tại sân bay, sau đó di chuyển về thành phố Đà Lạt.Trưa: Ăn tại Nhà Hàng, nhận phòng khách sạn nghỉ ngơi và tiếp tục cuộc hành trình tour du lịch Đà Lạt- Nha Trang 4n3đ</p>
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
        </div>
      </div>
    </div>

    <!-- /END THE FEATURETTES -->

  </div>
@endsection