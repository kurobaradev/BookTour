@extends('admin.layouts.index')
@section('title')
<title>Quản lí xe</title>
@endsection
@section('css')
<link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />
<link src="{{asset('vendors/admin/tour/add/add.css')}}"  rel="stylesheet">

@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí xe','key'=>'Thêm xe'])
    <!-- DataTales Example -->
    <form action="{{route('car.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label >Tên xe</label>
          <input  type="text" 
                  class="form-control @error('name') is-invalid @enderror"
                  placeholder="Tên xe"
                  name="name"
                  value="{{old('name')}}"
                  >
          @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        {{-- @error('title') is-invalid @enderror
        value="{{old('title')}}
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <div class="form-group">
          <label >Loại xe</label>
          <select class="form-control @error('category_car_id') is-invalid @enderror" name="category_car_id">
            <option value=""></option>
            {!! $htmlOption !!}
          </select>
          @error('category_car_id')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label >Mô tả</label>
          <textarea name="description"  class="form-control @error('description') is-invalid @enderror" rows="5" cols="50"> {{old('description')}}</textarea>
          @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label >Giá xe</label>
          <input  type="text" 
                  class="form-control @error('price') is-invalid @enderror"
                  placeholder="Giá xe"
                  name="price"
                  value="{{old('price')}}"
                  >
          @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label >Hình ảnh</label>
          <input  type="file" 
            class="form-control-file @error('feature_image_path') is-invalid @enderror"
            name="feature_image_path"
            >
          @error('feature_image_path')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        {{-- <div class="form-group">
          <label >Nhập tag cho tour</label>
          <select  name="tags[]" class="form-control tag_select_choose" multiple="multiple">
          </select>
        </div> --}}
        {{-- <textarea name="content" class="form-control tinymce_editor_init"></textarea> --}}
          @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        <textarea name="content" id="editor1" rows="10" cols="80" class="@error('content') is-invalid @enderror">{{old('content')}}</textarea>

        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
      </form>

</div>
@endsection
@section('js')
{{-- <script src="https://cdn.tiny.cloud/1/yoq2e98eie626pyeibu02i0ap1dn96a3xzcq356c01k1jyjr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
<script type="text/javascript" src="{{asset('vendors/ckeditor/ckeditor.js')}}"></script>
<script>CKEDITOR.replace( 'editor1' );</script>
{{-- <script>tinymce.init({selector:'textarea'});</script> --}}
<script src="{{asset('vendors/ckfinder/ckfinder.js')}}"></script>
<script>
  CKEDITOR.replace('editor', {
  filebrowserBrowseUrl: "{{asset('vendors/ckfinder/ckfinder.html')}}",
  filebrowserUploadUrl: "{{asset('vendors/ckfinder/core/connector/php/connector.php?
command=QuickUpload&amp;type=Files')}}"});
</script>
<script src="{{asset('vendors/admin/tour/add/add.js')}}"></script>

@endsection