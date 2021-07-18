@extends('user.layouts.index')
@section('content')

  <div class="mx-auto text-center mt-5" style="width: 300px;">
    <form >
      <a class="navbar-brand text-warning" href="#"><i class="fas fa-6x fa-spa"></i></a>
      <h1 class="h3 mb-3 fw-normal text-dark">Please sign in</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
  </div>

@endsection