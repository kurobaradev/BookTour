@extends('user.layouts.index')
@section('content')

  <div class="mx-auto text-center mt-5" style="width: 300px;">
    <form >
      <a class="navbar-brand text-warning" href="#"><i class="fas fa-6x fa-envelope-open-text"></i></i></a>
      <h1 class="h3 mb-3 fw-normal text-dark">Xác nhận email</h1>
      <p>Đã có một mã xác nhận được gửi tới email của bạn, vui lòng nhập mã xác nhận vào bên dưới để hoành thành việc đăng ký</p>
      <div class="form-floating">
        <input class="form-control" id="floatingInput" placeholder="Họ và tên:">
        <label for="floatingInput">Nhập mã xác nhận: </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary mt-1" type="submit">Xác nhận</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
  </div>

@endsection
