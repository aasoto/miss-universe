@extends('dashboard.layout')

@section('content')
<br>
<form class="form-grid" action="{{ route('candidates.update', $candidate->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    <div class="card-float">
        <div class="card">
            <div class="card-header-warning">
                <h5>Actualizar candidata</h5>
            </div>
            <div class="card-body">
                <div class="errors-form">
                    @include('dashboard.fragment._errors-form')
                </div>
                @include('dashboard.candidates._form')
            </div>
            <div class="card-footer">
                <button class="btn btn-warning" type="submit">Guardar</button>
            </div>
        </div>
    </div>
</form>
@endsection
