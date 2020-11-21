@extends('base')

@section('title', 'ABOUT | ' . env('ENV_TITLE'))

@section('content')
<p>Développer avec laravel &hearts; </p>
<a href="/">Revenir à l'accueil</a>


@section('footer')
<footer>
    <p>&copy; Copyright {{ date('Y')}} </p>
</footer>
@stop