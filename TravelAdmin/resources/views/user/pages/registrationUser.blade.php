@extends('user.layouts.index')
@section('content')

    <div class="mx-auto text-center mt-5" style="width: 300px;">

        <form class="form-horizontal" role="form" method="POST" action="{{ route('postregisterUser.index') }}">
            @csrf

            <div class="form-group row ">
                <label for="name" class="col-md-6 control-label">Name</label>

                <div class="col-md-12">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                        autofocus>


                </div>
            </div>
            <div class="form-group row ">
                <label for="address" class="col-md-6 control-label">address</label>

                <div class="col-md-12">
                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}"
                        required autofocus>

                
                </div>
            </div>
            <div class="form-group row ">
                <label for="phone" class="col-md-6 control-label">Phone</label>

                <div class="col-md-12">
                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required
                        autofocus>

              
                </div>
            </div>
            <div class="form-group row ">
                <label for="email" class="col-md-6 control-label">E-Mail Address</label>

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                </div>
            </div>

            <div class="form-group row ">
                <label for="password" class="col-md-6 control-label">Password</label>

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control" name="password" required>

                </div>
            </div>

            <div class="form-group row ">
                <label for="password-confirm" class="col-md-6 control-label">Confirm Password</label>

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group row ">
                <div class="col-md-12 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
