@extends('user.layouts.index')
@section('content')
    <div class="container position-relative mt-4 mb-2 p-0" style="height: 300px;">
        <img src="{{ asset('vendors/use/img/thanhhuong.jpg') }}" alt="..." style="height: 100%; width: 100%;">
        <div class="position-absolute top-50 start-50 translate-middle bg-dark"
            style="width: 100%; height: 100%; opacity: 0.5;"> </div>
        <h1 class="position-absolute top-50 start-50 translate-middle text-white">Tin tức</h1>
    </div>

    <!-- -------------------------- -->

    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-2 g-4 text-dark">
            @foreach ($blog as $item)
                <div class="col">
                    <div class="card">
                        <a href="{{ route('chitiettintuc.index', ['id' => $item->id]) }}">
                            <img src="{{ $item->feature_image_path }}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h4 class="card-title">{{ $item->title }} </h4>
                            <p class="card-text m-0">{{ $item->description }}</p>
                        </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
