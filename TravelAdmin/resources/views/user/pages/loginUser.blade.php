@extends('user.layouts.index')
@section('content')
{{-- 
<form id="login-form" class="form" action="" method="post">
  @csrf
  <h3 class="text-center text-info">Login</h3>
  <div class="form-group">
      <label for="username" class="text-info">Email:</label><br>
      <input type="text" name="email" id="username" class="form-control">
  </div>
  <div class="form-group">
      <label for="password" class="text-info">Password:</label><br>
      <input type="password" name="password" id="password" class="form-control">
  </div>
  <div class="form-group">
      <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember_me" name="remember_me" type="checkbox"></span></label><br>
      <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
  </div>
</form> --}}
  <div class="mx-auto text-center mt-5" style="width: 300px;">
    <form action="{{route('postloginuser.index')}}" method="post" >
      @csrf
      <a class="navbar-brand text-warning" href="#"><i class="fas fa-6x fa-spa"></i></a>
      <h1 class="h3 mb-3 fw-normal text-dark">Please sign in</h1>
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
      <div class="form-group row">
        <label for="username" class="text-info col-3">Email:</label><br>
        <input type="text" name="email" id="username" class="form-control">
      </div>
      <div class="form-group row">
        <label for="password" class="text-info col-3">Password:</label><br>
       <input type="password" name="password" id="password" class="form-control">
      </div>

      <div class="checkbox mb-3">
        <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember_me" name="remember_me" type="checkbox"></span></label><br>
      </div>
      <input type="submit" name="submit" class="btn btn-info btn-md" value="Đăng nhập">
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
  </div>

@endsection
