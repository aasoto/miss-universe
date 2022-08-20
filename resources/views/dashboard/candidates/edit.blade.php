@extends('dashboard.layout')

@section('content')
@include('dashboard.fragment._errors-form')
<h1>Actualizar candidata {{$candidate->first_name.' '.$candidate->second_name.' '.$candidate->first_last_name.' '.$candidate->second_last_name}}</h1>
<form action="{{ route('candidates.update', $candidate->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @include('dashboard.candidates._form')
</form>
@endsection
