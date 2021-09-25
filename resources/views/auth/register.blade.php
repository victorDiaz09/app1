@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 pt-5">
            <div class="card text-dark bg-white">
                <div class="card-header text-center"> <img class="img-fluid"  height="30px;" width="60px;" src="/img/coco.png" alt=""> {{ __('Esau Register') }}</div>

                <div class="card-body text-dark bg-light">
                    <form class="form-horizontal pt-2" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group row text-center{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 justify-content-center">Name</label>

                            <div class="col-md-6 pt-2">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row text-center{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 justify-content-center">E-Mail Address</label>

                            <div class="col-md-6 pt-2">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row text-center{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 justify-content-center">Password</label>

                            <div class="col-md-6 pt-2">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <label for="password-confirm" class="col-md-4 justify-content-center">Confirm Password</label>

                            <div class="col-md-6 pt-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0 pt-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
