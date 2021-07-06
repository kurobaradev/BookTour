@extends('admin.layouts.index')
@section('title')
<title>Quản lí loại tuor</title>
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí loại tuor','key'=>'Sửa loại tour'])
    <!-- DataTales Example -->
    <form action="{{route('categoriestour.update',['id'=> $categoriestour->id])}}" method="POST">
        @csrf
        <div class="form-group" >
          <label >Tên danh mục</label>
          <input  type="text" 
                  class="form-control"
                  placeholder="Tên danh mục"
                  value="{{$categoriestour->name}}"
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection