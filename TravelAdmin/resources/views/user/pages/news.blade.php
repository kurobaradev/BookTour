@extends('user.layouts.index')
@section('content')
  <div class="container position-relative mt-4 mb-2 p-0" style="height: 300px;">
    <img src="{{ asset('vendors/use/img/thanhhuong.jpg') }}" alt="..." style="height: 100%; width: 100%;">
    <div class="position-absolute top-50 start-50 translate-middle bg-dark" style="width: 100%; height: 100%; opacity: 0.5;">    </div>
    <h1 class="position-absolute top-50 start-50 translate-middle text-white">Tin tức</h1>
  </div>

  <!-- -------------------------- -->

  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 g-4 text-dark">
      <div class="col">
        <div class="card">
          <a href=""><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h4 class="card-title"><a href="" class="text-decoration-none text-dark">	Lạc Lối Trong “Dream Garden” Tại Gia Nghĩa</a></h4>
            <p class="card-text m-0">Không chỉ sở hữu nhan sắc xinh đẹp được ví như “hoa hậu nhí”, cô bạn Đặng An Na còn sở hữu thành tích học tập...</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <a href=""><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h4 class="card-title"><a href="" class="text-decoration-none text-dark">	Lạc Lối Trong “Dream Garden” Tại Gia Nghĩa</a></h4>
            <p class="card-text m-0">Không chỉ sở hữu nhan sắc xinh đẹp được ví như “hoa hậu nhí”, cô bạn Đặng An Na còn sở hữu thành tích học tập...</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <a href=""><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h4 class="card-title"><a href="" class="text-decoration-none text-dark">	Lạc Lối Trong “Dream Garden” Tại Gia Nghĩa</a></h4>
            <p class="card-text m-0">Không chỉ sở hữu nhan sắc xinh đẹp được ví như “hoa hậu nhí”, cô bạn Đặng An Na còn sở hữu thành tích học tập...</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <a href=""><img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h4 class="card-title"><a href="" class="text-decoration-none text-dark">	Lạc Lối Trong “Dream Garden” Tại Gia Nghĩa</a></h4>
            <p class="card-text m-0">Không chỉ sở hữu nhan sắc xinh đẹp được ví như “hoa hậu nhí”, cô bạn Đặng An Na còn sở hữu thành tích học tập...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection