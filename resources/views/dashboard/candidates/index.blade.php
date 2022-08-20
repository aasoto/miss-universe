@extends('dashboard.layout')

@section('content')
<h1>Gestión de candidatas</h1>
<a href="{{ route('candidates.create') }}">
    <button>Crear candidata</button>
</a>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>País</td>
            <td>Nombres y apellidos</td>
            <td>Fecha nacimiento</td>
            <td>Comité</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($candidates as $candidate)
        <tr>
            <td>{{ $candidate->id }}</td>
            <td>
                {{ $candidate->country->name }}
            </td>
            <td>{{ $candidate->first_name.' '.$candidate->second_name.' '.$candidate->first_last_name.' '.$candidate->second_last_name }}</td>
            <td>{{ $candidate->birthdate }}</td>
            <td>
                {{ $candidate->national_committee->business_name }}
            </td>
            <td>
                <a href="{{ route('candidates.edit', $candidate) }}">Editar</a>
                <a href="{{ route('candidates.show', $candidate) }}">Ver</a>
                <form action="{{ route('candidates.destroy', $candidate) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td>ID</td>
            <td>País</td>
            <td>Nombres y apellidos</td>
            <td>Fecha nacimiento</td>
            <td>Comité</td>
            <td>Acciones</td>
        </tr>
    </tfoot>
</table>
{{-- Sirve para colocar el pie de página --}}
{{ $candidates->links() }}
@endsection
