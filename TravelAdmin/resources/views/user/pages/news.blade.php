@extends('user.layouts.index')
@section('content')
    {{-- slider --}}
    @include('user.pages.components.home.slider')

    <div class="container marketing" >

    <!-- Three columns of text below the carousel -->
    <div class=" container row g-3 mb-5" >
      <div class="border-bottom border-warning container-fluid d-flex justify-content-between col-12" style="height: 50px">
        <h3 class="pb-4 mb-4 fst-italic text-warning p-2 bd-highlight">  Địa điểm vui chơi </h3>
      </div>
      <div class="col-3">
       <img src="{{ asset('vendors/use/img/kham-pha.jpg') }}" style="width: 100%; height: 100%;">
      </div>
      <div class="col-9 row g-3 text-dark">
        @foreach ($blog as $item)
        <div class=" col-4">
          <div class="card" style="width: 100%; height: 300px;">
            <a href="{{ route('chitiettintuc.index', ['id' => $item->id]) }}" class="hoverimg"><img src="{{ $item->feature_image_path }}" class="card-img-top" alt="..." style="height:140px"></a>
            <div class="card-body">
                <div class="text-over2">
                    <h5 class="card-title"><a href="{{ route('chitiettintuc.index', ['id' => $item->id]) }}" class="text-decoration-none link-dark"><strong>{{ $item->title }}</strong></a></h5>
                </div>
                <div class="text-over3">
                    <p class="card-text p-0 m-0"><a href="{{ route('chitiettintuc.index', ['id' => $item->id]) }}" class="text-decoration-none text-dark">{{ $item->description }}</a></p>
                </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div><!-- /.row -->

  </div><!-- /.container -->
@endsection
