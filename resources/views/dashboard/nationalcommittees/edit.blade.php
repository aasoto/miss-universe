@extends('dashboard.layout')
@section('content')
<h1>Editar comité nacional</h1>
@include('dashboard.fragment._errors-form')
<form action="{{ route('nationalcommittees.update', $nationalcommittee->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @include('dashboard.nationalcommittees._form')
</form>
@endsection
