@extends('user.layouts.index')
@section('content')

    <!-- -------------------------- -->

    <div class="container-fluid" style="margin-top: 2rem">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            {{ $categoryname->name }}
        </h3>
        @foreach ($cars as $car)
            {{-- {{dd($tour->name)}} --}}
            <div class="row col-9 p-2">
                <div class="tour col-3">
                    <img src="{{ $car->feature_image_path }}" class="card-img-top" alt="{{ $car->feature_image_name }}">
                </div>
                <div class=" col-7">
                    <h5 class=""><a href="" class="text-decoration-none text-dark">{{ $car->name }}</a></h5>
                    <p class=" m-0">{{ $car->description }}</p>
                    <p class=" m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong> {{ number_format($car->price) }}VND</p>
                    <a href="{{ route('chitietxe.index', ['id' => $car->id]) }}" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
