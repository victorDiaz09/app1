@extends('layout')

@section('title', 'contact')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            

<form class="bg-white shadow rounded py-3 px-4"  method="POST" action="{{ route('messages.store') }}">
    {{ csrf_field() }}
    <h1 class="display-4 text-center">@lang('Contact')</h1>
     <hr>
    <div class="form-group">
        <label for="name">Nombre</label>
    <input class="form-control bg-light shadow-sm border-0" id="name" name="name" placeholder="Nombre..." value="{{ old('name') }}">
    {!! $errors->first('name', '<small>:message</small><br>') !!}
</div>

    <div class="form-group">
        <label for="email">Email</label>
    <input class="form-control bg-light shadow-sm border-0" id="email" type="email" name="email" placeholder="Email..." value="{{ old('email') }}">
    {!! $errors->first('email', '<small>:message</small><br>') !!}
</div>

<div class="form-group">
    <label for="subject">Asunto</label>
    <input class="form-control bg-light shadow-sm boder-0" id="subject" name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
    {!! $errors->first('subject', '<small>:message</small><br>') !!}
</div>

<div class="form-group">
    <label for="content">Mensaje</label>
    <textarea class="form-control bg-light shadow-sm border-0" id="content" name="content" placeholder="Mensaje...">{{ old('content') }}</textarea><br>
    {!! $errors->first('content', '<small>:message</small><br>') !!}
</div>

    <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button><br>
</form>
    </div>
    </div>

</div>
@endsection