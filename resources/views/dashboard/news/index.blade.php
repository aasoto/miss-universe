@extends('dashboard.layout')
@section('content')
<br>
<div class="card">
    <div class="card-header-primary">
        <h5>Listado de noticias</h5>
    </div>
    <div class="card-body">
        <a href="{{ route('news.create') }}">
            <button class="btn btn-success">Crear nueva noticia</button>
        </a>
        <table class="table-striped">
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
                        <a href="{{ route('news.show', $n) }}">
                            <button class="btn btn-primary">
                                <i class="fas fa-eye"></i>
                            </button>
                        </a>
                        <a href="{{ route('news.edit', $n) }}">
                            <button class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </button>
                        </a>

                        <form action="{{ route('news.destroy', $n) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
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
        {{-- Sirve para colocar el pie de página --}}
        {{ $news->links() }}
    </div>
</div>

@endsection
