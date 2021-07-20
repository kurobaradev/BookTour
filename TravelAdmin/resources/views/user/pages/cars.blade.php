@extends('user.layouts.index')
@section('content')
    {{-- slider --}}
    @include('user.pages.components.home.slider')

    <!-- -------------------------- -->

    <div class="container marketing" >

    <!-- Three columns of text below the carousel -->
    <div class=" container row g-3 mb-5" >
      <div class="col-12 g-3 text-dark row">
        @foreach ($cars as $item)
        <div class=" col-3">
          <div class="card" style="width: 100%; height: 350px;">
            <div class="card-body">
              <a href="{{ route('chitietxe.index', ['id' => $item->id]) }}"><img src="{{ $item->feature_image_path }}" class="card-img-top" alt="..." style="height:140px"></a>
              <div class="card-body position-relative" style="height:210px">
                <div class="text-over3" style="height:100px">
                  <p class="card-text"><a href="{{ route('chitietxe.index', ['id' => $item->id]) }}" class="text-decoration-none text-dark">{{ $item->description }}</a></p>
                </div>
                <div class="card-body">
                  <a href="{{route('chitietxe.index',['id'=>$item->id])}}" class="btn btn-warning">Xem chi tiêt</a>
                  <a href="{{ route('bookcar.index', ['id' => $item->id]) }}" class="btn btn-warning">Thuê xe</a>
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
