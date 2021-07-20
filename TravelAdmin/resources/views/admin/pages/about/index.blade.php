@extends('admin.layouts.index')
@section('title')
<title>Quản lí thông tin giới thiệu</title>
@endsection
@section('css')
<link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />

@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí thông tin giới thiệu','key'=>'Thêm thông tin giới thiệu'])
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session()->get('success') }}
    </div>
  @endif
  @if(session()->has('fail'))
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session()->get('fail') }}
    </div>
  @endif
    <!-- DataTales Example -->
    <form action="{{route('introduce.update',['id'=>$introduce->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label >Tên công ty</label>
          <input  type="text" 
                  class="form-control"
                  placeholder="Tên công ty"
                  name="name_company"
                  value="{{$introduce->name_company}}"
                  >
        </div>
        <div class="form-group">
            <label >Nội dung</label>
                    <textarea name="content" id="editor1" rows="20" cols="80">{{$introduce->content}}</textarea>
          </div>

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