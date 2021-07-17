@extends('user.layouts.index')
@section('content')
  <div class="container position-relative mt-4 mb-2 p-0" style="height: 300px;">
    <img src="{{ asset('vendors/use/img/thanhhuong.jpg') }}" alt="..." style="height: 100%; width: 100%;">
    <div class="position-absolute top-50 start-50 translate-middle bg-dark" style="width: 100%; height: 100%; opacity: 0.5;">    </div>
    <h1 class="position-absolute top-50 start-50 translate-middle text-white">Phương tiện</h1>
  </div>

  <!-- -------------------------- -->

 
  <div class="container-fluid p-5 m-5">
    <div class="col-md-8">
      <h3 class=" fst-italic text-warning">
        {{$cars->name}}

      </h3>
      
      <i><i class="fas fa-calendar-alt"></i>
      @php
        $t = $cars->updated_at;
        echo date('d-m-Y \L\ú\c H:i', strtotime($t))
        @endphp
      </i>
      <br/>
      <i>{{$cars->description}} </i>
      
      <img src="{{$cars->feature_image_path}}"/>

      @php
          echo $cars->content;
      @endphp
    </div>

  </div>

    
  </div>
@endsection
