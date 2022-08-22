@extends('dashboard.layout')
@section('content')
<br>
<div class="card">
    <div class="card-header-primary">
        <h5>Comités nacionales</h5>
    </div>
    <div class="card-body">
        <a href="{{ route('nationalcommittees.create') }}">
            <button class="btn btn-success">Crear comité</button>
        </a>
        <table class="table-striped">
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
                        <a href="{{ route('nationalcommittees.show', $nationalcommittee) }}">
                            <button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                        </a>
                        <a href="{{ route('nationalcommittees.edit', $nationalcommittee) }}">
                            <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                        </a>
                        <form action="{{ route('nationalcommittees.destroy', $nationalcommittee) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
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
    </div>
</div>
@endsection
