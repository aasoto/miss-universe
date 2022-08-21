@extends('dashboard.layout')
@section('content')
<h1>Miss Universe Dashboard</h1>
<br>
<a href="{{ route('candidates.index') }}">
    <button>Candidatas</button>
</a>
<a href="{{ route('nationalcommittees.index') }}">
    <button>Comités Nacionales</button>
</a>
<a href="{{ route('news.index') }}">
    <button>Noticias</button>
</a>
@endsection
