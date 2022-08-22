@extends('dashboard.layout')
@section('content')
<br>
<form class="form-grid" action="{{ route('nationalcommittees.update', $nationalcommittee->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    <div class="card-float">
        <div class="card">
            <div class="card-header-warning">
                <h5>Editar comité nacional</h5>
            </div>
            <div class="card-body">
                <div class="errors-form">
                    @include('dashboard.fragment._errors-form')
                </div>
                @include('dashboard.nationalcommittees._form')
            </div>
            <div class="card-footer">
                <button class="btn btn-warning" type="submit">Guardar</button>
            </div>
        </div>
    </div>
</form>
@endsection
