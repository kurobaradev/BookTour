@extends('admin.layouts.index')
@section('title')
<title>Quản lí tour</title>
@endsection
@section('css')
<link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />
{{-- <script src="{{asset('vendors/admin/tour/add/add.css')}}"></script> --}}

@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí tour','key'=>'Thêm tour'])
    <!-- DataTales Example -->
    <form action="{{route('tour.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label >Tên tour</label>
          <input  type="text" 
                  class="form-control"
                  placeholder="Tên tour"
                  name="name"
                  >
        </div>
        <div class="form-group">
          <label >Mô tả</label>
          <textarea name="description"  class="form-control" rows="5" cols="50"></textarea>
        </div>
        <div class="form-group">
          <label >Loại tour</label>
          <select class="form-control" name="category_tour_id">
            <option value="0"></option>
            {!! $htmlOption !!}
          </select>
        </div>
        <div class="form-group">
          <label >Giá tour</label>
          <input  type="text" 
                  class="form-control"
                  placeholder="Giá tour"
                  name="price"
                  >
        </div>
        <div action="form-group" class="row">
          <div class="col-6">
            <label >Ngày khởi hành</label>
            <input type="datetime-local" class="form-control" name="departed">
          </div>
          <div class="col-6">
            <label >Số ngày</label>
            <input type="number" class="form-control" name="duration">
          </div>
        </div>
        <br>
        <div class="form-group">
          <label >Hình ảnh</label>
          <input  type="file" 
            class="form-control-file"
            name="feature_image_path"
            >
        </div>
        {{-- <div class="form-group">
          <label >Nhập tag cho tour</label>
          <select  name="tags[]" class="form-control tag_select_choose" multiple="multiple">
          </select>
        </div> --}}
        <div class="form-group">
          <label >Nội dung</label>
            <textarea name="content" id="editor1" rows="10" cols="80"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
@section('js')
{{-- <script src="https://cdn.tiny.cloud/1/yoq2e98eie626pyeibu02i0ap1dn96a3xzcq356c01k1jyjr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
{{-- id="editor1" rows="10" cols="80" --}}
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
{{-- <script>$('#textareaId_ifr').contents().find("html").html();</script> --}}

@endsection