@extends('dashboard.layout')

@section('content')
<br>
<div class="card">
    <div class="card-header-primary">
        <h5>Gestión de candidatas</h5>
    </div>
    <div class="card-body">
        <div class="content-around">
            <a href="{{ route('candidates.create') }}">
                <button class="btn btn-success">
                    <i class="fas fa-user-plus"></i>
                    Crear candidata
                </button>
            </a>
        </div>
        <table class="table-striped">
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
                        <a href="{{ route('candidates.show', $candidate) }}">
                            <button class="md:w-1/3 btn btn-primary"><i class="fas fa-eye"></i></button>
                        </a>
                        <a href="{{ route('candidates.edit', $candidate) }}">
                            <button class="md:w-1/3 btn btn-warning"><i class="fas fa-edit"></i></button>
                        </a>
                        <form action="{{ route('candidates.destroy', $candidate) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="md:w-1/3 btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
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
    </div>
</div>


@endsection
