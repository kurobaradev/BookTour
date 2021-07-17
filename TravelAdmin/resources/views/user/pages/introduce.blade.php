@extends('user.layouts.index')
@section('content')
  <div class="container mt-4 mb-2 p-0">
    <h2 class="pb-4 mb-4 fst-italic border-bottom text-dark ">
            Giới thiệu
    </h2>
    <div class="text-center">
      <h3 class="text-dark">
          {{$introduce->name_company}}
      </h3>
      {{-- <img src="{{ asset('vendors/use/img/2-1543169855.jpg') }}" class="" style="width: 400px; height: 300px; margin: 0 auto;" > --}}
    </div>
    @php
    echo $introduce->content;  
    @endphp
  </div>
@endsection