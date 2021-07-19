@extends('user.layouts.index')
@section('content')
    {{-- slider --}}
    @include('user.pages.components.home.slider')


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing" >

    <!-- Three columns of text below the carousel -->
    <div class=" container row g-3 mb-5" >
      
      @foreach ($tours as $item)
      <div class="col-12 g-3 text-dark row">
        <div class="col-12">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{$item->feature_image_path}}" class="img-fluid rounded-start" alt="..." style="width: 400px; height: 220px;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$item->name}}</h5>
                  <p class="card-text">{{$item->description}}</p>
                  @php
                  $t = $item->updated_at;
                  echo date('d-m-Y \L\ú\c H:i', strtotime($t));
              @endphp
                  <p class=" m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> {{ $item->price }}</p>
                  <a href="{{ route('chitiettour.index', ['id' => $item->id]) }}" class="btn btn-primary">Xem chi tiết</a>
              </div>
            </div>
          </div>
        </div>

      </div>    
      @endforeach

      </div>
    </div><!-- /.row -->

  </div><!-- /.container -->
@endsection
