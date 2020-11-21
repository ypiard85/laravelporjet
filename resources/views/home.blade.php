@extends('base')

@section('title' . env('ENV_TITLE'))


@section('content')
<h1>Hello from france</h1>
<p>Il est actuellement {{ date('h:i: A') }} </p>


@section('footer')
<footer>
    <p>&copy; Copyright {{ date('Y')}} &middot; <a href="/about">About us</a></p>
</footer>
@stop