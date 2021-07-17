@extends('user.layouts.index')
@section('content')

    <!-- -------------------------- -->

    <div class="container-fluid" style="margin-top: 2rem">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            {{ $categoryname->name }}
        </h3>
        @foreach ($tour as $tour)
            {{-- {{dd($tour->name)}} --}}
            <div class="row col-9 p-2">
                <div class="tour col-3">
                    <img src="{{ $tour->feature_image_path }}" class="card-img-top" alt="{{ $tour->feature_image_name }}">
                </div>
                <div class=" col-7">
                    <h5 class=""><a href="" class="text-decoration-none text-dark">{{ $tour->name }}</a></h5>
                    <p class=" m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong>{{ $tour->id }}</p>
                    <p class=" m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> {{ $tour->price }}</p>
                    <a href="{{ route('booktour.index', ['id' => $tour->id]) }}" class="btn btn-primary">Đặt tour</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
