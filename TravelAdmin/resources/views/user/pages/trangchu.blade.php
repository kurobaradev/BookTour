@extends('user.layouts.index')
@section('content')
{{-- slider --}}
  @include('user.pages.components.home.slider')
  
  
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
  <!-- Search -->
  @include('user.pages.components.home.search')
 

    <!-- Three columns of text below the carousel -->
    <div class="row ">
      <div class="col-lg-4">
        <i class="fab fa-7x fa-salesforce text-warning" ></i>
        <h2 class="text-dark">RẺ HƠN GIÁ RẺ NHẤT, NGẠI GÌ KHÔNG ĐẶT?</h2>
        <p class="text-dark">Ở đâu giá rẻ hơn, thông báo ngay với Vntrip.vn để được mua giá rẻ hơn giá rẻ nhất</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <i class="fab fa-7x fa-cc-amazon-pay text-warning"></i>
        <h2 class="text-dark">THANH TOÁN LINH HOẠT AN TOÀN</h2>
        <p class="text-dark">Chấp nhận mọi hình thức thanh toán, không cần thẻ tín dụng. Bảo mật thông tin tuyệt đối.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <i class="fas fa-7x fa-phone-square-alt text-warning"></i>
        <h2 class="text-dark">HỖ TRỢ 24/7</h2>
        <p class="text-dark">Gọi ngay 0963 266 688 kể cả 2h sáng để được hỗ trợ</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    

    <!-- START THE FEATURETTES -->

    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom text-warning">
          Tour Mới
        </h3>
        
        <div class="card-deck center row justify-content-center">
        @foreach ($tours as $tour)
          <div class="card col-5 m-3 p-0">
            <img class="card-img-top" src="{{$tour->feature_image_path}}" alt="Card image cap" style="width: 100%; height: 100%;">
            <div class="card-body">
              <h5 class="card-title">{{$tour->name}}</h5>
              <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong>{{$tour->id}}</p>
              <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong>
              @php
              $t = $tour->departed;
              echo date('d-m-Y \L\ú\c H:i', strtotime($t))
              @endphp</p>
              <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
              <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong>{{$tour->price}}</p>
              <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> {{$tour->duration}}</p>
              <a href="{{route('chitiettour.index',['id'=>$tour->id])}}" type="button" class="btn btn-info m-2 text-white">Xem chi tiết</a>
              <a href="{{route('booktour.index',['id'=>$tour->id])}}" type="button" class="btn btn-info m-2 text-white">Đặt tour</a>
            </div>
            <div class="card-footer">
              <small class="text-muted"> cập nhật lúc
                @php
                $t = $tour->created_at;
                echo date('H:i d-m-Y ', strtotime($t))
                @endphp</p></small>
            </div>
          </div>
          {{-- <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              
              <div class="col-md-6">
                <img src="{{$tour->feature_image_path}}" class="rounded-start" style="width: 100%; height: 100%;" >
              </div>
              <div class="col-md-6">
                <div class="card-body text-dark book">
                  <h5 class="card-title"><a href="" class="text-decoration-none text-dark">{{$tour->name}}</a></h5>
                  <p class="card-text m-0"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong>{{$tour->id}}</p>
                  <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong>
                    @php
                    $t = $tour->departed;
                    echo date('d-m-Y \L\ú\c H:i', strtotime($t))
                    @endphp</p>
                    <p class="card-text m-0"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong> </p>
                    <p class="card-text m-0"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong>{{$tour->price}}</p>
                    <p class="card-text m-0"><i class="fas fa-calendar-alt"></i> <strong> Số Ngày:</strong> {{$tour->duration}}</p>
                  </div>
                  <a href="{{route('chitiettour.index',['id'=>$tour->id])}}" type="button" class="btn btn-info btn-outline-primary book-tour text-white">aaa</a>
                  <a href="{{route('chitiettour.index',['id'=>$tour->id])}}" type="button" class="btn btn-info btn-outline-primary book-tour text-white">Đặt tour</a>
                </div>
              </div>
            </div> --}}
            @endforeach
          </div>
       
    
      </div>

      <div class="col-md-4">
        <div class="row">
        <h3 class="pb-4 mb-4 fst-italic border-bottom text-warning">
          Tin tức
        </h3>
        @foreach ($blogs as $blog)
          <div class="card mb-3 p-0 m-0" style="max-width: 100%   ;">
            <div class="row g-0 col-12">
              <div class="col-md-4">
                <a href="{{route('chitiettintuc.index',['id'=>$blog->id])}}"><img src="{{$blog->feature_image_path}}" class="rounded-start p-0 m-0" style="width: 100%; height: 100%;" ></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{route('chitiettintuc.index',['id'=>$blog->id])}}" class="text-decoration-none text-dark"><h5 class="card-title">{{$blog->title}}</h5></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <a href="#" class="col-5 text-warning mt-2"> Xem thêm >>></a>
        </div>
      </div>
    </div>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <script src="{{ asset('vendors/use/css/jquery.min.js') }}"></script>
  <script src="{{ asset('vendors/use/css/bootstrap.min.js') }}"></script>
  <script src="{{ asset('vendors/use/css/bootstrap-datepicker.js') }}"></script>
    <script>
        $(function () {
            'use strict';
            var nowTemp = new Date();
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

            var checkin = $('#timeCheckIn').datepicker({
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                }
            }).on('changeDate', function (ev) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkout.setValue(newDate);
                }
                checkin.hide();
                $('#timeCheckOut')[0].focus();
            }).data('datepicker');
            var checkout = $('#timeCheckOut').datepicker({
                onRender: function (date) {
                    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                }
            }).on('changeDate', function (ev) {
                checkout.hide();
            }).data('datepicker');
        });
    </script>

@endsection

