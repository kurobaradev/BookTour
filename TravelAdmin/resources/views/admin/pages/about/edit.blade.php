@extends('admin.layouts.index')
@section('title')
<title>Quản lí tin tức</title>
@endsection
@section('css')
<link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('vendors/admin/tour/add.css')}}" rel="stylesheet" />

@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí tin tức','key'=>'Sửa tin tức'])
    <!-- DataTales Example -->
    <form action="{{route('blog.update',['id'=>$blogs->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label >Tiêu đề</label>
          <input  type="text" 
                  class="form-control"
                  placeholder="Tên tour"
                  value="{{$blogs->title}}"
                  name="title"
                  >
        </div>
        <div class="form-group">
          <label >Loại tin tức</label>
          <select class="form-control" name="category_blog_id">
            <option value="{{$blogs->category_blog_id}}"></option>
            {!! $htmlOption !!}
          </select>
        </div>
        <div class="form-group">
          <label >Mô tả</label>
          <textarea name="description"  class="form-control" rows="5" cols="50">{{$blogs->description}}</textarea>
        </div>
        <div class="form-group">
          <label >Hình ảnh</label>
          <input  type="file" 
            class="form-control-file"
            name="feature_image_path"
            >
            <div class="col-md-12">
              <div class="row">
                  <img class="image_edit_tour" src="{{$blogs->feature_image_path}} " alt="">
              </div>
          </div>
        </div>
        {{-- <div class="form-group">
          <label >Nhập tag cho tour</label>
          <select  name="tags[]" class="form-control tag_select_choose" multiple="multiple">
          </select>
        </div> --}}
        <textarea name="content" id="editor1" rows="10" cols="80">{{$blogs->content}}</textarea>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
@section('js')
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