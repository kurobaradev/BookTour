@extends('user.layouts.index')
@section('content')
    {{-- slider --}}
    @include('user.pages.components.home.slider')

    <!-- -------------------------- -->

    <div class="container marketing" >

    <!-- Three columns of text below the carousel -->
    <div class=" container row g-3 mb-5" >
      <div class="border-bottom border-warning container-fluid d-flex justify-content-between col-12" style="height: 50px">
        <h3 class="pb-4 mb-4 fst-italic text-dark p-2 bd-highlight">XE MÁY </h3>
        <p class="p-2 bd-highlight text-dark "><a href=""  class="text-decoration-none">Xem thêm></a></p>
      </div>
      <div class="col-12">
        <img src="img/phan-biet-xe-may-va-xe-gan-may-1.jpg" style="width: 100%; height: 300px;">
      </div>
      <div class="col-12 g-3 text-dark row">
        @foreach ($cars as $item)
        <div class=" col-3">
          <div class="card" style="width: 100%; height: 300px;">
            <a href="{{ route('chitietxe.index', ['id' => $item->id]) }}"><img src="{{ $item->feature_image_path }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <div class="text-over2">
                <h5 class="card-title"><a href="{{ route('chitietxe.index', ['id' => $item->id]) }}" class="text-decoration-none text-dark">{{ $item->name }}</a></h5>
              </div>
              <div class="text-over3">
                <p class="card-text"><a href="{{ route('chitietxe.index', ['id' => $item->id]) }}" class="text-decoration-none text-dark">{{ $item->description }}</a></p>
              </div>
              <a href="#" class="btn btn-warning">Thuê</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div><!-- /.row -->

  </div><!-- /.container -->
@endsection
