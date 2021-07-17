@extends('user.layouts.index')
@section('content')
  <div class="container position-relative mt-4 mb-2 p-0" style="height: 10px;">   
  </div>

  <!-- Wrap the rest of the page in another container to center all the content. -->
 
  <div class="container marketing">
    <!-- START THE FEATURETTES -->
    {{-- <img class="card-img-top" src="{{$tour->feature_image_path}}" alt="Card image cap" style="width: 100%; height: 100%;">
    <div class="card-body">
      <h5 class="card-title">{{$tour->name}}</h5>
      <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong>{{$tour->id}}</p>
      <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong>
      @php
      $t = $tour->departed;
      echo date('d-m-Y \L\ú\c H:i', strtotime($t))
      @endphp</p>
      <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
      <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong>{{$tour->price}}</p>
      <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> {{$tour->duration}}</p>
      <a href="{{route('chitiettour.index',['id'=>$tour->id])}}" type="button" class="btn btn-info m-2 text-white">Xem chi tiết</a>
      <a href="{{route('chitiettour.index',['id'=>$tour->id])}}" type="button" class="btn btn-info m-2 text-white">Đặt tour</a> --}}
    <div class="row g-5">
      <div class="col-md-8">
        <figure>
          <blockquote class=" pb-4 mb-4 border-bottom text-warning">
            <h3>{{$tour->name}}</h3>
          </blockquote>
          <figcaption class="blockquote-footer">
            @php
            $t = $tour->departed;
            echo date('d-m-Y \L\ú\c H:i', strtotime($t))
            @endphp
          </figcaption>
        </figure>
        <img src="{{$tour->feature_image_path}}" style="width: 100%;">
        @php
         echo  $tour->content  
        @endphp
      </div>

      <div class="col-md-4">
        <div class="card-body">
          <h5 class="card-title">{{$tour->name}}</h5>
          <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong>{{$tour->id}}</p>
          <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong>
          @php
          $t = $tour->departed;
          echo date('d-m-Y \L\ú\c H:i', strtotime($t))
          @endphp</p>
          <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
          <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong>{{$tour->price}}</p>
          <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> {{$tour->duration}}</p>
          <a href="{{route('chitiettour.index',['id'=>$tour->id])}}" type="button" class="btn btn-info text-white">Đặt tour</a>
        </div>
        <div class="mt-5 row">
          <h3 class="text-warning col-7">Tour liên quan</h3>
          <a href="#" class="col-5 text-warning mt-2"> Xem thêm >>></a>
          @foreach($TourSame as $TourSame)
          <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
            <div class="row g-0 col-12">
              <div class="col-md-4">
                <a href="{{route('chitiettour.index',['id'=>$TourSame->id])}}"><img src="{{$TourSame->feature_image_path}}" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h6>{{$TourSame->name}}</h6>
                  <a href="{{route('chitiettour.index',['id'=>$TourSame->id])}}" class="text-decoration-none text-dark"><p class="card-title">{{$TourSame->description}}</p></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          {{-- <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
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
          </div> --}}
        </div>
      </div>
    </div>

    <!-- /END THE FEATURETTES -->

  </div>
@endsection