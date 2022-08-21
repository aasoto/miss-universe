@extends('dashboard.layout')
@section('content')
<h1>Gestión de comités nacionales</h1>
<a href="{{ route('nationalcommittees.create') }}">
    <button>Crear comité</button>
</a>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Razón social</td>
            <td>Director nacional</td>
            <td>País</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($nationalcommittees as $nationalcommittee)
        <tr>
            <td>{{ $nationalcommittee->id }}</td>
            <td>
                {{ $nationalcommittee->business_name }}
            </td>
            <td>{{ $nationalcommittee->national_director }}</td>
            <td>
                {{ $nationalcommittee->country->name }}
            </td>
            <td>
                <a href="{{ route('nationalcommittees.edit', $nationalcommittee) }}">Editar</a>
                <a href="{{ route('nationalcommittees.show', $nationalcommittee) }}">Ver</a>
                <form action="{{ route('nationalcommittees.destroy', $nationalcommittee) }}" method="post">
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
            <td>Razón social</td>
            <td>Director nacional</td>
            <td>País</td>
            <td>Acciones</td>
        </tr>
    </tfoot>
</table>
{{-- Sirve para colocar el pie de página --}}
{{ $nationalcommittees->links() }}
@endsection
