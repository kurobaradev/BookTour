@extends('user.layouts.index')
@section('content')

    <div class="mx-auto text-center mt-5 text-dark mb-5" style="width: 300px;">

        <form class="form-horizontal" role="form" method="POST" action="{{ route('postregisterUser.index') }}">

            <a class="navbar-brand text-warning " href="#"><i class="fas fa-6x fa-spa text-center"></i></a>
            <h1 class="h3 mb-3 fw-normal">ĐĂNG KÝ</h1>

            @csrf
            <div class="form-floating">
                <input class="form-control"  placeholder="Họ và tên:" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                <label for="floatingInput">Họ và tên: </label>
            </div>
            <div class="form-floating">
                <input class="form-control" placeholder="Địa chỉ: " id="address" type="text" name="address" value="{{ old('address') }}" required autofocus>
                <label for="floatingInput">Địa chỉ: </label>
            </div>
            <div class="form-floating">
                <input class="form-control" placeholder="Số điện thoại: " id="phone" type="text" name="phone" value="{{ old('phone') }}" required autofocus>
                <label for="floatingInput">Số điện thoại: </label>
            </div>

            <div class="form-floating">
                <input class="form-control" placeholder="Email: " id="email" type="email" name="email" value="{{ old('email') }}" required>
                <label for="floatingInput">Email: </label>
            </div>
            
            <div class="form-floating">
                <input class="form-control" placeholder="Mật khẩu: " id="password" type="password" name="password" required>
                <label for="floatingInput">Mật khẩu: </label>
            </div>

            <div class="form-floating">
                <input class="form-control" placeholder="Nhập lại mật khẩu: " id="password-confirm" type="password" name="password_confirmation" required>
                <label for="floatingInput">Nhập lại mật khẩu: </label>
            </div>

            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Đăng ký</button>
            </div>

        </form>
    </div>

@endsection