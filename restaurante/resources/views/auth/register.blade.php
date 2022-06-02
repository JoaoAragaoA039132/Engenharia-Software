@extends('layouts.auth-master')
@section('content')
<form method="POST" action="{{route('register.perform')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<h1 class="h3 mb-3 fw-normal">Login</h1>
@include('layouts.partials.messages')
<div class="form-group form-floating">
    <input type="email" class="form-control" name="email">
    <label for="email">Email</label>
    @if($errors->has('email'))
        <span class="text-danger">{{$errors->first('email')}}</span>
    @endif
</div>
<div class="form-group form-floating">
    <input type="text" class="form-control" name="name">
    <label for="name">Name</label>
    @if($errors->has('name'))
        <span class="text-danger">{{$errors->first('name')}}</span>
    @endif
</div>
<div class="form-group form-floating">
    <input type="text" class="form-control" name="username">
    <label for="username">Username</label>
    @if($errors->has('username'))
        <span class="text-danger">{{$errors->first('username')}}</span>
    @endif
</div>
<div class="form-group form-floating">
    <input type="password" class="form-control" name="password">
    <label for="password">Password</label>
    @if($errors->has('password'))
        <span class="text-danger">{{$errors->first('password')}}</span>
    @endif
</div>
<div class="form-group form-floating">
    <input type="password" class="form-control" name="password_confirmation">
    <label for="password_confirmation">Confirmar Password</label>
    @if($errors->has('password_confirmation'))
        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
    @endif
    </div>
<button class="btn btn-primary" type="submit">Registar</button>
</form>
@endsection
