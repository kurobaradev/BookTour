@extends('user.layouts.index')
@section('content')
    {{-- slider --}}
    @include('user.pages.components.home.slider')
    <!-- -------------------------- -->
    <div class="container marketing" >

    <!-- Three columns of text below the carousel -->
    <div class=" container row g-3 mb-5" >
      <div class="border-bottom border-warning container-fluid d-flex justify-content-between col-12" style="height: 50px">
        <h3 class="pb-4 mb-4 fst-italic text-warning p-2 bd-highlight">  {{$categoryname->name}} </h3>
      </div>
      <div class="col-12 g-3 text-dark row">
        @foreach($tour as $tour)
        <div class="col-4">
          <div class="card ">
            <img class="card-img-top" src="{{ $tour->feature_image_path }}" alt="Card image cap" style="width: 100%; height: 200px;">
            <div class="card-body">
              <h5 class="card-title">{{ $tour->name }}</h5>
              <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong>{{ $tour->id }}</p>
              <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong></p>
              <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
              <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong>{{ number_format($tour->price) }}VND</p>
              <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> {{ $tour->duration }}</p>
              <a href="{{ route('chitiettour.index', ['id' => $tour->id]) }}" type="button" class="btn btn-info m-2 text-white">Xem chi tiết</a>
              <a href="{{ route('booktour.index', ['id' => $tour->id]) }}" type="button" class="btn btn-info m-2 text-white">Đặt tour</a>
            </div>
            <div class="card-footer">
              <small class="text-muted"><p> cập nhật lúc</p></small>
            </div>
          </div>
        </div>
         @endforeach
      </div>
    </div><!-- /.row -->

  </div><!-- /.container -->
@endsection
