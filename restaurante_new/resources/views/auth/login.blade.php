@extends('layouts.auth-master')
@section('content')
<form method="POST" action="{{route('login.perform')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<h1 class="h3 mb-3 fw-normal">Login</h1>
@include('layouts.partials.messages')
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
<button class="btn btn-primary" type="submit">Login</button>
</form>
@endsection
