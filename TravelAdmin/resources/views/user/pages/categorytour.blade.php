@extends('user.layouts.index')
@section('content')
    <div class="container position-relative mt-4 mb-2 p-0" style="height: 300px;">
        <img src="{{ asset('vendors/use/img/thanhhuong.jpg') }}" alt="..." style="height: 100%; width: 100%;">
        <div class="position-absolute top-50 start-50 translate-middle bg-dark"
            style="width: 100%; height: 100%; opacity: 0.5;"> </div>
        <h1 class="position-absolute top-50 start-50 translate-middle text-white">Tour</h1>
    </div>

    <!-- -------------------------- -->

    <div class="row container" style="margin-top: 10px;">
        @foreach ($tour as $item)
            <div class="card p-0 m-2" style="width: 18rem;">
                <img class="card-img-top m-0" src="{{ $item->feature_image_path }}" alt="Card image cap"
                    style="width: 100%; height:8rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <a href="{{ route('chitiettour.index', ['id' => $item->id]) }}" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>

        @endforeach

    </div>
@endsection
