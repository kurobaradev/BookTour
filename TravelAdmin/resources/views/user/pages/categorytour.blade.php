@extends('user.layouts.index')
@section('content')
    {{-- slider --}}
    @include('user.pages.components.home.slider')

<div class="container marketing" >

    <!-- Three columns of text below the carousel -->
    <div class=" container row g-3 mb-5" >
      <div class="border-bottom border-warning container-fluid d-flex justify-content-between col-12" style="height: 50px">
        <h3 class="pb-4 mb-4 fst-italic text-warning p-2 bd-highlight">  LOẠI TOUR DU LỊCH 1 </h3>
        <p class="p-2 bd-highlight text-dark "><a href="" class="text-decoration-none">Xem thêm></a></p>
      </div>
      <div class="col-3">
       <img src="{{ asset('vendors/use/img/dam-me.jpg') }}" style="width: 100%; height: 100%;">
      </div>
      <div class="col-9 row g-3 text-dark">
        <div class=" col-4">
          <div class="card" style="width: 100%;">
            <a href="" class="hoverimg"><img src="img/huyen-thoai-noc-nha-dong-phuong.jpg" class="card-img-top" alt="..." style="height:140px"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="" class="text-decoration-none link-dark"><strong>Tour 1</strong></a></h5>
              <p class="card-text p-0 m-0"><a href="" class="text-decoration-none text-dark">mô tả: Some quick example text to build on the card title and make.</a></p>
              <p class="card-text m-0 p-0"><a href="" class="text-decoration-none text-dark"><i class="fas fa-money-bill-alt"></i><strong> Giá:</strong>10000 </a></p>
            </div>
          </div>
        </div>
        <div class=" col-4">
          <div class="card" style="width: 100%;">
            <a href="" class="hoverimg"><img src="img/huyen-thoai-noc-nha-dong-phuong.jpg" class="card-img-top" alt="..." style="height:140px"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="" class="text-decoration-none link-dark"><strong>Tour 1</strong></a></h5>
              <p class="card-text p-0 m-0"><a href="" class="text-decoration-none text-dark">mô tả: Some quick example text to build on the card title and make.</a></p>
              <p class="card-text m-0 p-0"><a href="" class="text-decoration-none text-dark"><i class="fas fa-money-bill-alt"></i><strong> Giá:</strong>10000 </a></p>
            </div>
          </div>
        </div>
        <div class=" col-4">
          <div class="card" style="width: 100%;">
            <a href="" class="hoverimg"><img src="img/huyen-thoai-noc-nha-dong-phuong.jpg" class="card-img-top" alt="..." style="height:140px"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="" class="text-decoration-none link-dark"><strong>Tour 1</strong></a></h5>
              <p class="card-text p-0 m-0"><a href="" class="text-decoration-none text-dark">mô tả: Some quick example text to build on the card title and make.</a></p>
              <p class="card-text m-0 p-0"><a href="" class="text-decoration-none text-dark"><i class="fas fa-money-bill-alt"></i><strong> Giá:</strong>10000 </a></p>
            </div>
          </div>
        </div>
        <div class=" col-4">
          <div class="card" style="width: 100%;">
            <a href="" class="hoverimg"><img src="img/huyen-thoai-noc-nha-dong-phuong.jpg" class="card-img-top" alt="..." style="height:140px"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="" class="text-decoration-none link-dark"><strong>Tour 1</strong></a></h5>
              <p class="card-text p-0 m-0"><a href="" class="text-decoration-none text-dark">mô tả: Some quick example text to build on the card title and make.</a></p>
              <p class="card-text m-0 p-0"><a href="" class="text-decoration-none text-dark"><i class="fas fa-money-bill-alt"></i><strong> Giá:</strong>10000 </a></p>
            </div>
          </div>
        </div>
        <div class=" col-4">
          <div class="card" style="width: 100%;">
            <a href="" class="hoverimg"><img src="img/huyen-thoai-noc-nha-dong-phuong.jpg" class="card-img-top" alt="..." style="height:140px"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="" class="text-decoration-none link-dark"><strong>Tour 1</strong></a></h5>
              <p class="card-text p-0 m-0"><a href="" class="text-decoration-none text-dark">mô tả: Some quick example text to build on the card title and make.</a></p>
              <p class="card-text m-0 p-0"><a href="" class="text-decoration-none text-dark"><i class="fas fa-money-bill-alt"></i><strong> Giá:</strong>10000 </a></p>
            </div>
          </div>
        </div>
        <div class=" col-4">
          <div class="card" style="width: 100%;">
            <a href="" class="hoverimg"><img src="img/huyen-thoai-noc-nha-dong-phuong.jpg" class="card-img-top" alt="..." style="height:140px"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="" class="text-decoration-none link-dark"><strong>Tour 1</strong></a></h5>
              <p class="card-text p-0 m-0"><a href="" class="text-decoration-none text-dark">mô tả: Some quick example text to build on the card title and make.</a></p>
              <p class="card-text m-0 p-0"><a href="" class="text-decoration-none text-dark"><i class="fas fa-money-bill-alt"></i><strong> Giá:</strong>10000 </a></p>
            </div>
          </div>
        </div>

      </div>
    </div><!-- /.row -->

   


</div><!-- /.container -->
@endsection
