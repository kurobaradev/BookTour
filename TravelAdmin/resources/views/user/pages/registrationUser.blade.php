@extends('user.layouts.index')
@section('content')

  <div class="mx-auto text-center mt-5" style="width: 300px;">
    <form>
      <a class="navbar-brand text-warning " href="#"><i class="fas fa-6x fa-spa text-center"></i></a>
      <h1 class="h3 mb-3 fw-normal text-dark">ĐĂNG KÝ</h1>
      <div class="form-floating">
        <input class="form-control" id="floatingInput" placeholder="Họ và tên:">
        <label for="floatingInput">Họ và tên: </label>
      </div>
      <div class="form-floating">
        <input class="form-control" id="floatingInput" placeholder="Email: ">
        <label for="floatingInput">Email: </label>
      </div>
      <div class="form-floating">
        <input class="form-control" id="floatingInput" placeholder="Địa chỉ: ">
        <label for="floatingInput">Địa chỉ: </label>
      </div>
      <div class="form-floating">
        <input class="form-control" id="floatingInput" placeholder="Số điện thoại: ">
        <label for="floatingInput">Số điện thoại: </label>
      </div>
      <div class="form-floating">
        <input class="form-control" id="floatingInput" placeholder="Password: ">
        <label for="floatingInput">Password: </label>
      </div>
      <div class="col-12 mt-3">
        <button type="submit" class="btn btn-primary"><a href="login.html" class="text-white text-decoration-none">Đăng ký</a></button>
        <button type="submit" class="btn btn-primary"><a href="index.html" class="text-white text-decoration-none">Hủy đăng ký</a></button>
      </div>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>      
    </form>
  </div>

@endsection
