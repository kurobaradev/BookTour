@extends('user.layouts.index')
@section('content')

  <div class="mx-auto text-center mt-5 text-dark mb-5" style="width: 300px;">
    <form action="{{route('postloginuser.index')}}" method="post" >
      <a class="navbar-brand text-warning" href="#"><i class="fas fa-6x fa-spa"></i></a>
      <h1 class="h3 mb-3 fw-normal">Đăng nhập</h1>

      @csrf
      
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

      <div class="form-floating">
        <input type="text" name="email" id="username" class="form-control" placeholder="Email: ">
        <label for="floatingInput">Email: </label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" id="password" class="form-control" placeholder="Mật khẩu:">
        <label for="floatingPassword">Mật khẩu: </label>
      </div>

      <input type="submit" name="submit" class="btn btn-info btn-md mt-2" value="Đăng nhập">

    </form>
  </div>

@endsection
