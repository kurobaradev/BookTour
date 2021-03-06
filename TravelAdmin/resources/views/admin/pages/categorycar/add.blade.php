@extends('admin.layouts.index')
@section('title')
<title>Quản lí loại xe</title>
@endsection

@section('content')
<div class="container-fluid">
  {{-- @error('title') is-invalid @enderror
  value="{{old('title')}}
  @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror --}}
    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí loại xe','key'=>'Thêm loại xe'])
    <!-- DataTales Example -->
    <form action="{{route('categorycar.store')}}" method="POST">
        @csrf
        <div class="form-group">
          {{-- <input id="title" type="text" name="title" class="@error('title') is-invalid @enderror"> --}}
          
          <label >Tên danh mục</label>
          <input  type="text" 
                  class="form-control @error('name') is-invalid @enderror"
                  placeholder="Tên danh mục"
                  name="name"
                  value="{{old('name')}}"
                  >
          @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        <div class="form-group">
          <label >chọn danh mục cha</label>
          <select class="form-control" name="parent_id">
            <option value="0">Danh mục cha</option>
            {!! $htmlOption !!}
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
      </form>

</div>
@endsection