@extends('dashboard.layout')
@section('content')
<h1>Crear nuevo comité nacional</h1>
@include('dashboard.fragment._errors-form')
<form action="{{ route('nationalcommittees.store') }}" method="post" enctype="multipart/form-data">
    @include('dashboard.nationalcommittees._form')
</form>
@endsection
