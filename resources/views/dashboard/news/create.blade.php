@extends('dashboard.layout')
@section('content')
<br>
<form class="form-grid" action="{{ route('news.store') }}" method="post">
    <div class="card">
        <div class="card-header-success">
            <h5>Crear nueva noticia</h5>
        </div>
        <div class="card-body">
            @include('dashboard.fragment._errors-form')
            @include('dashboard.news._form')
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </div>
</form>
@endsection
