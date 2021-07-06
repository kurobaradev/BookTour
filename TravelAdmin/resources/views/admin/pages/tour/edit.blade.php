@extends('admin.layouts.index')
@section('title')
<title>Quản lí tuor</title>
@endsection
@section('css')
<link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('vendors/admin/tour/add.css')}}" rel="stylesheet" />

@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @include('admin.partials.content-header',['name'=>'Quản lí tuor','key'=>'Thêm tour'])
    <!-- DataTales Example -->
    <form action="{{route('tour.update',['id'=>$tour->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label >Tên tour</label>
          <input  type="text" 
                  class="form-control"
                  placeholder="Tên tour"
                  value="{{$tour->name}}"
                  name="name"
                  >
        </div>
        <div class="form-group">
          <label >Loại tour</label>
          <select class="form-control" name="category_tour_id">
            <option value="{{$tour->category_tour_id}}"></option>
            {!! $htmlOption !!}
          </select>
        </div>
        <div class="form-group">
          <label >Giá tour</label>
          <input  type="text" 
                  class="form-control"
                  placeholder="Giá tour"
                  value="{{$tour->price}}"
                  name="price"
                  >
        </div>
        <div class="form-group">
          <label >Hình ảnh</label>
          <input  type="file" 
            class="form-control-file"
            name="feature_image_path"
            >
            <div class="col-md-12">
              <div class="row">
                  <img class="image_edit_tour" src="{{$tour->feature_image_path}} " alt="">
              </div>
          </div>
        </div>
        {{-- <div class="form-group">
          <label >Nhập tag cho tour</label>
          <select  name="tags[]" class="form-control tag_select_choose" multiple="multiple">
          </select>
        </div> --}}
        <textarea name="content" class="form-control tinymce_editor_init">{{$tour->content}}</textarea>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
@section('js')
<script src="https://cdn.tiny.cloud/1/yoq2e98eie626pyeibu02i0ap1dn96a3xzcq356c01k1jyjr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
<script src="{{asset('vendors/admin/tour/add/add.js')}}"></script>
{{-- <script>$('#textareaId_ifr').contents().find("html").html();</script> --}}

@endsection