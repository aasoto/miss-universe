@extends('dashboard.layout')
@section('content')
    <br>
    <div class="card">
        <div class="card-header-primary">
            <h5>Mostrar noticia</h5>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <td><b>Título</b></td>
                    <td>{{$news->title}}</td>
                </tr>
                <tr>
                    <td><b>Slug</b></td>
                    <td>{{$news->slug}}</td>
                </tr>
                <tr>
                    <td><b>Subtitulo</b></td>
                    <td>{{$news->subtitle}}</td>
                </tr>
                <tr>
                    <td><b>Contenido</b></td>
                    <td>{{$news->content}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
