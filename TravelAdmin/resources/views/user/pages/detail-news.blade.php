@extends('user.layouts.index')
@section('content')
    {{-- slider --}}
    @include('user.pages.components.home.slider')

    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">


        <!-- START THE FEATURETTES -->

        <div class="row g-5 mb-2 p-0">
            <div class="col-md-8">
                <h3 class=" fst-italic text-warning">
                    {{ $blog->title }}
                </h3>

                <i><i class="fas fa-calendar-alt"></i>
                    @php
                        $t = $blog->updated_at;
                        echo date('d-m-Y \L\ú\c H:i', strtotime($t));
                    @endphp
                </i>
                <br />
                <i>{{ $blog->description }} </i>

               <div class=" content">
                @php
                    echo $blog->content;
                @endphp
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 4rem;">
                    <div class="mt-5 row">
                        <h5 class="text-warning col-10">Tin tức mới</h5>
                        @foreach ($blogNew as $blogNew)
                            <a href="{{ route('chitiettintuc.index', ['id' => $blogNew->id]) }}" class="text-decoration-none"
                                id="tin">{{ $blogNew->title }}</a>
                        @endforeach
                        <h5 class="text-warning col-10 boder-right-warning">Tin tức ngẫu nhiên</h5>
                        @foreach ($blogRamdom as $blogRamdom)
                            <a href="{{ route('chitiettintuc.index', ['id' => $blogRamdom->id]) }}" class="text-decoration-none"
                                id="tin">{{ $blogRamdom->title }}</a>
                        @endforeach
                        <a href="#" class="col-5 text-warning mt-2"> Xem thêm >>></a>

                    </div>
                </div>
            </div>
        </div>

        <!-- /END THE FEATURETTES -->

    </div>

@endsection
@section('css')

    <style>
        #tin {
            color: #000;
        }

        #tin:hover {
            color: orange;
            border-left: solid 2px orange;
        }
        .content img{
            max-width: 800px;
        }
    </style>
@endsection
