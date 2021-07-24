@extends('user.layouts.index')
@section('content')
    {{-- slider --}}
    @include('user.pages.components.home.slider')

    <!-- -------------------------- -->
    <div class="container marketing" >

        <div class="row g-5 container text-dark">
            <div class="col-md-8">
                <h2 class="pb-4 mb-4 border-bottom">
                {{$cars->name}}
                </h2>
                <figcaption class="blockquote-footer">
                    @php
                        $t = $cars->updated_at;
                        echo date('d-m-Y \L\ú\c H:i', strtotime($t));
                    @endphp
                </figcaption>
                </figure>
                <img src="{{ $cars->feature_image_path }}" style="width: 100%;">
                <div class="container content">
                    @php
                        
                        echo $cars->content
                    @endphp
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 3rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h5 class="card-title">{{$cars->name}}</h5>
                        <p class="card-text m-0"> {{$cars->description}}</p>
                        <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong>{{number_format($cars->price)}}VND</p>
                        <a href="{{ route('bookcar.index', ['id' => $cars->id]) }}" type="button" class="btn btn-warning">Đặt xe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
@section('css')

    <style>

        .content img{
            max-width: 800px;
        }
    </style>
@endsection
