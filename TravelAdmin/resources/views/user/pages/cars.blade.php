@extends('user.layouts.index')
@section('content')
  <div class="container position-relative mt-4 mb-2 p-0" style="height: 300px;">
    <img src="{{ asset('vendors/use/img/thanhhuong.jpg') }}" alt="..." style="height: 100%; width: 100%;">
    <div class="position-absolute top-50 start-50 translate-middle bg-dark" style="width: 100%; height: 100%; opacity: 0.5;">    </div>
    <h1 class="position-absolute top-50 start-50 translate-middle text-white">Phương tiện</h1>
  </div>

  <!-- -------------------------- -->

  <div class="row g-3 mb-5" style="margin-left: 10px;">
    <div class="col-6">
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden border border-3">
        <div class="my-3 p-3">
          <h2 class="display-5">Tên xe</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      </div>
    </div>
    <div class="col-6">
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden border border-3">
        <div class="my-3 p-3">
          <h2 class="display-5">Tên xe</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      </div>
    </div>
    <div class="col-6">
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden border border-3">
        <div class="my-3 p-3">
          <h2 class="display-5">Tên xe</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      </div>
    </div>
    <div class="col-6">
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden border border-3">
        <div class="my-3 p-3">
          <h2 class="display-5">Tên xe</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      </div>
    </div>
    
  </div>
@endsection