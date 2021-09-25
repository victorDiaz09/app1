@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 pt-5">
            <div class="card text-dark bg-white">
                <div class="card-header text-center"> <img class="img-fluid"  height="30px;" width="60px;" src="/img/coco.png" alt=""> {{ __('Victordiaz Login') }}</div>

                <div class="card-body text-dark bg-light">
                    <form class="form-horizontal pt-2" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group row text-center{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 justify-content-center col-form-label col-md6 text-md-right">Email</label>

                            <div class="col-md-6 pt-2">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus><br>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row text-center{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 justify-content-center text-align-center col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required><br>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row pt-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame la clave
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 pt-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Acceder
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
