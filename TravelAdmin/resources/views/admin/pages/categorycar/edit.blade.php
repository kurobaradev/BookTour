@extends('admin.layouts.index')
@section('title')
<title>Quản lí loại xe</title>
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí loại xe','key'=>'Sửa loại xe'])
    <!-- DataTales Example -->
    <form action="{{route('categorycar.update',['id'=> $categorycars->id])}}" method="POST">
        @csrf
        <div class="form-group" >
          <label >Tên danh mục</label>
          <input  type="text" 
                  class="form-control"
                  placeholder="Tên danh mục"
                  value="{{$categorycars->name}}"
                  name="name"
                  >
        </div>
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