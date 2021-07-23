@extends('user.layouts.index')
@section('content')
    {{-- slider --}}
    @include('user.pages.components.home.slider')

<div class="container marketing" >

    <!-- Three columns of text below the carousel -->
    <div class=" container row g-3 mb-5" >
      <div class="col-3">
       <img src="{{ asset('vendors/use/img/dam-me.jpg') }}" style="width: 100%; height: 100%;">
      </div>
      <div class="col-9 row g-3 text-dark">
        @foreach ($tour as $item)
        <div class=" col-4">
          <div class="card" style="width: 100%; height: 300px;">
            <a href="{{route('chitiettour.index',['id'=>$item->id])}}" class="hoverimg"><img src="{{$item->feature_image_path}}" class="card-img-top" alt="..." style="height:150px"></a>
            <div class="card-body" style="height:250px">
              <div class="text-over2">
                <h5 class="card-title "><a href="{{route('chitiettour.index',['id'=>$item->id])}}" class="text-decoration-none link-dark "><strong>{{$item->name}}</strong></a></h5>
              </div>
              <div class="text-over3">
                <p class="card-text p-0 m-0"><a href="{{route('chitiettour.index',['id'=>$item->id])}}" class="text-decoration-none text-dark" style="max-width: 100%;">{{$item->description}}</a></p>
              </div>
              <p class="card-text m-0 p-0"><a href="{{route('chitiettour.index',['id'=>$item->id])}}" class="text-decoration-none text-dark"><i class="fas fa-money-bill-alt"></i><strong> Giá:</strong>{{$item->price}} </a></p>
            </div>
          </div>
        </div>
        @endforeach
        

      </div>
    </div><!-- /.row -->

   


</div><!-- /.container -->
@endsection
