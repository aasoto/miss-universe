@extends('dashboard.layout')
@section('content')
<h1>Crear nueva candidata</h1>
@include('dashboard.fragment._errors-form')
<form action="{{ route('candidates.store') }}" method="post" enctype="multipart/form-data">
    @include('dashboard.candidates._form')
</form>
@endsection
