@extends('user.layouts.index')
@section('content')
    {{-- slider --}}
    @include('user.pages.components.home.slider')


    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
    <div class=" container row g-3 mb-5" >
      <div class="border-bottom border-warning container-fluid d-flex justify-content-between col-12" style="height: 50px">
        <h3 class="pb-4 mb-4 fst-italic text-dark p-2 bd-highlight"> <i class="fas fa-plane-departure"></i> TOUR DU LỊCH </h3>
        <p class="p-2 bd-highlight text-dark "><a href="{{ route('tatcatour.index') }}" class="text-decoration-none">Xem thêm></a></p>
      </div>
      <div class="col-3">
       <img src="{{ asset('vendors/use/img/kham-pha.jpg') }}" style="width: 100%; height: 100%;">
      </div>
      <div class="col-9 row g-3 text-dark">
        @foreach ($tours as $tour)
        <div class=" col-4">
          <div class="card" style="width: 100%; height: 300px;">
            <a href="{{route('chitiettour.index',['id'=>$tour->id])}}" class="hoverimg"><img src="{{$tour->feature_image_path}}" class="card-img-top" alt="..." style="height:140px"></a>
            <div class="card-body">
              <div class="text-over2">
                <h5 class="card-title "><a href="{{route('chitiettour.index',['id'=>$tour->id])}}" class="text-decoration-none link-dark "><strong>{{$tour->name}}</strong></a></h5>
              </div>
              <div class="text-over3">
                <p class="card-text p-0 m-0"><a href="{{route('chitiettour.index',['id'=>$tour->id])}}" class="text-decoration-none text-dark" style="max-width: 100%;">{{$tour->description}}</a></p>
              </div>
              <p class="card-text m-0 p-0"><a href="{{route('chitiettour.index',['id'=>$tour->id])}}" class="text-decoration-none text-dark"><i class="fas fa-money-bill-alt"></i><strong> Giá:</strong>{{$tour->price}} </a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div><!-- /.row -->

    <!-- Three columns of text below the carousel -->
    <div class=" container row g-3 mb-5" >
      <div class="border-bottom border-warning container-fluid d-flex justify-content-between col-12" style="height: 50px">
        <h3 class="pb-4 mb-4 fst-italic text-dark p-2 bd-highlight"><i class="fas fa-motorcycle"></i> PHƯƠNG TIỆN </h3>
        <p class="p-2 bd-highlight text-dark "><a href="" class="text-decoration-none">Xem thêm></a></p>
      </div>
      <div class="col-3">
       <img src="{{ asset('vendors/use/img/dam-me.jpg') }}" style="width: 100%; height: 100%;">
      </div>
      <div class="col-9 row g-3 text-dark">
      @foreach ($car as $car)
        <div class=" col-4">
          <div class="card" style="width: 100%; height: 300px;">
            <a href="{{route('chitietxe.index',['id'=>$car->id])}}" class="hoverimg"><img src="{{$car->feature_image_path}}" class="card-img-top" alt="..." style="height:140px"></a>
            <div class="card-body">
              <div class="text-over2">
                <h5 class="card-title"><a href="{{route('chitietxe.index',['id'=>$car->id])}}" class="text-decoration-none link-dark"><strong>{{$car->name}}</strong></a></h5>
              </div>
              <div class="text-over3">
                <p class="card-text p-0 m-0"><a href="{{route('chitietxe.index',['id'=>$car->id])}}" class="text-decoration-none text-dark" style="max-width: 100%;">{{$car->description}}</a></p>
              </div>
              <p class="card-text m-0 p-0"><a href="{{route('chitietxe.index',['id'=>$car->id])}}" class="text-decoration-none text-dark"><i class="fas fa-money-bill-alt"></i><strong> Giá:</strong>{{$car->price}} </a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div><!-- /.row -->

    <!-- Three columns of text below the carousel -->
    <div class=" container row g-3 mb-5" >
      <div class="border-bottom border-warning container-fluid d-flex justify-content-between col-12" style="height: 50px">
        <h3 class="pb-4 mb-4 fst-italic text-dark p-2 bd-highlight"><i class="fas fa-newspaper"></i> TIN TỨC </h3>
        <p class="p-2 bd-highlight text-dark "><a href="" class="text-decoration-none">Xem thêm></a></p>
      </div>
      @foreach ($blogs as $blogs)
      <div class=" col-3">
        <div class="card" style="width: 100%; height: 300px;">
          <a href="{{route('chitiettintuc.index',['id'=>$blogs->id])}}" class="hoverimg"><img src="{{$blogs->feature_image_path}}" class="card-img-top" alt="..." style="height:140px"></a>
          <div class="card-body">
            <div class="text-over2">
              <h5 class="card-title"><a href="{{route('chitiettintuc.index',['id'=>$blogs->id])}}" class="text-decoration-none link-dark"><strong>{{$blogs->title}}</strong></a></h5>
            </div>
            <div class="text-over3">
              <p class="card-text p-0 m-0"><a href="{{route('chitiettintuc.index',['id'=>$blogs->id])}}" class="text-decoration-none text-dark">{{$blogs->description}}</a></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div><!-- /.row -->
    <!-- START THE FEATURETTES -->

    </div><!-- /.container -->


@endsection
