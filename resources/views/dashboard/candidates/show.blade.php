@extends('dashboard.layout')
@section('content')
    <table>
        <tr>
            <td><b>País</b></td>
            <td>
                @foreach ($countries as $name => $id)
                @if ($candidate->country_id == $id)
                    {{$name}}
                @endif
                @endforeach
            </td>
        </tr>
        <tr>
            <td><b>Nombres</b></td>
            <td>{{$candidate->first_name.' '.$candidate->second_name.' '.$candidate->first_last_name.' '.$candidate->second_last_name}}</td>
        </tr>
        <tr>
            <td><b>Comité nacional</b></td>
            <td>
                @foreach ($national_committees as $business_name => $id)
                @if ($candidate->national_committee_id == $id)
                    {{$business_name}}
                @endif
                @endforeach
            </td>
        </tr>
    </table>
@endsection
