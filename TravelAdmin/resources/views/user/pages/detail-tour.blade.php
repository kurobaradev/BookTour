@extends('user.layouts.index')
{{-- slider --}}
    @include('user.pages.components.home.slider')
@section('content')

    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" >

    <div class="row g-5 container text-dark">
      <div class="col-md-8">
        <h2 class="pb-4 mb-4 border-bottom">
         {{$tour->name}}
        </h2>
        <figcaption class="blockquote-footer">
            @php
                $t = $tour->departed;
                echo date('d-m-Y \L\ú\c H:i', strtotime($t));
            @endphp
        </figcaption>
        </figure>
        <img src="{{ $tour->feature_image_path }}" style="width: 100%;">
        <div class="container content">

          @php
                        
          echo $tour->content
      @endphp
            
        </div>
      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 3rem;">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">THÔNG TIN TOUR</h4>
            <h5 class="card-title">{{ $tour->name }}</h5>
                <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong>{{ $tour->id }}</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong></p>
                <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong>{{ number_format($tour->price) }}VND</p>
                <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> {{ $tour->duration }}</p>
                <a href="{{ route('booktour.index', ['id' => $tour->id]) }}" type="button" class="btn btn-info m-2 text-white">Đặt tour</a>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.container -->
@endsection
@section('css')

    <style>

        .content img{
            max-width: 800px;
        }
    </style>
@endsection

