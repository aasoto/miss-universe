@extends('dashboard.layout')
@section('content')
    <br>
    <div class="card">
        <div class="card-header-warning">
            <h5>Editar noticia</h5>
        </div>
        <form class="form-grid" action="{{ route('news.update', $news->id) }}" method="post">
            @method('PUT')
            <div class="card-body">
                @include('dashboard.fragment._errors-form')
                @include('dashboard.news._form')
            </div>
            <div class="card-footer">
                <button class="btn btn-warning" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
