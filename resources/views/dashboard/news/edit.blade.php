@extends('dashboard.layout')
@section('content')
    <h1>Editar noticia</h1>
    @include('dashboard.fragment._errors-form')
    <form action="{{ route('news.update', $news->id) }}" method="post">
        @method('PUT')
        @include('dashboard.news._form')
    </form>
@endsection
