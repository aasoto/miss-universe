@extends('dashboard.layout')
@section('content')
    <h1>Crear nueva noticia</h1>
    @include('dashboard.fragment._errors-form')
    <form action="{{ route('news.store') }}" method="post">
        @include('dashboard.news._form')
    </form>
@endsection
