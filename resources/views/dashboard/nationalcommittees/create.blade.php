@extends('dashboard.layout')
@section('content')
@include('dashboard.fragment._errors-form')
<br>
<form class="form-grid" action="{{ route('nationalcommittees.store') }}" method="post" enctype="multipart/form-data">
    <div class="card-float">
        <div class="card">
            <div class="card-header-success">
                <h5>Crear nuevo comité nacional</h5>
            </div>
            <div class="card-body">
                <div class="errors-form">
                    @include('dashboard.fragment._errors-form')
                </div>
                @include('dashboard.nationalcommittees._form')
            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </div>
    </div>
</form>
@endsection
