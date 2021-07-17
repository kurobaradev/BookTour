<nav class="navbar navbar-expand-md fixed-top" style="background: #1B4A7A;">
    <div class="container-fluid">
        <a class="navbar-brand text-warning" href="#"><i class="fas fa-2x fa-spa"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('trangchu.index') }}"> <i
                            class="fas fa-home"></i> Trang chủ</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link text-white dropdown-toggle" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-plane-departure"></i>
                            Tour</a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton1"
                            style="background: #ffffff;">
                            <li><a class="dropdown-item" href="{{ route('tatcatour.index') }}"><Strong>Tất cả
                                        tour</Strong></a>
                                @foreach ($categoryTour as $categoryTourParent)
                            <li><a class="dropdown-item"
                                    href="{{ route('categorytour.index', ['id' => $categoryTourParent->id, 'slug' => $categoryTourParent->slug]) }}"><Strong>{{ $categoryTourParent->name }}</Strong></a>
                                @if ($categoryTourParent->CategoriesTourChildrent->count())
                                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                        @foreach ($categoryTourParent->CategoriesTourChildrent as $CategoriesTourChil)
                                            <li class="nav-item">
                                                <a class="dropdown-item"
                                                    href="{{ route('categorytour.index', ['id' => $CategoriesTourChil->id, 'slug' => $CategoriesTourChil->slug]) }}">{{ $CategoriesTourChil->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link text-white dropdown-toggle" id="dropdownMenuButton2"
                            data-bs-toggle="dropdown"><i class="fas fa-motorcycle"></i> Phương tiện</a>
                        {{-- <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2" style="background: #1B4A7A;">
                  <li><a class="dropdown-item" href="{{route('xe.index')}}">Tất cả các loại xe</a></li>
                  @foreach ($categoryCar as $categoryCarParent)
                  <li><a class="dropdown-item" href="#">{{$categoryCarParent->name}}</a></li>
                  @endforeach
                </ul> --}}
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton1"
                            style="background: #ffffff;">
                            <li><a class="dropdown-item" href="{{ route('xe.index') }}"><Strong>Tất cả loại
                                        xe</Strong></a>
                                @foreach ($categoryCar as $categoryCarParent)
                            <li><a class="dropdown-item"
                                    href="{{ route('danhmucxe.index', ['id' => $categoryCarParent->id, 'slug' => $categoryCarParent->slug]) }}"><Strong>{{ $categoryCarParent->name }}</Strong></a>
                                @if ($categoryCarParent->CategoriesCarChildrent->count())
                                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                        @foreach ($categoryCarParent->CategoriesCarChildrent as $CategoriescarChil)
                                            <li class="nav-item">
                                                <a class="dropdown-item"
                                                    href="{{ route('danhmucxe.index', ['id' => $CategoriescarChil->id, 'slug' => $CategoriescarChil->slug]) }}">{{ $CategoriescarChil->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('tintuc.index') }}"><i class="fas fa-book"></i> Cẩm
                        nang du lịch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('gioithieu.index') }}"></i>Giới thiệu</a>
                </li>
            </ul>

            @if (Auth::check())
                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">logout</button>
                </div>
            @else
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
            @endif

        </div>
    </div>
</nav>
