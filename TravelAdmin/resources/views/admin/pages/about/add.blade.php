@extends('admin.layouts.index')
@section('title')
<title>Quản lí tin tức</title>
@endsection
@section('css')
<link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />

@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí tin tức','key'=>'Thêm tin tức'])
    <!-- DataTales Example -->
    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label >Tiêu đề</label>
          <input  type="text" 
                  class="form-control"
                  placeholder="Tiêu đề"
                  name="title"
                  >
        </div>
        <div class="form-group">
          <label >Loại tin tức</label>
          <select class="form-control" name="category_blog_id">
            <option value="0"></option>
            {!! $htmlOption !!}
          </select>
        </div>
        <div class="form-group">
          <label >Mô tả</label>
          <textarea name="description"  class="form-control" rows="5" cols="50"></textarea>
        </div>
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
        <textarea name="content" id="editor1" rows="10" cols="80"></textarea>

        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
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
  filebrowserUploadUrl: "{{asset('vendors/ckfinder/core/connector/php/connector.php?command=QuickUpload&amp;type=Files')}}"});
</script>
{{-- <script>$('#textareaId_ifr').contents().find("html").html();</script> --}}

@endsection