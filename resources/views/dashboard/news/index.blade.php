@extends('dashboard.layout')
@section('content')
<h1>Listado de noticias</h1>
<br>
<a href="{{ route('news.create') }}">
    <button>Crear nueva noticia</button>
</a>
<table>
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>Titulo</b></td>
            <td><b>Slug</b></td>
            <td><b>Subtitulo</b></td>
            <td><b>Acciones</b></td>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $n)
        <tr>
            <td>{{$n->id}}</td>
            <td>{{$n->title}}</td>
            <td>{{$n->slug}}</td>
            <td>{{$n->subtitle}}</td>
            <td>
                <a href="{{ route('news.edit', $n) }}">Editar</a>
                <a href="{{ route('news.show', $n) }}">Ver</a>
                <form action="{{ route('news.destroy', $n) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td><b>ID</b></td>
            <td><b>Titulo</b></td>
            <td><b>Slug</b></td>
            <td><b>Subtitulo</b></td>
            <td><b>Acciones</b></td>
        </tr>
    </tfoot>
</table>
@endsection
