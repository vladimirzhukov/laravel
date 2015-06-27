@extends('layouts.master')

@section('content')

    <h1>Welcome Home</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, possimus, ullam? Deleniti dicta eaque facere, facilis in inventore mollitia officiis porro totam voluptatibus! Adipisci autem cumque enim explicabo, iusto sequi.</p>
    <hr>

    <a href="{{ route('auth.login') }}" class="btn btn-info">Auth</a>
    <a href="{{ route('auth.register') }}" class="btn btn-info">Register</a>

@stop