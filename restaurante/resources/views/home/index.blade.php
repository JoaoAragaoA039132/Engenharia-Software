@extends('layouts.app-master')
@section('content')
<div class="bg-light p-5 rounded" style="margin:10px;">
    @auth
        <h1>Dashboard</h1>
    @endauth
    @guest
        <h1>Homepage</h1>
    @endguest
</div>

@endsection
